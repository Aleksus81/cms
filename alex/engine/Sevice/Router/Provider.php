<?php
namespace Engine\Sevice\Router;
use Engine\Sevice\AbstractProvider;
use Engine\Cor\Router\Router;
class Provider extends AbstractProvider
{
    
    /**
    * @var string
    */
    public $serviceName = 'router';
    
    /**
    * @return mixed
    */
    
    public function init()
    
    {
    $router = new Router('http://ec2-18-218-71-168.us-east-2.compute.amazonaws.com/');
        
    $this->di->set($this->serviceName, $router);
    }
}
?>
