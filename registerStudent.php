<?php

require 'validation.php';

require_once 'header.php'

?>
<html>
<body>
    <h1>Cadastro do Aluno</h1>

    <form action="logStudent.php" method="POST">
        <label for="">RA</label>
        <input type="number" name="ra" placeholder="Insira o RA">

        <label for="">Nome</label>
        <input type="text" name="name"  placeholder="Insira o nome">

        <label for="">Idade</label>
        <input type="number" name="age" placeholder="Insira a idade">

        <label for="">Turma</label>
        <input type="text" name="turma" placeholder="Insira a turma">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>