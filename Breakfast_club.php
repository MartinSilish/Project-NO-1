<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.ico">
    <title>The Breakfast Club</title>

    <!-- Bootstrap core CSS -->
    <link href="Css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="Css\Style.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="Breakfast_Club.php">
                <img src="https://static.vecteezy.com/system/resources/previews/004/909/732/original/logo-cafe-free-vector.jpg" alt="" style="width: 50px;height: 50px;border-radius: 100%;">
              </a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="Breakfast_club.php">Home</a></li>
                <li><a href="About_us.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="Table_Booking.php">Table Booking</a></li>

				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Indian <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">DRINKS</a></li>
                    <li><a href="#">STARTERS</a></li>
                    <li><a href="#">TANDOORI - CLAY OVEN - DISHES</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">SEAFOOD MAIN COURSES</li>
                    <li><a href="#">CHICKEN MAIN COURSES</a></li>
                    <li><a href="#">LAMB MAIN COURSES</a></li>
                    <li><a href="#">RICE/BREDS</a></li>
                    <li><a href="#">ACCOMPANIMENTS</a></li>
                  </ul>
                </li>
				
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chinese <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">DRINKS</a></li>
                    <li><a href="#">STARTERS</a></li>
                    <li><a href="#">TANDOORI - CLAY OVEN - DISHES</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">SEAFOOD MAIN COURSES</li>
                    <li><a href="#">CHICKEN MAIN COURSES</a></li>
                    <li><a href="#">LAMB MAIN COURSES</a></li>
                    <li><a href="#">RICE/BREDS</a></li>
                    <li><a href="#">ACCOMPANIMENTS</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    


    <!-- Carousel
    ================================================== -->
    <div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <script
			src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
			</script>
			<script>
			var myCenter=new google.maps.LatLng(51.508742,-0.120850);
			var marker;
			function initialize()
			{
			var mapProp = {
			  center:myCenter,
			  zoom:15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			marker=new google.maps.Marker({
			  position:myCenter,
			 // icon:'themes/assets/images/nepali-momo.png',
			  animation:google.maps.Animation.BOUNCE
			  });

			marker.setMap(map);

			// Info open
			var infowindow = new google.maps.InfoWindow({
			  content:"Hello World!"
			  });

			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<div style="height:450px;background-image: url(banner-img.jpg);"></div>
			  <div class="container">
				<div class="carousel-caption">
				</div>
			  </div>
			</div>
		  </div>
		</div><!-- /.carousel -->
	</div>

	<div class="mainTitle">
	<div class="container">
	<h1>The Breakfast Club</h1>
	<p>
		</p>
	</div>
	</div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-square" src="Thallapakatti_Biriyani.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h2>Dindigul Thalappakatti Biriyani</h2>
          <p>The founder, Nagasamy Naidu, started Dindigul Thalappakatti restaurant by the name of Anandha Vilas Biriyani Hotel in Dindigul, Tamil Nadu. In 2013 the chain won a trademark lawsuit about the use of the word "thalappakatti" (meaning "turban" in Tamil).</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-square" src="Pav_Bhaji.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h2>Pav Bhaji</h2>
          <p>Pav bhaji is a fast food dish from India consisting of a thick vegetable curry (bhaji) served with a soft bread roll (pav). Its origins are in the state of Maharashtra.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
		  <img class="img-square" src="Iruttu_Kadai_Halwa.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h2>Iruttu Kadai Halwa</h2>
          <p>Iruttu Kadai is an Indian sweets and snacks shop located in Tirunelveli, Tamil Nadu. It is known for "Iruttu Kadai Halwa", a type of Indian sweet halwa made of wheat, sugar and ghee. The halwa shop was established in 1900 and has remained unexpanded ever since. Nevertheless, the store has become a landmark for the city of Tirunelveli.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	</div>
	

	
	
	<div class="introSection">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="cntr">Welcome to the Breakfast Club</h1>
			</div>
		</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	 <div class="container marketing">
    <h2 class="itemsTitle">Breakfast</h2>
	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
          <img src="vada.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Starters</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Idli.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Meal</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Tea.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Drink</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="Samosachutney.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Starters</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Dosa.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Meal</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Coffee.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Drink</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="Bonda.jpg" alt="Generic placeholder image"  class="breakfastImage">
          <h4>Starters</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="Poori.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Meal</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="Ragi-Malt.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Drink</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>
	
	<div class="container marketing">
    <h2 class="itemsTitle">Lunch</h2>
	<div id="myCarousel2" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
           <img src="Tandoori_Chicken_Tikka.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Starters</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         <img src="Mutton_Biriyani.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Meal</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Butter_Milk.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Drink</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="Prawn_Fry.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Starters/h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="FIsh_Curry.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Meal</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Lassi.JPG" alt="Generic placeholder image" class="breakfastImage">
          <h4>Drink</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="Paneer_Tikka.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Starters</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="Veg_Meals.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Meal</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="lemonade.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Drink</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>
	
	<div class="container marketing">
    <h2 class="itemsTitle">Dinner</h2>
	<div id="myCarousel3" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
          <img src="Parottta.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Parotta</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Naan.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Naan</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Desserts.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Desserts</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="Fried_Rice.png" alt="Generic placeholder image" class="breakfastImage">
          <h4>Fried Rice</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Tandoori.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Tandoori Chicken</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="Gulabjamun.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Desserts</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="Infused.png" alt="Generic placeholder image" class="breakfastImage">
          <h4>Infused Chicken</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="Noodles.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Noodles</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="Ice_Cream.jpg" alt="Generic placeholder image" class="breakfastImage">
          <h4>Ice Cream</h4>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>
	
      <!-- FOOTER -->
      <footer>
		<div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
		</div>
      </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="Java Script/holder.js"></script>
  </body>
</html>
