<?php 
namespace App;

class Database
{
private $conn;

function __construct() {
    $this->conn=mysqli_connect("localhost","root","","curd");
}

function getData(){
    $qry = "SELECT * FROM emp_data";
    $rslt = mysqli_query($this->conn, $qry);
    $all_data = mysqli_fetch_all($rslt, MYSQLI_ASSOC);
    return $all_data;
}

function addData($name, $email, $gender){
    $qry ="INSERT INTO emp_data(name, email, gender) 
    VALUES('$name','$email','$gender')";
    mysqli_query($this->conn, $qry);
}
}
?>