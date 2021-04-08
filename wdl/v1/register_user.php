<?php

require_once '../includes/DbOperations.php';

$response = array();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(
        isset($_POST['username']) && isset($_POST['surname']))
        {
        //operate data further
        $db = new DbOperations();
        $result = $db->createUser($_POST['username'],$_POST['surname']);
        if($result==1)
        {
            $response['error']=false;
            $response['message']="User registered";
        }elseif($result==2){
            $response['error']=true;
            $response['message']="Error try again";
        
        }elseif($result==0){
            $response['error']=true;
            $response['message']="You have already registered";
        }
        

    }else{
        $response['error']=true;
        $response['message']="Required fields are missing";
    }

}
else{
    $response['error']=true;
    $response['message']="Invalid Request";

}
echo json_encode($response);
?>