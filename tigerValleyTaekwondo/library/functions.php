<?php
//functions page

// Build navigation bar using $categories array
function buildNavList($categories) {
  $navList = '<ul>';
  $navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home"
                  . "</a></li>";
  foreach ($categories as $category) {
    $navList .= "<li><a href='/acme/index.php?action="
                    . urlencode($category['categoryName'])
                    . "' title='View our $category[categoryName] product line'>"
                    . "$category[categoryName]</a></li>";
  }
  $navList .= '</ul>';
  return $navList;
}

//Build select category option list
function buildCatList($categories) {
  $catList = '<select name="categoryId" id="categoryId">';
  $catList .= " <option>Select a category</option>";
  foreach ($categories as $category) {
    $catList .= " <option value='$category[categoryId]'";
    if (isset($categoryId)) {
      if ($category['categoryId'] === $categoryId) {
        $catList .= 'selected';
      }
    }
    $catList .= ">$category[categoryName]</option>";
  }
  $catList .= '</select>';
  return $categories;
}


//The end result will be returned. It will be one of two values: 
//1) The actual email address will be returned if it is judged to be "valid", or 
//2) NULL - indicating the email does not appear to be a valid address.
function checkEmail($clientEmail) {
  $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
  return $valEmail;
}

// Check the password for a minimum of 8 characters,
// at least one 1 capital letter, at least 1 number and
// at least 1 special character
function checkPassword($clientPassword) {
  $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
  return preg_match($pattern, $clientPassword);
}
