<?xml version="1.0" encoding = "UTF-8" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <meta content="" />
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- CSS-->
    <link rel="stylesheet" href="../CSS/styles.css" />
    <!-- js jquery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <title>DIY ideas</title>
  </head>
  <body>
    <div class="headerInclude">
      <?php
        include("../includes/Header.php");
         ?>

    </div>
    <div class="linksInclude">
      <?php
      include("../includes/Links.php");
      ?>
    </div>
    <div id="ideas-carousel" class="carousel slide" data-interval="false">
      <div class="carousel-inner">
        <h2>DIY Ideas</h2>
        <div class="carousel-item active">
          <h3 class="pinkFont">Picture Ledges</h3>
          <p>You don't have to crowd every bookshelf and mantle to find enough space for your photos.
            "These are gorgeous picture ledges that we made from scrap wood that now house a collection of photos,".
            The best part? This project cost less than $10. (Find out more<a class="aIdeas" href="https://www.justmeasuringup.com/picture-ledges/">here</a>)</p>
            <img class="ideas-img" src="../images/ledge.jpg" alt="ledge">
          </div>
          <div class="carousel-item">
            <h3 class="pinkFont">Wooden Baby Gym</h3>
            <p>Not loving the look of your kids clunky plastic toys? Making this gorgeous wooden baby gym is
              easier than you'd expect.
              but ideas are unlimited. (Find out how to make your own <a class="aIdeas" href="https://bestlifeonline.com/easy-diy-home-projects/">here</a>.)</p>
              <img class="ideas-img2" src="../images/wooden-baby-gym.jpg" alt="wooden-baby-gym">
            </div>
          </div>
          <a class="carousel-control-prev" href="#ideas-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#ideas-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="footerInclude">
          <?php
          include("../includes/Footer.php");
          ?>
        </div>
  </body>
</html>
