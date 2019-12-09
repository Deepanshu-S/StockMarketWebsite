<?php
require "scripts/global.php";
mksession();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trade</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- Fontawesome for icons -->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/trade.css">
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/trade.js"></script>
  </head>

  <body>
    <!-- Navbar using bootstrap-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse" id="collapse_target">
        <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link">  </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome
            </a>
            <div style="left: -95%;" class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="profile.php">Profile</a>
              <a class="dropdown-item" href="portfolio.php">Portfolio</a>

              <a class="dropdown-item" href="stocksearch.php">Stock Search</a>
              <a class="dropdown-item" href="#">Trade</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/scripts/logout.php">Sign Out!</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class="container">
      <div class="jumbotron">
      <h1>Your Trade</h1>
          <form action="/action_page.php" method="get">
            <div class="form-group">
              <label for="stockSymbol">STOCK SYMBOL</label>
              <input type="text" class="form-control" id="stockSymbol" placeholder="e.g. GOOG, FB, YHOO" minlength="1">
            </div>
            <div class="form-group">
              <label for="transMode">TRANSACTION</label>
              <select name="transMode" id="transMode" class="form-control">
                <option value="Buy">Buy</option>
                <option value="Sell">Sell</option>
              </select>
            </div>
            <div class="form-group">
              <label for="qty">Quantity</label>
              <input type="number" class="form-control" id="qty" placeholder="e.g. 1,2,3..." minlength="1">
            </div>
            <div class="form-group">
            <input type="submit" class="form-control bts" id="schedule" value="SCHEDULE">
            <label for="bDate"><strong>Date:</strong><input type="date" class="form-control mydate" id="sDate" name="sDate"></label>

<br/>
              <input type="submit" class="form-control bts" id="proceed" value="PROCEED">
            </div> 
          </form>
      </div>
    </div>
  </body>
</html>