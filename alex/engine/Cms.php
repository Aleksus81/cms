<?php


namespace Engine;

use Engine\Helper\Common;
use Engine\Cor\Router\DispatchedRoute;
class Cms

{
   /**
    * @var DI
    */
    private  $di;
    public $router;
   /**
    * Cms constructor.
    * @param $di
    */
public function __construct($di)
    {
    $this->di = $di;
    $this->router = $this->di->get('router');
    }
    
   /**
    * Run Cms
    */
public function run() ## Запуск приложения
        
        {

	
         try{
             
                        /*замена функции с mb_strtolower на strtolower*/
                        require_once __DIR__ . '/../' . mb_strtolower(ENV) . '/Route.php';
                      
                        
             
                        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
                        
    
                        if($routerDispatch == null)
    
                        {
                                $routerDispatch = new DispatchedRoute ('ErrorController:page404');
                        }    
    
                        list($class, $action) = explode(':', $routerDispatch->getController(), 2);
                        
                        $controller = '\\' . ENV . '\\Controller\\' . $class;
                        $parameters =  $routerDispatch->getParameters();
                        call_user_func_array([new $controller($this->di), $action], $parameters);
                        
                
                 }catch(\Exeption $e){
                 
                     echo $e->getMessage();
                     exit;
                 
                 }
        }
}
?>
