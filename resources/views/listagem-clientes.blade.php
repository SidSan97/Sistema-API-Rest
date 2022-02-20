<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Lista de Clientes</title>
</head>
<body>
    <div class="container">

        <h1>Lista de clientes</h1>

        <div class="row">
            <table id="lista" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Placa</th>
                        <th>Opções</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($event as $event)
                        <tr>                    
                            <td>{{$event->id}}</td>
                            <td><a href="\dados-cliente\{{$event->id}}">{{$event->nome}}</a></td>
                            <td><a href=""></a>{{$event->tel}}</td>
                            <td><a href=""></a>{{$event->cpf}}</td>
                            <td><a href=""></a>{{$event->placa}}</td>
                            <td>
                                <div class="d-flex">
                                    <button class="btn btn-warning"><a href="/editar-dados/{{$event->id}}">Editar</a></button>

                                    <form action="/{{$event->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                    </form>
                                </div>
                            </td>            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <button class="btn btn-success"><a href="\">Voltar</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() 
        {
            $('#lista').DataTable();
        } );
    </script>
</body>
</html>