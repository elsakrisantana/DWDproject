<!--
HTML contains the navigation bar at the top and the footer.
 -->


<!DOCTYPE html>
<html>
   <head>
      <title><?= ($html_title) ?></title>
      <meta charset="utf8" />

      <!-- BOOTSTRAP JAVASCRIPT JQUERY -->
      <link rel="stylesheet" href="<?= ($BASE) ?>/ui/css/bootstrap.min.css" type="text/css">
      <script src="<?= ($BASE) ?>/ui/js/bootstrap.min.js"></script>
      <script src="<?= ($BASE) ?>/ui/js/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <link rel="stylesheet" href="<?= ($BASE) ?>/ui/css/style.css" type="text/css">

   </head>

   <body>

   <!-- HEADER -->
   <nav class="navbar navbar-expand-lg navbar-dark navheader">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse topnav" id="navbarTogglerDemo02">
         <ul class="navbar-nav">
            <li class="active" id="navbar-home">
               <a href="<?= ($BASE) ?>" class="navbar-item">
                  <img src="img/00.Navbar/Navbar-Active.png" class="img-selected">
                  Home
               </a>
            </li>
            <li id="navbar-quiz">
               <a href="<?= ($BASE) ?>/quiz" class="navbar-item">
                  <img src="img/00.Navbar/Navbar-Active.png" class="img-selected">
                  Quiz
               </a>
            </li>
            <li id="li-logo">
               <a href="#" id="a-logo">
                  <img src="img/00.Navbar/Logo.png" class="navbar-logo">
               </a>
            </li>
            <li id="navbar-collection">
               <a href="<?= ($BASE) ?>/collection" class="navbar-item">
                  <img src="img/00.Navbar/Navbar-Active.png" class="img-selected">
                  Collection
               </a>
            </li>
            <li id="navbar-about">
               <a href="<?= ($BASE) ?>/aboutUs" class="navbar-item">
                  <img src="img/00.Navbar/Navbar-Active.png" class="img-selected">
                  About
               </a>
            </li>
         </ul>
      </div>
   </nav>
   <hr class="navbar-hr">

   <br>

   <?php echo $this->render($content,NULL,get_defined_vars(),0); ?>

   <br>

   <!-- FOOTER -->

   <footer>
      <div class="navbar-footer">
         <hr class="navbar-hr">
         <img src="img/00.Navbar/Logo.png" style="width: 50px;">
         <p style="text-align: center; color: #efefef; font-size: 14px; margin-bottom: 0px;">© 2023 The Museum of Soul
         </p>
         <ul class="footer-ul">
            <li id="footer-home">
               <a href="<?= ($BASE) ?>/" class="footer-item">Home</a>
            </li>
            <li id="footer-quiz">
               <a href="<?= ($BASE) ?>/quiz" class="footer-item">Quiz</a>
            </li>
            <li id="footer-collection">
               <a href="<?= ($BASE) ?>/collection" class="footer-item">Collection</a>
            </li>
            <li id="footer-about">
               <a href="<?= ($BASE) ?>/aboutUs" class="footer-item">About</a>
            </li>
         </ul>
      </div>
   </footer>


   <!-- SCRIPT -->
   <script src="<?= ($BASE) ?>/ui/js/bootstrap.min.js"></script>
   <script src="<?= ($BASE) ?>/ui/js/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
           integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
           crossorigin="anonymous"></script>


   <script>

      const elm = document.querySelector('ul');
      const elActive = elm.querySelector('.active');
      //Header
      $("#navbar-home").click(function () {
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-home").addClass("active");
      });

      $("#navbar-quiz").click(function () {
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-quiz").addClass("active");
      });

      $("#navbar-logo").click(function () {
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-home").addClass("active");
      });

      $("#navbar-collection").click(function () {
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-collection").addClass("active");
      });

      $("#navbar-about").click(function () {
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-about").addClass("active");
      });

      // Footer
      $("#footer-home").click(function () {
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-home").addClass("active");
      });

      $("#footer-quiz").click(function () {
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-quiz").addClass("active");
      });

      $("#footer-collection").click(function () {
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-collection").addClass("active");
      });

      $("#footer-about").click(function () {
         alert("DSHAJDKA");
         const elActive = elm.querySelector('.active');
         elActive.removeAttribute('class');
         $("#navbar-about").addClass("active");
      });

      // Check Header
      // A $( document ).ready() block.
      $(document).ready(function () {
         var path = window.location.pathname;
         var page = path.split("/").pop();
         console.log(page);
         if ((page == "quiz") || (page == "quizForm.html")) {
            $("#navbar-quiz").addClass("active");
            $("#navbar-home").removeClass("active");
         }
         else if ((page == "collection") || (page == "artView.html")) {
            $("#navbar-collection").addClass("active");
            $("#navbar-home").removeClass("active");
         }
         else if ((page == "aboutUs") || (page == "aboutUs.html")) {
            $("#navbar-about").addClass("active");
            $("#navbar-home").removeClass("active");
         }
         else if ((page == "") || ("home.html")) {
            $("#navbar-home").addClass("active");
         }
      });

   </script>


   </body>
</html>
