<?php 
session_start();
if( !isset($_SESSION["admin"])){
  header("Location: ../index.php");
  exit;
}
include'../database.php';
$db = new database();
$data_trans = $db->data_trans();
 ?>
<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tables-Admin</title>
  <link rel="shorcut icon" href="#">

  <!-- Bulma is included -->
  <link rel="stylesheet" href="css/main.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
  <nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
      <div class="navbar-item has-control">
        <div class="control"><input placeholder="Search everywhere..." class="input"></div>
      </div>
    </div>
    <div class="navbar-brand is-right">
      <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
        <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
      </a>
    </div>
    <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
      <div class="navbar-end">
        <a title="Log out" class="navbar-item is-desktop-icon-only" href="logout.php">
          <span class="icon"><i class="mdi mdi-logout"></i></span>
          <span>Log out</span>
        </a>
      </div>
    </div>
  </nav>
  <aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div class="aside-tools-label">
        <span><b>Tour Agent</b> Fun Place</span>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="home.php" class="has-icon">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Data</p>
      <ul class="menu-list">
        <li>
          <a href="tables.php" class="is-active router-link-active has-icon">
            <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label">Sales Tables</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">About</p>
      <ul class="menu-list">
        <li>
          <a href="https://www.instagram.com/war_0690/" target="_blank" class="has-icon">
            <span class="icon"><i class="fab fa-instagram"></i></span>
            <span class="menu-item-label">Instagram</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <section class="section is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Admin</li>
            <li>Control</li>
          </ul>
        </div>
      </div>
      <div class="level-right">
        <div class="level-item">
          <div class="buttons is-right">
            <a href="https://github.com/vikdiesel/admin-one-bulma-dashboard" target="_blank" class="button is-primary">
              <span class="icon"><i class="mdi mdi-github-circle"></i></span>
              <span>Instagram</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="hero is-hero-bar">
    <div class="hero-body">
      <div class="level">
        <div class="level-left">
          <div class="level-item"><h1 class="title">
           Total Transaction.
          </h1></div>
        </div>
        <div class="level-right" style="display: none;">
          <div class="level-item"></div>
        </div>
      </div>
    </div>
  </section>
  <div class="tile is-ancestor">
      <div class="tile is-parent">
        <div class="card tile is-child">
          <div class="card-content">
            <div class="level is-mobile">
              <div class="level-item">
                <div class="is-widget-label">
                  <h1 class="title">
                    <?php 
                      $mysqli = new mysqli("localhost", "root", "", "login");
                      $result = $mysqli->query("SELECT COUNT(*) as total FROM tb_trans");
                      $data = $result->fetch_assoc();
                      echo $data['total'];
                     ?>
                  </h1>
                </div>
              </div>
              <div class="level-item has-widget-icon">
                <div class="is-widget-icon"><span class="icon has-text-primary is-large"><i
                    class="mdi mdi-cart-outline mdi-48px"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-item has-control">
        <div class="control"><form action="tables.php" method="POST"><input placeholder="Search Name / City" class="input" name="kei"></div><input type="submit" name="cari" value="Search" class="button is-primary">&nbsp<input type="submit" name="reset" value="Reset" class="button is-primary"></form>
    </div>
  <section class="section is-main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Clients Transaction |<?php 
    if(isset($_POST['cari'])){
      $kei = $_POST['kei'];
      echo "<label>&nbsp Based Search:&nbsp<b>$kei<b></label>";
    }else{
      echo "<label>&nbsp All Transaction</label>";
    }
  ?>
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            <table class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth">
              <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Person</th>
                <th>Payment</th>
                <th>City</th>
                <th>Total</th>
                <th class="buttons is-right">Edit Delet</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;
                  foreach ($data_trans as $row) {
                    # code...
                  
                  

                 ?>
              <tr>
                <td class="is-image-cell">
                  <div class="image">
                    <?php echo $no ++; ?>
                  </div>
                </td>
                <td data-label="Name"><?php echo "$row[name_f]&nbsp$row[name_l]"; ?></td>
                <td data-label="Company"><?php echo "$row[email]"; ?></td>
                <td data-label="City"><?php echo "+"."$row[phone]"; ?></td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Oct 25, 2020"><?php echo "$row[person]"; ?></small>
                </td>
                <td><?php echo "$row[payment]"; ?></td>
                <td><?php echo "$row[city]"; ?></td>
                <td>$<?php echo number_format($row['total']); ?></td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <a href="<?php echo "edit_trans.php?id=$row[id]";?>">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    </a>
                    <a href="<?php echo "tables.php?aksi=delet&id=$row[id]";?>"><button class="button is-small is-danger jb-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button></a>
                  </div>
                </td>
              </tr>
              <?php 
              }
               ?>
              <?php   
                if (isset($_GET['aksi'])) {
                  $action = $_GET['aksi'];
                if ($action == "delet") {
                  $db->delet_data_trans($_GET['id']);
                  echo "<script>
                        alert('Data has Deleted.')
                        document.location='tables.php';
                        </script>"; 
                }
                }
               ?>
              </tbody>
            </table>
          </div>
          <div class="notification">
            <div class="level">
              <div class="level-left">
                <div class="level-item">
                  <div class="buttons has-addons">
                    <button type="button" class="button is-active">1</button>
                    <button type="button" class="button">2</button>
                    <button type="button" class="button">3</button>
                  </div>
                </div>
              </div>
              <div class="level-right">
              <a href="report.php" class="button is-primary" target="_blank">Print Transaction Data</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <footer class="footer">
    <div class="container-fluid">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            © 2023, Anwar Mulya Ibrahim
          </div>
          <div class="level-item">
            <a href="" style="height: 20px">
              <img src="https://img.shields.io/github/v/release/vikdiesel/admin-one-bulma-dashboard?color=%23999">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>
</html>
