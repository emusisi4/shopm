<!DOCTYPE html>
<?php $utypppp = Auth::user()->ucoz; ?>
<?php 
if($utypppp == '9005') {?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>EllaPos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  
    
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
     <!-- Select2 -->
     <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="css/sree-code.css" rel="stylesheet" />
    <link href="css/BetHapa-main.css" rel="stylesheet" />
    <link href="css/Betslip-printstyles.css" rel="stylesheet" />
    <link href="css/Betslip.css" rel="stylesheet" />
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>

<style>
.body 
{
    background-image: url("images/pattern.png");
}
</style>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/logo.png" alt="EllaPos" class="brand-image  elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> MANAGER </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">  {{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
          <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
               
              </p>
            </a>
</router-link>
<?php $useridtousess = Auth::user()->id;
/// geting the users role
$myuserroledefined = DB::table('users')->where('id', $useridtousess)->value('mmaderole'); ?>
 


<?php 
/// selecting the allowed menues
$allowedmain  = DB::table('rolenaccmains')->where('roleto', $myuserroledefined)->get();
foreach ($allowedmain as $rowall)
{
     $component = ($rowall->component);

     $mainheaderssd = DB::table('mainmenucomponents')->where('id', $component)->get();

     foreach ($mainheaderssd as $myheaders)
     {
         $hname = ($myheaders->mainmenuname);
     
         $mainmenuno = ($myheaders->id);
         $classtoicon = ($myheaders->iconclass);
     /////

    //$shid = ($rowsubmenuesselection->shid);
    //$routelinkdd = ($rowsubmenuesselection->linkrouterre);


?>
 <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="<?php echo $classtoicon; ?>"></i>
      <p>
        <?php echo $hname; ?>
        <i class="fas fa-angle-left right"></i>
      
      </p>
    </a>




       
    <ul class="nav nav-treeview">
   
   <?php 
   //// woorking on the sub menues
   /// getting the logged in user role
   $lirole = Auth::user()->type;
   $allowedsubmenu  = DB::table('rolenaccsumbmens')->where('mainheader', $mainmenuno)->where('roleto', $myuserroledefined)->get();
foreach ($allowedsubmenu as $rowallsub)
{
     $componentvvvvbbb = ($rowallsub->component);
 $submenuesselection = DB::table('submheaders')->where('id',  $componentvvvvbbb)->orderBy('dorder', 'Asc')->get();
 foreach ($submenuesselection as $rowsubmenuesselection)
 {
     $submname = ($rowsubmenuesselection->submenuname);
 
     $shid = ($rowsubmenuesselection->shid);
     $routelinkdd = ($rowsubmenuesselection->linkrouterre);
 
  
  ?>
  
   <li class="nav-item">
   <router-link to="<?php echo $routelinkdd; ?>" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p><?php echo $submname; ?></p>
          </router-link>
        </li>
        <?php } //// ?>
  <?php } //// Closing the start of access submenu loop ?>
       
       
  
  </ul>
  
























     <?php }//// closing the loop foe menu name
    
    }/// closing the main menu access loop
    ?>
        



          <li class="nav-item">
           
           <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
<i class="nav-icon fa fa-power-off red"></i>
<p>

            {{ __('Logout') }}
          </p>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>


         </li>

         @can('isSuperadmin')
          <li class="nav-item">
          <router-link to="/developer" class="nav-link">
           
              <i class="nav-icon fas fa-cogs"></i>
              <p>Developer </p>
              </router-link>
          </li>
        @endcan
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <form class="form-inline ml-3" > -->
          <div class="form-group">
       <input type="search" hidden="" class="form-control" @keyup.enter="searchit" v-model="search" placeholder="Search">
     <button class="btn btn-navbar" hidden="" @click="searchit" > <i class="fa fa-search"></i> 
     </button>
  </div>
                       <!-- </form>   -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
        <!-- summary bars -->
        
       <!-- ./summary bars -->


       <my-container :user="{{ Auth::user() }}"></my-container>
       <vue-progress-bar></vue-progress-bar>


      </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="https://lemanager.co">Ellatech.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="dist/js/axios.min.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="/js/app.js"></script>

<!-- AdminLTE for demo purposes -->

</body>
</html>
<?php  } /// cllosind the admin?>
<?php 
if($utypppp == '9008') {?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />

<link href="css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/all.min.css">



    <!-- Custom styles -->
    <link href="css/sree-code.css" rel="stylesheet" />
    <link href="css/BetHapa-main.css" rel="stylesheet" />
    <link href="css/Betslip-printstyles.css" rel="stylesheet" />
    <link href="css/Betslip.css" rel="stylesheet" />





    <title>BetHAPA</title>

  </head>
  <body>
    
<div class="container-fluid top-stripe-bg">
          <div class="row">
              <div class="top-stripe-child col-sm-6 col-lg-8 bg-primary"> 
                    <div class="row top-stripe mx-1 my-2">
                       <div class="col company-logo">
                            <img src="images/logo.png">
                         </div>
                    </div>
              </div>

              <div class="top-stripe-child col-sm-6 col-lg-4 bg-secondary"> 
                  <div class="row top-stripe top-stripe2 mx-1 my-auto">
                       
                     
                        
                         
                
                </div>
                  
                
                
                
                </div>
             



          </div> 
      </div>


      <!------- TOp Navigation Bar -->
      <div class="wrapper" id="app">





      <div class="container-fluid sports-nav bg-secondary">
          <div class="row"> 
              <div class=" col-lg-8 pl-4">
                  <div class="col-8 mx-auto"> 
                    <ul class="nav">
                            <li class="nav-item">
                            <router-link to="/home" class="nav-link active">
                              SPORTS</router-link>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">LIVE <sup> <span class="badge badge-light notif-badge">14</span> </sup> </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">RESULTS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">VIRTUAL</a>
                            </li>
                          </ul>

                        </div>
                        </div>    
              <div class=" col-lg-4"> <div class="fixture-btn">DOWNLOAD FIXTURE</div> </div>      




          </div>


      </div>


      <!--- End of top Navigation ---->
      <div class="container-fluid"> 
    <div class="row">
        <div class="col-md-2 px-0"> 

                <div class="position-absolute ml-0 bg-left"> <img src="images/bg-l.png"> </div>
                <div class="position-absolute mr-0 bg-right"> <img src="images/bg-r.png"> </div>

            <div class="search-box"> 
               
                    <div class="row no-gutters m-2">
                    <input class="search-input" type="text" placeholder="Search for Matches.." name="search">
                    <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
                </div>
                

 <!-- TOP LEAGUES -->  
 <?php 
 // checking the existance of top leage
 $nooftpleage = DB::table('btleagues')->where('topl', 1)->where('sysstatus', 1) ->count();
 if($nooftpleage > 0)
 {
   ?>
 <div class="top-leagues-title container-fluid">TOP LEAGUES </div> 
   <ul class="top-league-links">
   <?php
 $tpleague = DB::table('btleagues')->where('topl', 1)->where('sysstatus', 1)->orderby('displayorder', 'Asc')->get();

foreach ($tpleague as $tpl)
{
    $tplname = ($tpl->name);

  //  $syscountryid = ($countryin8877->sysid);
  //  $contryfeedid = ($countryin8877->feedid);
   

?>
        <li><a href="#"> <i class="fas fa-futbol league-icon"></i> <?php echo $tplname ?></a></li>
    
<?php } ?>
       
</ul> 

<?php } // closing the check for the top leagues?>




 <!-- SIDE ACCORDION -->    
 

<div class="top-leagues-title container-fluid">ALL SPORTS </div> 
  <div class="side-sports-nav sports-sidebar" role="navigation">


  

     
    <ul class="nav__list">
    <?php 
/// selecting the active sports
        $ensports = DB::table('btsports')->where('status', 1)->get();

        foreach ($ensports as $ensports34)
        {
            $sportname = ($ensports34->name);

            $syssportid = ($ensports34->sysid);
            $feedsportid = ($ensports34->feedid);
           
       
        ?>
      <li>
    
        <input id="group-1" type="checkbox" hidden />
        <label for="group-1"><span class="fa fa-angle-right"></span> <i class="fas fa-futbol league-icon"></i> <?php echo strtoupper($sportname); ?> </label>
        <ul class="group-list">
        
        <?php 
/// selecting the active countries and sports
        $countryin = DB::table('btcountries')->where('status', 1)->get();

        foreach ($countryin as $countryin8877)
        {
            $countryname = ($countryin8877->name);

            $syscountryid = ($countryin8877->sysid);
            $contryfeedid = ($countryin8877->feedid);
           
       
        ?>
          <li>
            <input id="sub-group-1" type="checkbox" hidden />
            <label for="sub-group-1"><span class="fa fa-angle-right"></span> <?php echo strtoupper($countryname);?></label>
            <ul class="sub-group-list">




            <?php 
    /// selecting the active countries and sports
    $contleg = DB::table('btcountryandleagues')->where('feedcountry', $contryfeedid)->where('status',1)->get();

    foreach ($contleg as $legcouun)
     {
         $leaguename = ($legcouun->leaguename);

        // $syssportid = ($ensports34->sysid);
        // $feedsportid = ($ensports34->feedid);
           $tre = '1';
       
        ?>
        
              <li><a href="#"> <input id="group-<?php echo $tre; ?>" class="league-check" type="checkbox"/> <?php echo $leaguename; ?></a></li>
            
              
                 <?php } // closing the leagues ?>

            </ul>
          </li>
          <?php } // closing the countries and their leagues ?>
        
        </ul>
      
      </li>
      <?php } // closing the sports?>

        
    
     
    </ul>
 
</div>

</div>

 <div class="col-md-7 px-1 mx-0 bg-secondary">   
              
  <!-- MAIN PAGE SLIDE SHOW -->
  
        
            
<!-- LIVE EVENTS TABLE -->


<my-container :user="{{ Auth::user() }}"></my-container>
     <vue-progress-bar></vue-progress-bar>
          
            
            
            </div>
  <!-- Right Side bar --->

  <div class="col-md-3 px-1 right-side-bar"> 
              <div class="bet-section">
                <div class="card bet-check mx-0 px-0">
                    <div class="card-header bet-check-header">
                      CHECK YOUR BET
                    </div>

                    <div class="card-body bet-check-body">
                    <input type="" class="right-inputs" placeholder="ENTER SLIP CODE">
                    <button type="submit" class="right-submit"> CHECK </button>

                    </div>

                    <div class="card bet-check bet-slip">
                        <div class="card-header bet-check-header">
                          BET SLIP
                        </div>
    
                        <div class="card-body bet-check-body">
                            <div class="bet-inst"> 
                              Click on any Odds to add Bets to <br> Your BetSlip. <br> <span class="betslip-or">OR </span> <br> Enter Booking Code to Load Your Ticket.
                          

                            </div>



                        <input type="" class="right-inputs" placeholder="ENTER BOOKING CODE">
                        <button type="submit" class="right-submit"> LOAD </button>
    
                        </div>

                        <div class="card-header bet-check-header">
                            FAST BET
                          </div>
      
                          <div class="card-body bet-check-body">
                          <input type="" class="right-inputs" placeholder="ENTER MATCH ID">
                          <button type="submit" class="right-submit"> GO </button>
      
                          </div>



                  </div>  
 <!-- POPULATED BETSLIP -->
 
 <div class="card bet-check bet-slip">
    <div class="card-header bet-check-header">
      BET SLIP
    </div>

    <div class="populated-slip-main">
     
        <div class="populated-slip">     

            <div id="slip-page">
        
                <div id="top" class="cuts"> 
                    <div id="logo" class="cuts"> <img src="images/nsb-logo.png"> </div>
                    <div id="website" class="cuts"> <div> <p>BET ONLINE:  </p> <p>NetBet.ug     </p>   </div> </div>
                </div>
        
                <div id="info" class="cuts"> 
                    <table id="top-info">
                        <tbody>
        
                                <tr>
                                        <td colspan="1"><p>CALL: </p> <p> 0782947474 </p></td>
                                        <td colspan="2"> <p> Email: </p> <p> support@netbet.ug  </p></td>
                                       
                                 </tr>
        
                            
                                        <tr class="branch">
                                                <td colspan="3"><p>BRANCH: </p> <p> KIREKA </p></td>
                                         </tr>
        
                                         <tr class="branch">
                                                <td colspan="3"><p>CASHIER:</p> <p> NALUWU PHIONA </p></td>
                                         </tr>
        
                                         <tr class="branch">
                                                <td colspan="3"><p>DATE:</p> <p> 12 MAY 2019 10:22 </p></td>
                                         </tr>
        
                               
        
        
                                 <tr>
                                        <td colspan="1"><p>Order No: </p> <p> 234223 </p></td>
                                        <td colspan="2"> <p> Serial No: </p> <p> 34242424243424 </p></td>
                                       
                                 </tr>
        
        
                        </tbody>
        
                    </table>
                </div>
                <div id="selections" class="cuts">
        
                    <table class="tselections">
                    
                        <tr class="single">
                                <td rowspan="2" class="game-number">13930</td>
                                <td>African Cup of Nations</td> 
                                  
                        
                        </tr>
                        <tr>
                                <td>Arsenal FC Vs Chelsea FC</td>  
                        </tr>
        
                        <tr>
                                <td rowspan="2" class="selection-div" > <div class="selection-number"> 1</div></td>
                                <td  >20/10/2019 20:30</td>
                             
                        </tr>
        
                        <tr>
                                <td> <div class="markets">FT 1x2: 2</div><div class="markets odds"> 2.32</div></td>
                        </tr>
                    </table>
        
                    <table class="tselections">
                    
                            <tr class="single">
                                    <td rowspan="2" class="game-number">13930</td>
                                    <td>African Cup of Nations</td> 
                                      
                            
                            </tr>
                            <tr>
                                    <td>Arsenal FC Vs Chelsea FC</td>  
                            </tr>
            
                            <tr>
                                    <td rowspan="2" class="selection-div" > <div class="selection-number"> 2 </div></td>
                                    <td  >20/10/2019 20:30</td>
                                 
                            </tr>
            
                            <tr>
                                    <td> <div class="markets">FT 1x2: 2</div><div class="markets odds"> 2.32</div></td>
                            </tr>
                        </table>
        
                        
                        <table class="tselections">
                    
                                <tr class="single">
                                        <td rowspan="2" class="game-number">13930</td>
                                        <td>African Cup of Nations</td> 
                                          
                                
                                </tr>
                                <tr>
                                        <td>Arsenal FC Vs Chelsea FC</td>  
                                </tr>
                
                                <tr>
                                        <td rowspan="2" class="selection-div" > <div class="selection-number"> 3 </div></td>
                                        <td  >20/10/2019 20:30</td>
                                     
                                </tr>
                
                                <tr>
                                        <td> <div class="markets">FT 1x2: 2</div><div class="markets odds"> 2.32</div></td>
                                </tr>
                            </table>
        
                            
                            <table class="tselections">
                    
                                    <tr class="single">
                                            <td rowspan="2" class="game-number">13930</td>
                                            <td>African Cup of Nations</td> 
                                              
                                    
                                    </tr>
                                    <tr>
                                            <td>Arsenal FC Vs Chelsea FC</td>  
                                    </tr>
                    
                                    <tr>
                                            <td rowspan="2" class="selection-div" > <div class="selection-number"> 4 </div></td>
                                            <td  >20/10/2019 20:30</td>
                                         
                                    </tr>
                    
                                    <tr>
                                            <td> <div class="markets">FT 1x2: 2</div><div class="markets odds"> 2.32</div></td>
                                    </tr>
                                </table>
                    
                </div>
             
        
                <div id="totals">
                    <table id="t-totals">
                        <tr id="total-titles">
                            <td colspan="3"> </td>
                            <td > Odds </td>
                            <td > Stake </td>
                            <td colspan="2" class="right">Payout</td>
                        </tr>
        
        
                        <tr>
                                <td colspan="3"> Accum 10 of 10</td>
                                <td > 5.44 </td>
                                <td > 10000 </td>
                                <td colspan="2" class="right"> 544,000</td>
                            </tr>
            
                    </table>
        
        
                    <table class="calculations bold-bottom" id="cal-top">
        
                            <tr>  
                                <td> Total Stake </td>
                                <td class="right">  <span>UGX</span> 45,000,000 </td>
            
                            </tr>
            
            
            
            
                        </table>
        
        
        
                    <table class="calculations">
        
                        <tr>  
                            <td>  Max. Payout </td>
                            <td class="right">  <span>UGX</span> 45,000,000 </td>
        
                        </tr>
        
        
        
        
                    </table>
        
        
                    <table class="calculations">
        
                            <tr>  
                                <td>  Tax (-15%) </td>
                                <td class="right">  <span>UGX</span> 234,000 </td>
            
                            </tr>
            
            
            
            
                        </table>
        
        
                        <table class="calculations">
        
                                <tr>  
                                    <td>  Bonus (+15%) </td>
                                    <td class="right">  <span>UGX</span> 234,000 </td>
                
                                </tr>
                
                
                
                
                            </table>
        
        
                            <table class="calculations bold-bottom">
        
                                    <tr>  
                                        <td>  Net Payout </td>
                                        <td class="right">  <span>UGX</span> 45,000,000 </td>
                    
                                    </tr>
                    
                    
                    
                    
                                </table>
        
        
        
        
        
        
        
        
        
        
                </div>
        
               

                <div class="bet-totals">
                  <p class="stake-amt">STAKE AMOUNT :</p><input type="" class="stake-input" label="STAKE" placeholder="Enter Amount">
                  <button class="bet-btn-place"> PLACE BET </button>
                  <button class="bet-btn-clear"> CLEAR SLIP </button>
                  <button class="bet-btn-book"> BOOK BET </button>


                </div>
                
                <div id="tandcs"> 
                    ALL BETS ARE SUBJECT TO NETBET SPORT BETTING RULES
                    
                
            </div>


            </div>
        
        
        
          </div>
        






    </div>



</div>  
            
            
            
            
            
            </div>
 </div>

    </div>


            <!---- End of right Side Bar --->
     
</div>

     </div>

 


</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <!-- 
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
--->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="{{Config::get('app.url')}}node_modules/select2/dist/js/select2.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<script src="/js/app.js"></script>
</body>
</html>





<?php } ?>