<?php
/**
 * ComBriteverify
 *
 * @author      Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */

defined('KOOWA') or die('Protected resource');

class ComBriteverifyControllerBehaviorVerifiable extends KControllerBehaviorAbstract
{
    private $verifyConfig;
    private $fieldsProperty;

    public function __construct(KConfig $config)
    {
        parent::__construct($config);

        $this->verifyConfig = $config->verify ? $config->verify : array();
        $this->fieldsProperty = $config->fieldsProperty ? $config->fieldsProperty : '';
    }

    private function __verifyEmail($form_fields, $data, $fieldName)
    {
        $verified = true;

        // lowercase the keys in the array
        $data = array_change_key_case($data, CASE_LOWER);

        foreach($form_fields as $key => $field) {
            if ($field['type'] == $fieldName && $field['isrequired']) {

                // Set verified to false if there is no property known.
                if (!$data[strtolower($key)]) {
                    $verified = false;
                    break;
                }

                // Verify with BriteVerify
                $row = $this->getService('com://admin/briteverify.model.emails')->address($data[$key])->getItem();

                $verified = $row->isVerified();
            }
        }

        return $verified;
    }

    protected function _beforeSubmit(KCommandContext $context)
    {

        $item = $this->getModel()->getItem();

        if ($this->fieldsProperty) {
            $prop = $this->fieldsProperty;
            $item = $item->$prop;
        }

        foreach($this->verifyConfig as $type => $fieldName) {
            $method = '__verify' . KInflector::camelize($type);

            if (!$this->$method($item, $context->data->toArray() ,$fieldName)) {
                return false;
            }
        }

        return true;
    }
}