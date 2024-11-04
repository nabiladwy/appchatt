<?php
require'koneksi.php';

$chat_id=$_GET['chat_id'];
$stmt=$pdo->prepare("SELECTmessage.*,users.usernameFROMmessageJOINusersONmessage.user_id=users.idWHEREchat_id=?");
$stmt->execute([$chat_id]);
$message=$smt->fetchAll();

foreach($message as $message){
    echo"<div><strong>{$message['username']:</strong>{$message['message']}<em>{$message['created_at']}</em></div>";
}
