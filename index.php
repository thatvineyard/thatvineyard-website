<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
</head>

<body>
    <div class="vspacer-1"> </div>
    <div class="nav-bar">
	<div class="nav-bar-item-right">
	    <p class="centered"> hello </p>
	</div>
	<div class="nav-bar-item-right">
	    <p class="centered"> hell </p>
	</div>
	<div class="nav-bar-item-right">
	    <p class="centered"> hel </p>
	</div>
	<div class="nav-bar-item-logo-left">
	    <?php
	    include("resources/images/wingardh-logo/wingardh-logo.svg");
	    ?>
	</div>
    </div>
    
    <div class="container-1 centered full-page">
    <div id="title-card" class="container-2">
	<?php
     switch(rand(1, 5)) {
	 case 1:
	     include("resources/images/wingardh-logo/wingardh-logo.svg");
	     break;
	 case 2:
	     include("resources/images/wingardh-logo/wingardh-logo-wave.svg");
	     break;
	 case 3:
	     include("resources/images/wingardh-logo/wingardh-logo-neon.svg");
	     break;
	 case 4:
	     include("resources/images/wingardh-logo/wingardh-logo-draw-in.svg");
	     break;
	 case 5:
	     include("resources/images/wingardh-logo/wingardh-logo-toggle-colors.svg");
	     break;
	 default:
	     include("resources/images/wingardh-logo/wingardh-logo.svg");
	     }
	?>
	
    <div id="banner">
	<h1 class="color-fg-primary">That Vineyard</h1>
    </div> <!-- #banner -->
    </div> <!-- .sixteenbynine .centered -->
    </div> <!-- .container-1 -->
</body>

Web finished at Mon Mar 27 16:25:12
