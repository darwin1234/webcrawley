  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

	$(function(){
		
		var webCraw = {
			<?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
			submit: function(){
				$("#webURL").on("submit", function(e){
					alert($("#webURL").serialize());
					$.ajax({
						url: "<?php echo $actual_link; ?>data.php",
						type: "POST",
						data:$("#webURL").serialize(),
						success: function(e){

							
								$("#siteinformation").html(e);
								$(".test").modal('show');
							
						}
							
					
					});
					e.preventDefault();
				});
				
				
			},
			modal: function(){
				$("#test").click(function(){
					
				});
				$(".test").modal({
					closable: true
				});
				
			}
			
				
		};
		webCraw.submit();
		webCraw.modal();
	});

	
</script>

</body>

</html>
