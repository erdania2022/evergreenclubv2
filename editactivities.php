<?php
include "dbcon.php";
$activityid = $_GET["activity_id"];

if (isset($_POST["submit"])) {
  $activity_name = $_POST['activity_name'];
  $activity_date = $_POST['activity_date'];
  $no_participants = $_POST['no_participants'];
  $project_chief = $_POST['project_chief'];
  $contact_no = $_POST['contact_no'];

  $sql = "UPDATE `activities` SET `activity_name`='$activity_name',`activity_date`='$activity_date',`no_participants`='$no_participants',`project_chief`='$project_chief', `contact_no`='$contact_no' WHERE 'activity_id' = $activityid";

  $result = mysqli_query($con, $sql);

  if ($result) {
    header("Location: activities.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($con);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>EverGreen Club Upcoming Activities</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #148F77; color: #FDFEFE;" >
    <b>EverGreen Club Upcoming Activities Application</b>
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3><b>Edit Activity Information</b></h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `activities` WHERE activity_id = $activityid";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Activity Name:</label>
            <input type="text" class="form-control" name="activity_name" value="<?php echo $row['activity_name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Activity Date:</label>
            <input type="date" class="form-control" name="activity_date" value="<?php echo $row['activity_date'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">No of Participants</label>
          <input type="text" class="form-control" name="no_participants" value="<?php echo $row['no_participants'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Project Chief</label>
          <input type="text" class="form-control" name="project_chief" value="<?php echo $row['project_chief'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Contact No:</label>
          <input type="phone" class="form-control" name="contact_no" value="<?php echo $row['contact_no'] ?>">
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="activities.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>