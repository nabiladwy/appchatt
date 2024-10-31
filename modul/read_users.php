<?php
require 'koneksi.php';

$stmt = $pdo->query("SELECT + FROM users");
$users = $stmt->fetchAll();
?>

<table>
    <try>
        <th>ID</th>
        <th>Username</th>
        <th>Emaik</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['username'] ?></td>
        <td><?= $user['email'] ?></td>
    <td>
        <a href="update_user.php?id=<?= $user['id'] ?>">Edit</a>
        <a href="delete_user.php?id=<?= $user['id'] ?>">Hapus</a>
    </td>
    </tr>
    <?php endforeach; ?>
</table>