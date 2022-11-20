<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>login</title>
</head>

<body>
    <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="container">
            <div class="col-md-10 bg-white border mx-auto shadow">
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-5 text-center">
                            <h3>Sign in</h3>
                        </div>
                        
                        <div>
                            <form class="m-5"  method="post" name="signin">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email">
                                </div>
                                <div>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password">
                                </div>
                                <div class="btn_div">
                                    <input type="submit" class="btn_singin form-control btn mt-3" value="Sign in" >
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="div_part2 col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="m-5 text-center text-white">
                            <h1 class="fw-bold">Welcome to login</h1>
                        </div>
                        <div class="text-white">
                            <h5> Dont have account ?</h5>
                        </div>
                        <div class="mt-5">
                            <a class=" btn-singup btn btn btn-outline-dark text-white" href='signup.php'>Sign up</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include('database.php');
include('helpers.php');
// session_start();
if (isset($_POST['email'],$_POST['password'])){
    
    $email = checkInput($_POST['email']);
    $password = checkInput($_POST['password']);
    $hash = sha1($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$hash'";
    $result = mysqli_query($conn,$query);
    $row_cnt = mysqli_num_rows($result);
    if($row_cnt){
        // $_SESSION['name'] = $name;
         header("Location: dashboard.php");
    }else{
       echo( "Le nom d'utilisateur ou le mot de passe est incorrect.");
      }
}

?>
</body>

</html>