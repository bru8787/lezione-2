<?php   

$uri= parse_url($_SERVER['REQUEST_URI'])['path'];

$route=[
    "/"=>"controller/home.php",
    "/contatti"=>"controller/contatti.php",
    "/sudinoi"=>"controller/sudinoi.php",
    "/dolci"=>"controller/dolci.php",
    "/salati"=>"controller/salati.php",
];
function abort(){
    
    require "view/404/404.php";
}



function route($uri,$route){
    if(array_key_exists($uri,$route)){

        require $route[$uri];

    }else{abort();}

}
route($uri,$route);


?>

