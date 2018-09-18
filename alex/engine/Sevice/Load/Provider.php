<?php 

namespace Engine\Sevice\Load;

use Engine\Sevice\AbstractProvider;
use Engine\Load;

class Provider extends AbstractProvider
{
    public $serviceName = 'load';
    
    public function init()
    {
        $load = new Load();
        
        $this->di->set($this->serviceName, $load);
    }
}

?>