<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<?php include_once('../config.php') ?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <?php
        include_once('menu.php')
        ?>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <!-- /page-content" -->

                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header ">
                                <h5>Add New Hall</h5>
                            </div>
                            <div class="card-body ">


                                <!-- database insert  -->
                                <?php
                                if (isset($_POST['submit'])) {
                                    $provider = $_POST['provider'];
                                    $hallname = $_POST['hallname'];
                                    $capacity = $_POST['capacity'];
                                    $rentac = $_POST['rentac'];
                                    $rentnonac = $_POST['rentnonac'];
                                    $advanced = $_POST['advanced'];

                                    $sql = "insert into hall(Provider_id,Hall_name,Hall_capacity,Rent_with_ac,Rent_without_ac,Advanced) values ($provider,'$hallname',$capacity,$rentac,$rentnonac,$advanced)";
                                    if (mysqli_query($con, $sql)) {
                                ?>
                                        <div class="alert alert-success" role="alert">
                                            Insert sucessfully!
                                            <?php echo "<meta http-equiv='refresh' content='0.6'>"; ?>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <!-- /database insert  -->

                                <form action="" method="POST">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label> <b> Provider
                                                    </b></label></div>
                                            <div class="col-md-9 ">
                                                <select name="provider" id="" class="form-control">
                                                    <option value="" selected disabled>Select provider</option>
                                                    <?php
                                                    $sql = 'SELECT * FROM `providers`';
                                                    $result = mysqli_query($con, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                            <option value="<?php echo $row['Provider_id']; ?>" style="text-transform: capitalize;">
                                                                <?php echo $row['Provider_name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label> <b>Hall Name
                                                    </b></label></div>
                                            <div class="col-md-9 "> <input type="text" name="hallname" class="form-control" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;">
                                                <label><b>Capacity</b></label>
                                            </div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="capacity" required></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Rent With
                                                        AC</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="rentac" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Rent With Non
                                                        AC</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="rentnonac" required></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label><b>Advanced
                                                        Amount</b></label></div>
                                            <div class="col-md-9"><input type="number" class="form-control" name="advanced" required></div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-auto"><input type="Reset" value="Reset" class="btn btn-primary">
                                        <input type="submit" value="Add hall" name="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ./page-content" -->
    </div>
    </main>

    </div>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>