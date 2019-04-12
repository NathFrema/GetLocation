<?php

/**
 * Connection is the main database connection class used to connect to the sites
 * database server
 *
 * @author Alhassan Kamil
 */
class Connection {
    private $user = 'root';
    private $password = '';
    private $db = 'location';
    private $host = 'localhost';

    /**
     * This is the connection handle to the database
     * @var object
     */
    public $db_connect;

    public function connect() {
        $this->db_connect = NULL;

        try {
            $this->db_connect = new mysqli(
                    $this->host,$this->user,$this->password, $this->db);
        } catch (mysqli_sql_exception $ex) {
            echo '"connection error: '.$ex->getMessage();
        }
        return $this->db_connect;
    }
}
