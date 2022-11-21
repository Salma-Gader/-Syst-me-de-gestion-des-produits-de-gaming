<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>sing up</title>
</head>

<body>
    <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="container">
            <div class="col-md-10 bg-white border mx-auto shadow">
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-5 text-center">
                            <h3>Sign up</h3>
                        </div>
                        <div>
                            <form class="m-5" method="post" action="#">
                                <div class="mb-3">
                                    <label for="username" class="form-label">User Name</label>
                                    <input type="text" id="username" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control" name="email">
                                </div>
                                <div>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password">
                                </div>
                                <div class="btn_div">
                                    <input type="submit" name="submit"
                                        class="btn_singin border-0 form-control btn btn-danger mt-3" value="Sign up">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="div_part2 col-md-6 d-flex flex-column justify-content-center align-items-center ">
                        <div class="m-5 text-center text-white">
                            <h1 class="fw-bold">Welcome to sign up</h1>
                        </div>
                        <div class="text-white">
                            <h5> you have account ?</h5>
                        </div>
                        <div class="mt-5">
                            <a class=" btn-singup btn btn btn-outline-dark text-white" href='signin.php'>Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
include('database.php');
include('helpers.php');

if (isset($_POST['name'], $_POST['email'], $_POST['password'])){ //checked if request have this paramettres type POST

    $name = checkInput($_POST['name']);
    $email = checkInput($_POST['email']);
    $password = checkInput($_POST['password']);
    //validation value of inputs 
    if($name === "" || $name === null){
        echo('Please Enter Name');
    }else if ($email === "" || $email === null) {
        echo('Please Enter email');
    }else if ($password === "" || $password === null){
        echo('Please Enter password');  
    }
    else {
        $hash = sha1($password);
        $checkEmail = mysqli_query($conn,"SELECT * FROM `users` WHERE email ='$email' "); 
        if(mysqli_num_rows($checkEmail)>0){
           echo("this email already exist");
            
        }else{
            $query = "INSERT INTO `users`VALUES (null,'$name','$email','$hash')";
            $result= mysqli_query($conn,$query);
            if($result){
                echo('success');
            }else die("error");
        }
     }
 }
?>
