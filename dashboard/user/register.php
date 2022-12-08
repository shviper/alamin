<?php
session_start();
 include("../../conn.php");
 $who = $_SESSION["who"];
 if (!(isset($_SESSION["login"]) && $who == 1)) {
  header('Location: ../../auth');
}else {
  if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pnumber = $_POST['pnumber'];
    $role = $_POST['role'];

$sql = "INSERT INTO user (id, fname, lname, email, password, pnumber, role) 
              VALUES (NULL, '$fname','$lname','$email','$password','$pnumber','$role')";

if (mysqli_query($conn, $sql)) {
  echo 
  '<div class="alert alert-success" role="alert">
  User Added successful ! <a href="../index.php" class="alert-link">go to Dashboard</a>.
</div>';
}else {
    echo 
  '<div class="alert alert-danger" role="alert">
  User Added Fail ! <a href="../index.php" class="alert-link">go to Dashboard</a>.
</div>';
}
}
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div
              class="card shadow-2-strong card-registration"
              style="border-radius: 15px"
            >
              <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">User Add Form</h3>
                <form action="./register.php" method="POST">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input
                          type="text"
                          id="firstName"
                          class="form-control form-control-lg"
                          name="fname"
                        />
                        <label class="form-label" for="firstName"
                          >First Name</label
                        >
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input
                          type="text"
                          id="lastName"
                          name="lname"
                          class="form-control form-control-lg"
                        />
                        <label class="form-label" for="lastName"
                          >Last Name</label
                        >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">
                      <div class="form-outline datepicker w-100">
                        <input
                          type="email"
                          class="form-control form-control-lg"
                          id="birthdayDate"
                          name="email"
                        />
                        <label for="birthdayDate" class="form-label"
                          >Email</label
                        >
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 d-flex align-items-center">
                      <div class="form-outline datepicker w-100">
                        <input
                          type="password"
                          class="form-control form-control-lg"
                          id="password"
                          name="password"
                        />
                        <label for="birthdayDate" class="form-label"
                          >Password</label
                        >
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input
                          type="tel"
                          id="phoneNumber"
                          class="form-control form-control-lg"
                          name="pnumber"
                        />
                        <label class="form-label" for="phoneNumber"
                          >Phone Number</label
                        >
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div >
                        <select class="select form-control-lg col-md-6 mb-4 pb-2" name="role">
                          <option value="0" selected>User</option>
                          <option value="1">Admin</option>
                          
                        </select>
                        <label class="form-label select-label"
                          >Choose Power</label
                        >
                      </div>
                    </div>
                    
                  </div>

                  <div class="mt-4 pt-2">
                    <input
                      class="btn btn-primary btn-lg"
                      type="submit"
                      name="submit"
                      value="Add User"
                    />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
