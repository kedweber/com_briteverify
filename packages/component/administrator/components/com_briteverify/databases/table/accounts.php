<?php
/**
 * ComBriteverify
 *
 * @author      Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */

defined('KOOWA') or die('Restricted Access');

class ComBriteverifyDatabaseTableAccounts extends KDatabaseTableDefault
{
    public function _initialize(KConfig $config)
    {
        $config->append(array(
            'behaviors' => array(
                'identifiable',
                'com://admin/moyo.database.behavior.defaultable',
                'modifiable',
                'lockable'
            )
        ));

        parent::_initialize($config);
    }
}