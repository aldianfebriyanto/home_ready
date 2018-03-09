<!DOCTYPE html>
<!-- saved from url=(0036)https://s.bootsnipp.com/iframe/Qb83E -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="robots" content="noindex, nofollow">

    <title></title>

    <!--Bootstrap & CSS-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min(1).css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="style_it.css">

    <!--Jquery-->
    <script src="../assets/js/jquery-1.11.1.min.js.download"></script>
    <script src="../assets/js/bootstrap.min.js(2).download"></script>

</head>
<body>

	    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" style="background-color: #008080;">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a class="navbar-brand js-scroll-trigger" href="../home/index.html"><img src="../kaefce.png" style="height: 70px; margin-top: 10px;"></a>
                </li>
                <li>
                    <a href="index.php" style="margin-top: 40px;">Information Technology</a>
                </li>


                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Jadwal<span></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="######"></a></li>
                    <li><a href="######"></a></li>
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
            <div class="container" style="background-color:#fefbf7; border-radius: 15px; margin-bottom: 10%;">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1>KFC IT DIVISION</h1>


        <hr class="style-eight">
          <div class="gallery">
            <div class="box">
             
               <h3>IT Infrastructure</h3>
              <p>adalah suatu rangkaian konsep dan teknik pengelolaan infrastruktur, pengembangan, serta operasi teknologi informasi (TI)</p>
              
            </div>
            
            <div class="box">
              
               <h3>IT Solution</h3>
              <p>bertanggung jawab atas pemasangan, administrasi, perawatan, dan pemecahan masalah, beragam perangkat keras, perangkat lunak</p>
                    
            </div>
            
            <div class="box">
              
               <h3>IT Support</h3>
              <p>memantau dan memelihara sistem komputer serta jaringan dalam sebuah organisasi. Menginstal dan mengkonfigurasi sistem komputer. Mendiagnosis dan memecahkan kesalahan perangkat keras / perangkat lunak.</p>
               
            </div>
            
            <div class="box">
              
              <h3>IT ERD</h3>
              <p>dengan dukungan Manajer ERD dan Koordinator, penelitian, perancangan dan rencana pelaksanaan kegiatan baru. melaksanakan dan mengawasi kegiatan baru, mendukung pengembangan materi untuk sesi dan pelatihan seperlunya.</p>
               
            </div>

            
      </div>
      <hr class="style-eight">
                    </div>
                </div>
            </div>

            <div class="footer-bottom" style="background-color: #008080; margin-top: 10.7%; padding-bottom: 5px;">
    <div class="container">
     

          <h5 style="text-align: center; margin-top: 5px;"> &copy Copyright 2018 by teamERROR404.</h5>
          <div class="credits">
          
        </div>
      </div>
    </div>
  </div>
        </div>
</div>
</div>

        <!-- /#page-content-wrapper -->

    

    <!--script-->


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
  <!--script end-->


</body>
</html>