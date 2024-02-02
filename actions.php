<?php

add_action("wp_head", function () {
    echo "<script>console.log('working')</script>";
}, 1);
