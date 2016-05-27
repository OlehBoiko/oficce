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
$name = $_POST ['name'];
$password = $_POST ['password'];

echo "Imya:$name";
echo "<p>Parol:$password";
echo "<p>Vu prichli iz saita: ".$_SERVER ['HTTP_REFERER'];
?>

</body>
</html>