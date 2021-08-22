<?php

$host='localhost';
$dbUsername='root';
$dbPassword='';
$dbname='e-learn';

$connection = mysqli_connect($host, $dbUsername, $dbPassword);

if(!$connection ){
    echo 'Connection Error';
}else if(!mysqli_select_db($connection, $dbname)){
    echo 'Database connected';
}



if(isset($_GET['delete'])){
    $itemId = $_GET['delete'];
    
     $itemDelete = "DELETE FROM courses WHERE id=$itemId";

    if(!mysqli_query($connection,$itemDelete)){
        echo "Something went wrong";
    }else{
        // echo 'Data Inserted Successfully';
        header("refresh:2, url =/my-courses");

    }
}

?>