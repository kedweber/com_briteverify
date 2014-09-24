<?php
/**
 * ComBriteverify
 *
 * @author      Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */

defined('KOOWA') or die('Protected resource');

class ComBriteverifyControllerBehaviorVerifiable extends KControllerBehaviorAbstract
{
    private function __verifyEmail($form_fields, $data)
    {
        $verified = true;

        foreach($form_fields as $key => $field) {
            if ($field['type'] == 'email' && $field['isrequired']) {

                // Set verified to false if there is no property known.
                if (!$data[$key]) {
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
        $form = $this->getModel()->getItem();

        return $this->__verifyEmail($form->form_field, $context->data->toArray());
    }
}