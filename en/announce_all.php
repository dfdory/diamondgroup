<?php
	include('../script_lang.php');
	require_once('../erp/connect_to_bd.php');
    $nb_results_p_page = 2; // nombre de résultats par page
    $nb_avant =4; // nombre de page avant la page courante
    $nb_apres = 5; // nombre de page après la page courante
    $premiere = 1; // aficher le lien "première page" (1 ou 0)
    $derniere = 0; // afficher le lien "dernière page" (1 ou 0)
    $courant = empty($_GET['page']) ? 1 : $_GET['page']; // page
    $start = ($courant - 1) * $nb_results_p_page; // start (requete mysql)
	
	$result=mysql_query("select count(*)  from annonce where active=1 AND  supprimer = 0 ORDER BY date DESC");
	//$description1=mysql_query("select *  from annonce where active=1 AND  supprimer = 0 ORDER BY date DESC limit 1,1");
	 $ret = mysql_fetch_array($result);
    // nombre de lignes
    $nb_results = $ret[0];
	
	//echo ("select *  from annonce where annonce.id=$project");
	$description=mysql_query("select *  from annonce where active=1 AND  supprimer = 0 ORDER BY date DESC LIMIT $start, $nb_results_p_page");
	 $nb_pages = ceil(1 / 1);
	 // nombre de pages avant
	if($courant==$nb_pages){
	$nb_avant=9;
	}
	elseif($courant==($nb_pages-1)){
	$nb_avant=8;
	}
	elseif($courant==($nb_pages-2)){
	$nb_avant=7;
	}
	elseif($courant==($nb_pages-3)){
	$nb_avant=6;
	}
	elseif($courant==($nb_pages-4)){
	$nb_avant=5;
	}
    $avant = $courant > ($nb_avant + 1) ? $nb_avant : $courant - 1;
    // nombre de pages après
	if($courant==1){
	$nb_apres =9;
	}
	elseif($courant==2){
	$nb_apres = 8;
	}
	elseif($courant==3){
	$nb_apres = 7;
	}
	elseif($courant==4){
	$nb_apres = 6;
	}
	else{
	$nb_apres = 5;
	}
	 
	 $apres = $courant <= $nb_pages - $nb_apres ? $nb_apres : $nb_pages - $courant;
	
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

<section id="announce">
            <div class="container">
                <div class="row">
                   

			<div class="col-md-12  text-center ">  
         

          			<div class="col-md-10 col-md-offset-1  text-left" style="margin-top:2%" >
	
					<div class="section-date visible-lg visible-md visible-sm" style="font-size:90%"> 

						<div class="col-sm-2  pull-left">

							<span style="margin-right:1% ;pull-left" > 

 								29 Oct

							</span>  



						</div>
						<div class="col-sm-10">
							<span class="verti">
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

                             
<div class="col-md-8 col-md-offset-2 text-center " style="margin-top:3%" > 
 
<img src="../img/gallery/outside_05.jpg"  height="5%" width="30%" alt="" class="img-responsive alignleft imageborder size-full wp-image-72 img-responsive">

          
                         <p class="no-img text-justify" style="color:#000 ;margin-bottom:1% ;padding-left:2%;font-size:92%;padding-top:10px;"> 
 Site acquisition as well as all architectural, engineering and regulatory studies have been completed by Q3 2013, leading to the award of building license 305/PB/013 by Yaounde Urban Council .




</p>
   <p class="no-img text-justify" style="color:#000 ;margin-bottom:1% ;padding-left:2%;font-size:92%;padding-top:0px;"> 
 Project financing has been fully secured with a 75% participation from Attijariwafa bank of Cameroon (SCB) with the remaining 25% funded by the SCI Diamond Group ...



</p>
  <a href="announce_id=1.php" class=" pull-right" style="margin-bottom:5%;margin-top:10px;">Read more</a>
                     
                        
                            


                       
</div>
 
                  
                       
 <div class="col-md-12  text-center " style="margin-top:50px">  
         

          			<div class="col-md-10 col-md-offset-1  text-left">
	
					<div class="section-date visible-lg visible-md visible-sm" style="font-size:110%"> 

						<div class="col-sm-2  pull-left">

							<span style="margin-right:1% ;pull-left" > 

 								18 Sep

							</span>  



						</div>
						<div class="col-sm-10">
							<span class="verti">
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

                             
<div class="col-md-8 col-md-offset-2 text-center " style="margin-top:3%" > 
 
 <!-- <img src="../img/gallery/outside_05.jpg"  height="5%" width="30%" alt="" class="img-responsive alignleft imageborder size-full wp-image-72 img-responsive">-->

          
                         <p class="no-img text-justify" style="color:#000 ;margin-bottom:1% ;padding-left:2%;font-size:93%;padding-top:10px;"> 
<strong>ERP definition under Article R123-2 the Code of Construction and Housing:</strong></br>
 «The public buildings are spaces where people are allowed, either freely or for a fee, in which are organized meetings open to all comers or by invitation, paid or not. The audience consists of all persons admitted to the building for any reason whatsoever in addition to staff. » ...



</p>
   
                       
                        <div class="">
                            <a href="announce_id=1.php" class=" pull-right" style="margin-bottom:5%;margin-top:10px;">Read more</a>



                        </div> 
</div>
                   

<div class="col-sm-10 col-sm-offset-1"> 
   <div class="pull-left pagination pagination-xs visible-xs">

 
<?php 
	for($i = $courant - $avant; $i <= $courant + $apres; $i++)
   					 {
					 	if($i == $courant)
						  {
						  	echo('<li class="active"><a href="#" style="background:#3F4C6B;border-backgroud:#3F4C6B">'. $i.'</a></li>');
						  }
						   else
						  {
						  	echo('<li><a href="'.$_SERVER['SCRIPT_NAME'] . '?page=' . $i.'" class="liens_haut">'. $i.'</a><li>');
						  }
					 }
				?>

  
</div>  
<div class="pull-left pagination pagination-sm visible-sm visible-lg visible-md">

 
<?php 
	for($i = $courant - $avant; $i <= $courant + $apres; $i++)
   					 {
					 	if($i == $courant)
						  {
						  	echo('<li class="active"><a href="#" style="background:#3F4C6B;border-backgroud:#3F4C6B">'. $i.'</a></li>');
						  }
						   else
						  {
						  	echo('<li><a href="'.$_SERVER['SCRIPT_NAME'] . '?page=' . $i.'" class="liens_haut">'. $i.'</a><li>');
						  }
					 }
				?>

  
</div>         
                       
   </div>
                 




				
	</div>
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

