<?php

//controler marlenajohnson
//require_once (__DIR__) . '/library/connections.php';

//traffic controller
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
  $action = filter_input(INPUT_GET, 'action');
  if ($action == NULL)
  {
    $action = 'home';
  }
}

//default title
$title = 'Home';

//test action
//echo $action;

//goto page
switch ($action) {
    case 'home':
      $title = 'Home';
      include (__DIR__) . '/view/home.php';
      break;
    case 'philosophy':
      $title = 'Philosophy';
      include (__DIR__) . '/view/philosophy.php';
      break;
    case 'background':
      $title = 'Background';
      include (__DIR__) . '/view/background.php';
      break;
    case 'contact':
      $title = 'Home';
      include (__DIR__) . '/view/contact.php';
      break;
     case 'map':
      $title = 'Map';
      include (__DIR__) . '/view/map.php';
      break;
    case 'forms':
      $title = 'Forms';
      include (__DIR__) . '/view/forms.php';
      break;
    case 'fees':
      $title = 'Fees';
      include (__DIR__) . '/view/fees.php';
      break;
    case 'calendar':
      $title = 'Calendar';
      include (__DIR__) . '/view/calendar.php';
      break;
    case 'error':
      $title = 'Error';
      include (__DIR__) . '/view/error500.php';
      break;
    default:
      $title = 'Default';
      include (__DIR__) . '/view/home.php';
      break;
}
