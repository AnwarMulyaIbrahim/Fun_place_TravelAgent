
<?php 
session_start();
include'database.php';
$db = new database();



if (isset($_POST['regis'])) {
	$db->input_register($_POST['name'],
					$_POST['email'],
					$_POST['username'],
					$_POST['password'],
                    $_POST['password2'],);
	echo "<script language = 'Javascript'>
            alert('Congratulations, You Have Successfully Registered!')
			document.location='index.php';
			</script>
			";

}
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username=="admin" AND $password=="admin") {
    $_SESSION["admin"] = true;
   echo "<script language = 'JavaScript'>
   alert('Login Successfully As Admin');
   document.location= 'admin/home.php'
   </script>";
    }else{
    // Prepare a query to select the user from the database
    $result = mysqli_query($db->koneksi,"SELECT * FROM tbl_login WHERE username='$username'");
    // check the username
    if (mysqli_num_rows($result) === 1 ) {
        // check the password
        $row = mysqli_fetch_assoc($result);
        if($password == $row['password']) {
            // set session
            $_SESSION["login"] = true;
            $_SESSION["nama"] = $row['name'];
            $_SESSION["username"] = $row['username'];
            echo "<script language = 'Javascript'>
            alert('Welcome Click OK To Continue!')
            document.location ='user/home.php'
            </script>";
            // confirm("Selamat Datang Klik OK Untuk Lanjutkan!");
            // echo $row['username'];
            // header("location: admin/home.php");
            exit;
    }
    
    }
    echo "<script language = 'Javascript'>
            alert('Your username or password is wrong!')
            document.location='index.php'
            </script>
            ";
    }
}
if (isset($_POST['tokyo'])) {
    $_SESSION['kota'] = "Tokyo";
    $_SESSION['price'] = 500;
    header('location: checkout/index.php');
    exit;
}
else if (isset($_POST['aurora'])) {
    $_SESSION['kota'] = "Antartica";
    $_SESSION['price'] = 1000;
    header('location: checkout/index.php');
    exit;
}
else if (isset($_POST['hawai'])) {
    $_SESSION['kota'] = "Hawaii";
    $_SESSION['price'] = 700;
    header('location: checkout/index.php');
    exit;
}
if (isset($_POST['pesan'])){
    $_SESSION['name1'] = $_POST['first'];
    $_SESSION['name2'] = $_POST['last'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['orang'] = $_POST['person'];
    $_SESSION['payment'] = $_POST['paymentMethod'];
    $kota = $_SESSION['kota'];
    $price = $_SESSION['price'];
    $tot = ($price * $_POST['person'])+ 25 - 10;
    $total = 50 * $_POST['person'] + $tot;
    $_SESSION['insyu'] = 50 * $_POST['person'];
    $_SESSION['total'] = $total;
    $db->input_trans($_POST['first'],
                    $_POST['last'],
                    $_POST['email'],
                    $_POST['phone'],
                    $_POST['person'],
                    $kota,
                    $_POST['paymentMethod'],
                    $total);
    echo "<script language = 'Javascript'>
            alert('Order Successfully Created, Get Your Reciept!')

            </script>
            "; 
    echo "<script language = 'Javascript'>
            document.location='kwitansi.php'

            </script>
            ";
    
    exit;

}
  
if (isset($_POST['edit'])) {
    $db->update_login($_POST['id'],
                    $_POST['name'],
                    $_POST['email'],
                    $_POST['username'],
                    $_POST['password'],);
    echo "<script language = 'Javascript'>
            alert('Data Update sucsses.')
            document.location='admin/home.php';
            </script>
            "; 

}
if (isset($_POST['change'])) {
    $price= $_POST['price'];
    if ($price == '500') {
       $city = "Tokyo";
    }elseif ($price == '1000') {
       $city = "Antartica";
    }elseif ($price == '700') {
       $city = "Hawaii";
    }
    
    $total = ($price * $_POST['person']) + (50 * $_POST['person']) + 25 - 10;
    $db->update_trans($_POST['id'],
                    $_POST['name_f'],
                    $_POST['name_l'],
                    $_POST['email'],
                    $_POST['phone'],
                    $_POST['person'],
                    $city,
                    $_POST['payment'],
                    $total);
    echo "<script language = 'Javascript'>
            alert('Data Update sucsses.')
            document.location='admin/tables.php';
            </script>
            "; 

}


 ?>
 
 