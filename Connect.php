<?php
$conn_string="host=ec2-18-206-84-251.compute-1.amazonaws.com port=5432 dbname=
df3ojaejc9jn7c user=
mznpgybxdkiuuv   password=248f4c6d43aa4db2fe50e5ec28817c7363ff3a6fb1dce151882ad5cd21608336"
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM accounts WHERE _user='".$username."' AND _pass='".$pass."'";
$result = pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
