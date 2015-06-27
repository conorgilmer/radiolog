<?php
include('config.php');

class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }
 
 public function insertLog($date, $freq, $name, $band, $type, $tx, $country, $rep, $rec, $aerial, $sinpo, $remarks)
 {
  $res = mysql_query("INSERT radiolog(id, date, frequency, name, band, type,transmitter, country, report, receiver, aerial, sinpo, remarks,times) VALUES('','$date','$freq','$name','$band', '$type',  '$tx', '$country', '$rep', '$rec', '$aerial', '$sinpo', '$remarks', '$type',now())");
  return $res;
 }
 
 public function select($table)
 {
  $res=mysql_query("SELECT * FROM $table");
  return $res;
 }

 public function delete($table,$id)
 {
  $res = mysql_query("DELETE FROM $table WHERE id=".$id);
  return $res;
 }
 
 public function update($table,$id,$low,$high,$wdate,$comment)
 {
  $res = mysql_query("UPDATE $table SET low='$low', high='$high', date='$wdate', comment='$comment' WHERE id=".$id);
  return $res;
 }

}

?>
