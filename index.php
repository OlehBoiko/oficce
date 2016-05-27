<!DOCTYPE html>
 <html lang="ua">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <title>Мій перший php сайт </title>
</head>

<body>

<?
    
    $b = "Александр\"ooo\"";
    $age = 25;
    
    
    echo "$b";
    echo "<p>Durak"
    
?>

<?
        $a = 1;
        $b = 1;
        $c = 3;
        $d = 7;
    
    if ($a != $b or $c != $d)
    {
        echo "<p>Змінні рівні";    
    }
else
{
    echo "<p>Змінні не рівні";
}

?>
       
        
<?

    $a = 0;
    $q = 1;
    
    while ($q < 100)
{
    $a = $a + $q;
    $q++;  
    
}
    echo "<p>";
    echo "$a <p>";
?>

<?
  for ($a=0, $q=0; $q < 100; $q++)
  {
      $a = $a + $q;
  }
    echo "$a <p>";
?>
    

<?
    $sposob = "банк";
    
    switch ($sposob)
    {
        case "банк":
        echo "<p> Для того щоб оплатити через банк ...";
        break;
            
        case "почта":
        echo "<p> Для того щоб оплатити через почту ...";
        break;
            
        default :
        echo "<p> Ви не вибрали спосіб оплати";
        break;
    }
    
    
?>
    
    
<?

    $name[0] = "Саша";
    $name[1] = "Маша";
    $name[2] = "Ваня";
    $name[3] = "Аня";
    $name[4] = "Костя";
    
    echo "<p>";
    
    echo $name [4];


?>

    
    
<?
echo "<p>";
function square ($a)
{
    $result = $a*$a;
    echo $result;
}

echo "квадрат 5 рівний -";
    square (5);

function link ()
{

    echo "<a href='http://www.vk.com'>ВК</a>";
}
echo "<p>";
link();
?>

<?

    $name1 [] = "александр";
    $name1 [] = "наполеон";
    $name1 [] = "джордж";


echo "<br> В масиві name найдено " .count ($name1). " масива";

$w = " Ноутбук ";

$w = trim ($w);
echo "<p> $w";


?>

<?
$name = array("Іван", "Коля");
list ($name1, $name2) = $name;
echo "<br>";
echo $name2;
?>

<?
$d = date("G-i-s");
echo "<br>";
echo $d;
?>

<?
$w = 15;
unset ($w);
echo "<br>$w";

?>


<form action="post1.php" method="post" name="form1" target="_blank">
    <p>Ведіть своє імя: <input name="name" type="text" size="20"></p>
    <p>Ведіть свій пароль: <input name="password" type="password" size="20"></p>
    <p><input type="submit" name="buttom" value="Відправити"></p>
    <p><input type="reset" name="buttom" value="Очистити"></p>
</form>

<?
echo "Ваш ip адрес: ".$_SERVER ['REMOTE_ADDR'];
echo "<p>Ваша операційна система: ".$_SERVER ['HTTP_USER_AGENT'];

?>
<p><a href="post1.php" target="_blank">для перевірки звідки я перейшов на сайт</a></p>

<?
include "seting.php";
$c = $a + $b;
echo "<p> Сума змінних дорівнює - $c";
?>


</body>
</html>
