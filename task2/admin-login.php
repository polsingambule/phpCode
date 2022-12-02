<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="images/logo.png">
	<title>Login Form</title>
</head>
<style>
	*{
		font-family: 'Play', sans-serif;
		margin: 0px ;
		padding: 0px;
	}
	.admin_content {
    text-align: center;
}
.admin_content {
    margin: 150px auto 0px auto;
    width: 250px;
    background: #e3ccafa6;
    padding: 20px 25px;
}
.admin_img {
    text-align: center;
}
.admin_content label {
    font-size: 18px;
}
.admin_content input {
    width: 97%;
    height: 25px;
    font-size: 16px;
    padding: 0px 5px;
    border: 1px solid #000;
}
.admin_content input:focus{
    outline: none;
        border: 1px solid #aa5a00;
}
.admin_form_btn button {
    background: #d3ad7f;
    margin-top: 20px;
    padding: 5px 20px;
    border: 1px solid #aa5a00;
    font-weight: bold;
    cursor: pointer;
    transition: 0.5s;
}
.admin_form_btn button:hover{
    letter-spacing: 2px;
}
</style>
<body>
	<div class="admin_content">
		<form action="" method="POST">
			<div class="admin_img">
				<img src="images/logo.png">
			</div>
			<label>Username</label><br>
			<input type="text" name="admin_username" placeholder="Admin Username">
			<br><br>
			<label>Password</label><br>
			<input type="text" name="admin_password" placeholder="Admin Password">
			<div class="admin_form_btn">
				<button>Sing In</button>
			</div>
		</form>
	</div>
</body>
</html>