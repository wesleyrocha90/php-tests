<?php

$link = new PDO("mysql:host=localhost;dbname=cdv", "root", "");

$result = $link->query('SELECT id, nome FROM snb_cidade');

?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title>TESTE MASTER BOOK</title>
    </head>

    <body>
        <h1>Lista de cidades</h1>

        <ul>
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <li>
                    <a href="/show.php?id=<?= $row['id'] ?>">
                        <?= $row['nome'] ?>
                    </a>
                </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php

$link = null;

?>