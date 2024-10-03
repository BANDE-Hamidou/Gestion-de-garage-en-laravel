<x-layout>
    <div class="custom-container">
        <div class="voitures">
            <div class="vehic">
                <a class="btn btn-success btn-sm" href="{{ route('vehicules.create') }}"> <i class="fa fa-plus"></i> Ajouter un véhicule</a>
            </div>
        
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Marque</th>
                        <th>Couleur</th>
                        <th>Année</th>
                        <th>Prix</th>
                        <th width="250px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($voitures as $vehicule)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="/images/{{ $vehicule->image }}" width="100px"></td>
                        <td>{{ $vehicule->marque }}</td>
                        <td>{{ $vehicule->couleur }}</td>
                        <td>{{ $vehicule->annee }}</td>
                        <td>{{ $vehicule->prix }} $</td>
                        <td>
                            <form action="{{ route('vehicules.destroy', $vehicule->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('vehicules.show', $vehicule->id) }}"><i class="fa-solid fa-list"></i> Voir</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('vehicules.edit', $vehicule->id) }}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
