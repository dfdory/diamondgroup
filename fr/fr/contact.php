<?php
// inclusion du fichier permettant le changement de langue
	include('../script_lang.php');
?>
<!DOCTYPE html>
<html lang="en-US"><head>
<?php include('../meta.php');?>
 <style>
      #map_canvas {
        width: 100%;
        height: 300px;
      }
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
function initialize() {
  var mapCanvas = document.getElementById('map_canvas');
  var  myLatlng = new google.maps.LatLng(3.872000, 11.529028);
  var mapOptions = {
    zoom: 15,
    center: myLatlng
  }
  var map = new google.maps.Map(mapCanvas, mapOptions)
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: ''
  });
  var infoWindowOptions = {
      content : 'TK Offices '

  };
  var infoWindow = new google.maps.InfoWindow(infoWindowOptions);
      google.maps.event.addListener(marker, 'mouseover',function(e){

		infoWindow.open(map, marker)

		 });

  

}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

<body data-spy="scroll" data-offset="0" data-target=".theMenu" style="background-color: #e6e6e6;">

<?php include('header.php');?> <!-- navbar navbar-default -->
<section>

      <div class="container">
             <div class="row">
		  
         <div class="col-md-10 col-md-offset-1">
		
                        <div class="col-md-8 col-md-offset-2 text-left" style="margin-top:5px">
          
          
		<h4 class="txt">Formulaire de contact </h4>
				
 <form class="form-horizontal"  method="post" action="envoi_contact.php">
     
  <fieldset >
   
   <div class="form-group" style="margin-bottom:20px;border-radius:15px;">
     
      <div class="col-md-8">
        <input type="text" name="nom" class="form-control input-sm" id=""  placeholder="Nom de l&rsquo;entreprise ( * ) ">
        
      </div>
    </div>
	<div class="form-group" style="margin-bottom:20px;border-radius:15px;">
     
      <div class="col-md-8">
        <input type="text" name="phone" class="form-control input-sm" id=""  placeholder="Votre telephone ( * ) ">
        
      </div>
    </div>
     <div class="form-group" style="margin-bottom:20px;border-radius:15px;">
     
      <div class="col-md-8">
        <input type="email" name="email" class="form-control input-sm" id=""  placeholder="Votre e-mail ( * )">
        
      </div>
    </div>
    <div class="form-group" style="margin-bottom:20px;border-radius:15px;">
     
      <div class="col-md-8">
        <input type="text" name="objet" class="form-control input-sm" id=""  placeholder="Objet">
        
      </div>
    </div>
     <div class="form-group" style="margin-bottom:20px;border-radius:15px;">
     
      <div class="col-md-12">
        <textarea class="form-control text-left input-sm" for="inputEmail" name="message" rows="8"  placeholder="Message"></textarea>
        
      </div>
    </div>
   
    <div class="form-group" >
      <div class="col-md-6 col-md-offset-3">
	 <button type="" class="col-md-2 btn btn-primary btn-sm " id="btn-news" style="width:90px;border-radius:0px 0px 0px 0px">Annuler</button>
        <button type="submit" class="col-md-2 btn btn-primary btn-sm " id="btn-news" style="width:90px;border-radius:0px 0px 0px 0px;margin-left:25px">soumettre</button>
      </div>
    </div>
    
  </fieldset>
</form>



		</div>


         

		    <div class="col-md-4" style="margin-top:30px">

                             <h5 class="txt"><strong>Nous contacter</strong></h5>
					<div class="col-md-12 col-md-offset-0" style="margin-left:0px;">
						<span class="pull-left" href="">
                         				<i class="fa fa-home"></i>
                 				</span>
						<span class="sci-contact" style="font-size:80%;margin-left:10px">
							B.P 5736 Douala Cameroun
						</span>	
				
					</div>
					<div class="col-md-12 col-md-offset-0" style="margin-left:0px;">
						<span class="pull-left" href="">
                         				<i class="fa fa-envelope"> </i>
                 				</span>
                 		
						<span class="sci-contact" style="font-size:80%;margin-left:10px">infos@diamondgroup.cm</span>
			
				
					</div>
					<div class="col-md-12 col-md-offset-0" style="margin-left:0px;">
						<span class="pull-left" href="">
                        		 		<i class="fa fa-envelope"></i>
                 				</span>               
                             			<span class="sci-contact" style="font-size:80%;margin-left:10px">sales@diamondgroup.cm</span>
				
				
					</div>
					<div class="col-md-12 col-md-offset-0" style="margin-left:0px;">
						<span class="pull-left" href="">
                        		 		<i class="fa fa-phone"></i>
                 				</span>               
                             			<span class="sci-contact" style="font-size:80%;margin-left:10px">+237 680 99 0055</span>
				
				
					</div>
					<div class="col-md-12 col-md-offset-0" style="margin-left:0px;">
						<span class="pull-left" href="">
                        		 		<i style="font-size:130%;margin-left:2px;color:#1271EB" class="fa fa-facebook"></i>
                 				</span>               
                             			<a target="_blank" href="https://www.facebook.com/diamondgroup.cm" style="text-decoration:none;margin-left:15px"><span class="sci-contact" style="font-size:80%;margin-left:0px">facebook/diamondgroup.cm </span></a>
				
				
					</div>
			 
                        
                  
                    	</div>
	<div class="col-md-8" style="margin-top:25px">
  	    <h5 class="txt"><strong>Localisation</strong></h5>
 		<div class="map" style="border: 1px solid #a9a9a9;margin-top:25px">
                	<div id="map_canvas"></div>

		</div>
	</div>

 		   </div>
	     </div>	          
       </div>
		

 		   </div>
	     </div>	          
       </div>
</section>       





    <div class="container">
            </div>
 
       
<?php include ('footer.php');?>

   <!-- Scripts -->


    <script src="../jquery/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../jquery/app-plugin.js"></script>
    <script src="../jquery/smoothscroll.js"></script>
    <script src="../jquery/main.js"></script>
   
</body></html>
