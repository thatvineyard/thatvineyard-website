<?php

include_once("utils.php");

function generate_footer() {
    div_open("footer", "");
    div_open("", "footer-container centered");

    div_open("", "column-container-wrap centered");

    div_open("", "column col-order-1");
    echo "<h2>Navigate</h2>";
    div_close("", "column col-order-1");

    div_open("", "column col-order-2 col-primary");
    echo "<h2>About me</h2>";
    div_open_style("footer-logo", "centered", "width: 50px;");
    include("resources/images/wingardh-logo/wingardh-logo.svg");
    div_close("footer-logo", "centered");
    div_close("", "column col-order-2 col-primary");

    div_open("", "column col-order-3");
    echo "<h2>Contact information</h2>";
    div_close("", "column col-order-3");

    div_close("", "column-container-wrap centered");

    echo "<h3>Sitemap</h3>";

    div_close("", "footer-container");
    div_close("footer", "");

}

generate_footer();

?>