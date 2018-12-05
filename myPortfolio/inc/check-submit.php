<?php
//Message Vars
$msg = '';
$msgClass = '';

//Check for Submit
if(filter_has_var(INPUT_POST, 'submit')){
    //Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    //Check Required Fields
    if(!empty($email) && !empty($name) && !empty($subject)){
        //Passed
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            //Failed
            $msg = 'Please use a valid email!';
            $msgClass = 'alert-danger';
        }else{
            //Passed
            $toEmail = 'jehu1112@gmail.com';
            $subject = 'Contact Request from '.$name;
            $body = '<h2>Contact Request</h2>
            <h4>Name:</h4><p>'.$name.'</p>
            <h4>Email:</h4><p>'.$email.'</p>
            <h4>Subject:</h4><p>'.$subject.'</p>
            <h4>Message:</h4><p>'.$message.'</p>
            ';

            //Email Headers
            $headers = "MINE-Version: 1.0" ."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";

            //Additional Headers
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                //Email Sent
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            }else{
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
        }
    }else{  
        //Failed
        $msg = 'Please fill in all the required fields';
        $msgClass = 'alert-danger';
    }
}
?>