<!doctype html>
<!-- Ashvith Arumuganathan -->
<html>
<head>

<title> CMS </title>

<!-- CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/pages.css">

</head>
<body>

<!-- header -->
<div id="header">

<!-- brand name -->
  <div id="name-brand">
    <h2 class="name-brand">Bemika</h2>
  </div>

<!-- dropdown -->
<div class="dropdown">
  <button class="dropbtn"><?php echo $_SESSION['user'] ?>
  <img src="img/profile.png"></button>
  <div class="dropdown-content">
    <a href="#">Lock screen</a>
    <a href="#">Log out</a>
    <a href="#">Settings</a>
  </div>
</div>
</div>

<!-- sidebar left -->
<div id="sidebar_left">

<!-- search bar -->
<form method="get" action="/search" id="search">
<input name="q" type="text" size="40" placeholder="Search..." />
</form>

<!-- admin name -->
<h2 class="name-admin"><?php echo $_SESSION['user'] ?></h2>

<!-- navbar -->
<div id="navbar">
  <ul>
    <li><img class="nav-icon" src="img/dashboard.png"><a class="active" href="?action=dashboard">Dashboard</a></li>
    <li><img class="nav-icon" src="img/activity_log.png"><a href="?action=activity">Activity log</a></li>
    <li><img class="nav-icon" src="img/pages.png"><a href="?action=pages">Pages</a></li>
    <li><img class="nav-icon" src="img/charts.png"><a href="?action=charts">Charts</a></li>
    <li><img class="nav-icon" src="img/charts.png"><a href="?action=accounts">accounts</a></li>
    </ul>
</div>

</div>

<!-- content -->

