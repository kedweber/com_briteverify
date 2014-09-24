<?php

class ComBriteverifyDispatcher extends ComDefaultDispatcher
{
    /**
     * @param KConfig $config
     */
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
        	'controller' => 'accounts',
        ));
        
        parent::_initialize($config);
    }
}