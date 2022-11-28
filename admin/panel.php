<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
		.header h1{
			color:white;
		}
        .header{
            font-family:poppins;
            display:flex;
            justify-content: space-between;
            align-items:center;
            padding:0px 60px;
            background-color: #0082e6;
            border:2px solid black;

        }
        .header button{
            background-color:#0082e6;
            font: size 16px;
            font-weight:550;
            padding:8px 12px;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId'] ?></h1>
    <form method="POST">
    <button name="logout">Log out</button>
    </form>
</div>
<?php
$user = 'root';
$password = '';

$database = 'login';
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$sql = " SELECT * FROM users ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>User Details</title>
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Users</h1>
		<table>
			<tr>
				<th>Username</th>
				<th>Address</th>
				<th>City</th>
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['city'];?></td>

			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
?>

</body>
</html>