<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
</head>

<body>
    <div class="container-1 centered">
    <div class="tenbythree">
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
    </div> <!-- .sixteenbynine .centered -->
    </div> <!-- .container-1 -->
    <div id="banner">
	<h1 class="color-fg-primary">That Vineyard</h1>
    </div> <!-- #banner -->
</body>
