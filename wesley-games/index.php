<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Wesley Games</title>
</head>

<?php

session_start();

$_SESSION['tasks'] = array("Tarefa 1");

if(isset($_POST['newTask']) == 1) {
    $_SESSION['tasks'][] = $_POST['newTask'];
}

?>

<body>
    <h3>Tasks</h3>

    <form action="index.php" method="post">
        <input name="newTask">
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        <?php foreach($_SESSION['tasks'] as $task): ?>
        <li>
            <span><?php echo $task ?></span>
        </li>
        <?php endforeach ?>
    </ul>
</body>

</html>