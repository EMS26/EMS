<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html lang="en">

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
                                <h5>Add Food menu</h5>
                            </div>
                            <div class="card-body ">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label > <b> Hall Name </b></label></div>
                                            <div class="col-md-9 "> <input type="text" name="name" class="form-control" required></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                      
                                        <div class="col-md-3" style="text-align: right;" > <label><b> Rate</b></label></div>
                                        <div class="col-md-9"><input type="rate" class="form-control" name="rate"></div>
                                       
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3" style="text-align: right;"> <label ><b>Image</b></label></div>
                                            <div class="col-md-9"> <input type="submit" value="Upload Image" name="submit"></div>
                                            
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3"  style="text-align: right;"><label><b>Food Time</b></label></div>
                                            <div class="col-md-9">
                                                <select name="foodtime" id="" class="form-control" required>
                                                    <option value="" selected disabled>--select--</option>
                                                    <option value="car">Breakfast</option>
                                                    <option value="bus">Lunch</option>
                                                    <option value="van">Dinner</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3"  style="text-align: right;"><label><b>Food Type</b></label></div>
                                            <div class="col-md-9">
                                                <select name="foodtype" id="" class="form-control" required>
                                                    <option value="" selected disabled>--select--</option>
                                                    <option value="car">Veg</option>
                                                    <option value="bus">Non Veg</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                             </div>
                          
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-auto"><input type="Reset" value="Reset" class="btn btn-primary"> 
                                    <input type="submit" name-="save" value="Add FoodMenu" class="btn btn-success">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>