<?php

/**
 * ComBriteverify
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */

defined('KOOWA') or die('Restricted Access');

class ComBriteverifyDatabaseRowResponse extends KDatabaseRowAbstract
{

    public function isVerified()
    {
        $accepted = array(
            'valid',
            'unknown',
            'accept_all'
        );

        return in_array($this->status, $accepted);
    }
}