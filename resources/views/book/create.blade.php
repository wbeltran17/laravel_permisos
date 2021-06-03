<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Crear libros</h5>
            <h6 class="card-subtitle mb-2 text-muted">fomulario para creacion de libros</h6>
            <form class="row g-3" method="post" action="{{ route('book.store') }}">
                <div class="col-auto">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del libro</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre del libro">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion del libro</label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="enviar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
