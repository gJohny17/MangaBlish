<?php
session_start();
include 'DBController.php';
    if(isset($_SESSION['user_data'])){
        if($_SESSION['user_data']['usertype']!=1){
            header("Location:user_home.php");
        }
        $data=array();
        $sql = mysqli_query($con, "select * from users where usertype ='2'");
        while($row=mysqli_fetch_assoc($sql)){
            array_push($data,$row);
        }

include 'addAuthor.php';
include 'deleteAuthor.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Admin MangaBlish</title>
	  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	  <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
		
		 <link rel="stylesheet" href="../style.css">
  </head>

    <!-- Modal Add Author Start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="addCategory" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">Add Author</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form  method="POST">
                    <div class="modal-body">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Author Name</span>
                                <input type="text" name="name" placeholder="Full Name">                        
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="email" name="email" placeholder="Email">                        
                            </div>
                            <div class="input-box">
                                <span class="details">Username</span>
                                <input type="text" name="username" placeholder="Username">                        
                            </div>
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="password" name="password" placeholder="Password">                        
                            </div>
                            <div class="input-box">
                                <span class="details">Type</span>
                                <input type="text" name="usertype" placeholder="Type">                        
                            </div>
                        </div>           
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_author"class="btn btn-success">Add Author</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Modal Add Author End --> 


    <?php if(isset($_REQUEST['error'])){ ?>
          <div class="col-lg-12">
                <span class="alert alert-danger" style="display:block;"><?php echo $_REQUEST['error'] ?></span>
          </div>
          <?php } ?>

  <body>
      <div id="wrapper">
      <div class="overlay"></div>
            <!-- Sidebar -->
        <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
          <div class="simplebar-content" style="padding: 0px;"><a class="sidebar-brand" href="index.html"><span class="align-middle">MangaBlish</span></a>
            <ul class="navbar-nav align-self-stretch">
             <li class=""> 
              <a class="nav-link text-left active"  role="button" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bar-chart-1"></i>Dashboard</a>
            </li>      
            <li class="has-sub"> 
              <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse"><i class="flaticon-user"></i>Profile</a>
          <div class="collapse menu mega-dropdown" id="collapseExample2">
            <div class="dropmenu" aria-labelledby="navbarDropdown">
              <div class="container-fluid ">
                  <div class="row">
                    <div class="col-lg-12 px-2">
                      <div class="submenu-box"> 
                        <ul class="list-unstyled m-0">
                          <li><a href="">Something</a></li>                           
                          <li><a href="">Something</a></li>                           
                            <!-- <li><a href="">Asp.net</a></li> -->
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                </div>
            </div>
          </div>
          </li>
          <li class=""> 
          <a class="nav-link text-left" role="button"><i class="flaticon-bar-chart-1"></i>Settings</a></li>  
          <li class=""> 
          <a class="nav-link text-left"  role="button"><i class="flaticon-bar-chart-1"></i>Invoice</a></li>
          <li class=""><a class="nav-link text-left"  role="button" ><i class="flaticon-bar-chart-1"></i>Bank</a>
          </li>
          <li class="sidebar-header">Tools and component</li>              
          <li class=""><a class="nav-link text-left" role="button"><i class="flaticon-bar-chart-1"></i>Cool</a></li>
            <li class=""><a class="nav-link text-left"  role="button" ><i class="flaticon-bar-chart-1"></i>Something</a></li>
            <li class=""><a class="nav-link text-left"  role="button" ><i class="flaticon-bar-chart-1"></i>Table</a>
          </li>
            <li class="sidebar-header">Other tools and components</li>
            <li class=""><a class="nav-link text-left"  role="button"><i class="flaticon-bar-chart-1"></i>  chart 
            </a>
          </li>
          <li class=""> 
          <a class="nav-link text-left" role="button" ><i class="flaticon-map"></i>Map</a></li>   
          </ul>

          </div>
        </nav>

            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper"> 
              <div id="content">
            <div class="container-fluid p-0 px-lg-0 px-md-0">
              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light my-navbar">

                <!-- Sidebar Toggle (Topbar) -->
                  <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
            

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown  d-sm-none">
              
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3">
                      <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." >
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>
                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                      <img class="img-profile rounded-circle" src="../images/navlogo.png">
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid px-lg-4">
                <div class="row">
                  <div class="col-md-12 mt-lg-4 mt-4">
                      <!-- Page Heading -->
                          <!-- column -->
                          <div class="col-md-12 mt-4">
                              <div class="float-right">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                Add Authors
                                </button>
                              </div>                              
                              <div class="card">
                                  <div class="card-body">
                                    <div class="table-responsive">                                      
                                      <table style="width:100%;" id="filtertable" class="table cust-datatable dataDisplay no-footer">
                                          <thead>
                                              <tr class="tab-row">
                                                  <th>Author ID</th>                                        
                                                  <th>Author Name</th>                                        
                                                  <th>Author Email</th> 
                                                  <th>Author Username</th>               
                                                  <th>Delete Author</th>                                        
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                              $i=1; 
                                                foreach ($data as $d){
                                              ?>  
                                              <tr class="tab-row">
                                                <td class="td-data"><?php echo $i++; ?></td>
                                                <td class="td-data"><?php echo $d['name']; ?></td>
                                                <td class="td-data"><?php echo $d['email']; ?></td>
                                                <td class="td-data"><?php echo $d['username']; ?></td>
                                                <td class="td-data text-center"><a href="deleteAuthor.php?delete_id=<?php echo $d['user_id'];?>" class="trash"><span class="fas fa-trash"></span></a></td>
                                              </tr> 
                                              <?php } ?>                
                                          </tbody>
                                      </table>
                                  </div>   
                                  </div>
                              </div>
                          </div>
                        </div>
              </div>
              <!-- /.container-fluid -->
              </div>
              <footer class="footer">
                <div class="container-fluid">
                  <div class="row text-muted">
                    <div class="col-6 text-left">
                      <p class="mb-0">
                        <a href="index.html" class="text-muted"><strong>MangaBlish </strong></a> &copy
                      </p>
                    </div>
                    <div class="col-6 text-right">
                      <ul class="list-inline">
                        <li class="footer-item">
                          <a class="text-muted" href="#">Support</a>
                        </li>
                        <li class="footer-item">
                          <a class="text-muted" href="#">Help Center</a>
                        </li>
                        <li class="footer-item">
                          <a class="text-muted" href="#">Privacy</a>
                        </li>
                        <li class="footer-item">
                          <a class="text-muted" href="#">Terms</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </footer>
            </div>
            </div>
            <!-- /#page-content-wrapper -->
            </div>
    <!-- /#wrapper -->
  
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  

  <script src="../js/index.js"></script>
    
  
 <script>
 
$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>

   
   
 
  
  
  </body>
</html>

<?php
    }
    else
        {
                "Location:index.php?error=Unauthorized Access";
        }
?>