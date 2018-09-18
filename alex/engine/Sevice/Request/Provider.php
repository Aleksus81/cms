<?php 

namespace Engine\Sevice\Request;

use Engine\Sevice\AbstractProvider;
use Engine\Cor\Request\Request;

class Provider extends AbstractProvider
{
    public $serviceName = 'request';
    
    public function init()
    {
        $request = new Request();
        
        $this->di->set($this->serviceName, $request);
    }
}

?>