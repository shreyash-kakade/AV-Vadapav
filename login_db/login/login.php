<?php
$setGreen = false;
$setRed = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include("./partials/_dbConnect.php");
  $username = $_POST["userName"];
  $password = $_POST["password"];
  $sql = "SELECT * from users where username = '$username' AND password = '$password';";
  $result = mysqli_query($conn, $sql);
  $_SESSION['loggedIn'] = false;
  $_SESSION['username'] = "Unknown";
  if (mysqli_fetch_row($result) > 0) {
    $setGreen = true;
    session_start();
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $username;
    header('Location:./welcome.php'); // Send to welcome.php if Session starts
  } else {
    $setRed = true;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log-In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  require("./partials/_nav.php");
  if ($setGreen) {
    echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS!</strong> Logged-In successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
  }
  if ($setRed) {
    echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong> Invalid Password or Username.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
  }
  ?>
  <form class="m-5 p-5" action="./login.php" method="post">
    <div class="mb-3">
      <label for="exampleInputText" class="form-label">Name</label>
      <input type="text" class="form-control" name="userName" id="userName">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>