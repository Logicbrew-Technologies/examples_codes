<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle ?? "HelpDesk") ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <a class="logo" href="index.php">Help<span>Desk</span></a>
  <nav>
    <a href="index.php">Home</a>
    <a href="submit.php">Submit Ticket</a>
    <a href="track.php">Track Ticket</a>
    <a href="admin/">Admin</a>
  </nav>
</header>
