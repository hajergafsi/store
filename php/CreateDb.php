<?php
function pdo_connect_mysql()
{
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'productdb';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        die('Failed to connect to database!');
    }
}

class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //class constructor 
    public function __construct(
        $dbname = "NewDb",
        $tablename = "ProductDb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    ) {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //create connection 
        $this->con = mysqli_connect($servername, $username, $password);

        //check connection
        if (!$this->con) {
            die("connection failed:" . mysqli_connect_error());
        }
        //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        // execute query
        if (mysqli_query($this->con, $sql)) {
            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            //sql create table 
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
     (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     product_name VARCHAR(25) NOT NULL,
     product_price FLOAT,
     product_image VARCHAR(100));";

            if (!mysqli_query($this->con, $sql)) {
                echo "error creating table: " . mysqli_error($this->con);
            }
        } else {
            return false;
        }
    }

    //get product from the database 
    public function getData($table)
    {
        $sql = "SELECT * FROM $table";

        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}
