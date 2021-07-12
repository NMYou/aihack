<?php 
require_once ('connection.php');

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submitdon'])){

	$donateamt = $_POST['donateamt'];
    $fullname = $_POST['fullname'];

    $projectname ="Ramesh Chavla Receiver";

    $radioVal = $_POST["MyRadio"];

    if($radioVal == "First" && trim($fullname) != '' && trim($donateamt) == '')
    {   $amount = "100";

            // $query="INSERT INTO `donordonation` VALUES ('$fullname','$projectname','$amount')";
            $query="INSERT INTO `donordonation`(`fullname`,`projectname`,`amount`) VALUES ('$fullname','$projectname','$amount')";
            $data=mysqli_query($conn,$query);
            if($data)
            {
            //echo "Data inserted into Database";
            echo '<script>alert("Amount Transfered Successfully")</script>';

            header("Location:rewards.php"); 
            }
            else
            {

            echo " Failed to insert Data into Database";

            }
       

    }
    else if ($radioVal == "Second" && trim($fullname) != '' && trim($donateamt) == '')
    {
        $amount = "500";
        $query="INSERT INTO `donordonation`(`fullname`,`projectname`,`amount`) VALUES ('$fullname','$projectname','$amount')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
        //echo "Data inserted into Database";
        echo '<script>alert("Amount Transfered Successfully")</script>';

        header("Location:rewards.php"); 
        }
        else
        {

        echo " Failed to insert Data into Database";

        }
    }
    else if ($radioVal == "Others" && trim($fullname) != '' && trim($donateamt) != '')
    {
        
        $query="INSERT INTO `donordonation`(`fullname`,`projectname`,`amount`) VALUES ('$fullname','$projectname','$donateamt')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
        //echo "Data inserted into Database";
        echo '<script>alert("Amount Transfered Successfully")</script>';

        header("Location:rewards.php"); 
        }
        else
        {

        echo " Failed to insert Data into Database";

        }
    }


    else {
        echo '<script>alert("Please Fill your details correctly")</script>';
    }


  }
?>
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Main CSS-->
    <link rel="stylesheet" href="css/donationpage.css">
    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!--google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Animate.css--->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  </head>
  <body>
      <!---Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light nav-bg fixed-top py-2"
      id="mainNav">
      <div class="container">
          <a class="navbar-brand text-white"href="#">AI HackDot</a>
          <button class="navbar-toggler navbar-toggler-right"type="button"
          data-toggle="collapse"data-target="#myNavbar"aria-controls="myNavbar"aria-expanded="false"aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
        </nav>

      <!---End of Navbar-->
      <!--Hero Section-->
      <section id="hero" class="d-flex justify-content-center align-items-center">
          <div id="heroCarousel"class="container carousel carousel-fade"
          data-ride="carousel">
        <!--Slide-1-->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__backInDown">
                    Ramesh Chavla
                </h2>
                <p class="animate__animated animate__fadeInUp">
                    <img src="img/Autorickshaw.jpg" alt="Autorickshaw" width="300px" height="300px"><br><br>
                    A generuos request to all the donors i have been working hard to earn for my family and i have am collecting money for the same. Please do help me.
                </p>
                <a href="#"class="btn hero-btn animate__animated animate__backInUp">
                    Read More
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <!--Slide-1-->
        <div class="carousel-item">

            <div class="carousel-container">
                <h2 class="animate__animated animate__backInDown">
                    <span>Let's Help By Donating Him </span>
                </h2>
                <!-- <p class="animate__animated animate__fadeInUp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure beatae alias quod, ducimus explicabo.
                    adipisicing elit. 
                </p> -->
                <a href="#"class="btn hero-btn animate__animated animate__backInUp">
                    Read More
                </a>
            </div>
        </div>
        <!--End of Slide-1-->
        <a class="carousel-control-prev"href="#heroCarousel"role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon fas fa-chevron-left"aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    
    </a>
    <a class="carousel-control-next"href="#heroCarousel"role="button"
        data-slide="next">
        <span class="carousel-control-next-icon fas fa-chevron-right"aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    
    </a>
        
        </div>
      </section>

      <!--end of hero Section-->
<!---Donation Section--> 

<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-55">
                    <h3>Make a Donation</h3>
                </div>
            </div>
        </div>

        <div class="modal-wrapper">
  <div class="modal">
    <div class="head">
      <a class="btn-close trigger" href="#">
        <i class="fa fa-times" aria-hidden="true"></i>
      </a>
    </div>
    <div class="content">
        <div class="good-job">
          <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
          <h1>Good Job!</h1>
        </div>
    </div>
  </div>
</div>


        <!---->
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <form class="donation-form" method="post" action="donationpage.php">
            <div class="amount">
                        <div class="input-field">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">Full Name</span></div>   
                                <input type="text" name="fullname" class="form-control"placeholder="Enter your Full Name"
                                aria-label="Username">
                            </div>
                        </div>
                    </div>
               <div class="row align-items-center">
                <div class="col-md-4">
             <div class="amount">
           <div class="input-field">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">₹</span></div>
                       
                             
                        <input type="text" name="donateamt" class="form-control"placeholder="Amount" 
                        aria-label="Username">


                     </div>
                                </div>
                            </div>
                        </div>

                        <!----->
                        <div class="col-md-8">
                         <div class="amount">
                       <div class="need d-flex align-items-center
                        justify-content-between">
                        <div class="select">
                            <h5>Select Amount</h5>
                        </div><br>
                        <div class="funds">
                            <input type="radio"name="MyRadio" value="First" checked>
                            <label for="fund-1">100Rs</label>
                        </div>
                        <div class="funds">
                            <input type="radio"name="MyRadio" value="Second">
                            <label for="fund-2">500Rs</label>
                        </div>
                        <div class="funds">
                            <input type="radio"name="MyRadio" value="Others">
                            <label for="Other">Other</label>
                        </div>

                    
                    </div>
                       
                            </div>
                        </div>
                    </div>
                        <div class="row mb-3">
                        <div class="col-12">
                        <div class="donation-btn text-center">
                        <div class="page-wrapper">
                        <button type="submit"  name="submitdon" class="btn btn-don">Donate Now</button>
                        </div>
                        </div>
                        </div>
                        </div>
                </form>
            </div>
        </div>

        </div>
    </div>
</section>


<script>
        var value = 0, 
        tb = document.getElementById("tb"),
        progress = document.getElementById("progress"); //store these, it's better
        function increase(){ 
            value++;// same as value += 1, but better
            if(value>=100) value = 100;//keep it under 100%
            tb.value = value;// set the value of the text field     
            progress.style.width = value + "%";// set the width of the progress bar
        } 
        function decrease(){ 
            value--;
            if(value<=0) value = 0;//keep it over 0%
            tb.value = value; 
            progress.style.width = value + "%";
        }
            $( document ).ready(function() {
            $('.trigger').on('click', function() {
            $('.modal-wrapper').toggleClass('open');
            $('.page-wrapper').toggleClass('blur-it');
            return false;
            });
            });
</script>
<!---End of Donation section Section-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>