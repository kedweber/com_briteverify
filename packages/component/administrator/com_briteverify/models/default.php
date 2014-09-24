<?php

/**
 * ComBriteverify
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */

defined('KOOWA') or die('Restricted Access');

class ComBriteverifyModelDefault extends KModelAbstract
{

    public function __construct(KConfig $config = null)
    {
        parent::__construct($config);
    }

    protected function _getParams()
    {
        return array();
    }

    protected function _getUrl()
    {
        return '';
    }

    protected function _getAccount()
    {
        $state = $this->_state;

        // Get default API key if not defined in state
        if (!$state->id) {
            $account = $this->getService('com://admin/briteverify.model.accounts')->id($state->id)->getItem();
        } else {
            $account = $this->getService('com://admin/briteverify.model.accounts')->default(1)->getItem();
        }

        return $account;
    }

    public function getItem()
    {
        $url = $this->_getUrl();
        $account = $this->_getAccount();
        $params = $this->_buildQuery();
        $params['apikey'] = $account->api_key;

        $response = $this->_doCurl($url, $params);

        $row = $this->getService('com://admin/briteverify.database.row.response');
        $row->setData($response);

        return $row;
    }

    public function getList()
    {
        throw new Exception('function getList is not supported.');
    }

    protected function _doCurl($url, $params)
    {
        $url = $url . http_build_query($params);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($curl);
        $resultStatus = curl_getinfo($curl);

        if($resultStatus['http_code'] == 200) {
            $data = json_decode($response, true);
            return $data;
        } else {
            return null;
        }
    }

}