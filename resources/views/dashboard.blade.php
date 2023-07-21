<x-app-layout>
    <x-slot name="header">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            .contentAjout {
                display: flex;
                width: 100%;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 8px;
            }

            .positionActionBouton {
                display: flex;
                gap: 8px;
                align-items: flex-end;
                justify-content: end;
            }

            .actpo {
                margin-right: 80px;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

    </x-slot>
    <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Tableau de bord') }}
    </h2> -->

</x-app-layout>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="contentAjout">
        <h2 class="border-bottom pb-2 mb-0">Liste des utilisateurs</h2>
        <a href="{{ route('ajoute') }}" class="ml-4 text-sm text-gray-700 underline"><button class="btn btn-primary"> Ajouter un utilisateur</button></a>

    </div>


    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Image</th>
                <th scope="col" class="positionActionBouton">
                    <div class="actpo">Action</div>
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)

            <tr>
                <th scope="row">1</th>
                <td>{{$user->name}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->date_naissance}}</td>
                <td>

                    <img src="{{asset('uploads/utilisateur/'.$user->image)}}" width="70px" height="70px" alt="">

                </td>
                <td>

                    <div class="positionActionBouton">
                        <a class="btn btn-success" href="{{url('edit/'.$user->id)}}">Modifier</a>

                        <a href="{{url('delete/'.$user->id)}}" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer cet utilisateur?')){document.getElementById('form-{{$user->id}}').submit()}">Supprimer</a>
                    </div>

                    <!-- <form id="form-{{$user->id}}" action="{{route('utili.delete',['utili'=>$user->id])}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                        </form> -->

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</main>


<!-- <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/offcanvas.js')}}"></script>
</body>

</html> -->