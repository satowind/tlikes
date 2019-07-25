<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    	<link rel="stylesheet" type = "text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
       
	<script type = "text/javascript" src = "js/jquery.min.js"></script>	
	<script type = "text/javascript" src = "js/jquery-ui.min.js"></script>	
	<script type = "text/javascript" src="js/jTextEffect.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<script type= "text/javascript">
	$(document).ready(function(){
	
		$(".flexNticker").jTextEffect({animationTime : '1000',  //Time for each animation. If you want it to be occured just once. set it to '0' 
																interval : '2000',  	// The delay between two animations. 'animationTime' must be less then 'interval'
																textSource : '.flexNticker ul.data>li'   // Source of the texts.
																});

	})
	
	
	</script>

    <title>tlikes - t-likes Coming Soon</title>

    <style>
        body { 
            background-color: #f3f3f3; 
            }

          

    </style>

    <script>
        var colors = ['255,103,103', '97,223,255', '255,232,88', '141,255,139','0,0,0','50, 122, 39','84, 15, 69'];
    </script>

</head>

<body>
<div class="page-wrapper">
    <header>
        <div class="brand animate"><a href=""><img style="border-radius: 30px" width="80px" src="assets/img/logo.png" alt=""></a></div>
        <nav>
            <ul class="navigation animate">
                <!-- <li><a href="" data-toggle="modal" data-target="#modal-about-us">About Us</a></li> -->
                <li class='hidden-sm hidden-xs hidden-md' ><a href="" data-toggle="modal" style='font-size:1.5em; text-decoration:none' data-target="#modal-servics">Click Here <span style='font-size:2em' > ☞ </span></a> </li>
                <li class='hidden-lg' ><a href="" data-toggle="modal" style='font-size:1.5em; text-decoration:none' data-target="#modal-services">Click Here <span style='font-size:2em' > ☟ </span></a> </li>    
                <li><a href="" data-toggle="modal" data-target="#modal-services"><img src="assets/img/playstore-footer.png" alt="Download Android" width="100px"></a></li>
                <li><a href="" data-toggle="modal" data-target="#modal-services"><img src="assets/img/appstore-footer.png" alt="Download ios" width="100px"></a></li>
            </ul>
            <!--end navigation-->
        </nav>
    </header>

    


    <div class="content-wrapper">
        <div class="content-main animate">
            <div class="container">
                <div class="center count-down animate" data-countdown-year="2018" data-countdown-month="9" data-countdown-day="1"></div>
                <h1 class="font-size-90">Get Ready!</h1>
                <h1 class="opacity-60" style='color:rgb(84, 15, 69)'>  
                                                  Something Awesome is Coming Soon     
                    <!-- <div class = "flexNticker">
                        <div class = "ticker"></div>		
                        <ul class = "data">
                            <li data-anim = "type1"></li>
                            <li data-anim = "type2">Tlikes Special social media app</li>
                            <li data-anim = "type3">Earn as you Socializse</li>                            
                        </ul>
                    </div> -->
                </h1>
           </div>
            <!--end container-->
        </div>
        <!--end content-main-->
        <div class="background-wrapper">
            <canvas id="background-content"></canvas>
        </div>
        <!--end background-wrapper-->
    </div>

    
    <!--end content-wrapper-->
    <footer>
        <div class="social-icons animate">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
        </div>
        <!--end social-icons-->
    </footer>
</div>
<!--end page-wrapper-->

<!-- Modal About Us -->

<!--end #modal-about-us-->

<!-- Modal Our Works -->

<!--end #modal-our-works-->

<!-- Modal Services -->
<div class="modal fade" id="modal-services" tabindex="-1" role="dialog" aria-labelledby="modal-services-label">
    <div class="modal-dialog" role="document" style='
    width: 90%;'>
        <div class="container">
            <div class="modal-content">
                <div class="modal-header" data-background-color="#540f45">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="modal-services-label" style="color: #f3f3f3">Join the new wave of Social network</h2>
                </div>
                <div class="modal-body">
                    <div class="row" style="border:none">
                       <div class="col-sm-8 col-sm-offset-2">

                        <form id="theForm" target="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Full Name</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Full Name" required>
                                <small id="nameHelp" class="form-text text-muted">We'll never share your data anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone Number</label>
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone number" required>
                                <small id="numberHelp" class="form-text text-muted">We'll send the app link to your phone when is ready.</small>

                            </div>

                            <div class="form-group">
                                    <label for="exampleInputPassword1">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll send the app link to your Email when is ready.</small>

                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Would you like to attend our launch party in Eko Hotel?</label>
                                <select class="form-control" id="attending" name="attending" value="true">
                                    <option value="yes">Yes, of course</option>
                                    <option value="no">No, I'm not a party person</option>

                                </select>
                                <small id="askHelp" class="form-text text-muted">It will take place at Eko Hotels</small>

                            </div>


                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Tlikes Giveaway</h4>
                            <p>The first 500 sign up get ₦1000 to Their account from Tlikes</p>
                        </div>
                    </div>
                    <div class="col-md-12" style="text-align: center;" class="modal-footer">
                        <button id="join" onclick='submitForm()'  style="background-color: #540f45 !important;" type="button" class="btn btn-primary highestS">Join the waitlist</button>
                    </div>
                </form>
                       </div>
                    </div>
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end container-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end #modal-services-->

<!-- Modal Contact Us -->

<!--end #modal-contact-us-->



<!-- <script  src="assets/js/jquery-2.2.1.min.js"></script> -->
<script  src="http://maps.google.com/maps/api/js"></script>
<script  src="assets/bootstrap/js/bootstrap.min.js"></script>
<script  src="assets/js/jquery.validate.min.js"></script>
<script  src="assets/js/jquery.magnific-popup.min.js"></script>
<script  src="assets/js/jquery.plugin.min.js"></script>
<script  src="assets/js/jquery.countdown.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenLite.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/easing/EasePack.min.js"></script>
<script  src="assets/js/exploding-triangles.js"></script>
<script  src="assets/js/custom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script>

    //  Map

    var latitude = 34.038405;
    var longitude = -117.946944;
    var markerImage = "assets/img/map-marker.png";
    var mapTheme = "light";
    var mapElement = "map";

    $(".modal").on("shown.bs.modal", function (e) {
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme, mapElement));
    });

    // Background
</script>

<script>
    function submitForm(){
        var name = $('#name').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var attending = $('#attending').val();

        if ( name == '' || phone == '' || email == ''){
            $.alert({
                title: 'Alert!',
                content: 'Please Fill all the fields!',
            });
        } else{

            $.confirm({
                title: 'Confirm!',
                content: 'Thank You for trying to subscribe we will send you the apps when is ready',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            type: 'POST',
                            url: "assets/php/email.php",
                            dataType:'text',
                            data: {
                                phone:phone,
                                email:email,
                                attending:attending,
                                name:name
                            },
                            
                            error: function() {
                                $.alert({
                                    title: 'Alert!',
                                    content: 'Unable to send your info please try again!',
                                });
                            },
                             
                            success: function(res) {
                                $.alert({
                                    title: 'Alert!',
                                    content: 'Your details have been captured and we will get back to you!',
                                });
                            },
                        });
                    },
                    cancel: function () {
                        $.alert({
                            title: 'Alert!',
                            content: 'Please send the detail and we promise not to share them!',
                        });
                    }
                }
            });
        }
    }
    
</script>

<script type="text/javascript">
    $(window).on('load',setTimeout( function(){
        $('#modal-services').modal('show');
    },1000));
</script>

</body>


