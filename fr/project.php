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
                                    			<strong class="cap-txt">TK Offices</strong>
                                    			<span class="low-txt1">Notre premier projet</span>
                                		</div>
					<div class="text-center visible-sm visible-xs"  >
                                    			<strong class="cap-txt" style="font-size:90%" >TK Offices</strong>
                                    			<span class="low-txt1" style="font-size:90%">Notre premier projet</span>
                                		</div>
					
				</div>
</div>
</section>
 <section class="" >
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row">



                    <div class="col-md-12" style="margin-top:5%">
                        <h5 class="section-title visible-md visible-lg">Description</h5>
			 <h6 class="section-title visible-sm visible-xs">Description</h6>
        <!-- Nav tabs -->
<div class="col-md-9 visible-md visible-lg">
    <ul class="nav nav-tabs text-center">
        <li class="active outzone" style="width:33%"><a href="#building" data-toggle="tab">B&acirc;timent</a></li>
	<li class="outzone" style="width:33.5%"><a href="#design" data-toggle="tab">Am&eacute;nagement int&eacute;rieur</a></li>
	<li class="outzone" style="width:33.5%"><a href="#env" data-toggle="tab">Environnement</a></li>    


</ul>
</div>
<div class="col-md-9 visible-sm visible-xs">
    <ul class="nav nav-tabs text-center" style="font-size:90%">
        <li class="active outzone" style="width:30%"><a href="#building" data-toggle="tab">B&acirc;timent</a></li>
	<li class="outzone" style="width:40%"><a href="#design" data-toggle="tab">Am&eacute;nagement int&eacute;rieur</a></li>
	<li class="outzone"  style="width:30%"><a href="#env" data-toggle="tab">Environnement</a></li>    


</ul>
</div>
<div class="col-md-3 visible-md visible-lg">
    
</div>
<div class="col-md-12 col-sm-offset-0 tab-content" >
        <div class=" tab-pane active" id="building">
                    <div class="clearfix"></div>

<div class="col-md-7 col-sm-offset-0" style="margin-top:25px">
       <p><i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;"></i> <strong>Structure </strong></p>
	

<p style="font-size:90%"> 
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Construit sur une surface totale de 308m2, l'édifice offre cinq paliers d'égale superficie :</br>
<i class="fa fa-circle-o" style="color:#0A3A51;margin-left:0px;margin-right:10px;font-size:50%"></i>Entresol: Seize (16) places de parking couvert</br>
<i class="fa fa-circle-o" style="color:#0A3A51;margin-left:0px;margin-right:10px;font-size:50%"></i>Entresol: Un hall d'accueil et réception de 84m2 (avec toilettes)</br>
<i class="fa fa-circle-o" style="color:#0A3A51;margin-left:0px;margin-right:10px;font-size:50%"></i>Etages 1, 2 & 3: Trois espaces ouverts de 292m2 utiles chaque avec quatre (4) toilettes (2H, 2F), un balcon technique sur la façade Ouest et un couloir d'accès à la cage d'escalier</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Toiture: Une terrasse de 300m2 entièrement plane et exploitable comme RIE semi-permanent, espace fumoir ou espace détente</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Hauteur sous plafond: 2.70m</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Luminosité: 3 des 4 façades en verre et aluminium
</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Isolation: vitrerie en verre trempé avec double vitrage
</p>


<p><i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;"></i> <strong>Commodit&eacute;s </strong></p>


<p style="font-size:90%"><i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%">
</i>Equip&eacute; d'un escalier de secours situé sur la façade Sud accédé par une porte coupe-feu sur chaque palier</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Un espace technique situé sous le parking visiteurs accueille générateur de secours, réserve d'eau courante et local technique</br>

<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Un parking visiteurs situé en façade Nord accueille quatre (4) voitures</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Réception: un hall d'accueil au design raffiné avec salle d'attente, toilettes mixtes et conciergerie</br>


</p>
<p><i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px;"></i> <strong>Connectivit&eacute; TIC</strong></p>
<p  style="font-size:90%"><i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Connexion sur la boucle fibre optique de CAMTEL<br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Pre-câblage Fibre Optique de chaque plateau avec armoires de distribution</p>
<p><i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px"></i> <strong>S&eacute;curit&eacute;</strong></p>
<p  style="font-size:90%" ><i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>S&eacute;curit&eacute; incendie (14 capteurs de fum&eacute;e, 7 extincteurs, alarme, signal&eacute;tique)</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Alimentation électrique de secours par Groupe Electrogène</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Alimentation en eau potable secourue (Reserve de 5,000L et Electropompe)</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Télésurveillance 24h/24h (10 cameras IP en CCTV)</br>
<i class="fa fa-minus" style="font-size:12px;color:#0A3A51;margin-left:0px;margin-right:10px;font-size:80%"></i>Interphone & Contrôle d'accès (4 lecteurs de proximité)</p>
</p>
</div>
<div class="col-md-5 col-sm-offset-0" style="margin-top:25px">
    
		  
 			<div class="col-md-12 col-xs-12">
                            <div class="img-captionA" style="border: 1px solid #a9a9a9;">
                                     <img src="../img/project/building.png" class="img-responsive"  alt="Building">                    <div class="captionQ">
                                    <div class="caption-content1" style="margin-top:8px;">
                                        <!--a href="" class="animated fadeInDown" data-toggle="modal" data-target="#map" style=" height:40px; width:50px;"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a-->
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>			
		
</div>

                       
                        
   </div>
<div class="tab-pane " id="env">
<div class="clearfix"></div>
<div class="col-md-8 col-xs-12" style="margin-top:25px">

<div class="col-md-7 col-xs-12 pull-left">
<p class="no-img " style=""><strong style="font-size:14px;color:#000405">Environs (en voiture)</strong>
<p style="font-size:12px;color:#4f92af;"> <i class="fa fa-check"  style="margin-right:10px;"></i>2 minutes</p>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Carrefour Elig-Essono (commerces, restaurants...)</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Poste Centrale (supermarchés, boulangeries...)</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Montée Ane Rouge & Avenue Kennedy (cafés, services divers...)</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Marché central</p>
<p style="font-size:12px;color:#4f92af"><i class="fa fa-check" style="margin-right:10px;"></i>5 minutes</p>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Rond-point Nlongkak</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Avenue des banques</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Boulangerie Acropole</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Briqueterie</p>

</p>
</div>


<div class="col-md-5 col-xs-12 pull-left">
  <p class="no-img">
 <strong style="font-size:14px;color:#000405" >Proximité immédiate (piétons)</strong><p style="font-size:12px;color:#4f92af"><i class="fa fa-check" style="margin-right:10px;"></i>200 mètres</p>

<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Restaurants & cafés</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Station-pompe & laverie auto</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Ecole primaire</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Boutiques</p>
<p style="font-size:12px;color:#4f92af"><i class="fa fa-check" style="margin-right:10px;"></i>500 mètres</p>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Institut universitaire (ISTAG)</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Boulangerie</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Marché du Mfoundi</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Pressings & Mini-marchés</p>
<p style="font-size:12px;color:#4f92af"><i class="fa fa-check" style="margin-right:10px;"></i>1.2 kilomètres</p>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Hôpital de la Caisse</br>
<i class="fa fa-minus" style="font-size:8px;color:#0A3A51;margin-right:10px;"></i>Gare Ferroviaire</br>
	   
	   </p>


</p>
</div>
</div>
<div class="col-md-4 col-xs-12 col-md-offset-0" style="margin-top:25px">
    
		  
 			<div class="col-md-12 col-xs-12">
                          
				<div class="" style="border: 1px solid #a9a9a9;">
                			<div id="map_canvas"></div>

				</div>
		
                                    
                            
                        </div>			
		
</div><!-- Design -->




       </div>

 <div class="tab-pane " id="design">
               <div class="clearfix"></div>
<div class="col-md-7" style="margin-top:25px">
				   <p class="no-img" style="">
<p><i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px"></i> La conception en des paliers de l'immeuble TK Offices le prédispose naturellement à un aménagement en open-space collaboratifs ou en cloisonnements légers</p>
<!--<p><i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px"></i>Each floor can be configured to be shared by three (3), two (2) or a single tenant with minimum configuration</p>-->
<p><i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px"></i>L'espace utile disponible (292m2) permet un aménagement de plateaux de 72 postes en utilisant une combinaison de marguerites et de linéaires de 6 postes (4m2 par employé)</p>
<p><i class="fa fa-check" style="font-size:12px;color:#4f92af;margin-right:10px"></i>La toiture terrasse de 300m2 permet un aménagement de Restaurant Inter-Entreprises (RIE) ainsi que des espaces fumoirs et détente pour les employés</p>
</p>
 </div>
<div class="col-md-5 col-sm-offset-0" style="margin-top:25px">
    
		  
 			<div class="col-md-12 col-xs-12" >
                            <div class="" style="border: 1px solid #a9a9a9;">
                                     <img src="../img/project/design.jpg" class="img-responsive"  alt="Building">                    
                            </div>
                        </div>			
		
</div><!-- Design -->





</div>


</div> <!-- tab-content -->
                  
                       
                    </div>
		
</div>



    	  
         <div class="col-md-12 col-sm-offset-0">
		<div class="col-md-10 col-md-offset-1" id="our">
                        
			
                       
                        <p class="no-img text-justify visible-md visible-lg visible-sm" style="font-size:16px;color:#3f4c6b;text-transform:italic">  <i class="fa fa-quote-left " ></i> Nos standards sont tr&egrave;s &eacute;lev&eacute;s et en droite ligne avec nos exigences dans la s&eacute;lection de nos partenaires. Nous pensons avoir constitu&eacute; une excellente &eacute;quipe de professionnels pour ce premier projet de construction. <i class="fa fa-quote-right "></i>
			</p>
			<p class="no-img text-justify visible-xs" style="font-size:12px;color:#3f4c6b;text-transform:italic">  <i class="fa fa-quote-left " ></i>  Nos standards sont tr&egrave;s &eacute;lev&eacute;s et en droite ligne avec nos exigences dans la s&eacute;lection de nos partenaires. Nous pensons avoir constitu&eacute; une excellente &eacute;quipe de professionnels pour ce premier projet de construction. <i class="fa fa-quote-right "></i>
			</p>
		<div class="col-md-12 col-md-offset-0 text-center">
                        <div class="text-center">
			
                       <button type="button" class="btn btn-primary" id="btn" style=" font-style:normal;margin-top:40px;background-color:#0DA5E2;border-color:#0DA5E2">Nos partenaires</button> 

			
                         </div>
                     		
		</div>

                       
	</div>
	 <div class="col-md-12" style="margin-top:0px">
		  <button type="button" id="close" class="fermer pull-right" style="margin-top:20px;margin-bottom:20px;display:none;width:25px;height:25px;"><strong>×</strong></button>
</div>
	
		<div class="col-md-12 col-sm-offset-0 partner lx" style="margin-top:20px;display:none">
		  <div class="col-md-2 col-sm-4" style="margin-top:0px">
                            <div class="img-caption at t" >
                  <img src="../img/partners/Image1.png" class="img-responsive" alt="" >                     
<div class="caption">
                                    <div class="caption-content" style="margin-top:-10%">
                                           
                                        <a href="http://www.scbcameroun.net" target="_blank"><i class="fa fa-plus-circle fa-2x" style="margin-left:10px;"></i></a>

                                        
                                    </div><!-- content -->


                                </div>
                            </div>
                        </div><!-- div  content -->
			 <div class="col-md-2 col-sm-4" style="margin-top:0px">
                            <div class="img-caption t" >
                  <img src="../img/partners/Image2.png" class="img-responsive" alt="">                     
				<div class="caption">
                                   <div class="caption-content" style="margin-top:-10%">
                                      
<a href="" class="animated fadeInDown" data-toggle="modal" data-target="#partner-one" style=""><i class="fa fa-plus-circle fa-2x" style="margin-left:10px;"></i></a>
 
                                  
                                        
                                    </div><!-- content -->


                                </div>
                            </div>
                        </div><!-- div  content -->
			
			 <div class="col-md-2 col-sm-4">
                            <div class="img-caption bv t" style="" >
                  <img src="../img/partners/Image41.jpg" class="img-responsive" alt="" >
                     <div class="caption">
                                    <div class="caption-content" style="margin-top:-10%">
                                           
                                        <a href="http://www.bureauveritas.fr" target="_blank"><i class="fa fa-plus-circle fa-2x" style="margin-left:10px;"></i></a>

                                        
                                    </div><!-- content -->



                                </div>
                            </div>
                        </div><!-- div  content -->
			
			 <div class="col-md-2 col-sm-4">
                            <div class="img-caption st t" >
                  <img src="../img/partners/Image3.png" class="img-responsive" alt="" > 
                    <div class="caption">
                                     <div class="caption-content" style="margin-top:-10%">
                                           
                                        <a href="http://www.studio44architects.com" target="_blank"><i class="fa fa-plus-circle fa-2x" style="margin-left:10px;"></i></a>

                                        
                                    </div><!-- content -->


                                </div>
                            </div>
                        </div><!-- div  content -->
			 <div class="col-md-2 col-sm-4" style="margin-top:-0px">
                            <div class="img-caption iv t" >
                  <img src="../img/partners/Image62.jpg" class="img-responsive" alt="" >
                     <div class="caption">
                                    <div class="caption-content" style="margin-top:-10%">

                                           
                                        <a href="http://www.inventureuae.com" target="_blank"><i class="fa fa-plus-circle fa-2x" style="margin-left:10px;"></i></a>

                                        
                                    </div><!-- content -->


                                </div>
                            </div>
                        </div><!-- div  content -->
			 <div class="col-md-2 col-sm-4">
                            <div class="img-caption hd t" >
                  <img src="../img/partners/Image5.png" class="img-responsive" alt="">
                     <div class="caption">
                                     <div class="caption-content" style="margin-top:-10%">
                                      
<a href="" class="animated fadeInDown" data-toggle="modal" data-target="#partner-two" style="font-size:80%;"><i class=" fa fa-plus-circle fa-2x" style="margin-left:10px;"></i> </a>
 
                                  
                                        
                                    </div><!-- content -->


                                </div>
                            </div>
                        </div><!-- div  content -->
			
			

  
	               
		</div>

		
</div>
		

<!-- Modal -->
<div class="modal fade px" id="partner-one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="">
    <div style="margin-top:5%;">
              <div class="col-sm-6 col-sm-offset-3 modal-content ">
<button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true"  style="margin-top:20px;margin-bottom:20px;color:#0DA5E2;background-color:transparent;border-color:transparent;"><strong>×</strong></button>


<div class="col-sm-10 col-sm-offset-1 " style="border: .2px solid #0DA5E2;margin-top:8.33333333%;; margin-bottom:8.33333333%;;">

 <h6 class="section-titlex  " style="padding-top:10px">Description </h6> 
                         
                                         <p class="text-justify" style="font-size:12px;color:#000405;padding:10px">Founded in 1999 by the structural engineer Paul Aimee Edjo'o, Edjo'o Engineering is a company with numerous achievements and a proven track of excellent construction problem solving at the service of their clients best interest. Edjo'o Engineering takes care of everything from the integrity of the design to the respect of the planning and the economy of the constructions projects.<span style="margin-right:1px;"> </span><a href="../document/doc-edjo.pdf" target="_blank" >
<strong >Click here</strong></a>  to see the complete presentation (in French).
 

 </p>
                                        
                                 
               </div>
       </div>
      
  
  </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade px" id="partner-two" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="">
    <div style="margin-top:5%;">


              <div class="col-sm-6 col-sm-offset-3 modal-content ">
<button  style="margin-top:20px;margin-bottom:20px;color:#0DA5E2;background-color:transparent;border-color:transparent;" type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true"><strong>×</strong></button>

<div class="col-sm-10 col-sm-offset-1 " style="border: .2px solid #0DA5E2;margin-top:8.33333333%;; margin-bottom:8.33333333%;;">

 <h6 class="section-titlex  " style="padding-top:10px">Description </h6> 
                         
                                         <p class="text-justify" style="font-size:12px;color:#000405;padding:10px">HD Engineering Ltd is a Cameroon based General Construction Company; it began as a general works contractor in 2008. Over the years, the group has undertaken many challenging projects and accumulated skills, know-how and experiences in design and builds solutions, project management services, building trades and related engineering works.<span style="margin-right:1px;"> </span><a href="../document/doc-heavy.pdf" target="_blank" >
<strong>Click here</strong></a>  to see the complete presentation (in French).


 </p>
                                        
                                 
               </div>
       </div>
      
  
  </div>
</div>
<!-- Modal -->





   <h3 class="text-left" style="margin-left:0px;margin-top:30px"></h3>
<!-- Modal -->
<div class="modal fade" id="g" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
     <div id="carousel-g" class="carousel slide" data-ride="carousel">
 

  <!-- Wrapper for slides -->
    <div class="carousel-inner"><div class="item "><img src="../img/project/project -site - january 2014.jpg" alt=""></div>

  <div class="item " style="max-height: 470px;"><img src="../img/project/Implantation.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/Implantation-01.jpg" alt=""></div>
 <div class="item  " style="max-height: 470px;"><img src="../img/project/fouilles.jpg" alt=""></div>
 
  <div class="item " style="max-height: 470px;"><img src="../img/project/fondations-01.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/fondations-02.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/fondations-RDC.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/fondations-Radier.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/parking-Radier.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/poteaux-RDC-01.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/poteaux-RDC-03.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/coffrage-PH-RDC-01.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/ferraillage-PH-RDC.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/coffrage-PH-R+1.jpg" alt=""></div>  
  <div class="item " style="max-height: 470px;"><img src="../img/project/ferraillage-PH+1.jpg" alt=""></div>  
  <div class="item " style="max-height: 470px;"><img src="../img/project/poteaux-R+2.jpg" alt=""></div> 
  <div class="item " style="max-height: 470px;"><img src="../img/project/chainage-R+2.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/coffrage-PH-R+2.jpg" alt=""></div>
  <div class="item " style="max-height: 470px;"><img src="../img/project/betonnage-PH-R+2.jpg" alt=""></div>

<div class="item " style="max-height: 470px;"><img src="../img/project/ferraillage-PH-R+3.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/coffrage-PH-R+3.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/maconneries-R+2.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/facade-Arriere-R+3.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/coffrage-Edicule-R+4.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/dallage-Edicule-R+4.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/decoffrage-R+3.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/sam_01.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/sam_02.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/sam_03.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/Local-Technique-Escaliers.jpg" alt="Local Technique-Escaliers"></div>
<!--<div class="item " style="max-height: 470px;"><img src="../img/project/Cour-Avant-01.jpg" alt="Cour Avant 01"></div>-->
<div class="item " style="max-height: 470px;"><img src="../img/project/test.jpg" alt=""></div>

<div class="item " style="max-height: 470px;"><img src="../img/project/TK-3-1.jpg" alt="Cour Avant 01"></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/TK-on-the-side-1.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/IMG_0720_1.jpg" alt=""></div>

<div class="item " style="max-height: 470px;"><img src="../img/project/IMG_0726_3.jpg" alt=""></div>
<div class="item " style="max-height: 470px;"><img src="../img/project/IMG_0723_2.jpg" alt=""></div>
  <!-- Controls -->
 

      
	</div>
<a class="left carousel-control sci-cl" href="#carousel-g" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" style="color:#B4B7B1"></span>
  </a>
  <a class="right carousel-control sci-cr" href="#carousel-g" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" style="color:#B4B7B1"></span>
  </a>
 
      </div>
    </div>
  </div>
</div>
<!-- Modal -->



<div class="col-xs-12">
	<h5 class="section-title" style="margin-top:20px;font-style:bold">Galerie</h5>
	
		<h3 class="text-left" style="margin-left:0px;margin-top:15px"></h3>
<!-- Button trigger modal -->


<div class="gallery">
     <div id="carousel-gallery" class="carousel slide" data-ride="carousel">
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
 
     <div class="item active">
       <div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/project -site - january 2014.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                    <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
			<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/Implantation.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
			<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/Implantation-01.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
			<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/fouilles.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
  <!-- 
                    <div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="img/project/Implantation-02.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g5"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
 -->
			<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/fondations-01.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/fondations-02.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="item">
      
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/fondations-RDC.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/fondations-Radier.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/parking-Radier.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/poteaux-RDC-01.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/poteaux-RDC-03.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
  <div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/coffrage-PH-RDC-01.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
     
    </div>
    <div class="item">
    
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/ferraillage-PH-RDC.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/coffrage-PH-R+1.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/ferraillage-PH+1.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/poteaux-R+2.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/chainage-R+2.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
 <div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/coffrage-PH-R+2.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
     
    </div>
    <div class="item" style="max-height: 470px;">
     
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/betonnage-PH-R+2.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/ferraillage-PH-R+3.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/coffrage-PH-R+3.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/maconneries-R+2.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/facade-Arriere-R+3.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
     
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/coffrage-Edicule-R+4.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="item" style="max-height: 470px;">
      
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/dallage-Edicule-R+4.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/decoffrage-R+3.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/sam_01.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/sam_02.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/sam_03.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
     
	 
	 <div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/Local-Technique-Escaliers.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
						
	</div>
	
	<div class="item" style="max-height: 470px;">
     
						
						<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/test.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/TK-3-1.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/TK-on-the-side-1.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/IMG_0720_1.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/IMG_0726_3.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-2 col-xs-6">
                            <div class="img-caption">
                                     <img src="../img/project/IMG_0723_2.jpg" class="img-responsive " alt="" height="600" width="700">                                                                <div class="caption">
                                     <div class="caption-content outzone" style="margin-top:-5px">
                                        <a href="" class="animated fadeInDown" data-toggle="modal" data-target="#g"><i class="glyphicon glyphicon-search" style="margin-left:8px;"></i></a>
 
                                       
 
                                   </div>
                                </div>
                            </div>
                        </div>
   
    </div>


  <!-- Controls -->
 

      
	</div>
<a class="left carousel-control cl" href="#carousel-gallery"  data-slide="prev">
    <i class="" style="margin-top:70px;margin-left:-55px;font-size:20px">&larr;</i>
  </a>
  <a class="right carousel-control cr" href="#carousel-gallery"  data-slide="next">
    <i class="" style="margin-top:70px;margin-left:5px;font-size:20px">&rarr;</i>
  </a>
 
      </div>
<a class="left carousel-control cl " href="#carousel-gallery"  data-slide="prev">
      <span class="xvc glyphicon glyphicon-chevron-left" style="color:#B4B7B1;margin-left:20px;margin-left:-30px;font-size:20px"></span>
  </a>
  <a class="right carousel-control cr" href="#carousel-gallery"  data-slide="next">
    <span class="xvc glyphicon glyphicon-chevron-right pull-right" style="color:#B4B7B1;margin-right:-30px ;font-size:20px"></span>
  </a>
 
    </div>
			
			
</div>

                      
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
  
    <script src="../jquery/app-plugin.js"></script>
    <script src="../jquery/smoothscroll.js"></script>
    <script src="../jquery/main.js"></script>

<script>   
  $(function (){    $("#btn").click(function() {     $("#btn").hide(); $("#close").show();      $(".partner").show();    });$("#close").click(function() {      $(".partner").hide("");       $("#btn").show(); $("#close").hide();     });  }); </script>    
     

<script>   
  $(function (){    $(".outzone").click(function() {      $(".partner").hide("");  $("#btn").show();   $("#close").hide();       });  }); 
</script>  
<script> 
  $(function (){    $(".carousel").carousel({ pause: true,interval: false })  });     
</script>
<script>   
  $(function (){    $("#carousel-gallery .img-caption ").click(function() { $("#g .active").removeClass('active'); var $x = $(this).find('img').attr('src') ; $("#g .item").each(function() { if($(this).find('img').attr('src') == $x)  {   $(this).addClass('active'); }  });  });  }); 
</script>
<script>
          $('.left').hide();
	  $('.carousel').on('slid.bs.carousel', function (ev) {
  		 var carouselData = $(this).data('bs.carousel');
 		 var currentIndex = carouselData.getActiveIndex();
		 if (currentIndex >= 1) {
    			$('.left').show();
  		}
  		else {
    			$('.left').hide();
  		}
		if (currentIndex === (carouselData.$items.length-1)) {
    			$('.right').hide();
    			$('.left').show();
  		}
  		else {
    			$('.right').show();
  		}
    })

    </script>

</body></html>
