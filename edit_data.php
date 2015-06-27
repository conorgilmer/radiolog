<?php
include_once 'dbMySql.php';
$con = new DB_con();
$table = "radiolog";

// data insert code starts here.
if(isset($_GET['edit_id']))
{
$sql=mysql_query("SELECT * FROM $table WHERE id=".$_GET['edit_id']);
 $result=mysql_fetch_array($sql);
}


// data update code starts here.
if(isset($_POST['btn-update']))
{
	$id      = $_GET['edit_id'];
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

    $res=$con->update($table,$id,$wdate, $freq, $name, $band, $type, $tx, $country, $rep, $rec, $aerial, $sinpo, $remarks);
    

	
//	$res=$con->update($table,$id,$low,$high,$wdate,$comment);
	if($res)
	{
		?>
		<script>
		alert('Record updated...');
        window.location='index.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error updating record...');
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
<title>Radio Log Book</title>
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
    <td colspan="3"><input type="text" name="wdate" placeholder="Date" value="<?php echo $result['date'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="freq" placeholder="Frequency" value="<?php echo $result['frequency'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="name" placeholder="Name" value="<?php echo $result['name'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="band" placeholder="Band" value="<?php echo $result['band'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="type" placeholder="Type" value="<?php echo $result['type'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="tx" placeholder="Transmitter" value="<?php echo $result['transmitter'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="country" placeholder="Country" value="<?php echo $result['country'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="rep" placeholder="Report" value="<?php echo $result['report'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="rec" placeholder="Receiver" value="<?php echo $result['receiver'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="aerial" placeholder="Aerial" value="<?php echo $result['aerial'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="sinpo" placeholder="SINPO" value="<?php echo $result['sinpo'];?>" required /></td>
    </tr>
    <tr>
    <td colspan="3"><input type="text" name="remarks" placeholder="Remarks" value="<?php echo $result['remarks'];?>" required /></td>
    </tr>



    <td colspan="3">

    <button type="submit" name="btn-update"><strong>UPDATE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

<?php include('footer.php');?>
