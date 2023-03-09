<?php 
session_start();
if( !isset($_SESSION["login"])){
  header("Location:index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Receipt</title>
  </head>
  <body onload="javascript:window.print()" style="margin: 0; width: 1000px">
    <div style="margin-left: 20px"></div>
    <img src="asset/logo3.png" alt="" width="80px" height="80px" style="position: absolute; left: 0px; top: -6px" />
    <table width="90%" cellspacing="0" cellpadding="0" style="margin-left: 60px">
      <tr>
        <td>
          <div align="center">
            <font size="7"><b>CV. TOUR ANGENT FUN PLACE</b></font>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div align="center">
            <font size="5"><b>1600 Pennsylvania Avenue NW in Washington, D.C/b></font>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div align="center">
            <font size="4" color="blue"><b>Phone : +1(20221020015), E-Mail : anwar.ibrahim.ti.22@cic.ac.id</b></font>
          </div>
        </td>
      </tr>
    </table>
    <br />
    <hr />
    <label>
      <font size="6">
        <center><b>Detail Payment</b></center>
      </font>
    </label>

    <p>&nbsp;</p>

    <h2><?php echo $_SESSION['kota']; ?> Series!</h2>
    <table class="table-info" rules="rows" cellpadding="10" width="90%" height="25%">
      <tbody>
        <tr>
          <td class="head">Name</td>
          <td>:</td>
          <td><?php echo $_SESSION['name1']; ?>&nbsp<?php echo $_SESSION['name2']; ?></td>
        </tr>
        <tr>
          <td class="head">Email</td>
          <td>:</td>
          <td><?php echo $_SESSION['email']; ?></td>
        </tr>
        <tr>
          <td class="head">Phone</td>
          <td>:</td>
          <td><?php echo $_SESSION['phone']; ?></td>
        </tr>
        <tr>
          <td class="head">Person</td>
          <td>:</td>
          <td><?php echo $_SESSION['orang']; ?></td>
        </tr>
        <tr>
          <td class="head">City</td>
          <td>:</td>
          <td><?php echo $_SESSION['kota']; ?></td>
        </tr>
        <tr>
          <td class="head">Price</td>
          <td>:</td>
          <td>$<?php echo $_SESSION['price']; ?></td>
        </tr>
        <tr>
          <td class="head">Insurance</td>
          <td>:</td>
          <td>$<?php echo $_SESSION['insyu']; ?><small>(<?php echo $_SESSION['orang']; ?>x$50)</small></td>
        </tr>
        <tr>
          <td class="head">Tax</td>
          <td>:</td>
          <td>$25</td>
        </tr>
        <tr>
          <td class="head">Discont</td>
          <td>:</td>
          <td style="color: green;">- $10</td>
        </tr>
        <tr>
          <td class="head">Total</td>
          <td>:</td>
          <td><b>$<?php echo $_SESSION['total']; ?></b></td>
        </tr>
        <tr>
          <td class="head">Payment Method</td>
          <td>:</td>
          <td><?php echo $_SESSION['payment']; ?></td>
        </tr>
      </tbody>
    </table>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
  <footer>
    <a href="user/home.php"><button>Back To Dashboard</button></a>
  </footer>
</html>
