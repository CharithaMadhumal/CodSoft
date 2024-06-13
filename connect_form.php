<?php

    $connection = mysqli_connect('localhost','root','','portfolio');

    if(isset($_POST['sent'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
       

        $request = "insert into contact_form(name, email, subject, message) values ('$name','$email','$subject','$message')";

        mysqli_query($connection, $request);

        header('location:index.html');
    }
    else{
        echo 'Something went wrong try again';
    }

?>