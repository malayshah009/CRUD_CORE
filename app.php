<?php

// $age = 20;

// if ($age < 18) {
//     echo "You are minor ..";
// } elseif ($age >= 18 && $age <= 65) {
//     echo "You are an adult..";
// } else {
//     echo "You are too old for this...";
// }

// switch ($age) {
//     case 18:
//         echo "you are minor";
//         break;

//     case 20:
//         echo "you are an adult";
//         break;

//     default:
//         echo "Non of these";
//         break;
// }

// $netizen = ["Malay", "Amit", "Bhumi", "Mo.Hasmi"];

// for ($i = 0; $i <= 5; $i++) {
//     echo $i;
// }

// $netizen1 = ["Name" => "Malay", "Position" => "HR"];

// echo $netizen1["Position"];

// $netizen2 = [["Name" => "Malay", "Position" => "HR"], ["Name" => "Amit", "Position" => "Tech"]];

// echo $netizen2[1]["Position"];

// $count = 5;

// while ($count <= 8) {
//     echo "$count \n";
//     $count++;
// }

// do {
//     echo "$count \n";
//     $count++;
// } while ($count <= 4);

// $netizen = ["Malay", "Amit", "Bhumi", "Mo.Hasmi"];

// foreach ($netizen as $name) {
//     echo "\n Name : $name";
// }

// function malay()
// {
//     echo " Hello Malay";
// }
// malay();

// function add($a, $b)
// {
//     return $a + $b;
// }

// $res = add(10, 5);
// echo $res;


// function mlaa($name = "Malay")
// {
//     echo "\n Hello $name";
// }
// mlaa();
// mlaa("tithi");

// function sum(...$num)
// {
//     return array_sum($num);
// }
// echo sum(1, 2, 3, 4, 5);

// echo substr("Hello Malay", 2, 7);

// $gloVar = "Hello T..";

// function greet()
// {
//     $localVar = "Hello M..";
//     echo $localVar;
// }
// greet();
// echo $gloVar;

// function counter()
// {
//     static $count = 0;
//     $count++;
//     echo $count;
// }
// counter();

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $name = trim($_POST['name']);
//     $safeName = htmlspecialchars($name);
//     echo "Sanitized Name : $safeName";
//     // if (empty($name)) {
//     //     echo "Please Enter Name..";
//     // } elseif (strlen($name) < 4) {
//     //     echo "Please Enter Name that letter have more then 4";
//     // } else {
//     //     echo "Hello $name";
//     // }
// }


// session_start();

// $_SESSION["name"] = "Malay";
// $_SESSION["malay"] = "shah";

// if (isset($_SESSION["name"])) {
//     echo "Session Name : " . $_SESSION["name"] . "\n Session Second : " . $_SESSION["malay"];
// } else {
//     echo "Session Is Not Working";
// }

// session_destroy()

// setcookie("malay", "tithi", time() + 3600, "/");

// if (isset($_COOKIE["malay"])) {
//     echo "Cookie Set" . $_COOKIE["malay"];
// } else {$file = fopen("mytxt.txt" , "w");

//     echo "Cookie Not Set";
// }

$file = fopen("mytxt.txt", "r");
// fwrite($file, "hello T..!!");
echo fread($file, filesize("mytxt.txt"));
fclose($file);
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Name : <input type="text" name="name">
        <input type="submit">
    </form>
</body>

</html> -->