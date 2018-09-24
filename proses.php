<?php
session_start();
if (isset($_POST['submit'])) {
	// pemrosesan foto
	$file_name = $_FILES['foto']['name'];
	$tmp_name = $_FILES['foto']['tmp_name'];
	$file_move_success = move_uploaded_file($tmp_name, 'uploaded/'.$file_name);

	if($file_move_success){
		$data = $_POST['hobby'];
		$_SESSION['hobby'] = $data;
		$_SESSION['foto'] = $file_name;
		header('location: halaman_akhir.php');
	}
}
?>