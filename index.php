<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/js.js"></script>
  <meta charset="utf-8">
  <title>Home</title>
  <style media="screen">
  </style>

  <script type="text/javascript">
    $(document).ready(function() {
    $(".se-pre-con").delay("700");
    $(".se-pre-con").fadeOut("slow");

    $('.dropdown').hover(function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(10).slideDown();
}, function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp()
});

var image_array= ['url("img/main-bg.jpg")', 'url("img/main-bg3.jpg")', 'url("img/main-bg.gif")', 'url("img/main-bg2.jpg")'];
var image_index = 0;

var change_image = function(){

    $('.background').css({"transition": "background 2s ease-in", "background-image": image_array[image_index]});
    image_index++;
    if (image_index >= image_array.length){
        image_index = 0;
    }
}

$(document).ready( function(){

    setInterval(change_image, 5000);

 });



  });


  </script>
</head>

<body>
  <div class="se-pre-con"></div>
  <header id="home">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark">
      <a href="index.php" class="navbar-brand mr-auto">Roberts Ķuze</a>
      <button class="navbar-toggler" type="button" style="outline: none;" data-toggle="collapse" data-target="#collapsingNavbar3">
          <span> <img src="img/menu.png" width="35px" height="35"alt=""> </span>
      </button>
      <div class="navbar-collapse collapse" id="collapsingNavbar3">
        <ul class="nav navbar-nav ml-auto" style="margin-right: 100px;">
          <li class="nav-item">
            <a class="nav-link" href="#" class="smooth"><button type="button" style="outline: none;" class="smootha smoothbtn hvrcenter" name="button">Home</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" class="smooth"><button type="button" style="outline: none;" class="smoothb smoothbtn hvrcenter" name="button">About Me</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" class="smooth"><button type="button" style="outline: none;" class="smoothc smoothbtn hvrcenter" name="button">Services</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" class="smooth"><button type="button" style="outline: none;" class="smoothe smoothbtn hvrcenter" name="button">Clients</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" class="smooth"><button type="button" style="outline: none;" class="smoothf smoothbtn hvrcenter" name="button">Contact Me</button></a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link"><button class="dropdown-toggle" style="outline: none; background-color: transparent; border: none; color: white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other
            </button></a>
            <div class="dropdown-menu bg-dark" style="border: none;" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="gallery.php" style="color: white;"> <button type="button" name="button" class="hvrcenter smoothbtn" >Blog</button></a>
              <a class="dropdown-item" href="gallery.php" style="color: white;"> <button type="button" name="button" class="hvrcenter smoothbtn" >Gallery</button></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="background">
      <div class="parent">
        <div class="child" style="text-align: center;">
          <div class="my-image">
          </div>
          <h1 style="color: white; text-shadow: 2px 2px 5px black;">Hi,I'm Roberts Ķuze</h1>
          <button type="button" class="btn btn-primary low smoothb" name="button" style="margin: 40px auto;">Learn More</button>
        </div>
      </div>
    </div>

    <div class="cover" id="about" style="padding-top: 30px;">
      <h1 style="text-align: center; margin-top: 60px;">About Me</h1>
      <div class="about" style="text-align: justify; text-justify: inter-word;">
        <div class="flex-item">
          <h2>Hi There! I'm Roberts Ķuze</h2></br>
          <p style="max-width: 400px;">
            I am a professional web developer from Riga, Latvia. I create beautiful professional websites using best practice accessibility. I enjoy turning complex problems into simple, beautiful and intuitive interface designs.
          </p>
          </br>
          <p> <img src="img/envelope.png" width="32px" height="32px" alt=""> E-mail: <a href="mailto:cookielvofficial@gmail.com" target="_top">cookielvofficial@gmail.com </a></br>
            <img src="img/calendar.png" width="32px" height="32px" alt=""> Date Of Birth: 08/25/2001 </br>
            <img src="img/phone-call.png" width="32px" height="32px" alt=""> Phone nr.: <a href="tel:+37127892528">+371 27892528</a></br>
            <img src="img/placeholder.png" width="32px" height="32px" alt=""> Location: Riga/Latvia </br>
            <div class="" style="float: left; position: relative; bottom: 0px; left: 0px;">
              <a href="https://www.instagram.com/r.kuze/"><img src="img/instagram.png" alt="" width="44px" height="44px"></a>
              <a href="https://www.facebook.com/roberts.kuze"><img src="img/facebook.png" alt="" width="44px" height="44px"></a>
              <a href="https://twitter.com/RealCookieLV"><img src="img/twitter.png" alt="" width="44px" height="44px"></a>
              <a href="https://www.youtube.com/channel/UCthOiu2cgrCSv_BOXD3ReIw?view_as=subscriber"><img src="img/youtube.png" alt="" width="44px" height="44px"></a>
              <a href="https://aboutme.google.com/b/114922119474521586782/"><img src="img/google-plus.png" alt="" width="44px" height="44px"></a>
            </div>
          </p>
          </br>
          </br>
          </br>
          </br>
        </div>
        <div class="flex-item" style="min-width: 320px;">
          <div class="progress">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">JavaScript: 40%</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">Jquery: 35%</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">PHP: 65%</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">CSS: 87%</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">HTML: 96%</div>
          </div>
        </div>
      </div>
    </div>
    <div class="cover" id="services" style="padding-top: 40px;">
      <h1 style="text-align: center; margin: 90px 0px 40px 0px; ">My Services</h1>
      <div class="container" style="position: relative">
        <div class="row">
          <div class="col-md-4 item1 itemx" style="text-align: center;">
            <img src="img/html5.png" style="width: 80px; height: 80px;" alt="">
            <h4>Web Developement</h4>
            <hr style="color: black; width: 100px;">
            <p>When developing websites i like making hard complex functions simple andinteractive.</p>
          </div>
          <div class="col-md-4 item2 itemx" style="text-align: center;">
            <img src="img/laptop.png" style="width: 80px; height: 80px;" alt="">
            <h4>Web Design</h4>
            <hr style="color: black; width: 100px;">
            <p>I started making web design's when i was 14. I  have a lot of experiance with people and the effect of how visuals can influence the customer.</p>
          </div>
          <div class="col-md-4 item3 itemx" style="text-align: center;">
            <img src="img/photo-camera.png" style="width: 80px; height: 80px;" alt="">
            <h4>Photography</h4>
            <hr style="color: black; width: 100px;">
            <p>Love photografy. I take pictures anywere i go and will be glad to set up a photoshoot with anyone.</br><a href="gallery.php">Look at some of my work.</a></p>
          </div>
          <div class="col-md-4 item4 itemx" style="text-align: center; padding-top: 7px;">
            <img src="img/video-camera.png" style="width: 80px; height: 80px;" alt="">
            <h4>Video Editing</h4>
            <hr style="color: black; width: 100px;">
            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus et quatre malesuada.</p>
          </div>
          <div class="col-md-4 item5 itemx" style="text-align: center; padding-top: 7px;">
            <img src="img/edit.png" style="width: 80px; height: 80px;" alt="">
            <h4>Article writing</h4>
            <hr style="color: black; width: 100px;">
            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus et quatre malesuada.</p>
          </div>
          <div class="col-md-4 item6 itemx" style="text-align: center; padding-top: 7px;">
            <img src="img/html5.png" style="width: 80px; height: 80px;" alt="">
            <h4>Extra 2</h4>
            <hr style="color: black; width: 100px;">
            <p>Nullam porttitor porta augue vel iaculis. Pellentesque a pretium erat. Maecenas semper laoreet dapibus et quatre malesuada.</p>
          </div>
        </div>
      </div>
    </div>

    <!--- This section is for MY WORK --->


    <!--- This section is for MY WORK --->

    <div class="" id="clients"  style="padding-top: 10px;">
      <h1 style="text-align: center; margin: 140px 0px -60px 0px; ">Clients</h1>
      <div class="owl-carousel owl-theme owl-loaded loop">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <div class="owl-item"> <img src="img/customer1.jpg" style="width: 100px; height: 100px; float: left; border-radius: 50%; margin-top: 15%;" class="owl-img" alt=""> <p style="margin-top: 20%;">Love the design Roberts created form my site example.com. can't wait to work with him in future. Thanks.</p> </div>
            <div class="owl-item"> <img src="img/customer2.jpg" style="width: 100px; height: 100px; float: left; border-radius: 50%; margin-top: 15%;" class="owl-img" alt=""> <p style="margin-top: 20%;">Love the design Roberts created form my site example.com. can't wait to work with him in future. Thanks.</p> </div>
            <div class="owl-item"> <img src="img/customer3.jpg" style="width: 100px; height: 100px; float: left; border-radius: 50%; margin-top: 15%;" class="owl-img" alt=""> <p style="margin-top: 20%;">Love the design Roberts created form my site example.com. can't wait to work with him in future. Thanks.</p> </div>
        </div>
      </div>
    </div>
  </div>


    <div class="contact" id="contact" style="padding-top: 10px;">
      <h1 style="text-align: center; margin: 140px 0px 40px 0px; ">Contact Me</h1>
      <form class="contact-form">
        <div class="row">
        <div class="form-group col-lg-6">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="You'r E-mail">
        </div>
        <div class="form-group col-lg-6">
          <label for="exampleInputPassword1">Phone Nr.</label>
          <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Phone Nr.">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Topic</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Message Title">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Message</label></br>
        <textarea name="message" class="col-lg-12" rows="8" placeholder="Message..."></textarea>
      </div>
        <button type="submit" class="btn btn-primary" style="margin-bottom:60px;">Submit</button>
      </form>
    </div>
  </main>
  <footer class="bottom">
    <div class="social">
      <a href="https://www.instagram.com/r.kuze/"><img src="img/instagram.png" alt="" width="44px" height="44px"></a>
      <a href="https://www.facebook.com/roberts.kuze"><img src="img/facebook.png" alt="" width="44px" height="44px"></a>
      <a href="https://twitter.com/RealCookieLV"><img src="img/twitter.png" alt="" width="44px" height="44px"></a>
      <a href="https://www.youtube.com/channel/UCthOiu2cgrCSv_BOXD3ReIw?view_as=subscriber"><img src="img/youtube.png" alt="" width="44px" height="44px"></a>
      <a href="https://aboutme.google.com/b/114922119474521586782/"><img src="img/google-plus.png" alt="" width="44px" height="44px"></a>
    </div>
    <div class="display">
      <div class="case" style="margin-left: 30px;">
        <h3>Links</h3>
        <ul>
          <li>Home</li>
          <li>About Me</li>
          <li>My Services</li>
          <li>Clients</li>
          <li>Contact Me</li>
        </ul>
      </div>
      <div class="case" style="width: 500px; margin-left: 120px;">
        <h3>Last Projects</h3>
        <ul>
          <li>Personal Website - Design and Developement</li>
          <li>Health Store - E-Commertse</li>
          <li>SaneLat - YouTube Channel</li>
          <li>@r.kuze - Instagram</li>
        </ul>
      </div>
    </div>
    <p style="color: white; text-align: center;">@copyright Roberts Ķuze</p>
  </footer>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel();
    });
    $('.loop').owlCarousel({
      center: true,
      items: 1,
      loop: true,
      margin: 10,
      responsive: {
        1024: {
          items: 3
        }
      }
    });
  </script>
</body>

</html>
