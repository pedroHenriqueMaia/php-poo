<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de estudante</h1>
    <?php
        require './Pessoa.php';
        require './Estudante.php';

        $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($formData)){
            $estudante = new Estudante($formData()['email']);
            $estudante->criarEstudante($formData);

            if($cadastro){
                echo "Estudante cadastrado com sucesso!";
            }else{
                echo "Problema ao cadastrar o estudante!";
            }
        }
    ?>
    <form name="CadastroEstudant" action="" method="POST">
        <label>Nome</label>
        <input type="text" name="nome">

        <label>Telefone</label>
        <input type="text" name="telefone">

        <label>Email</label>
        <input type="text" name="email">

        <label>Data Nascimento</label>
        <input type="text" name="data_nascimento">

        <label>Matricula</label>
        <input type="text" name="matricula">

        <input type="submit" value="cadastrar" >Cadastrar >
    </form>
</body>
</html>