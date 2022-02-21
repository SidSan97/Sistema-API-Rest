<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>

    <title>Cadastrar</title>
</head>
<body>

    <div class="container">
    <h1 class="titulo">Cadastro do(a) cliente</h1> 

        <div class="row">
            <form action="/enviar" method="post" class="formulario">
            @csrf
                <div class="row mb-3">
                    <div class="col-md-6 mb-2">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-group" required maxlength="200">
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="tel">Telefone:</label>
                        <input type="text" name="tel" id="tel" class="form-group" onkeypress="$(this).mask('(00) 00000-0000')" required maxlength="15">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-2">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="cpf" class="form-group" onkeypress="$(this).mask('000.000.000-00');" required maxlength="14">
                    </div>

                    <div class="col-md-6 mb-2">
                        <label for="placa">Placa do veículo:</label>
                        <input type="text" name="placa" id="placa" class="form-group" required maxlength="8">
                    </div>
                </div>

                <button class="btn btn-success mr-2"><a href="/" class="text-light">Voltar</a></button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script src="../js/validador-cpf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>