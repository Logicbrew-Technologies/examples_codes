<?php
require "includes/db.php"; $pageTitle="Track Ticket"; $ticket=null; $error="";
if($_SERVER["REQUEST_METHOD"]==="POST"){ $id=(int)($_POST["ticket_id"]??0);
$stmt=$conn->prepare("SELECT * FROM tickets WHERE id=?");$stmt->bind_param("i",$id);$stmt->execute();$ticket=$stmt->get_result()->fetch_assoc();$stmt->close();
if(!$ticket)$error="No ticket found with that ID.";
}
require "includes/header.php"; ?>
<section class="section"><div class="container"><div class="section-title"><h2>Track Your Ticket</h2><p>ENTER YOUR TICKET ID</p></div>
<div class="form-card"><form method="post"><div class="field"><label>Ticket ID</label><input type="number" name="ticket_id" placeholder="Example: 1001" required></div><button class="btn" type="submit">CHECK STATUS</button></form></div>
<?php if($error): ?><div class="error" style="max-width:650px;margin:-50px auto 50px"><?=htmlspecialchars($error)?></div><?php endif; ?>
<?php if($ticket): ?><div class="ticket-result"><div class="ticket-head"><div><div class="ticket-id">#<?=$ticket['id']?></div><h2><?=htmlspecialchars($ticket['subject'])?></h2></div><span class="status <?=strtolower(str_replace(' ','-',$ticket['status']))?>"><?=htmlspecialchars($ticket['status'])?></span></div>
<div class="detail"><small>Name</small><p><?=htmlspecialchars($ticket['name'])?></p></div><div class="detail"><small>Email</small><p><?=htmlspecialchars($ticket['email'])?></p></div><div class="detail"><small>Description</small><p><?=nl2br(htmlspecialchars($ticket['description']))?></p></div><div class="detail"><small>Submitted</small><p><?=htmlspecialchars($ticket['created_at'])?></p></div>
</div><?php endif; ?></div></section>
<?php require "includes/footer.php"; ?>