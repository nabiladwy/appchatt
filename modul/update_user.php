<?php
require '../lib/koneksi.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_post['username'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
    $stmt->execute([$username, $email, $id]);

    header("Location: read_users.php");
}
?>
<form method="POST">
    Username: <input type="text" name="username" value="<?= $user['username'] ?>" required>
    Email: <input type="email" name="email" value="<?= $user['email'] ?>" required>
    <button type="submit">Update</button>
</form>