<?php  
$host = 'localhost';
$user = 'root';  
$pass = '';  
$dbname = 'the_breakfast_club';  
$conn = mysqli_connect($host, $user, $pass,$dbname);   //establish connection from php to mysql 


$Full_Name="";
$Phone_No="";
$Select_day="";
$Select_time="";
$Persons="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["submit"]))
  {
    if(!empty($_POST["Full_Name"])){
      if(!empty($_POST["Phone_No"])){
        if(!empty($_POST["Select_day"])){
          if(!empty($_POST["Select_time"])){
            if(!empty($_POST["Persons"])){
        $Full_Name = $_POST["Full_Name"];
        $Phone_No=$_POST["Phone_No"];
        $Select_day= $_POST["Select_day"];
        $Select_time = $_POST["Select_time"];
        $Persons = $_POST["Persons"];
       
  
              $query = "insert into table_booking(Full_Name,Phone_No,Select_day,Select_time,Persons) values('$Full_Name','$Phone_No','$Select_day','$Select_time','$Persons')";
  
              $result = mysqli_query($conn,$query);
  
              if($result){
                echo "Data inserted successfully";
              }
              else{
                echo "Failed to insert";
              }
            } 
            else{
              echo "Enter Name";
            }
          } 
          else{
            echo "Enter Phone NO";
          }
        } 
        else{
          echo "Choose Date";
        } 
      } 
      else{
        echo "Choose Time";
      }
    }
  }
}
// mysqli_close($conn);  
?>  
  
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

        <link rel="stylesheet" href="Css/main.css">
    </head>
    <body>
        
        <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>Reservation</h3>
                    <form method="post" action="Table_Booking.php">
                        <div class = "form-row">
                            <select name = "Select_day">
                                <option value = "day-select">Select Day</option>
                                <option value = "sunday">Sunday</option>
                                <option value = "monday">Monday</option>
                                <option value = "tuesday">Tuesday</option>
                                <option value = "wednesday">Wednesday</option>
                                <option value = "thursday">Thursday</option>
                                <option value = "friday">Friday</option>
                                <option value = "saturday">Saturday</option>
                            </select>

                            <select name = "Select_time">
                                <option value = "hour-select">Select Hour</option>
                                <option value = "10">10: 00</option>
                                <option value = "10">12: 00</option>
                                <option value = "10">14: 00</option>
                                <option value = "10">16: 00</option>
                                <option value = "10">18: 00</option>
                                <option value = "10">20: 00</option>
                                <option value = "10">22: 00</option>
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "text" placeholder="Full Name" name='Full_Name'>
                            <input type = "text" placeholder="Phone Number" name='Phone_No'>
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many Persons?" min = "1" name='Persons'>
                            <input type = "submit" value = "BOOK TABLE" name='submit'>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </body>
</html>
