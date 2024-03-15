<?php



$data = [
    "name" => "Filips",
    "age" => 69,
    "height" => 175
];

$data2 = [
    "name" => "ruslans",
    "height" => 190.5
];


echo $data2["age"] ?? "nav vecuma";
if(isset($data2["age"])) {
    echo $data2["age"];
}
if(array_key_exists("ages", $data2)) {
    echo $data2["age"];
}



$routes = require "routes.php"

$url = parse_url ($_SERVER["REQUEST_URI"]) ["path"];

$routes = [
    "/" => "controllers/index.php",
             "controllers/about.php",
             "controllers/story.php"
];

if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    http_response_code(404);
    require "controllers/404.php";
}



// if($url == "/") {
//     require "controllers/index.php";
// }

//  else if($url == "/about") {
//     require "controllers/about.php";
// }


// else if($url == "/story") {
//     require "controllers/story.php";
// } else {
//     case "/contacts"
//     require "controllers/contacts.php"
//     http_response_code(404);
//     require "controllers/404.php";
// }