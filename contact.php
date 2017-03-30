<?php
if(isset($_POST['contact_submit'])) {
  $contact_name = $_POST['contact_name'];
  $contact_email = $_POST['contact_email'];
  $contact_subject = $_POST['contact_subject'];
  $contact_message = $_POST['contact_message'];
  $email_subject = "CONTACTUS DETAILS";
  $to = "senthilvelan@zoho.com";
  // $to = "info@etekchnoservices.com";

  $headers = "From: " . $contact_email . "\r\n";
  $headers .= "Reply-To: ". $contact_email . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $message = "<html> <body> <h2 style='text-align:center;color:green;'> Contact Details </h2> <table style='background: #f9f9f9;margin: 0 auto;'> <tr> <th style='padding:10px 20px;'>  Name </th> <td style='padding:10px 20px;color: #00b3fe;'> ".$contact_name." </td> </tr> <tr> <th style='padding:10px 20px;'>  Email </th> <td style='padding:10px 20px;color: #00b3fe;'> ".$contact_email." </td> </tr> <tr> <th style='padding:10px 20px;'>  Subject </th> <td style='padding:10px 20px;color: #00b3fe;'> ".$contact_subject." </td> </tr> <tr> <th style='padding:10px 20px;'> Message </th> <td style='padding:10px 20px;color: #00b3fe;'> ".$contact_message." </td> </tr> </table> </body> </html>";
  mail($to, $email_subject, $message, $headers);  	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="ksr_fav.ico">
    <title>KSR</title>
    <!-- Css  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Script  -->
    <script src="assets/js/modernizr.js"></script>
  </head>
  <body>
 	<!-- Fixed navbar -->
   
	<?php include('assets/include/header.php'); ?>	

	<!-- **************	 Header	************** -->
	<div id="blue" class="contact_blue">
	    <div class="container">
			<div class="row">
				<h3>Contact Us.</h3>
			</div><!-- row -->
	    </div> <!-- container -->
	</div><!-- blue -->

	<!-- **************  Map Area  ************** -->
	<div id="map_area"></div>
	<!-- **************	 Contact Form  ************** -->
	<div class="container mtb">
		<div class="row">
	 		<div class="col-lg-8">
	 			<h4>Just Get In Touch!</h4>
	 			<div class="hline"></div>
		 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		 			<p class="success"> Mail Sent Successfully  </p>
		 			<p class="empty_error_msg"> Please fill all required(*) fields  </p>
		 			<p class="email_error_msg"> Please enter valid email address  </p>
		 			
		 			<!-- <p class="$responsemessage"></p> -->
		 			
		 			<!-- <?php if($responsemessage) echo $responsemessage; ?> -->
		 			<form role="form" method="post" id="contact_us_form">
					  <div class="form-group">
					    <label for="InputName1">Your Name</label>
					    <input type="text" class="form-control" id="contact_name" name="contact_name">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">Email address</label>
					    <input type="text" class="form-control" id="contact_email" name="contact_email">
					  </div>
					  <div class="form-group">
					    <label for="InputSubject1">Subject</label>
					    <input type="text" class="form-control" id="contact_subject" name="contact_subject">
					  </div>
					  <div class="form-group">
					  	<label for="message1">Message</label>
					  	<textarea class="form-control" id="contact_message" rows="3" name="contact_message"></textarea>
					  </div>
					  <button type="submit" class="btn btn-theme" name="contact_submit">Submit</button>
					</form>
			</div><!--col-lg-8 -->
	 		
	 		<div class="col-lg-4">
		 		<h4>Our Address</h4>
		 		<div class="hline"></div>
		 			<p>       
		 				No : 31/2,<br/> 
		 				RV Nagar, <br/>		 				
		 				Chennai - 600083<br/>
		 				Contact no: 044-43565999 / 7200033382
		 			</p>
		 			<p>
		 				Email: <a href="mailto:write2ksrdeveloper@gmail.com">write2ksrdeveloper@gmail.com</a><br/>
		 				
		 			</p>
		 			<p>
		 				Website: <a href="http://etekchnoservices.com/ksrv3/">www.etekchnoservices.com/ksrv3</a><br/>
		 				
		 			</p>
	 		</div>
	 	</div><!--row -->
	 </div><!--container -->
	 <!-- **************	 Footer  ************** -->
	 <?php include('assets/include/footer.php'); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>

  	 <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="application/javascript">
            function initialize() {
              var mapOptions = {
                zoom: 17,
                scrollwheel: false,
                center: new google.maps.LatLng(13.029710, 80.209105)
              };

              var map = new google.maps.Map(document.getElementById('map_area'), mapOptions);
			var contentString = '<div id="content">'+
		      	'<div id="siteNotice">'+
		     	'</div>'+
		     	'<div id="bodyContent">'+
		      	'<p><b>KSR Developer</b></p>'+
		      	'<p>No : 31/2,RV Nagar,Chennai - 600083</p>'+
		      	'<p>write2ksrdeveloper@gmail.com</p>'+
		      	'<p>044-43565999 / 7200033382</p>'+
		      	'</div>'+
		      	'</div>';
		  		var infowindow = new google.maps.InfoWindow({
		      		content: contentString
		  		});

              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'assets/img/map-marker.png',
                map: map,
                title: 'KSR Developer'
              });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
            
        </script>
  </body>
</html>