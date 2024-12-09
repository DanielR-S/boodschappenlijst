<?php

class Database {
    public $connection;
    public function __construct() 
    {
       $config = [
        'host' => "localhost",
        'port' => "3306",
        'dbname' => "groceries_daniel",
        'charaset' => "utf8mb4"
       ];

        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, 'root', 'root', []);        
    }


    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    public function query($query, $params = [])
    {
        $statement =  $this->connection->prepare($query);
        $statement->execute($params); 
        
        return $statement;
    }
} 


// "mysql:host=localhost;port=3306;dbname=groceries_daniel;user=root;password=root;charset=utf8mb4"
