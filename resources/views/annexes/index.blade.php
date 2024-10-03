<x-layout>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success btn-sm" href="{{ route('vehicules.create') }}"> <i class="fa fa-plus"></i>Ajouter un vehicule</a>
    </div>

    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Nom</th>   
                <th>Localisation</th>                
                <th width="250px">Action</th>
            </tr>
        </thead>

        <tbody>
      {{-- @dump($vehicules); --}}
            
        @foreach ($annexes as $annexe)
        {{dump($annexe)}}

            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{$annexe->image }}" width="100px"></td>
                <td>{{$annexe->nom }}</td>
                <td>{{$annexe->localisation }}</td>
                <td>
                    <form action="{{ route('annexes.destroy',$annexe->id) }}" method="POST">
         
                        <a class="btn btn-info btn-sm" href="{{ route('annexes.show',$annexe->id) }}"><i class="fa-solid fa-list"></i> Voir</a>
          
                        <a class="btn btn-primary btn-sm" href="{{ route('annexes.edit',$annexe->id) }}"><i class="fa-solid fa-pen-to-square"></i> Modifier</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Supprimer</button>
                    </form>
                </td>
            </tr>
                @endforeach
            {{-- <tr>
                <td colspan="5">Il n'y aucune donnee.</td>
            </tr> --}}
            
        </tbody>

    </table>
    
    {{-- {{$annexes->links()}} --}}
</x-layout>