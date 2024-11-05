<?php
require '../lib/koneksi.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $chat_id=$_POST['chat_id'];
    $user_id=$_POST['user_id'];
    $message=$_POST['message'];

    $stmt=$pdo->prepare("INSERT INTOmessage(chat_id,user_id,message) VALUES(?,?,?)");
    $stmt->execute([$chat_id,$user_id,$message]);

    echojson_encode(['success'=>true]);exit;
}
?>