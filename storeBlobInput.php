<html>
<body>

<?php

$textPHP = $_POST["text"];
$var_str = var_export($textPHP, true);
$go = "<?php\n\n\$textPHP = $var_str;\n\n?>";
file_put_contents('storeBlob1.php', $go);

?>

</body>
</html>