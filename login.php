<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                LOGIN DISINI
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                <label>Email</label>
                <input type="text" name="mail" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="pwd" class="form-control">
                </div>
                <div class="mb-3">
                   <button type="submit" class="btn btn-primary" name="btn">LOGIN</button>    
                </div>
                </form>
                <?php

                if(isset($_POST['btn'])) {
                    $email = $_POST['mail'];
                    $pass = $_POST['pwd'];
                    $sqlUser = $conn->query("SELECT*FROM user WHERE email='$email' AND passwordd='$pass'");
        
                    $row = $sqlUser->num_rows;
                    $result = $sqlUser->fetch_array();
                    if ($row > 0) {
                        $_SESSION['id'] = $result['id'];
                        header('location:index.php');
                    }else {
                       print($conn->error);
                    }
                    
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>