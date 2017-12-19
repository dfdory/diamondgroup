<?php 
//session_start();

	class Url {
		public $url_en ='';
		public $url_fr ='';
		
		public function __construct()
		{
			$params ='';
			foreach ($_GET as $key => $value) { 
				$params .= $key.'='.$value.'&';
			} 
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$params; 
			
			if (strpos($url,'/fr/') !== false) {
				$this->url_fr = $url;
				$this->url_en = str_replace('/fr/' ,'/en/',$url);
				
				$_SESSION['lang'] = 'fr';
				
			}
			else {
				$this->url_en = $url;
				$this->url_fr = str_replace('/en/', '/fr/',$url);
				//session_start();
				$_SESSION['lang'] = 'en';
			}
		}
		
		
		
		public function get_en_url()
		{
			return $this->url_en;
		}
		
		public function get_fr_url()
		{
			return $this->url_fr;
		}
	}
?>