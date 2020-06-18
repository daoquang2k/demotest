<?php
$conn_string="host=ec2-54-86-170-8.compute-1.amazonaws.com port=5432 dbname=d7qhnof0kchv67 user=
lhwgoqybkpblxb   password=577083ff93814e0962f841a9ccc4972758f575cff682257aa5c1c1204dc68c6b"
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblaccount WHERE _user='".$username."' AND _pass='".$pass."'";
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