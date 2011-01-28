<?php

session_start();

// Initialize session if empty.
if (!isset($_SESSION['list'])) {
  $_SESSION['list'] = array();
}

// Update list.
if (isset($_REQUEST['list'])) {
  $_SESSION['list'] = $_REQUEST['list'];
}

// Return list as JSON.
header('Content-Type: application/json');
die(json_encode($_SESSION['list']));
