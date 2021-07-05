<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel teste</title>
    <style>
        body {
            text-align: center;
        }

        table {
            margin-left: 28%;
        }

        table,
        tr,
        td,
        th {
            border: 2px solid black;
            text-align: center;
        }

        th,
        td {
            padding-top: 8px;
            padding-bottom: 8px;
            padding-right: 35px;
            padding-left: 35px;
        }

    </style>
</head>

<body>

    <form action="{{ route('registrar_notas') }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name=nome> <br />

        <label for="">nota1</label> <br />
        <input type="text" name=nota1> <br />

        <label for="">nota2</label> <br />
        <input type="text" name=nota2> <br />

        <label for="">media</label> <br />
        <input type="text" name=media> <br />

        <button>Enviar</button>
    </form>

</body>

</html>
