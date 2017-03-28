<head>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <div class="vspacer-1"> </div>
    <div class="nav-bar">
	<a href="style.css"> 
	    <div class="nav-bar-item-right">
		<p class="centered"> CSS  </p>
	    </div>
	</a>
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

    <div class="container-1 centered">
	<div id="title-card" class="container-2 sixteenbynine centered">
	    <div id="logo" class="sixteenbynine">
		<?php
		switch(rand(6, 7)) {
		    case 1:
			include("resources/images/wingardh-logo/wingardh-logo-blast-apart.svg");
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
		    case 6:
		?>
		    <video autoplay="autoplay" muted="muted" preload="auto" loop="loop" style="width: 100%; -webkit-mask-box-image: url(resources/images/wingardh-logo/wingardh-logo.svg) 100% 0% 0% 0%;">
			<source src="resources/videos/light-effects-animation.mp4" type="video/mp4">
		    </video>
		    <?php
		    break;
		    default:
		    include("resources/images/wingardh-logo/wingardh-logo.svg");
		    }
		    ?>
	    </div> <!-- #logo -->
	    <div id="banner">
		<h1>That Vineyard</h1>
	    </div> <!-- #banner -->
	</div> <!-- .sixteenbynine .centered -->
    </div> <!-- .container-1 -->

    <div class="vspacer-1 bar"> </div>
    <div class="color-bg-tertiary">
    <div id="body" class="container-3 centered">
	
    </div> <!-- #body -->
    </div>
</body>

