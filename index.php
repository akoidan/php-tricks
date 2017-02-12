<html>
<head>

</head>
<body>
<?php
$names = array('A', 'B', 'c');
foreach ($names as $name) {
    echo sayHello($name);
}

function sayHello($name) {
    return "Hello $name\n";
}
?>
</body>
</html>
