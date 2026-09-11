<?php
session_start();if(!isset($_SESSION["admin_id"])){header("Location: login.php");exit;}require "../includes/db.php";
$total=$conn->query("SELECT COUNT(*) c FROM tickets")->fetch_assoc()["c"];
$pending=$conn->query("SELECT COUNT(*) c FROM tickets WHERE status='Pending'")->fetch_assoc()["c"];
$resolved=$conn->query("SELECT COUNT(*) c FROM tickets WHERE status='Resolved'")->fetch_assoc()["c"];
$list=$conn->query("SELECT * FROM tickets ORDER BY id DESC");
?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Dashboard</title><link rel="stylesheet" href="../css/style.css"></head><body class="admin-body"><div class="admin">
<div class="admin-top"><div><span style="color:var(--purple);font-size:10px;font-weight:700;letter-spacing:1px">HELPDESK ADMIN</span><h1>Dashboard</h1></div><div><a href="../index.php">View Site</a> &nbsp; · &nbsp; <a href="logout.php">Logout</a></div></div>
<div class="stats"><div class="stat"><span>TOTAL TICKETS</span><b><?=$total?></b></div><div class="stat"><span>PENDING</span><b><?=$pending?></b></div><div class="stat"><span>RESOLVED</span><b><?=$resolved?></b></div></div>
<div class="table-wrap"><table class="table"><tr><th>ID</th><th>Name</th><th>Subject</th><th>Status</th><th>Created</th><th>Action</th></tr>
<?php while($t=$list->fetch_assoc()): ?><tr><td>#<?=$t["id"]?></td><td><?=htmlspecialchars($t["name"])?></td><td><?=htmlspecialchars($t["subject"])?></td><td><?=$t["status"]?></td><td><?=$t["created_at"]?></td><td class="actions"><a href="view.php?id=<?=$t["id"]?>">View</a></td></tr><?php endwhile;?>
</table></div></div></body></html>