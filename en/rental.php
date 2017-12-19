<?php
// inclusion du fichier permettant le changement de langue
	include('../script_lang.php');
	
// ouverture de la base de donnee
	#require_once('../erp/connect_to_bd.php');
	
	#$project=mysql_query('SELECT * FROM projet  where active=1 AND  supprimer = 0 ORDER BY id DESC');
	

?>
<!DOCTYPE html>
<html lang="en-US"><head>
<?php include ('../meta.php');?>


 <style>
      #map_canvas {
        width: 100%;
        height: 300px;
      }
</style>
 <script type="text/javascript" src="../jquery/jquery.js" ></script>
 <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    
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
   <style>
       .lx {
  
  background-color: #fff;
  border: 1px solid #0DA5E2;
  border-radius: 0px;
  -webkit-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
}
        .t {
  margin-top: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 0px;
  -webkit-transition: all .2s ease-in-out;
          transition: all .2s ease-in-out;
}
	
	.at > img,
	.at a > img {
                margin-top: 0%; margin-bottom: auto;
  		margin-right: auto;
  		margin-left: auto;
                max-width:90%;
                max-height:90%;
		
               
            
	}
	.ed > img,
	.ed a > img {
                margin-top: 0%; margin-bottom: auto;
  		margin-right: auto;
  		margin-left: auto;
                /* max-width:100%;
                max-height:100%;*/
             border: 0.1em solid #f1f1f1;
	}
        .st > img,
	.st a > img {
                margin-top: 22%; margin-bottom: 22%;
  		margin-right: auto;
  		margin-left: auto;
                max-width:100%;
                max-height:100%;
		
	}
        .bv > img,
	.bv a > img {
                margin-top: 0%; margin-bottom: auto;
  		margin-right: auto;
  		margin-left: auto;
                max-width:67%;
                max-height:67%;
		
            
	}
        .hd > img,
	.hd a > img {
                margin-top:25%; margin-bottom: 25%;
  		margin-right: auto;
  		margin-left: auto;
                max-width:100%;
                max-height:100%;
             
	}
        .iv > img,
	.iv a > img {
                margin-top: 34%; margin-bottom: 33%;
  		margin-right: auto;
  		margin-left: auto;
                max-width:100%;
                max-height:100%;
               
	}
	</style>
</head>

<body data-spy="scroll" data-offset="0" data-target="#theMenu" style="background-color: #e6e6e6;">

<?php include ('header.php');?> <!-- navbar navbar-default -->

<section>

<div class="col-md-12 col-sm-offset-0 iemsg" id="msg" style="margin-top:0px">
			  	<div class="col-md-4 col-md-offset-4 text-justify">
					<div class="text-center visible-lg visible-md"  style="margin-top:0px">
                                    			<strong class="cap-txt">TK Offices:</strong>
                                    			<span class="low-txt1"><i class="fa fa-quote-left "></i>Your rent...re-defined <i class="fa fa-quote-right "></i></span>
                                		</div>
					<div class="text-center visible-sm visible-xs"  >
                                    			<strong class="cap-txt" style="font-size:90%" >TK Offices:</strong>
                                    			<span class="low-txt1" style="font-size:90%"><i class="fa fa-quote-left "></i>Your rent...re-defined<i class="fa fa-quote-right "></i></span>
                                		</div>
					
				</div>
</div>
</section>
 <section class="" >
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
					<div class="clearfix"></div>
						<div class="col-md-8" style="margin-top:25px;">
						
						
                        <div class="col-md-12 col-md-offset-0">
	

            	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="border:1px solid #000405;">
    <div class="item active" style="max-height: 670px;">
      <img  src="../img/gallery/Outside_05.jpg" alt="FRONT VIEW" width=100%>
      <div class="carousel-caption2 visible-lg visible-md visible-sm  visible-xs">
       <strong >Serviced offices from  9500FCFA <span class="text-center" style="color:#9fbfea; font-size:20px;"><p>&nbsp;</p><p>Per sqm per month</p></span></strong>                   
      </div>
    </div>
   <div class="item " style="max-height: 670px;">
       <img  src="../img/project/Single.jpg" alt="BACK" width=100%>
       <div class="carousel-caption1 visible-lg visible-md visible-sm visible-xs">
       <strong>Single floor occupancy</strong>                    
      </div>
	  <div class="carousel-caption3 visible-lg visible-md visible-sm  visible-xs">
        <strong > From 9500FCFA /sqm/month</strong>                  
      </div>
    </div>
 <!--div class="item " style="max-height: 670px;">
      <img  src="../img/project/Double.jpg" alt="SIDE VIEW" width=100%>
       <div class="carousel-caption1 visible-lg visible-md visible-sm visible-xs">
       <strong>Double tenant occupancy</strong>                    
      </div>
	  <div class="carousel-caption3 visible-lg visible-md visible-sm  visible-xs">
        <strong >From  9500 FCFA /sqm/month</strong>                    
      </div>
    </div-->

    <div class="item" style="max-height: 670px;">
      <img  src="../img/gallery/outside_04.jpg" alt="FRONT VIEW" width=100%>
      <div class="carousel-caption2 visible-lg visible-md visible-sm  visible-xs">
       <strong >Call +237 680 99 00 55 <p>&nbsp;</p><p>Start Today!!</p></strong>                   
      </div>
    </div>


  <!-- Controls -->
 
</div>

 <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>
</div>


					 </div>
					 <div class="col-md-4" style="margin-top:25px">
                      
                         <div class="col-md-12 col-xs-12" style="margin-top:55px;border: 1px solid #a9a9a9;" >	
							<p class="no-img" style="">
				   			<p><h3><strong>&nbsp;</strong></h3></p>
                          
                            <div class="text-center banners" style="">
                            	      
                                <div class="text-center"  style="">
                                    			<strong class="cap-txt2 text-center" style=" color:#3f4c6b">Have you made your mind?</strong>
							
                                		</div>
                                <div class="text-center"  style="margin-top:12%">
                                    			<a href="contact.php" class="btn btn-primary" style=" font-style:normal;margin-top:40px;background-color:#3f4c6b;border-color:#3f4c6b">APPLY NOW</a>
							
                                		</div>
                                <div class="text-center"  style="margin-top:10%; margin-bottom:7%">
                                    			<span class="low-txt1 text-center" style="color:#3f4c6b">Infoline: +237 680 99 00 55 </span>
							
                                		</div>
                            </div>
                      
			
                        </p> </div>	
						</div>
					
		
								
		<!--<div class="col-md-12" style="margin-top:5%">
                        <h5 class="section-title visible-md visible-lg"></h5>
			 <h6 class="section-title visible-sm visible-xs"></h6>
       


<div class="col-md-3 visible-md visible-lg">
    
</div>
 
                  
                       
                    </div>
				 <div class="clearfix"></div>	-->
					
					 <div class="clearfix"></div>
					
			
					
</div>

		<!--	<div class="col-md-10 col-md-offset-1 " id="our">
                       <p class="no-img text-justify visible-md visible-lg visible-sm" style="font-size:16px;color:#3f4c6b;text-transform:italic">  Les confugartions  par &eacute;tage (single ou double) sont adaptables aux besoins des clients . 
			</p>
			<p class="no-img text-justify visible-xs" style="font-size:12px;color:#3f4c6b;text-transform:italic">   Les confugartions  par &eacute;tage (single ou double) sont adaptables aux besoins des clients .
			</p>
		<div class="col-md-12 col-md-offset-0 text-center">
                        <div class="text-center">
			
                      <a href="contact.php" class="btn btn-primary" style=" font-style:normal;margin-top:40px;background-color:#0DA5E2;border-color:#0DA5E2">RESERVER</a>

			
                         </div>
                     		
		</div>

                       
	</div>-->
 </div>
 
 

 
 
 
			
			
 		   </div>
	     </div>	          
       </div>

            <div class="container">
                <div class="row ">

                    
                        
                       
                                    </div> <!-- row -->
            </div> <!-- container -->

          
</section> 



    
    <div class="container">
            </div>

 
    
<?php include("footer.php");?>

    <!-- Scripts -->
    <script src="../jquery/jquery.js"></script>
    <script src="../jquery/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    
    <script src="../jquery/app-plugin.js"></script>
    <script src="../jquery/smoothscroll.js"></script>
    <script src="../jquery/main.js"></script>
	
	  <script>
	$(document).ready(function () {
   	 $('.btn').popover('show');
	});



   </script>

<script>     
	$(function (){    $("#carousel-example-generic").mouseover(function() {   $(".carousel-control").show(); });     
	$("#carousel-example-generic").mouseout(function() {         $(".carousel-control").hide();  });   });
        $("#alert").popover({placement : 'top'});
    </script>

</body></html>
