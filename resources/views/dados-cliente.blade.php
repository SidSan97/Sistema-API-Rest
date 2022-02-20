<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Dados do cliente</title>
</head>
<body>
    <h1>Dados do cliente</h1>

    <div class="container">
        <div class="row">
            <div class="form-group">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" value="{{$event->nome}}" readonly>
                    </div>

                    <div class="col-md-6">
                        <label for="tel">Telefone:</label>
                        <input type="text" class="form-control" id="tel" value="{{$event->tel}}" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" value="{{$event->cpf}}" readonly>
                    </div>

                    <div class="col-md-6">
                        <label for="placa">Placa:</label>
                        <input type="text" class="form-control" id="placa" value="{{$event->placa}}" readonly>
                    </div>
                </div>

                <button class="btn btn-success"><a href="\listagem-clientes">Voltar</a></button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>