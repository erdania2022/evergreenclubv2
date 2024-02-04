<?php
include "dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverGreen Club Members</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FDFEFE;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #148F77;
            color: #fff;
            padding: 1em;
        }

        nav {
            background-color: #73C6B6;
            color: #fff;
            padding: 1em;
            display: flex;
            justify-content: space-around;
            font-size: 1.2em;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        nav a.active {
            background-color: #BB8FCE;
        }

        main {
            padding: 2em;
        }

        .post {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 1em;
            margin-bottom: 1em;
            text-align: left;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 2em;
        }

        .gallery img {
            border-radius: 8px;
            margin: 0.5em;
            max-width: 100%;
            height: auto;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>EverGreen Club Members Information</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #148F77;">
    <b>EverGreen Club Membership Information</b>
  </nav>
   <nav>
        <a href="home.php">Dashboard</a>
        <a href="blogpost.php">Posts</a>
        <a href="members.php" class="active">Members</a>
         <a href="activities.php">Upcoming Activities</a>
    </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
	<br>
	<p align="center"><h3 align="center">Membership form for EverGreen Club</h3></p>
    <a href="add_member.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Contact No</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
	 
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td><?php echo $row["contact_no"] ?></td>
            <td>
              <a href="editmembers.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="deletemembers.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>