<?php

class process extends CI_Controller
{
    function index()
    {
        if (isset($_POST['name'])) {
            $name = strip_tags($_POST['name']);
            $email = strip_tags($_POST['password']);
            //$sug = strip_tags($_POST['sug']);
            ///echo "Name		=".$name."</br>";
            //echo "Email		=".$email."</br>";
           // echo "Message		=".$sug."</br>";
            echo  "</br><span class='label label-info' >your message has been submitted .. Thanks you</span>";
        }
    }

}

?>