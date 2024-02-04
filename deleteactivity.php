<?php
include "dbcon.php";
$activity_id = $_GET["activity_id"];
$sql = "DELETE FROM `activities` WHERE activity_id= $activity_id";
$result = mysqli_query($con, $sql);	

if ($result) {
  header("Location: activities.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}
