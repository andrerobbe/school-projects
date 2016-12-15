<?php 
class HTMLBUILDER 
{
	public $header;
	public $body;
	public $footer;
	public $head;
    
	function __construct($header,$body,$footer)
	{
		$this->head = $body[1];
		$this->header = "html/".$header;
		$this->body = "html/".$body[0];
		$this->footer = "html/".$footer;
	}
    
	public function buildHeader()
	{
		$head = $this->head;
		$css_files = array();
		$parentdirectory = dirname(dirname(__FILE__));
		$files = scandir($parentdirectory."/css/");
        
		for ($i=0; $i < count($files); $i++) { 
			if (strpos($files[$i],".css"))
			{
				$files[$i] = str_replace($parentdirectory."/css/","",$files[$i]);
				$css_link = '<link rel="stylesheet" type="text/css" href="css/'.$files[$i].'">';
				array_push($css_files,$css_link);
			}
		}
		$csslinks=implode(" ",$css_files);
		include $this->header;
	}
    
	public function buildBody()
	{
		include $this->body;
	}
        
	public function buildFooter()
	{
		$js_files = array();
		$parentdirectory = dirname(dirname(__FILE__));
		$files = scandir($parentdirectory."/js/");
		for ($i = 0; $i < count($files); $i++) { 
			if (strpos($files[$i],".js"))
			{
				$files[$i]=str_replace($parentdirectory."/js/","",$files[$i]);
				$js_link='<script type="text/javascript" src="js/'.$files[$i].'"></script>';
				array_push($js_files,$js_link);
			}
		}
		$jslinks = implode(" ",$js_files);
		include $this->footer;
	}
}
 ?>