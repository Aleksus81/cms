{"filter":false,"title":"index.php","tooltip":"/index.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":20,"column":0},"end":{"row":66,"column":0},"action":"remove","lines":["/*class Database{","    private $link;","        ","    public function __construct()","    {","        $this->connect();","    }","    ","    private function connect()","    {","        $config = require_once 'config.php';","        ","        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];","        ","        $this->link = new PDO($dsn, $config['username'], $config['password']);","        ","        return $this;","    }","    ","    public function execute($sql)","    {","        $sth = $this->link->prepare($sql);","        $sth->execute();","    }","    ","    public function query($sql)","    {","        ","\t$sth = $this->link->prepare($sql);","        $sth->execute();","","        $result = $sth->fetchAll(PDO::FETCH_ASSOC);","        if($result === false){","        return[];","        }","        ","        return $result;","    }","    ","}","$db = new Database();","","$users = $db->query(\"SELECT * FROM `user`\");","print_r($users);*/","","?>",""],"id":2}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["",""],"id":3},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"remove","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["?"],"id":4},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["",""],"id":5}],[{"start":{"row":11,"column":28},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":23},"action":"insert","lines":["define('ENV', 'Admin');"],"id":7}],[{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"remove","lines":["n"],"id":8},{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"remove","lines":["i"]},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"remove","lines":["m"]},{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"remove","lines":["d"]},{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"remove","lines":["A"]}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["C"],"id":9},{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"insert","lines":["m"]},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":14,"column":21},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":12}],[{"start":{"row":14,"column":21},"end":{"row":15,"column":0},"action":"remove","lines":["",""],"id":14}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["/"],"id":18},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["/"],"id":19},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"remove","lines":["/"],"id":21},{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"remove","lines":["/"],"id":22},{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":15,"column":36},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":28}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":13},"action":"insert","lines":["echo '12345';"],"id":29}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":13},"action":"remove","lines":["echo '12345';"],"id":30}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":0},"end":{"row":16,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"mode":"ace/mode/php"}},"timestamp":1533825450255,"hash":"8b75aebcc86cfa27181655841ecf98e154542d74"}