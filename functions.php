<?php
$dbhost = "localhost";
$dbport = 3306;
$dbuser = "root";
$dbpassword = "";
$dbname = "Hoang"; //
$salt1 = "qm&h*";
$salt2 = "!@#$%";
//Connect to the DB
$connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname, $dbport);
if ($connection->connect_error) {
    die ($connection->connect_error);
}

//this is used to execute all SQL queries
function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result) {
        die ($connection->error);
    }
    return $result;
}

//this is used to create table


//this is for security purpose
function sanitizeString($str) {
    global $connection;
    $str = strip_tags($str); //remove html tags
    $str = htmlentities($str); //encode html (for special characters)
    if (get_magic_quotes_gpc()){
        $str = stripslashes($str); //Don't use the magic quotes
    }
    //Avoid MYSQL Injection
    $str = $connection->real_escape_string($str);
    return $str;
}

//Convert password into encrypted form


function runQuery($sql){
		$conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
		//chay cau truy van
		$result = $conn->query($sql);
		//doc ket qua chay cau truy van, tra ve mot mang
		$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		//dong ket noi
		$conn->close();
		return $rows;
	}