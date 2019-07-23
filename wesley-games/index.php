<?php
require_once 'structure.php';
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Wesley Games</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/primeui/4.1.15/primeui-all.min.js"></script>

    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/primeui/4.1.15/primeui-all.min.css">
</head>

<body>
    <div>
        <?php echo HTML::input("wesley") ?>
        <?php echo HTML::input("rocha") ?>
    </div>

    <script>
        <?php echo HTML::script() ?>
    </script>
</body>

</html>