<?php

// Import view.
include("view/Main.class.php");

// Show view, pay attention to the reference.
$content = new Main();
$content->view();

?>