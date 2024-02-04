<?php
include "dbcon.php";
$id = $_GET["id"];
$sql = "DELETE FROM `members` WHERE id= $id";
$result = mysqli_query($con, $sql);	

if ($result) {
  header("Location: members.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}
