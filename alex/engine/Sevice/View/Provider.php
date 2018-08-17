<?php
namespace Engine\Sevice\View;

use Engine\Sevice\AbstractProvider;
use Engine\Cor\Template\View;

class Provider extends AbstractProvider
{
    
    /**
    * @var string
    */
    public $serviceName = 'view';
    
    /**
    * @return mixed
    */
    
    public function init()
    
    {
    $view = new View();
        
    $this->di->set($this->serviceName, $view);
    }
}
?>
