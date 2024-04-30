<?php

// create a class that extends mysql database
class Database extends mysqli
{
    // create a constructor that takes in the config file
    public function __construct($config)
    {
        // call the parent constructor with the config file
        parent::__construct($config['database']['host'], $config['database']['username'], $config['database']['password'], $config['database']['database'], $config['database']['port'] ?? 3306);
    }
}