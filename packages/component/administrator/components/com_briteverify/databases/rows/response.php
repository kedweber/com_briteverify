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
        if ($this->status == 'valid') {
            return true;
        }

        if ($this->status == 'invalid') {
            return false;
        }

        if ($this->status == 'unknown') {
            return true;
        }

        if ($this->status == 'accept_all') {
            return true;
        }
    }
}