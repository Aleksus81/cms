<?php
namespace Engine\Sevice\Config;

use Engine\Sevice\AbstractProvider;
use Engine\Cor\Config\Config;

class Provider extends AbstractProvider
{
    
    public $serviceName = 'config';
    
    
    public function init()
    
    {
        $config['main']     = Config::file('main');
        $config['database'] = Config::file('database');
        
        $this->di->set($this->serviceName, $config);
    }
}
?>