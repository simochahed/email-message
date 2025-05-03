<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];
    
    if(!empty($email) && !empty($message)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $reciever = "chahedsimo07@gmail.com";
            $subject = "From $name<$email>";
            $body = "Name: $name\nEmail: $email\Phone: $phone\nWebsite : $website\n Message: $message\n\regards , \n$name ";
            $sender = "From : $email";
            if(mail($reciever,$subject,$body,$sender)){
                echo"your message has been sent";
            }else{
                echo"sorry ,field to send your message!";
            }
        }else{
            echo "Enter a valid email adress";
        }

    }else{
        echo "Email and password field is required";
    }
?>