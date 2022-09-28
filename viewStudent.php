<?php 

require 'validation.php';

require_once 'header.php';
?>
<html>
<body>
    <h1>Lista de Aluno</h1>

    <body>
    <div class="container">
<?php

$folder = fopen("studentLog.txt", "r");

    while (!feof($folder)) {
        $line = fgets($folder);
        $array = explode("-", $line);

        foreach ($array as $content){
            echo "<p>" . $content . "</p>";
        }
    }

fclose($folder);

?>

            <a class="btn btn-secondary" href="registerStudent.php">+ Criar</a>
        <a href="dashboard.php" class="btn btn-secondary">Voltar</a>
    </div>    
</body>
    
</body>
</html>