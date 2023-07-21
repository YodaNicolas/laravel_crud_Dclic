<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="entrez le nom">
        <input type="text" name="prenom" placeholder="entrez le prenom">
        <input type="date" name="date_naissance" placeholder="entrez la date de naissance">
        <input type="password" name="password" placeholder="entrez le mot de passe">
        <input type="submit" value="s'inscrire">
    </form>


    @foreach ($users as $user)
    {{$user->name}} <br><br><br>
    @endforeach

</body>

</html>