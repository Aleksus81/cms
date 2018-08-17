<?php
namespace Engine\Sevice\Database;
use Engine\Sevice\AbstractProvider;
use Engine\Cor\Database\Connection;
class Provider extends AbstractProvider
{
    
    /**
    * @var string
    */
    public $serviceName = 'db';
    
    /**
    * @return mixed
    */
    
    public function init()
    
    {
    $db = new Connection();
        
    $this->di->set($this->serviceName, $db);
    }
}
?>
