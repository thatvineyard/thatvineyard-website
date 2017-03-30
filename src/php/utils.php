<?php

function div_open_and_close_empty($id, $class) {
    echo '<div ';
    if (! empty($id)) {
        echo 'id="'. $id . '"';
    }
    if (! empty($class)) {
        echo 'class="' . $class . '"';
    }
    echo '>';
    echo '</div> ';
    echo "\r\n";
}
    
function div_open_background_image($id, $class, $image_url) {
    echo '<div ';
    if (! empty($id)) {
        echo 'id="'. $id . '"';
    }
    if (! empty($class)) {
        echo 'class="' . $class . '"';
    }
    if (! empty($image_url)) {
        echo 'style="background: url(\'' . $image_url . '\') no-repeat center center fixed; background-size: cover;"';
    }
    echo '>';
    echo "\r\n";
}

    
function div_open($id, $class) {
    echo '<div ';
    if (! empty($id)) {
        echo 'id="'. $id . '"';
    }
    if (! empty($class)) {
        echo 'class="' . $class . '"';
    }
    echo '>';
    echo "\r\n";
}

function div_close($id, $class) {
    echo '</div> ';
    if (! empty($id)) {
        echo '<!-- #' . $id . ' -->';
    } elseif(! empty($class)) {
        echo '<!-- .' . $class . ' -->';
    }
    echo "\r\n";
}


function div_open_clickable($id, $class, $url) {
    echo '<a ';
    if (! empty($url)) {
        echo 'href="' . $url . '"';
    } else {
        echo 'href="#"';
    }
    echo '>';
    echo '<div ';
    if (! empty($id)) {
    echo 'id="'. $id . '"';
    }
    if (! empty($class)) {
    echo 'class="' . $class . '"';
    }
    echo '>';
    echo "\r\n";
}

function div_close_clickable($id, $class) {
    echo '</div> ';
    if (! empty($id)) {
        echo '<!-- #' . $id . ' -->';
    } elseif(! empty($class)) {
        echo '<!-- .' . $class . ' -->';
    }
    echo '</a>';
    echo "\r\n";
}

?>