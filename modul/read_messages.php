<?php 
	require '../koneksi.php';

    
	$chat_id = $_GET['chat_id'];
	$stmt = $pdo->prepare("SELECT * FROM messages WHERE chat_id = ?");
	$stmt->execute([$chat_id]);
	$messages = $stmt->fetchALL();

 ?>

 <table>
 	<tr>
 		<th>ID</th>
 		<th>User</th>
 		<th>Message</th>
 		<th>Waktu</th>
 	</tr>
 	<?php foreach ($messages as $messages): ?>
 	<tr>
 		<td><?= $messages['id'] ?></td>
 		<td>
 			<?php
 			$user_stmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
 			$user_stmt->execute([$messages['user_id']]);
 			$user = $user_stmt->fetch();
 			echo $user['username']; 
 			 ?>
 		</td>
 		<td><?= $message['message'] ?></td>
 		<td><?= $message['created_at'] ?></td>
 	</tr>
 <?php endforeach; ?>

 </table>

 <form id="messageForm">
 	Chat:
 	<select name="chat_id" id="chat_id"></select>
 	User:
 	<select name="user_id" id="user_id"></select>
 	Message:<textarea name="message" id="message" required></textarea>
 	<button type="submit">kirim</button>
 </form>

 <div id="messages"></div>

 <script>document.getElementById('messageFrom').addEventListener('submit',function(e){
 	e.preventDefault();

 	const formData =new FormData(this);

 	fetch('send_message.php',{
 		method: 'POST',
 		body: formData
 	})
 	.then(response => response.json())
 	.then(data => {
 		if(data.succes)
 			{loadMessages();
                document.getElementById('message').value = ''; // Clear the message input
            } else {
                alert('Eror: ' + data.eror);
            }
 	});
});

function loadMessages() {
    fetch('load_messages.php?chat_id=' + 
    document.getElementById('chat_id').value)
            .then(response => response.text())
            .then(html => {
				document.getElementById('messages').innerHTML = html;
			});
}

loadMessages();
 </script>

<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$chat_id = $_POST['chat_id'];
	$usert_id = $_POST['user_id'];
	$message = $_POST['message'];
	
	$stmt = $pdo->prepare("INSERT INTO messages (chat_id, user_id, message) VALUES (?, ?, ?)");
	$stmt->execute([$chat_id, $user_id, $message]);

	echo json_encode(['success' => true]);
	exit;
}
?>

<script>
	const socket = new websocket('ws://localhost:3000');


	socket.onmessage = function(event)	{
		const data = JSON.parse(event.data);
		loadMessages(); 
		};

	document.getElementById('messageFrom').addEventListener('submit', function (e) {
		e.preventDefault();

		const messageData = {
			chat_id: document.getElemetById('chat_id').value,
			user_id: document.getElemetById('user_id').value,
			message: document.getElemetById('message').value
		};
		socket.send(JSON.stringify(messageData));
	});

	const notificationSound = new Audio('notification.mp3');


	socket.onmessage = function(event) {
		const data = JSON.parse(event.data);
		loadMessages();
		notificationSound.play();
	};
	
</script>
