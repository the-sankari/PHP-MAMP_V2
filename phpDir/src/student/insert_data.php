<?php
require_once 'db.php';
if (isset($_POST['add_students'])) {

   $f_name = $_POST['f_name'];
   $l_name = $_POST['l_name'];
   $age = $_POST['age'];
   if (empty($_POST['f_name']) || empty($_POST['l_name']) || empty($_POST['age'])) {
    header('location:index.php?message=You need to fill in the all input');
   }else {
    
    $query = "INSERT INTO student(first_name, last_name, age)VALUES('$f_name', '$l_name', '$age')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Failed: " . mysqli_error($connection));
    }else {
        header('location:index.php?insert_msg=Your data has been added successfully');
    }

   }
}




?>