<?php

/**
 * ComBriteverify
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */
 
defined('KOOWA') or die('Restricted Access');

class ComBriteverifyModelEmails extends ComBriteverifyModelDefault
{
    public function __construct(KConfig $config = null)
    {
        parent::__construct($config);

        $this->_state->insert('address', 'string', null, true);
    }

    protected function _getUrl()
    {
        return 'https://bpi.briteverify.com/emails.json?';
    }

    protected function _buildQuery()
    {
        $state = $this->_state;

        $params = parent::_buildQuery();
        $params['address'] = $state->address;

        return $params;
    }
}