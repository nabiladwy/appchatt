<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<main class="content">
    <div class="container">
    
   
<h1  style="margin-top:34px;"class="h3 mb-3">Messages</h1>
<a href="#" class="list-group-item list-group-item-action border-0"> 
						<div class="d-flex align-items-start">
							<img src="../img/profile-user.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
							<div class="flex-grow-1 ml-3" style="margin-left:10px; margin-top:5px; float:left;">
								Vanessa Tucker
							</div>
						</div>
					</a>


		<div class="card" style="margin-top:26px;">
			<div class="row g-0">
				<div class="col-12 col-lg-5 col-xl-3 border-right">

					<div class="px-4 d-none d-md-block">
						<div class="d-flex align-items-center">
							<div class="flex-grow-1">
							<button type="button" class="btn btn-outline-danger" style="margin-top:15px; margin-left:-10px;" data-mdb-ripple-init data-mdb-ripple-color="dark">Create Message</button>
							</div>
						</div>
					</div>

					<a href="#" class="list-group-item list-group-item-action border-0">
						<div class="d-flex align-items-start" style="margin-top:20px;">
							<img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
							<div class="flex-grow-1 ml-3" style="margin-left:10px; margin-top:-3px;">
								Vanessa Tucker
								<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
							</div>
						</div>
					</a>

					<hr class="d-block d-lg-none mt-1 mb-0">
				</div>
				<div class="col-12 col-lg-7 col-xl-9">
					<div class="py-2 px-4 border-bottom d-none d-lg-block">
						<div class="d-flex align-items-center py-1">
							<div class="position-relative">
								<img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
							</div>
							<div class="flex-grow-1 pl-3" style="margin-left:10px; margin-top:-4px;">
								<strong>Sharon Lessman</strong>
							</div>
							
						</div>
					</div>

					<div class="flex-grow-0 py-3 px-4 border-top">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Type your message">
							<button class="btn btn-primary">Send</button>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
<style>
    body{margin-top:20px;}

.chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 800px;
    overflow-y: scroll
}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
}
.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}
.px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
}
.flex-grow-0 {
    flex-grow: 0!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}
</style>





</style>
</html>
