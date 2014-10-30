<?php

// Retrieve blog data
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://toypigblog.firebaseio.com/.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

$posts = [];
foreach($result as $post) {
  if($post !== null) {
    $post = 
  }
  
}
var_dump(json_decode($result));
