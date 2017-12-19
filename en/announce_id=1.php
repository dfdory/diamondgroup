<?php
	include('../script_lang.php');
	require_once('../erp/connect_to_bd.php');
	$project='';
	if(!isset($_GET['xsdcfgg'])){
		$project=2;}
	else{
		$project=$_GET['xsdcfgg'];
		}
	
	
	$description=mysql_query("select *  from annonce where annonce.id=$project");
	//echo ("select *  from annonce where annonce.id=$project");
	$row=mysql_fetch_array($description);
	$img_projet=mysql_query("select* from galerie where id_annonce=$project order by id DESC limit 0,1");
	
	$row_img =mysql_fetch_array($img_projet);
	//echo $description['text_FR'].'ppppp';
	$annonce= mysql_query('SELECT * FROM annonce where active=1 AND  supprimer = 0 ORDER BY id DESC LIMIT 0 , 5');
	$annonce_all=mysql_query('SELECT * FROM annonce where active=1 AND  supprimer = 0 ORDER BY id DESC');
	//echo ('SELECT * FROM annonce ORDER BY id DESC LIMIT 2 , 4');
	//$annonce2=mysql_query('SELECT * FROM annonce ORDER BY id DESC LIMIT 4 , 2');
?>
<?php
function myTruncate($string, $limit, $break=".", $pad="...") { if(strlen($string) <= $limit) return $string;
if(false !== ($breakpoint = strpos($string, $break, $limit))) { if($breakpoint < strlen($string) - 1) { $string = substr($string, 0, $breakpoint) . $pad; } } return $string; }
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<?php include('../meta.php');?>
<style type="text/css"> 
#announce {  min-height:95%;} 
.verti {
  padding: 1px 20px;
  margin: 0 0 10px;
  font-size: 15.5px;
  border-left: 2px solid #4E646F;
  background-color:transparent;
  color:#4CC2FB;
}
.verti0 {
  padding: 1px 20px;
  margin: 0 0 10px;
  font-size: 12.5px;
 
  background-color:transparent;
  color:#4CC2FB;
}
.section-date {
  
  color:  #4E646F;
 
}

</style>
</head>

<body data-spy="scroll" data-offset="0" data-target=".theMenu" style="background-color: #e6e6e6;">

    <?php include('header.php');?> 




<section id="announce" >
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="col-md-8" style="margin-top:30px;">
<div class="col-sm-12 col-xs-12 text-center ">  
          <div class="row">
          	<div class="col-sm-12  text-left">



 <div class="section-date visible-lg visible-md visible-sm" style="font-size:110%"> 

<div class="col-sm-2  pull-left">

<span style="margin-right:1% ;pull-left" > 

29 Oct
 

</span>  



</div>
<div class="col-sm-10">
<span class="verti ">

TK Offices project: Useful informations 

</span>
	
</div>
			





</div>




			 <div class="section-date  visible-xs" style="font-size:110%"> 


<span style="margin-right:20px"> 

29 Oct


</span>
<span class="verti0">

TK Offices project: Useful informations 

</span>



</div>
		</div>
          </div>
</div>
                             
<div class="col-sm-12 text-left " style="padding-top:3%;" > 

<img src="../img/gallery/outside_05.jpg"  height="5%" width="30%" alt="" class="img-responsive alignleft imageborder size-full wp-image-72 img-responsive">

          
                         <p class="no-img text-left" style="color:#000 ;margin-bottom:1% ;padding-left:2%;font-size:90%"> 
<i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;padding-left:2%;margin-top:10px;"></i> Site acquisition as well as all architectural, engineering and regulatory studies have been completed by Q3 2013, leading to the award of building license 305/PB/013 by Yaounde Urban Council </br> 

<i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;padding-left:2%;margin-top:10px;"></i> Project financing has been fully secured with a 75% participation from Attijariwafa bank of Cameroon (SCB) with the remaining 25% funded by the SCI Diamond Group </br>

<i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;padding-left:2%;margin-top:10px;"></i> Effective construction works were started April 15th 2014 for an expected duration of eight (8) months </br>
				

<i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;padding-left:2%;margin-top:10px;"></i> Estimated date of commercial opening is <strong> February 16th, 2015 </strong> </br>
				
<i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;padding-left:2%;margin-top:10px;"></i> Proposed rental conditions include a rate of 9,000XAF/square meter for a usable space of 292m2 per floor and a minimum rental duration of three (3) years </br>

<i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;padding-left:2%;margin-top:10px;"></i> Minor and/or cosmetic design changes are evaluated on a case by case basis for committed tenants </br>



</p>
 <h1 class=""  ></h1>
                      
</div>
 
                             
                       
                    </div>
		<div class="col-md-4" >
                        
                           <h5 class="section-titlex visible-md visible-lg">All News</h5>
			  <h6 class="section-titlex visible-xs visible-sm " style="padding-top:7%">All News </h6> 
			

                         
<div class="media cal visible-sm visible-xs" style="font-size:85%" style="color:#4E646F;font-size:90%">
                 		<div class="pull-left"><i class="fa fa-calendar-o fa-2x" style="color:#4E646F"> </i></div>
		 		     <div class="pull-left"><span class="">
									29
								</span>
								<span class=""> 

									Oct





								</span>
					</div></br>
                            		<div class="media-body">
                                <h6 class="media-heading" style="color:#000"><a href="announce_id=1.php">TK Offices project: Useful informations </a></h6>
                                <p class="no-img text-justify" style="color:#000;font-size:90%">Site acquisition as well as all architectural, engineering and regulatory studies have been completed by Q3 2013, leading to the award of building license 305/PB/013 by Yaounde Urban Council ...</p>

  
               
                            </div>

       				</div>
                 
			<div class="media cal visible-md visible-lg" style="color:#4E646F;font-size:90%">
                 		<div class="pull-left"><i class="fa fa-calendar-o fa-2x" style="color:#4E646F"> </i></div>
		 		     <div class="pull-left"><span class="">
									29
								</span>
								<span class=""> 

									Oct




								</span>
					</div></br>
                            		<div class="media-body">
                                <h6 class="media-heading" style="color:#000;font-size:90%"><a href="announce_id=1.php"> TK Offices project: Useful informations </a></h6>
                                <p class="no-img text-justify" style="color:#000">Site acquisition as well as all architectural, engineering and regulatory studies have been completed by Q3 2013, leading to the award of building license 305/PB/013 by Yaounde Urban Council ...</p>

  
               
                            </div>

       				</div>
<div class="media cal visible-sm visible-xs" style="font-size:85%" style="color:#4E646F;font-size:90%">
                 		<div class="pull-left"><i class="fa fa-calendar-o fa-2x" style="color:#4E646F"> </i></div>
		 		     <div class="pull-left"><span class="">
									18
								</span>
								<span class=""> 

									Sep





								</span>
					</div></br>
                            		<div class="media-body">
                                <h6 class="media-heading" style="color:#000"><a href="announce_id=2.php">Learn more about the French standards for ERP
 </a></h6>
                                <p class="no-img text-justify" style="color:#000;font-size:90%">ERP definition under Article R123-2 the Code of Construction and Housing:
 «The public buildings are spaces where people are allowed, either freely or for a fee, in which are organized meetings open to all comers or by invitation, paid or not. The audience consists of all persons admitted to the building for any reason whatsoever in addition to staff. »
 ...</p>

  
               
                            </div>

       				</div>
                 
			<div class="media cal visible-md visible-lg" style="color:#4E646F">
                 		<div class="pull-left"><i class="fa fa-calendar-o fa-2x" style="color:#4E646F"> </i></div>
		 		     <div class="pull-left"><span class="">
									18
								</span>
								<span class=""> 

									Sep




								</span>
					</div></br>
                            		<div class="media-body">
                                <h6 class="media-heading" style="color:#000;font-size:90%"><a href="announce_id=2.php"> Learn more about the French standards for ERP
 </a></h6>
                                <p class="no-img text-justify" style="color:#000;font-size:90%">ERP definition under Article R123-2 the Code of Construction and Housing:
 «The public buildings are spaces where people are allowed, either freely or for a fee, in which are organized meetings open to all comers or by invitation, paid or not. The audience consists of all persons admitted to the building for any reason whatsoever in addition to staff. »
...</p>

  
               
                            </div>

       				</div>
 
                      
  <!--  <a href="announce_all.php" class="visible-md visible-lg  pull-right">All news</a> -->
  
                    	</div>
           
       </div></div></div>   
</section> 
<section style="margin-top:25px" >
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
		
</br></br></br>

  		 </div>
	   </div>
           
          
</section>

    <div class="container">
            </div>





<?php include('footer.php');?>

     <!-- Scripts -->


    <script src="../jquery/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../jquery/app-plugin.js"></script>
    <script src="../jquery/smoothscroll.js"></script>
    <script src="../jquery/main.js"></script>
    

    
</body></html>
