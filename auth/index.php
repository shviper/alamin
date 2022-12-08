<?php
session_start();
include("../conn.php");

if (isset($_SESSION["login"])) {
  header('Location: ../dashboard/');
}else {
    if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'"; 

   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   
   if($count == 1){
     echo 
  '<div class="alert alert-success" role="alert">
    Login successful ! <a href="../index.php" class="alert-link">go to Dashboard</a>.
  </div>';
  $_SESSION["who"] = $row['role'];
  $_SESSION["id"] = $row['id'];
  $_SESSION["fname"] = $row['fname'];
  $_SESSION["login"] = true;
  header("Location: ../dashboard/");
   }else{
       echo 
  ' <div class="alert alert-danger" role="alert">
    Login Fail ! Enter valid password or Email</a>.
  </div>';
   } 

}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">LogIn</h3>
        <form action="./index.php" method="POST">
              <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="password"  class="form-control form-control-lg" />
              <label class="form-label" for="typepasswordX-2">password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" /> 
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>
          <hr class="my-4">
            <input class="btn btn-primary btn-lg btn-block" type="submit" value='Login' name="submit"/>
    </form>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>