<?php
session_start();if(!isset($_SESSION["admin_id"])){header("Location: login.php");exit;}require "../includes/db.php";
$id=(int)($_GET["id"]??0);$stmt=$conn->prepare("SELECT * FROM tickets WHERE id=?");$stmt->bind_param("i",$id);$stmt->execute();$ticket=$stmt->get_result()->fetch_assoc();$stmt->close();if(!$ticket)die("Ticket not found.");
if($_SERVER["REQUEST_METHOD"]==="POST"){$status=$_POST["status"]??"Pending";$stmt=$conn->prepare("UPDATE tickets SET status=? WHERE id=?");$stmt->bind_param("si",$status,$id);$stmt->execute();$stmt->close();$ticket["status"]=$status;$updated=true;}
?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Ticket #<?=$id?></title><link rel="stylesheet" href="../css/style.css"></head><body class="admin-body"><div class="admin">
<div class="admin-top"><h1>Ticket #<?=$ticket["id"]?></h1><a href="dashboard.php">← Dashboard</a></div>
<div class="admin-form"><?php if(isset($updated)):?><div class="success">Ticket status updated.</div><?php endif;?>
<div class="detail"><small>Name</small><p><?=htmlspecialchars($ticket["name"])?></p></div><div class="detail"><small>Email</small><p><?=htmlspecialchars($ticket["email"])?></p></div><div class="detail"><small>Subject</small><p><?=htmlspecialchars($ticket["subject"])?></p></div><div class="detail"><small>Description</small><p><?=nl2br(htmlspecialchars($ticket["description"]))?></p></div>
<form method="post"><div class="field"><label>Update Status</label><select name="status"><option <?=$ticket["status"]==="Pending"?"selected":""?>>Pending</option><option <?=$ticket["status"]==="In Progress"?"selected":""?>>In Progress</option><option <?=$ticket["status"]==="Resolved"?"selected":""?>>Resolved</option></select></div><button class="btn">UPDATE STATUS</button></form>
</div></div></body></html>