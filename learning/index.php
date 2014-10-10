<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>CXG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CXG.A new full service agency. Helping clients design, develop and deliver
    effective brand interactions for Consumers, Customers, Developers and User Groups, Distributors, Press, Investors/Analysts, Sales Organizations and Employee Stakeholders.">
    <meta name="keywords" content="CXG, agency, brands">
    <meta name="author" content="PowerHouse Creatve">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- styles -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- <link href="css/bootstrap-responsive.css" rel="stylesheet"> -->
    <link href="../css/component.css" rel="stylesheet">
    <!--link href="js/videojs/video-js.css" rel="stylesheet" type="text/css"-->
    <link href="../css/main.css" rel="stylesheet">
    <!--script src="js/modernizr.custom.js"></script-->
    <!-- HTML5 shim, for IE6-/8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>      <![endif]-->
    <style type="text/css">
      html { height:100%; width:100%; }
      body {
        height:100%;
      }

      #about {
        background: initial;
      }

      .header {

      }
      .header .logobox {
        text-align:left;
        margin-left: 5%;
      }

      .bgx {
        background: url('img/bg.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }

      .slapbar {
        background: rgba(255,255,255,0.4);
        padding: 0px 0px;
      }

      .slapbar h3 {
        font-weight:100;
        text-shadow:1px 1px 1px #333;
        text-transform:none;
        color:#333;
        text-align:right;
        margin:5%;
        font-size:35px;
        line-height:135%;
      }

      .slapbar h3 b {
        color: #f00;
      }

      .promobox {
        width:85%;
        max-width:900px;
        margin:0 auto;
        background: rgba(0,0,0,0.5);
        padding:40px;
        margin-bottom:50px;
      }

      .promobox p {
        font-weight: 300;
        text-align:left;
        line-height:33px;
        color: #eee;
        margin: 30px 0px;
      }

      .promobox ul {
        color:#eee;
        font-weight:bold;
        text-align:left;
        font-size: 20px;
        line-height: 28px;
        margin: 70px 20px 40px 20px;
      }

      .promobox .highlight {
        background: rgba(255,255,255,0.2);
        padding: 5px;
      }

      .promobutton {

        background: #f00;
        padding: 20px 30px;
        font-size: 32px;
        color: #fff;
        border: 0px;
        margin: 50px 0px 30px;
      }


      #about {
        height: initial;
        background:#000;
      }
      #about-wrap {
        height: initial;
      }
      #about .container {
        height: 500px;
      }
    </style>
  </head>
  <body class="cbp-spmenu-push"> <a name="top"></a>
    <div class="bgx"> <button class="fixed-btn" id="showLeftPush">Show</button>
      <a href="#top" class="fixed-btn" id="toTop"><span>Back to Top</span></a>
      <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <div class="cbp-spmenu-inner">
          <h1>CXG</h1>
          <ul id="sideNav">
            <?php include '../nav.html'; ?>
          </ul>
        </div>
      </nav>
      <div id="content">
        <section class="header">
          <div class="logobox"> <img id="intro-logo" src="../img/cxg-logo-lrg-invert.png"
              alt="CXG Collective-Experience Group"
              style="height:100px; margin-top:30px">
          </div>
          <div class="slapbar">
            <h3 class="gray-font"> Is your market changing<br>
          faster than your employees'
            <br>
            <b>ability to adapt to it</b> ?</h3>
          </div>
        </section>
        <!-- end section -->
        <section class="work">
          <!-- Header text -->
          <div class="feature-text-header"> </div>
          <div class="promobox" style="">
            <p>Introducing CXG's <b class="highlight">Performance Practice</b>
            </p>
            <p>More than ever, success in today's marketplace requires the
              ability to think quickly, adapt to various situations and solve
              complex problems, all while exceeding customer expectations.</p>
            <p>CXG provides instructionally solid, technologically-enabled
              performance solutions that will transform employee performance
              into a competitive advantage and directly impact business results.</p>
            <p>Click here and learn more about how you can leverage your most
              important investment.</p>
            <p> <a href="cxg-experiential-learning.pdf"><button class="promobutton">Download
                  PDF</button></a> </p>
          </div>
        </section>
      </div>
      <!-- end main content --> </div>
    <!-- end bgx -->
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!--script src="js/jquery.easing.1.3.js"></script-->
    <script src="../js/stellar.js"></script>
    <script src="../js/classie.js"></script>
    <script>
      $(window).stellar();

      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showRightPush = document.getElementById( 'showRightPush' ),
        body = document.body;

      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
        classie.toggle( document.getElementById('our-team'), 'shift' );
        classie.toggle( document.getElementById('your-side'), 'shift' );
      };

      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
    <script src="../js/main.js"></script>
  </body>
</html>
