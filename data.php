<?php 
require_once('include/simple_html_dom.php');
	
class HTMLTAGFINDER{
	private $data = array();
	private $aTag = array();
	
	function __construct($url){
		
		$mypage=file_get_html($url);

		$title=$mypage->find('title',0);
		$p=$mypage->find('p');
		
		$this->data['WebsiteUrl'] = $url;
		$this->data['title']  = $title->plaintext; // header title
		$this->data['countLink'] = count($mypage->find('a'));
		$this->data['countimg'] = count($mypage->find('img'));
		$this->data['countp'] = count($mypage->find('p'));
		$this->data['counth1'] = count($mypage->find('h1'));
		$this->data['counth2'] = count($mypage->find('h2'));
		$this->data['counth3'] = count($mypage->find('h3'));
		$this->data['counth4'] = count($mypage->find('h4'));
		$this->data['counth5'] = count($mypage->find('h5'));
		$this->data['counth5'] = count($mypage->find('h6'));
		?>
			<div id="display"></div>
			<i class="close icon"></i>
			
			
			  <div class="header">
					Website:  <?php echo $this->data['WebsiteUrl']; ?>
			  </div>
			  <div class="image content">
				
				<div class="description">
				  <div class="ui header">We've auto-chosen a profile image for you.</div>
				  <p>Basic Information for <?php echo $this->data['WebsiteUrl']; ?> </p>
				  <p>Title: <?php echo $this->data['title'];?></p>
				  <p>Total A: <?php echo $this->data['countLink'];?></p>
				  <p>Total Image: <?php echo $this->data['countimg'];?></p>
				  <p>Total P Tag: <?php echo $this->data['countp'];?></p>
				  <p>Total h1 Tag: <?php echo $this->data['counth1'];?></p>
				  <p>Total h2 Tag: <?php echo $this->data['counth2'];?></p>
				  <p>Total h3 Tag: <?php echo $this->data['counth3'];?></p>
				  <p>Total h4 Tag: <?php echo $this->data['counth4'];?></p>
				  <p>Total h5 Tag: <?php echo $this->data['counth5'];?></p>
				  <p>Total h6 Tag: <?php echo $this->data['counth6'];?></p>
				</div>
			  </div>
		  <div class="actions">
			<div class="ui black deny button">
			  Nope
			</div>
			<div class="ui positive right labeled icon button">
			  Yep, that's me
			  <i class="checkmark icon"></i>
			</div>
		  </div>
		
		<?php
		
	}
	
	
}
if(isset($_POST['$_POST["webcrawl"]'])){
	$webcrawl = $_POST['webcrawl'];
	 new HTMLTAGFINDER($webcrawl);	
}


	