<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<?php include_once('../config.php') ?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <div class="col-md-11">
                        <div class="card">
                            <div class="card-header ">
                                <h5>Halls</h5>
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Hall Name</th>
                                                <th scope="col">Provider</th>
                                                <th scope="col">Capacity</th>
                                                <th scope="col">Rent</th>
                                                <th scope="col">Advance</th>
                                                <th scope="col"></th>
                                            </tr>
                                            <?php
                                           $sql ="select * from hall";
                                           $result= mysqli_query($con,$sql);
                                           while ($row = mysqli_fetch_assoc($result))
                                            {
                                                $provide_id=$row['Provider_id'];
                                                $provide_sql="select * from providers where Provider_id = $provide_id";
                                                $provider_result=mysqli_query($con,$provide_sql);
                                                if($provide_row = mysqli_fetch_assoc($provider_result))
                                                {
                                                    $provide_name=$provide_row['Provider_name'];
                                                }
                                               ?>
                                            <tr>
                                                <td><?php echo $row['Hall_name'];?></td>
                                                <td><?php echo  $provide_name;?></td>
                                                <td><?php echo $row['Hall_capacity']; ?></td>
                                                <td><?php echo $row['Rent_with_ac']; ?> <span
                                                        class='badge badge-dark'>AC</span><br><?php echo $row['Rent_without_ac']; ?>
                                                    <span class='badge badge-dark'>Non-AC</span></td>
                                                <td><?php echo $row['Advanced']; ?></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col"></div>
                                                        <div class="col-auto">
                                                            <div class="btn-group " role="group"
                                                                aria-label="Basic example">
                                                                <a href="hall.php?edit=<?php echo $row['Hall_id'];?>"
                                                                    class=" btn btn-sm"
                                                                    style="background-color: #ffaa00 ;"><i
                                                                        class="far fa-edit" style="color: #ffffff;"></i>
                                                                </a>
                                                                <a href="?delete=<?php echo $row['Hall_id'];?>" class="btn btn-sm"
                                                                    style="background-color: #bf0502;"> <i
                                                                        class="far fa-trash-alt"
                                                                        style="color: #ffffff;"></i> </a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </thead>
                                    </table>
                                </div>


                            </div>
                            <div class="card-footer ">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>