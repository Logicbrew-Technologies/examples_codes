<?php
require "includes/db.php"; $pageTitle="Submit Ticket";
$success=""; $error=""; $ticket_id="";
if($_SERVER["REQUEST_METHOD"]==="POST"){
$name=trim($_POST["name"]??"");$email=trim($_POST["email"]??"");$subject=trim($_POST["subject"]??"");$description=trim($_POST["description"]??"");
if(!$name||!filter_var($email,FILTER_VALIDATE_EMAIL)||!$subject||!$description){$error="Please fill in all fields correctly.";}
else{$stmt=$conn->prepare("INSERT INTO tickets(name,email,subject,description) VALUES(?,?,?,?)");$stmt->bind_param("ssss",$name,$email,$subject,$description);$stmt->execute();$ticket_id=$stmt->insert_id;$stmt->close();$success="Your ticket has been submitted successfully.";}
}
require "includes/header.php"; ?>
<section class="section"><div class="container"><div class="section-title"><h2>Submit a Ticket</h2><p>TELL US WHAT YOU NEED HELP WITH</p></div>
<div class="form-card">
<?php if($success): ?><div class="success"><?=htmlspecialchars($success)?><br><strong>Your Ticket ID is #<?=$ticket_id?></strong>. Save this ID to track your ticket.</div><?php endif; ?>
<?php if($error): ?><div class="error"><?=htmlspecialchars($error)?></div><?php endif; ?>
<form method="post">
<div class="field"><label>Name</label><input name="name" required></div>
<div class="field"><label>Email</label><input type="email" name="email" required></div>
<div class="field"><label>Subject</label><input name="subject" required></div>
<div class="field"><label>Describe your problem</label><textarea name="description" required></textarea></div>
<button class="btn" type="submit">SUBMIT TICKET</button>
</form></div></div></section>
<?php require "includes/footer.php"; ?>