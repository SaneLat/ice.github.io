<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Gallery</title>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".se-pre-con").delay("700");
  $(".se-pre-con").fadeOut("slow");;
});
</script>
    <style media="screen">
    .row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}
.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}
.bottom-left {
    position: absolute;
    bottom: 0px;
    left: 0px;
    padding: 10px;
    padding-left: 20px;
    background-color: rgba(40,40,40, .5);
    width: 100%;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('img/Preloader_3.gif') center no-repeat #fff;
}
.img-container {
    position: relative;
    text-align: left;
    color: white;
}
</style>
  </head>
  <body>
    <div class="se-pre-con"></div>
  <header id="home">
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
      <a href="index.php" class="navbar-brand mr-auto">Roberts Ķuze</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="collapsingNavbar3">
        <ul class="nav navbar-nav ml-auto" style="margin-right: 100px;">
          <li class="nav-item">
            <a class="nav-link" href="index.php" class="smooth"><button type="button" class="smootha smoothbtn hvrcenter" name="button">Personal Page</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about" class="smooth"><button type="button" class="smoothb smoothbtn hvrcenter" name="button">About Me</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact" class="smooth"><button type="button" class="smoothc smoothbtn hvrcenter" name="button">Contact Me</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" class="smooth"><button type="button" class="smoothe smoothbtn hvrcenter" name="button">Blog</button></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <body>
    <div class="row">
  <div class="column">
  <div class="img-container">
      <img src="https://wallpaperbrowse.com/media/images/soap-bubble-1958650_960_720.jpg"style="width:100%">
      <div class="bottom-left"> Winter Morning</div>
  </div>
  <div class="img-container">
      <img src="https://timesofindia.indiatimes.com/img/62355428/Master.jpg"style="width:100%">
      <div class="bottom-left"> Summer brake</div>
  </div>
  <div class="img-container">
      <img src="https://images.unsplash.com/photo-1506096341846-4a5143cdb8ea?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a89ac5978250c5e8584a135896145270&w=1000&q=80"style="width:100%">
      <div class="bottom-left"> Couple Fun</div>
  </div>
  <div class="img-container">
      <img src="http://www.travel365.md/wp-content/uploads/2017/05/29027757a8ef3bcbdafd814c7b3d0ec5.jpg"style="width:100%">
      <div class="bottom-left"> Guatemala</div>
  </div>
  <div class="img-container">
      <img src="https://wallpaperbrowse.com/media/images/free_high_resolution_images_for_download-1.jpg"style="width:100%">
      <div class="bottom-left"> Mountain Views</div>
  </div>
  <div class="img-container">
      <img src="https://www.virginexperiencedays.co.uk/content/img/product/large/family-photo-experience-24110719.jpg"style="width:100%">
      <div class="bottom-left"> Family Photo Shoot</div>
  </div>
  </div>
  <div class="column">
    <div class="img-container">
        <img src="https://favim.com/orig/201108/26/beach-beautiful-blonde-summer-Favim.com-130780.jpg"style="width:100%">
        <div class="bottom-left"> Modeling Shoot</div>
    </div>
    <div class="img-container">
        <img src="https://cdn.cnn.com/cnnnext/dam/assets/170407220916-04-iconic-mountains-matterhorn-restricted.jpg"style="width:100%">
        <div class="bottom-left"> Sunset</div>
    </div>
    <div class="img-container">
        <img src="http://sonamsaini.com/wp-content/uploads/2017/07/simple-sunset-portraits-2.jpg"style="width:100%">
        <div class="bottom-left"> Rising star</div>
    </div>
    <div class="img-container">
        <img src="https://www.innerengineering.com/online/blog/wp-content/uploads/2014/11/shutterstock_lowres_72ppi.jpg"style="width:100%">
        <div class="bottom-left"> Family Set</div>
    </div>
    <div class="img-container">
        <img src="https://www.snowsoftware.com/sites/default/files/webpage-image-bannera.jpg"style="width:100%">
        <div class="bottom-left"> Winter vision </div>
    </div>
    <div class="img-container">
        <img src="https://stoos-muotatal.ch/wp-content/uploads/2017/11/Stoos_Winter_Skifahrer_lr.jpg"style="width:100%">
        <div class="bottom-left"> Winter Morning</div>
    </div>
  </div>
  <div class="column">
    <div class="img-container">
        <img src="https://cdn.gearpatrol.com/wp-content/uploads/2017/12/Best-Skis-Gear-Patrol-Lead-Full.jpg"style="width:100%">
        <div class="bottom-left"> Winter Morning</div>
    </div>
    <div class="img-container">
        <img src="https://drscdn.500px.org/photo/89103973/m=900/6d441824e8060ba7bee0ebc4225decbd"style="width:100%">
        <div class="bottom-left">Waler</div>
    </div>
    <div class="img-container">
        <img src="http://www.zoerecords.net/wp-content/uploads/2018/06/nintchdbpict000342293828.jpg"style="width:100%">
        <div class="bottom-left"> Football</div>
    </div>
    <div class="img-container">
        <img src="https://pre00.deviantart.net/4441/th/pre/f/2012/042/c/3/sunset__people_by_andrewvan-d4pc8e6.jpg"style="width:100%">
        <div class="bottom-left"> Sand-Storm</div>
    </div>
    <div class="img-container">
        <img src="https://www.popsci.com/sites/popsci.com/files/styles/1000_1x_/public/images/2018/07/coral-reef-ecosystem.jpg?itok=CejaOk6D&fc=50,50"style="width:100%">
        <div class="bottom-left"> Coral Reef</div>
    </div>
    <div class="img-container">
        <img src="https://picsum.photos/500/300/?random"style="width:100%">
        <div class="bottom-left">Random</div>
    </div>
  </div>
  <div class="column">
    <div class="img-container">
        <img src="https://picsum.photos/350/300/?random"style="width:100%">
        <div class="bottom-left"> Random</div>
    </div>
    <div class="img-container">
        <img src="http://www.gotnewswire.com/wp-content/uploads/2018/03/bg_video-rulebook.jpg"style="width:100%">
        <div class="bottom-left"> American Football</div>
    </div>
    <div class="img-container">
        <img src="https://picsum.photos/400/300/?random"style="width:100%">
        <div class="bottom-left"> Random</div>
    </div>
    <div class="img-container">
        <img src="https://www.thebetterindia.com/wp-content/uploads/2015/06/4.png"style="width:100%">
        <div class="bottom-left">Lion King</div>
    </div>
    <div class="img-container">
        <img src="https://suntimesmedia.files.wordpress.com/2018/02/pistons_cavaliers_basketball_73917555.jpg?w=763&h=429"style="width:100%">
        <div class="bottom-left"> Basketball</div>
    </div>
    <div class="img-container">
        <img src="https://thumbs.gfycat.com/TediousSinfulApatosaur-mobile.jpg"style="width:100%">
        <div class="bottom-left"> Jumpman</div>
    </div>
  </div>
</div>
<footer class="bottom" style="margin-top: 50px;">
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
  </body>
</html>
