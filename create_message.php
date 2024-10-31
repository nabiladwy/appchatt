<?php
require 'koneksi.php';

$stmt = $pdo->query("SELECT * FROM chats");
$users = $stmt->fetchAll();

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chat_id = $_POST['chat_id'];
    $user_id = $_POST['user_id'];
    $message_id = $_POST['message_id'];

    $stmt = $pdo->prepare("INSERT INTO message (chat_id, user_id, message) VALUES (?,?,?)");
    $stmt->execute([$chat_id, $user_id, $message]);

    header("Location: read_message.php?chat_id=$chat_id");

}
?>

<form method="POST">
    Chat:
    <select name="chat_id">
        <?php foreach ($chats as $chat): ?>
            <option value="<?= $chat['id'] ?>"><?= $chat['chat_name'] ?></option>
            <?php endforeach; ?>
        </select>
        User:
        <select name="user_id">
            <?php foreach ($users as $user): ?>
                <option value="<?= $user['id'] ?>"><?= $user['userrname'] ?></option>
                <?php endforeach; ?>
            </select>
            Message: <textarea name="message" required></textarea>
            <button type="submit">Kirim</button>
            </form>

