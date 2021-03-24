<?php
include('connection.php');
include('config.php');
$sessionId =$_POST['sessionId'];
$serviceCode=$_POST['serviceCode'];
$phoneNumber=$_POST['phoneNumber'];
$text = $_POST['text'];

$vote_string_exploded = explode("*", $text);
$level= count($vote_string_exploded);


if ($text=="")
{
    $response=  "CON Welcome to TEAU IVote. \n";
    $response .= "1. Register\n";
    $response .= "2. Vote";
    
}
else if (text=="1"){
    $response = "CON Please enter your name:";
}
else if ($vote_string_exploded[0] ==1 && $vote_string_exploded[1]==1 && $level==3){
    $response = "CON Please enter your admission number.";
}
else if ($vote_string_exploded[0] ==1 && $vote_string_exploded[1]==1 && $level==4){
    $password = "CON Please set your password.";
}
else if ($vote_string_exploded[0] ==1 && $vote_string_exploded[1]==1 && $level==5){
    $password = "CON Confirm your password.";
}
else if ($vote_string_exploded[0] ==1 && $vote_string_exploded[1]==1 && $level==6){
    $response = "END Registration successful. Please proceed to voting";
}
else if (text== "2"){
    $response= "CON Welcome to TEAU IVote, Please enter your name:";
}
else if ($vote_string_exploded[0] ==1 && $vote_string_exploded[1]==1 && $level==3){
        $response = "CON Please enter your admission number.";
    }
else if ($vote_string_exploded[0] ==1 && $vote_string_exploded[1]==1 && $level==4){
        $password = "CON Please enter your password.";
    }
else if ($vote_string_exploded[0] ==1 && $vote_string_exploded[1]==1 && $level==4){
        $password = "CON Welcome! Press 1 to continue";
    }
else if (text== "1"){
    $response= "CON Welcome to TEAU IVote;\n Press:";
    $response .= "0. President\n";
    $response .= "1. Education minister\n";
    $response .= "2. Environment minister\n";
    $response .= "3. Entertainment minister\n";
}
else if (text== "1*0"){
    $president= "CON 0. Samuel Kimei \n";
    $president .= "1. Margaret Kobi \n";
    $president .= "2. Alice Mwea \n";
    $response  .="You have voted president as" .$president;
    $president ++; 
    echo $president;
    $response .="9. Back";   
}
else if (text=="1*0*9"){
    $response= "CON Welcome to TEAU IVote;\n Press:";
    $response .= "0. President\n";
    $response .= "1. Education minister\n";
    $response .="2. Environment minister\n";
    $response .="3. Entertainment minister\n";
    
}
else if (text== "1*1"){
    $edumin= "CON 0. Alex Wambua \n";
    $edumin .= "1. Collins Kamau \n";
    $edumin .= "2. Esther Bett \n";
    $response .= "You have voted education minister as" .$edumin;
    $edumin++;
    echo $edumin;
    $response .="9. Back"; 
}
else if (text== "1*2"){
    $envrmin= "CON 0. David Hosh \n";
    $envrmin .= "1. Koni Tabu \n";
    $envrmin .= "2. Edward Riar \n";
    $response .= "You have voted education minister as" .$envrmin;
    $envrmin++;
    echo $envrmin;
    $response .="9. Back"; 
}
else if (text== "1*3"){
    $entermin= " CON 0. Lily Mathu \n";
    $entermin .= "1. Emma Mutai \n";
    $entermin .= "2. Dennis Oloo \n";
    $response .= "You have voted education minister as" .$envrmin;
    $entermin++;
    echo $envrmin;
    $response .="9. Back";      
    $response="END Thankyou for voting!";

}

header('Content-type: text/plain');
echo $response




?>