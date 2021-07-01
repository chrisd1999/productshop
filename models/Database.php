<?php 
class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $name = DB_NAME;

    private $db_handler;
    private $stmt;


    public function __construct()
    {
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->name;

        $options = array (
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->db_handler = new PDO($dsn, $this->user, $this->password, $options);
        } catch(PDOException $e) {
            $e->getMessage();
        };
    }

    public function query($query)
    {
        $this->stmt = $this->db_handler->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value) : $type = PDO::PARAM_INT; break;
                case is_bool($value) : $type = PDO::PARAM_BOOL; break;
                case is_null($value) : $type = PDO::PARAM_NULL; break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function single_entry()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
}