<html>
    <head>
        <meta charset="UTF-8">
        
        <title>TESTE MASTER BOOK</title>
    </head>

    <body>
        <h1>Lista de cidades</h1>

        <ul>
            <?php foreach($posts as $post): ?>
                <li>
                    <a href="/show.php?id=<?= $post['id'] ?>">
                        <?= $post['nome'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>