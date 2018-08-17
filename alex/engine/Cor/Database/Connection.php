<?php

namespace Engine\Cor\Database;

use \PDO;

class Connection{

     private $link;
        
    public function __construct()
    {
        $this->connect();
    }
    
    private function connect()
    {
        $config = [
            'host'     => 'localhost',
            'db_name'  => 'test_pdo',
            'username' => 'root',
            'password' => 'ubuntu',
            'charset'  => 'utf8'
        
        
        ];
        
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
        
        $this->link = new PDO($dsn, $config['username'], $config['password']);
        
        return $this;
    }
public function execute($sql)
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute();
    }
    
    public function query($sql)
    {
        
        $sth = $this->link->prepare($sql);
        $sth->execute();
        $result = $exe->fetchAll(PDO::FETCH_ASSOC);
        if($result === false){
        return[];
        }
        
        return $result;
    }
}

?>

