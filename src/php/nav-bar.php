<?php
include_once("utils.php");

function generate_nav_bar() {
    div_open("nav-bar", "");
    generate_nav_bar_button("right", "CSS", "resources/css/style.css");
    generate_nav_bar_button("right", "2", "#");
    generate_nav_bar_button("right", "3", "#");
    generate_nav_bar_image("left", "resources/images/wingardh-logo/wingardh-logo.svg", "/");
    div_close("nav-bar", "");
}

function generate_nav_bar_button($align, $text, $url) {
    div_open_clickable("", "nav-bar-item-" . $align . " nav-bar-item-clickable", "$url");

    echo '<p class="centered color-fg-tertiary"> ' . $text . ' </p>';
    
    div_close_clickable("", "nav-bar-item-". $align . " nav-bar-item-clickable");
}

function generate_nav_bar_image($align, $image_url, $url) {
    div_open_clickable("", "nav-bar-item-image-" . $align, "$url");

    include($image_url);
    
    div_close_clickable("", "nav-bar-item-image" . $align);
}
?>

