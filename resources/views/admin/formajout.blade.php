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
    <div class="divGen">
        <h1> Ajouter </h1>

        <div class="corpsConn">
            <form class="formulaire" action="{{ route('inscrire') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input class="form-control" type="text" name="name" placeholder="entrez le nom">

                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input class="form-control" type="text" name="prenom" placeholder="entrez le prenom">

                <label for="exampleInputEmail1" class="form-label">Date de naissance</label>
                <input class="form-control" type="date" name="date_naissance" placeholder="entrez la date de naissance">

                <label for="exampleInputEmail1" class="form-label">Image</label>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Image</label>
                    <input type="file" name="image" class="form-control" id="inputGroupFile01">
                </div>

                <input type="submit" class="btn btn-primary" value="Ajouter">
                <a href="{{route('dashboard')}}"><button class="btn btn-success"></button></a>


            </form>
        </div>
    </div>
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>