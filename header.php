
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Homepage - Semantic</title>
  <link rel="stylesheet" type="text/css" href="components/reset.css">
  <link rel="stylesheet" type="text/css" href="components/site.css">

  <link rel="stylesheet" type="text/css" href="components/container.css">
  <link rel="stylesheet" type="text/css" href="components/grid.css">
  <link rel="stylesheet" type="text/css" href="components/header.css">
  <link rel="stylesheet" type="text/css" href="components/image.css">
  <link rel="stylesheet" type="text/css" href="components/menu.css">

  <link rel="stylesheet" type="text/css" href="components/divider.css">
  <link rel="stylesheet" type="text/css" href="components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="components/segment.css">
  <link rel="stylesheet" type="text/css" href="components/button.css">
  <link rel="stylesheet" type="text/css" href="components/list.css">
  <link rel="stylesheet" type="text/css" href="components/icon.css">
  <link rel="stylesheet" type="text/css" href="components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="components/transition.css">
  <link rel="stylesheet" type="text/css" href="components/input.min.css"> 
  <link rel="stylesheet" type="text/css" href="components/modal.min.css"> 
	
  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }

.ui.inverted.segment, .ui.primary.inverted.segment{background:#15191F!important;}
  </style>

  <script src="assets/library/jquery.min.js"></script>
  <script src="components/visibility.js"></script>
  <script src="components/sidebar.js"></script>
  <script src="components/transition.js"></script>
  <script src="components/dimmer.min.js"></script>
  <script src="components/modal.min.js"></script>
  <script>
  $(document).ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    });
	
   	
  </script>
   <script>
	  $(function(){
				$('#modaldiv').modal('show');    
	   });
   </script>
  </head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item">Home</a>
  
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item">Home</a>

</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item">Home</a>
       
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
       TEST WEB CRAWL
      </h1>
      <form id="webURL" action="" >
		  <div class="ui input">
			  <input type="text" id="webcrawl" name="webcrawl" placeholder="http://www.example.com">
		  </div>
		  
		  <input type="submit" name="submit" class="ui huge primary button" value="submit">
	  </form>
	  <img id="loading" src="assets\images\giphy.gif" style="width:150px; display:none;">
    </div>

  </div>
