<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <span class="navbar-text">
    <a href="#">
      <i class="fa fa-bell" style="color: white;"></i>
      <span class="badge badge-pill  notification" style="background-color: #FF1493;">3</span>
    </a>&nbsp;&nbsp;&nbsp;
    <a href="#">
      <i class="fa fa-envelope"  style="color: white;"></i>
      <span class="badge badge-pill badge-success notification">7</span>
    </a>&nbsp;&nbsp;&nbsp;
    <a href="#">
      <i class="fa fa-user"  style="color: white;"> Profile</i>
      
    </a>&nbsp;&nbsp;&nbsp;
    <a href="../index.php">
      <i class="fa fa-power-off"  style="color: white;"> Logout</i>
    </a>
    </span>
  </div>
</nav>



<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
<nav id="sidebar" class="sidebar-wrapper">
  <div class="sidebar-content">
   
    <div class="sidebar-header">

      <div class="user-info">
        <div class="row">
          <div class="col-4"> <img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" width="100%" alt=""></div>
          <div class="col-8">
            <span class="user-name">Jhon
              <strong style="color: #FF1493;">Smith</strong>
            </span><br>
            <span class="user-role">Administrator</span><br>
            <span class="user-status">
              <i class="fa fa-circle"></i>
              <span>Online</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="sidebar-menu">
      <ul>
        <li class="header-menu">
          <span>General</span>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fas fa-university"></i>
            <span>Halls</span>

          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="hall.php">Add</a>
              </li>
              <li>
                <a href="halls.php">Manage</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fas fa-male"></i>
            <span>Customers</span>

          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="customer.php">Add</a>
              </li>
              <li>
                <a href="#">Manage</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fas fa-camera"></i>
            <span>Photographer</span>

          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="studio.php">Studio</a>
              </li>
              <li>
                <a href="#">Studio Manage</a>
              </li>

              <li>
                <a href="photographpackage.php">Photograh Package</a>
              </li>

              <li>
                <a href="#">Manage Package</a>
              </li>

            </ul>
          </div>
        </li>

        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fas fa-paint-brush"></i>
            <span>Beautician</span>

          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="#">Add</a>
              </li>
              <li>
                <a href="#">Manage</a>
              </li>
            </ul>
          </div>
        </li>


        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fas fa-bus"></i>
            <span>Vehicles</span>

          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="vehicle.php">Add</a>
              </li>
              <li>
                <a href="#">Manage</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fas fa-utensils"></i>
            <span>Foods</span>

          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="foodmenu.php">Add</a>
              </li>
              <li>
                <a href="#">Manage</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fas fa-users"></i>
            <span>Staffs</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="staff.php">Add</a>
              </li>
              <li>
                <a href="#">Manage</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="sidebar-dropdown">
          <a href="#">
          <i class="fa fa-address-card" aria-hidden="true"></i>
            <span>Providers</span>
          </a>
          <div class="sidebar-submenu">
            <ul>
              <li>
                <a href="provider.php">Add</a>
              </li>
              <li>
                <a href="#">Manage</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="header-menu">
          <span>Extra</span>
        </li>
       
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Calendar</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Examples</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- sidebar-menu  -->
  </div>
  <!-- sidebar-content  -->
  <div class="sidebar-footer">
    
  </div>
</nav>