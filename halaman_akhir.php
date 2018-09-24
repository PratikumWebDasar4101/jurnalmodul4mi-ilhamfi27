<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data User</title>
	</head>
	<body>
		<center>
			<table border>
				<tr>
					<td colspan="2" align="center">
						<img src="uploaded/<?php echo $_SESSION['foto']; ?>" width="200">
					</td>
				</tr>
				<tr>
					<th>Hobby User</th>
					<th>Action</th>
				</tr>
				<?php 
				$data = $_SESSION['hobby'];
				$index = 0;
				foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value; ?></td>
					<td>
						<form action=" " method="post">
							<input type="hidden" name="index" value="<?php echo $index; ?>">
							<input type="submit" name="delete" value="Hapus">
						</form>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
		</center>
	</body>
</html>
<?php
if (isset($_POST['delete']) && isset($_POST['index'])) {
	$index_value = $_POST['index'];
	$data = $_SESSION['hobby'];
	unset($_SESSION['hobby'][$index_value]);
}
?>