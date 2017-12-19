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
#announce {   } 
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
  font-size: 14.5px;
 
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




<section id="announce">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="col-md-8" style="margin-top:30px;">
<div class="col-sm-12 col-xs-12 text-center ">  
          <div class="row">
          	<div class="col-sm-12  text-left">



 <div class="section-date visible-lg visible-md visible-sm" style="font-size:110%"> 

<div class="col-sm-2  pull-left">

<span style="margin-right:1% ;pull-left" > 

 18 Sep




</span>  



</div>
<div class="col-sm-10">
<span class="verti ">

Learn more about the French standards for ERP
</span>
	
</div>
			





</div>




			 <div class="section-date  visible-xs" style="font-size:110%"> 


<span style="margin-right:20px"> 

18 Sep


</span>
<span class="verti0">

Learn more about the French standards for ERP 

</span>



</div>
		</div>
          </div>
</div>
                             
<div class="col-sm-12 text-left "> 
<?php if($row_img['url']!=""){?> 
<img src="../img/gallery/<?php echo $row_img['url'];?>" height="5%" width="25%" alt="" class="img-responsive alignleft imageborder size-full wp-image-72 img-responsive">
<?php } ?> 
          
                         <p class="no-img text-left" style="color:#000 ;margin-bottom:1%"></br><strong style="text-decoration:underligne">ERP definition under Article R123-2 the Code of Construction and Housing:</strong></br>
 «The public buildings are spaces where people are allowed, either freely or for a fee, in which are organized meetings open to all comers or by invitation, paid or not. The audience consists of all persons admitted to the building for any reason whatsoever in addition to staff. »
</br>
The design of these buildings must allow:
<ul class="" style="margin-left:20px;font-size:90%;margin-top:0px;padding-right:1%">
<li>the limitation of fire with suitable materials</li>
<li>real-time alert to people on the site and relief with alarm systems and surveillance</li>
<li>promote evacuation by open spaces and many accesses</li>
<li>avoid panic by training staff on site</li>
</ul>
Other principles:
<ul class="" style="margin-left:20px;font-size:90%;margin-top:5px;padding-right:1%">
<li>Effective isolation of local</li>
<li>Security lightning</li>
<li>The absence of hazardous materials in the building</li>
<li>Secure technical systems (electricity, gas, elevator, heating, ventilation...)</li>
<li>Good servicing and maintenance of installations</li>
<li>These general rules can be adapted depending on the size of the destination and the ability of the institution as well as risks.
</li>

</ul>
<strong style="text-decoration:underligne">Classification rules for buildings</strong></br>
The public buildings are classified as type (according to the nature of the operation) and group and category (according to the size of the public and staff).</br>

<strong style="text-decoration:underligne"><i>Classification by TYPE according to the type of operation</i></strong></br>
<ul class="" style="margin-left:20px;font-size:90%;margin-top:5px;padding-right:1%">
<li>J: Care facilities for elderly and disabled</li>
<li>L: Audition rooms, conferences, meetings, performances and multiple use</li>
<li>M: Shopping stores, malls</li>
<li>N: Restaurants and pubs</li>
<li>O: Hotels and boarding houses</li>
<li>P: Dance halls and amusement arcades</li>
<li>R: Training centers, holiday centers, recreation centers without accommodation</li>
<li>S: Libraries, documentation centers</li>
<li>T: Showrooms</li>
<li>U: Health facilities</li>
<li>V: places of worship</li>
<li>W: Administrations, banks, offices</li>
<li>X: indoor sports facilities</li>
<li>Y: museums</li>
</ul>
<strong style="text-decoration:underligne"><i>Classification in group and category depending on the nature of the operation</i></strong></br>

<ul class="" style="margin-left:20px;font-size:90%;margin-top:5px;padding-right:1%">
<li>1rst category: over 1,500 people</li>
<li>2nd category: from 701 to 1,500 people</li>
<li>3rd category: from 301 to 700 people</li>
<li>4th category: 300 and below, with the exception of the institutions within the 5th category</li>
<li>5th category: buildings where the staff of the public does not reach the minimum figure set by the safety regulations for each type of operation (medical offices, shops ...)</li>

</ul>
<i style="margin-left:20px;font-size:90%;margin-top:5px;padding-right:1%"> Source:</i> <a href="http://www.estate-consultant.com"  target="_blank" > http://www.estate-consultant.com </a>

</p>
   <h1 class=""  style="margin-bottom:10%;"></h1>
                   
</div>
 
                             
                       
                    </div>
		<div class="col-md-4" style="margin-top:5px;">
                        
 <h5 class="section-titlex visible-md visible-lg">All News</h5>
			  <h6 class="section-titlex visible-xs visible-sm " style="padding-top:7%">All News </h6> 
			

                         
<div class="media cal visible-sm visible-xs" style="font-size:85%" style="color:#4E646F">
                 		<div class="pull-left"><i class="fa fa-calendar-o fa-2x" style="color:#4E646F"> </i></div>
		 		     <div class="pull-left"><span class="">
									29
								</span>
								<span class=""> 

									Oct





								</span>
					</div></br>
                            		<div class="media-body">
                                <h6 class="media-heading" style="color:#000;font-size:90%"><a href="announce_id=1.php">TK Offices project: Useful informations </a></h6>
                                <p class="no-img text-justify" style="color:#000;font-size:90%">Site acquisition as well as all architectural, engineering and regulatory studies have been completed by Q3 2013, leading to the award of building license 305/PB/013 by Yaounde Urban Council ...</p>

  
               
                            </div>

       				</div>
                 
			<div class="media cal visible-md visible-lg" style="color:#4E646F">
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
                                <p class="no-img text-justify" style="color:#000;font-size:90%">Site acquisition as well as all architectural, engineering and regulatory studies have been completed by Q3 2013, leading to the award of building license 305/PB/013 by Yaounde Urban Council ...</p>

  
               
                            </div>

       				</div>
<div class="media cal visible-sm visible-xs" style="font-size:85%" style="color:#4E646F">
                 		<div class="pull-left"><i class="fa fa-calendar-o fa-2x" style="color:#4E646F"> </i></div>
		 		     <div class="pull-left"><span class="">
									18
								</span>
								<span class=""> 

									Sep





								</span>
					</div></br>
                            		<div class="media-body">
                                <h6 class="media-heading" style="color:#000;font-size:90%"><a href="announce_id=2.php">Learn more about the French standards for ERP
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
