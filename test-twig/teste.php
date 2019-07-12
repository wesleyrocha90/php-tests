<?php
    class Pessoa {
        public $id;
        public $nome;
        public $data;
        public $timestamp;

        function __construct($id, $nome, $data, $timestamp) {
            $this->id = $id;
            $this->nome = $nome;
            $this->data = $data;
            $this->timestamp = $timestamp;
        }

        public function toString() {
            return $this->id . " - " . $this->nome;
        }
    }

    $pessoas = array(
        new Pessoa(1, "Argentina",  "01/06/2018",   1527811200), 
        new Pessoa(2, "Brasil",     "11/06/2018",   1528675200),
        new Pessoa(3, "Canada",     "25/06/2018",   1529884800),
        new Pessoa(4, "Dinamarca",  "01/05/2019",   1556668800),
        new Pessoa(5, "Espanha",    "11/08/2018",   1533081600),
        new Pessoa(6, "Finlândia",  "25/12/2016",   1482624000),
        new Pessoa(7, "Grécia",     "01/01/2018",   1514764800),
        new Pessoa(7, "H",          "11/08/2019",   1565481600),
        new Pessoa(7, "Islândia",   "25/11/2017",   1511568000));
?>

<html>
    <head>
        <title>Testando PHP</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    </head>

    <body>
        <table id="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pessoas as $key=>$value): ?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo $value->nome ?></td>
                        <td data-filter="<?php echo $value->data ?>" 
                            data-order="<?php echo $value->timestamp ?>">
                            <?php echo $value->data ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>

    <script>
        $(document).ready( function() {
            $('#table').DataTable();
        });
    </script>
</html>