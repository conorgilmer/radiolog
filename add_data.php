<?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['btn-save']))
{
	$wdate   = $_POST['wdate'];
	$freq    = $_POST['freq'];
	$name    = $_POST['name'];
	$band    = $_POST['band'];
	$type    = $_POST['type'];
	$tx      = $_POST['tx'];
	$country = $_POST['country'];
	$rep     = $_POST['rep'];
	$rec     = $_POST['rec'];
	$aerial  = $_POST['aerial'];
	$sinpo   = $_POST['sinpo'];
	$remarks = $_POST['remarks'];
	
 	$res=$con->insertLog($wdate, $freq, $name, $band, $type, $tx, $country, $rep, $rec, $aerial, $sinpo, $remarks);
	if($res)
	{
		?>
		<script>
		alert('Log Record inserted...');
        window.location='index.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error inserting record...');
        window.location='index.php'
        </script>
		<?php
	}
}
// data insert code ends here.

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log Book</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<?php include('header.php');?>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
  <tr>
    <th><a href="add_data.php">Add Log</a></th>
    <th><a href="index.php">List Logs</a></th>
    <th><a href="bands.php">List Bands</a></th>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="wdate" placeholder="Date" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="freq" placeholder="Frequency" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="name" placeholder="Name" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="band" placeholder="Band" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="type" placeholder="Type" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="tx" placeholder="Transmitter" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="country" placeholder="Country" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="rep" placeholder="Report" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="rec" placeholder="Receiver" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="aerial" placeholder="Aerial" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="sinpo" placeholder="SINPO" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="remarks" placeholder="Remarks" required /></td>
    </tr>
    <tr>
    <td colspan="3">

    <button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

<?php include('footer.php');?>
