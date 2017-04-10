
<!-- header -->
<div id="header">

<!-- brand name -->
  <div id="name-brand">
    <h2 class="name-brand">Bemika</h2>
  </div>

<!-- dropdown -->
<div class="dropdown">
  <a class="dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo $_SESSION['user'] ?></a>
  <div class="dropdown-content">
    <a href="?action=logout">Log out</a>
  </div>
</div>
</div>

<!-- sidebar left -->
<div id="sidebar_left">

<!-- search bar -->
<form method="get" action="/search" id="search">
<input name="q" type="text" size="60" placeholder="Search..." />
</form>

<!-- admin name -->
<h2 class="name-admin"><?php echo $_SESSION['user'] ?></h2>

<!-- navbar -->
<div id="navbar">
 
    <a href="?action=dashboard"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
    <a href="?action=activity&page=activitys"><i class="fa fa-clone" aria-hidden="true"></i>Activity log</a>
    <a href="?action=pages"><i class="fa fa-file-o" aria-hidden="true"></i>Pages</a>
    <a href="?action=stats"><i class="fa fa-bar-chart" aria-hidden="true"></i>Stats</a>
    
    <?php if ($_SESSION['level'] == "super-admin"): ?>
      <a href="?action=accounts&page=users"><i class="fa fa-users" aria-hidden="true"></i>Accounts</a>
    <?php endif; ?>
    
  
</div>

</div>
