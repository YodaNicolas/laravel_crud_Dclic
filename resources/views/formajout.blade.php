<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ajout.css')}}">

</head>

<body>


    <form action="{{ route('ajout') }}" method="post">
        {{ csrf_field () }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" placeholder="entrez le nom" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" placeholder="entrez le prenom" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="date" class="form-control" name="date naissance" placeholder="entrez la date de naissance" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Image</label>
            <input type="file" name="image" class="form-control" id="inputGroupFile01">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>