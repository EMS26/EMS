<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Login</title>

    <style>
        /* For device width smaller than 400px: */
        body {
            background: url(assets/img/background.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }

        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
            margin-top: 80px;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card  mb-3" style="max-width: 30rem; background-color: rgba(0, 0, 0, 0.800); color: white;">
                    <div class="card-header" style="text-align: center;">
                        <h5>Login Form</h5>
                    </div>
                    <div class="card-body ">
                        <form action="" method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12"> <label><b>Username</b></label></div>
                                    <div class="col-md-12"><input type="text" class="form-control" name="username" required></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12"> <label><b>Password </b></label></div>
                                    <div class="col-md-12">
                                        <input type="password" id="inputPassword5" class="form-control" required>
                                       
                                    </div>
                                    <div class="col-md-12" style="text-align: right;"><a href="">Forgot password?</a></div>
                                </div>
                            </div>

                            <input type="checkbox" name="" id=""> Remember me?<br>

                       
                    </div>
                    <div class="card-footer ">
                        <a href="admin/index.php" class="btn btn-success" style="width: 100%;">Sign in</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>