<?php
$cars = array("Volov", "BMW", 'Toyota');
$cars = array["Volov", "BMW", 'Toyota'];

//access value;
//echo $cars[1];

$userInformation = array(
    "firstname"=> "Nicole",
    "lastname"=>"dela cruz"
    "role"=> "admin"
);

echo $userInformation['address'='bocaue'];

$userInformation[]="09090900"; //iprint lang nito kung pang ioang index sya so index 0
echo $userInformation['role'];

//print all the value of array
echo "<pre>";
print_r($userInformation);

var_dump($userInformation);
echo "<pre>";
//MULTIDIMENSIONAL ARRAY -array sa loob n array
$user = array(
    "information"=> array(
        "firstName"=> "Nicole",
          "lastname"=>"dela cruz"
    ),
    "roles"=>array(
        "instructor",
        "student"
    ),
    "address"=>array(
        "province"=>"bulacan"
        "city"=>"bocaue"

    )
)

echo "<h1>".$user["address"]["province"]."</h1>";
echo "<h2>".$user["roles"][1]."</h2>";

?>