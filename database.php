<?php 
class database{

	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db = "login";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

	}
	function input_register($name, $email, $username, $password, $password2){
		// cek username sudah ada atau belum
		$result = mysqli_query($this->koneksi, "SELECT username FROM tbl_login WHERE username = '$username'");
		if(mysqli_fetch_assoc($result)){
			echo "<script>
					alert('The username you entered is already registered!')
					document.location='sign_in.php';
				</script>";
			return False;
		}
		// konfirmasi password
		if($password !== $password2){
			echo "<script>
                confirm('Password confirmation does not match, please check your password again!')
                document.location='sign_in.php';
             </script>";
        	return false;
		}
		// masukan ke database
		mysqli_query($this->koneksi, "INSERT into tbl_login values ('','$name', '$email', '$username', '$password', $password2)");

    	// definisi variabel $hasil_regis sebelum digunakan
    	$hasil_regis = array();
    	while ($row = mysqli_fetch_array($result)) {
    		$hasil_regis[] = $row;
    	}
     
    	// return $hasil_regis jika diperlukan
    	return $hasil_regis;
	}
	function data_login(){
		if(isset($_POST['kei'])){
			$kei = $_POST['kei'];
		$data_login = mysqli_query($this->koneksi, "SELECT * from tbl_login WHERE name LIKE '%$kei%' OR username LIKE '%$kei%'");
		while ($row = mysqli_fetch_array($data_login)) {
			$hasil_login[] = $row;
		}
		}else{
			$data_login = mysqli_query($this->koneksi, "SELECT * from tbl_login ");
		while ($row = mysqli_fetch_array($data_login)) {
			$hasil_login[] = $row;
		}
		}
		return $hasil_login;
	}
	function tampil_data($id){
		$query = mysqli_query($this->koneksi, "SELECT * from tbl_login where id ='$id' ");
		return $query->fetch_array();
	}
	function update_login($id, $name, $email, $username, $password){
		$query = mysqli_query($this->koneksi, "UPDATE tbl_login set id='$id', name='$name', email='$email', username='$username', password='$password' WHERE id='$id'");
	}
	function delet_data($id){
		$query = mysqli_query($this->koneksi,"DELETE FROM tbl_login where id = $id ");
	}
	function input_trans($name_f, $name_l, $email, $phone, $person, $city, $payment, $total){
		mysqli_query($this->koneksi, "INSERT INTO tb_trans VALUES ('', '$name_f', '$name_l', '$email', '$phone', '$person', '$city', '$payment', '$total')");
	}
	function tampil_data_trans($id){
		$query = mysqli_query($this->koneksi, "SELECT * from tb_trans where id ='$id' ");
		return $query->fetch_array();
	}
	function update_trans($id, $name_f, $name_l, $email, $phone, $person, $city, $payment, $total){
		$query = mysqli_query($this->koneksi, "UPDATE tb_trans set id='$id', name_f='$name_f', name_l='$name_l', email='$email', phone='$phone', person='$person', city='$city', payment='$payment', total='$total' WHERE id='$id'");
	}
	function delet_data_trans($id){
		$query = mysqli_query($this->koneksi,"DELETE FROM tb_trans where id = $id ");
	}
	function data_trans(){
		if(isset($_POST['kei'])){
			$kei= $_POST['kei'];
		$data_trans = mysqli_query($this->koneksi, "SELECT * from tb_trans WHERE name_f LIKE '%$kei%' OR name_l LIKE '%$kei%' OR city LIKE '%$kei%'");
		while ($row = mysqli_fetch_array($data_trans)) {
			$hasil_trans[] = $row;
		}
		}else{
			$data_trans = mysqli_query($this->koneksi, "SELECT * from tb_trans ");
		while ($row = mysqli_fetch_array($data_trans)) {
			$hasil_trans[] = $row;
		}
		}
		return $hasil_trans;
	}
}
?>