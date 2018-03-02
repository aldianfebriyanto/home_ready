<!DOCTYPE html>
<!-- saved from url=(0036)https://s.bootsnipp.com/iframe/Qb83E -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="robots" content="noindex, nofollow">

    <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min(1).css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="style_it.css">


    <script src="../assets/js/jquery-1.11.1.min.js.download"></script>
    <script src="../assets/js/bootstrap.min.js(1).download"></script>

  <!--  <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script> -->

</head>
<body>
	    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
       <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" style="background-color: #008080;">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a class="navbar-brand js-scroll-trigger" href="../home/index.html"><img src="../img/kaefce.png" style="height: 70px; margin-top: 10px;"></a>
                </li>
                <li>
                    <a href="index.php" style="margin-top: 40px;">Information Technology</a>
                </li>


                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Infrastructure<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">   </li>
                    <li><a href="vision_page_infra.php">Visi & Misi</a></li>
                    <li><a href="biodata.php">Biodata Karyawan</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT ERD<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">   </li>
                    <li><a href="vision_page_erd.php">Visi & Misi</a></li>
                    <li><a href="biodata.php">Biodata Karyawan</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Support<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">   </li>
                    <li><a href="vision_page_support.php">Visi & Misi</a></li>
                    <li><a href="biodata.php">Biodata Karyawan</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IT Solution<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">   </li>
                    <li><a href="vision_page_solution.php">Visi & Misi</a></li>
                    <li><a href="biodata.php">Biodata Karyawan</a></li>
                  </ul>
                </li>
                
                <li>
                    <a href="../home/contact.php">Contact Us</a>
                </li>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <li>
                    <a href="follow-us.php">Our Team</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button> 
            <div class="container" style="background-color:#fefbf7; border-radius: 15px; margin-bottom: 21%; text-align: center;">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>Biodata Karyawan</h1>


        <hr class="style-eight">
          <div class="gallery">
            

              <div class="container">
                <div class="page-header">
              </div>
              

              <div class="row">
               <div class="col-lg-12">
                <table class="table table table-bordered table-hover table-responsive">

                <thead>
                <tr>
                 <th>NIK</th>
                 <th>Full Name</th>
                 <th>Description</th>
                </tr>
                </thead>



               </table>
             </div>
           </div>



            
      </div>
      <hr class="style-eight">
                    </div>
                </div>
            </div>


            <div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: :none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal" aria-hidden="true">x</button>
          <h4 class="modal-title">
                    <i class="glyphicon glyphicon-user"></i> User Profile
          </h4> 
        </div>

        <div class="modal-body">
          <div id="modal-loader" style="display: none; text-align: center;">
            <img src="">
          </div>
          <!--Content will be loaded here-->
          <div id="dynamic-content">
            <!-- Kalo Data Type JSON-->
            <div class="row"> 
                            <div class="col-md-12"> 
                              
                              <div class="table-responsive">
                              
                                <table class="table table-striped table-bordered">

                                <tr>
                              <th>NIK</th>
                              <td id="txt_nik"></td>
                                </tr>

                              <tr>
                              <th>First Name</th>
                              <td id="txt_fname"></td>
                                </tr>
                                     
                                <tr>
                              <th>Last Name</th>
                              <td id="txt_lname"></td>
                                </tr>
                                          
                                <tr>
                                <th>Email</th>
                                <td id="txt_email"></td>
                                </tr>
                                          
                                <tr>
                                <th>Mobile</th>
                                <td id="txt_mobile"></td>
                                </tr>

                                <tr>
                                <th>Position</th>
                                <td id="txt_position"></td>
                                </tr>

                                <tr>
                                <th>Division</th>
                                <td id="txt_division"></td>
                                </tr>
                                          
                                </table>
          
          </div>

       </div>                 
       </div>
                                       
      </div> 
    </div>


  
    </div>
  </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    

    <!-- /#wrapper -->
	<script type="text/javascript">

	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
	</script>


<div class="footer-bottom" style="background-color: #008080; margin-top: 50px; padding-top: 15px; padding-bottom: 5px;">
            <div class="container">
     

          <h5 style="text-align: center; margin-top: 5px;"> &copy Copyright 2018 by teamERROR404.</h5>
          <div class="credits">
          </div>
          </div>
          </div>


</body>
</html>