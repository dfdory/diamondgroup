<nav class="navbar navbar-static-top navbar-inverse visible-xs" role="navigation" id="subnav" style="background-color:transparent;">
<div id="header-title">
<a class="brand visible-sm " href="index.php" ><img style="font-size:20px;margin-left:5px;margin-top:-0px;" src="../img/brand/logo.png" height="100" width="200"></a>
 <a class="brand visible-xs" href="index.php" ><img style="font-size:20px;margin-left:5px;margin-top:-0px;" src="../img/brand/logo.png" height="80" width="200"></a>
   
 </div>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin-top:-60px ">
         
            <button type="button" style="background-color:#000405;" class="navbar-toggle"  data-toggle="collapse" data-target=".navbar-collapse">
                
                <i class="fa fa-bars fa-inverse"></i>
            </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mobile pull">
            <ul  class="nav navbar-nav" style="margin-top:5px;">
				 <?php
				      $uri = explode('/',$_SERVER['REQUEST_URI']);
				      $url = $uri[3];
				      if(($url=='index.php')||($url=='')){?>
				<li  class="active text-center outzone" style=""><a href="index.php">Home </a></li>
				<?php }else{ ?>
                                <li><a class="text-center outzone" href="index.php"  >Home </span></a></li>
				<?php }
					if($url=='project.php'){?>
						<li class="active text-center outzone"><a class=""  href="project.php">Project</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="project.php">Project</a></li>
				<?php }
					if($url=='about.php'){?>
						<li class="active text-center outzone"><a class=""  href="rental.php">Rentals</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="rental.php">Rentals</a></li>
				<?php }
				if($url=='rental.php'){?>
						<li class="active text-center outzone"><a class=""  href="about.php">About</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="about.php">About</a></li>
				<?php }
					if($url=='contact.php'){?>
						<li class="active text-center outzone"><a class=""  href="contact.php">Contact</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="contact.php">Contact</a></li>
				 <?php }?>
	   		</ul>
        </div><!-- navbar-collapse -->

    </div> <!-- container -->
</nav> <!-- navbar navbar-default -->





<nav class="navbar navbar-static-top navbar-inverse visible-lg visible-md visible-sm " role="navigation" id="nav" style="background-color:transparent;">
<div id="header-title">
<a class="brand visible-lg" href="index.php"><img style="font-size:20px;margin-left:135px;margin-top:-30px;" src="../img/brand/logo.png" ></a>
 
<a class="brand visible-md " href="index.php" ><img style="font-size:20px;margin-left:65px;margin-top:-20px;" src="../img/brand/logo.png" height="100" width="250"></a>
 
  <a class="brand visible-sm " href="index.php" ><img style="font-size:20px;margin-left:65px;margin-top:-20px;" src="../img/brand/logo.png" height="100" width="250"></a>
 
           
         

 </div>
 <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
          <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin-top:-20px;">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-sci-collapse">
                <i class="fa fa-bars fa-inverse"></i>
            </button>
        </div>
        
	<!-- Menu -->
	<!-- Menu -->
	<nav class="submenu text-center visible-lg theMenu " >
		<div class="submenu-wrap">		
			<i class="icon-remove menu-close " id="iesub"></i>	
            		<ul  class="nav navbar-nav" style="margin-top:5px;">
				 <?php
				      $uri = explode('/',$_SERVER['REQUEST_URI']);
				      $url = $uri[3];
				      if(($url=='index.php')||($url=='')){?>
				<li  class="active text-center outzone" style=""><a href="index.php">Home </a></li>
				<?php }else{ ?>
                                <li><a class="text-center outzone" href="index.php"  >Home </span></a></li>
				<?php }
					if($url=='project.php'){?>
						<li class="active text-center"><a class=""  href="project.php">Project</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="project.php">Project</a></li>
				<?php }
					if($url=='about.php'){?>
						<li class="active text-center outzone"><a class=""  href="rental.php">Rentals</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="rental.php">Rentals</a></li>
				<?php }
				if($url=='rental.php'){?>
						<li class="active text-center outzone"><a class=""  href="about.php">About</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="about.php">About</a></li>
				<?php }
					if($url=='contact.php'){?>
						<li class="active text-center outzone"><a class=""  href="contact.php">Contact</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="contact.php">Contact</a></li>
				 <?php }?>
	   		</ul>
		</div>
		<!-- Menu button -->
	<div id="menuToggle" class="menuToggle"><i class="icon-reorder" style=""></i> <strong> MENU </strong> </div>
 </nav>
        
   	<!-- Menu -->
	<nav class="submenu text-center visible-md theMenu " id="">
		<div class="submenu-wrap">		
			<i class="icon-remove menu-close"></i>	
            		<ul  class="nav navbar-nav" style="margin-top:5px;">
				 <?php
				      $uri = explode('/',$_SERVER['REQUEST_URI']);
				      $url = $uri[3];
				      if(($url=='index.php')||($url=='')){?>
				<li  class="active text-center outzone" style=""><a href="index.php">Home </a></li>
				<?php }else{ ?>
                                <li><a class="text-center outzone" href="index.php"  >Home </span></a></li>
				<?php }
					if($url=='project.php'){?>
						<li class="active text-center outzone"><a class=""  href="project.php">Project</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="project.php">Project</a></li>
				<?php }
					if($url=='about.php'){?>
						<li class="active text-center outzone"><a class=""  href="rental.php">Rentals</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="rental.php">Rentals</a></li>
				<?php }
				if($url=='rental.php'){?>
						<li class="active text-center outzone"><a class=""  href="about.php">About</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="about.php">About</a></li>
				<?php }
					if($url=='contact.php'){?>
						<li class="active text-center outzone"><a class=""  href="contact.php">Contact</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="contact.php">Contact</a></li>
				 <?php }?>
	   		</ul>
		</div>
		<!-- Menu button -->
		<div id="menuToggle" class="menuToggle"><i class="icon-reorder" style=""></i> <strong> MENU </strong> </div>
	</nav>
	<!-- Menu -->
	<nav class="submenu text-center visible-sm theMenu " id="">
		<div class="submenu-wrap">		
			<i class="icon-remove menu-close"></i>	
            		<ul  class="nav navbar-nav" style="margin-top:5px;">
				 <?php
				      $uri = explode('/',$_SERVER['REQUEST_URI']);
				      $url = $uri[3];
				      if(($url=='index.php')||($url=='')){?>
				<li  class="active text-center outzone" style=""><a href="index.php">Home </a></li>
				<?php }else{ ?>
                                <li><a class="text-center outzone" href="index.php"  >Home </span></a></li>
				<?php }
					if($url=='project.php'){?>
						<li class="active text-center"><a class=""  href="project.php">Project</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="project.php">Project</a></li>
				<?php }
					if($url=='about.php'){?>
						<li class="active text-center outzone"><a class=""  href="rental.php">Rentals</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="rental.php">Rentals</a></li>
				<?php }
				if($url=='rental.php'){?>
						<li class="active text-center outzone"><a class=""  href="about.php">About</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="about.php">About</a></li>
				<?php }
					if($url=='contact.php'){?>
						<li class="active text-center outzone"><a class=""  href="contact.php">Contact</a></li>
                                   <?php } else{?>
                                   	<li class="text-center outzone"><a class=""  href="contact.php">Contact</a></li>
				 <?php }?>
	   		</ul>
		</div>
		<!-- Menu button -->
		<div id="menuToggle" class="menuToggle"><i class="icon-reorder" style=""></i> <strong> MENU </strong> </div>
	</nav>
       </div> 
</nav> <!-- navbar navbar-default -->




