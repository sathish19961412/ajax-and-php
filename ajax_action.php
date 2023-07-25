<?php

    $con=mysqli_connect('localhost','root','','php_ajax');

    $action=$_POST["action"];
    if($action=="Insert"){
        $name=mysqli_real_escape_string($con,$_POST["name"]);
        $gender=mysqli_real_escape_string($con,$_POST["gender"]);
        $contact=mysqli_real_escape_string($con,$_POST["contact"]);
        $sql="insert into users (name,gender,contact) values ('{$name}','$gender','$contact')";
        if($con->query($sql))
        {
            echo 
            "
            <tr>
                <td>{$name}</td>
                <td>{$gender}</td>
                <td>{$contact}</td>
                <td><a href='#' class='btn btn-primary'>Edit</a></td>
                <td><a href='#' class='btn btn-danger'>DELETE</a></td>
            </tr>
            ";

        }else{
            echo false;
        }
    }
?>