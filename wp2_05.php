<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Značky pro formátování textu - procvičování.</title>
	
 </head>

 <body>

 <?php 

$class= array (
    "0" => "Sorin Eni",
    "1" => "Jan Hladík",
    "2" => "Štěpán Kolarovský",
    "3" => "Libor Pluháček",
    "4" => "Martin Lédl",
    "5" => "Karel Nakládal",
    "6" => "Michal Plaček",
    "7" => "Šimon Siksta",
    "8" => "Jan Šlechta",
    "9" => "Jakub Vávrů",
);


for ($i = 0; $i < 10; $i++)   {
    
    echo $class[] = $i +1 . ". " . $class[$i] . "<br>";

   }
?>


 </body>
</html>

