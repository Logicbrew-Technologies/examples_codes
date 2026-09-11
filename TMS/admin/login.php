<?php
session_start(); require "../includes/db.php"; $error="";
if(isset($_SESSION["admin_id"])){header("Location: dashboard.php");exit;}
if($_SERVER["REQUEST_METHOD"]==="POST"){
$u=trim($_POST["username"]??"");$p=$_POST["password"]??"";
$stmt=$conn->prepare("SELECT id,username,password FROM admins WHERE username=? LIMIT 1");$stmt->bind_param("s",$u);$stmt->execute();$r=$stmt->get_result()->fetch_assoc();$stmt->close();
if($r&&password_verify($p,$r["password"])){$_SESSION["admin_id"]=$r["id"];$_SESSION["admin_username"]=$r["username"];header("Location: dashboard.php");exit;}
$error="Invalid username or password.";
} ?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Admin Login</title><link rel="stylesheet" href="../css/style.css"></head><body>
<div class="login"><span class="small" style="color:var(--purple);font-size:10px;font-weight:700;letter-spacing:1px">HELPDESK ADMIN</span><h1>Welcome back</h1>
<?php if($error):?><div class="error"><?=$error?></div><?php endif;?>
<form method="post"><div class="field"><label>Username</label><input name="username" required></div><div class="field"><label>Password</label><input type="password" name="password" required></div><button class="btn" style="width:100%">LOGIN</button></form></div></body></html>