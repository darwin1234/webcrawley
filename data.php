<?php 

include("include/simple_html_dom.php");

class data{
	private $crawled_urls=array();
	private $found_urls=array();
	
	public function rel2abs($rel, $base){
		if (parse_url($rel, PHP_URL_SCHEME) != '') return $rel;
		if ($rel[0]=='#' || $rel[0]=='?') return $base.$rel;
		extract(parse_url($base));
		$path = preg_replace('#/[^/]*$#', '', $path);
		if ($rel[0] == '/') $path = '';
		$abs = "$host$path/$rel";
		$re = array('#(/\.?/)#', '#/(?!\.\.)[^/]+/\.\./#');
		for($n=1; $n>0;$abs=preg_replace($re,'/', $abs,-1,$n)){}
		$abs=str_replace("../","",$abs);
		return $scheme.'://'.$abs;
   }
   
   public function perfect_url($u,$b){
    $bp=parse_url($b);
    if(($bp['path']!="/" && $bp['path']!="") || $bp['path']==''){
     if($bp['scheme']==""){$scheme="http";}else{$scheme=$bp['scheme'];}
     $b=$scheme."://".$bp['host']."/";
    }
    if(substr($u,0,2)=="//"){
     $u="http:".$u;
    }
    if(substr($u,0,4)!="http"){
     $u=$this->rel2abs($u,$b);
    }
    return $u;
   }
   
   
  function crawl_site($u){
    global $crawled_urls;
    $uen=urlencode($u);
    if((array_key_exists($uen,$this->crawled_urls)==0 || $this->crawled_urls[$uen] < date("YmdHis",strtotime('-25 seconds', time())))){
     $html = file_get_html($u);
     $this->crawled_urls[$uen]=date("YmdHis");
     foreach($html->find("a") as $li){
      $url=$this->perfect_url($li->href,$u);
      $enurl=urlencode($url);
      if($url!='' && substr($url,0,4)!="mail" && substr($url,0,4)!="java" && array_key_exists($enurl,$this->found_urls)==0){
       $this->found_urls[$enurl]=1;
       echo "<li><a target='_blank' href='".$url."'>".$url."</a></li>";
      }
     }
    }
   }
	
}

$t = new data;  
if(isset($_POST['webcrawl'])){
	$url=$_POST['webcrawl'];
	$t->crawl_site($url);
}


/*
if(isset($_POST['submit'])){
   
    if($url==''){
     echo "<h2>A valid URL please.</h2>";
    }else{
		echo "test";
		$f=fopen("url-crawled.html","a+");
		fwrite($f,"<div><a href='$url'>$url</a> - ".date("Y-m-d H:i:s")."</div>");
		fclose($f);
		echo "<h2>Result - URL's Found</h2><ul style='word-wrap: break-word;width: 400px;line-height: 25px;'>";
		
		echo "</ul>";
		
    }
}*/