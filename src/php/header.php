<?php

include_once("utils.php");
include("nav-bar.php");

function generate_header() {

    $background_image_url_1 = "https://s3-eu-west-1.amazonaws.com/video.gallereplay.com/artistarea/Man%20sits%20in%20armchair%20smoking_7d399695-3a2a-4729-9046-ae4623d30690/Cinemagraph_plain/1920x1080/cinemagraph.jpg";
    $background_image_url_2 = "http://i.imgur.com/gzVWqDD.jpg";

    $background_image_url = $background_image_url_2;

    div_open_background_image("header-background", "", $background_image_url);

    div_open_and_close_empty("", "vspacer-1");

    generate_nav_bar();
    
    div_open("header", "front-page container-1 centered");
    div_open("logo", "sixteenbynine");
    div_open("", "stack");
    div_open("", "stack-object");

    select_header(rand(1, 9));

    div_close("", "stack-object");

    div_open("", "stack-object");
    div_open("title-card", "centered");

    echo "<h1 class='centered'>THAT VINEYARD</h>";

    div_close("title-card", "centered");
    div_close("", "stack-object");
    div_close("", "stack");
    div_close("logo", "sixteenbynine");
    
    div_open("subtitle", "centered");

    echo "<h3 class='centered'>Ipsum lorem quorum pour'em doorhinge orange</h3>";
    
    div_close("subtitle", "centered");
    div_close("header", "container-1 centered");

    div_close("header-background", "");

}


generate_header();


function select_header($i) {
    switch($i) {
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
	    echo '<video autoplay="autoplay" muted="muted" preload="auto" loop="loop" style="width: 100%; -webkit-mask-box-image: url(resources/images/wingardh-logo/wingardh-logo.svg) 100% 0% 0% 0%;">
	<source src="http://mazwai.com/system/posts/videos/000/000/100/original/paolo_forti--luci_ombre_e_convezione.mp4?1409796025" type="video/mp4">
	</video>';
	    break;
	case 7:
	    echo '<video autoplay="autoplay" muted="muted" preload="auto" loop="loop" style="width: 100%; -webkit-mask-box-image: url(resources/images/wingardh-logo/wingardh-logo.svg) 100% 0% 0% 0%;">
	<source src="http://mazwai.com/system/posts/videos/000/000/170/original/tom_poederbach--las_vegas_blvd_copy_for_vimeo_by_philip_bloom.mp4?1429600066" type="video/mp4">
	</video>';
	    break;
	case 8:
	    echo '<video autoplay="autoplay" muted="muted" preload="auto" loop="loop" style="width: 100%; -webkit-mask-box-image: url(resources/images/wingardh-logo/wingardh-logo.svg) 100% 0% 0% 0%;">
	<source src="http://mazwai.com/system/posts/videos/000/000/221/original/discovery_part_II-jonathan_mitchell.mp4?1461020357" type="video/mp4">
	</video>';
	    break;
	default:
	    include("resources/images/wingardh-logo/wingardh-logo.svg");
    }
}
