<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">

    <form action="{{ route('correios') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Informe o Nome</label>
            <input type="text" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <label for="exampleInputEmail1">Informe o Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <label for="exampleInputEmail1">Informe o Telefone</label>
            <input type="text" class="form-control" name="telefone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <label for="exampleInputEmail1">Informe o CEP</label>
            <input type="text" class="form-control" name="cep" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
