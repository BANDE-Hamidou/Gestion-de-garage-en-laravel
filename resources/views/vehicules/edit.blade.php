<x-layout>
    

    {{-- <div class="containeur">
        <h2>Modifier un vehicule</h2>
        <div class="new_form">
            <form method="post" action="{{ route('vehicules.update', $vehicule->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="new_formul">
                    <div class="form-control">
                        <label for="nom">Marque</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" value="{{$vehicule->marque}}" name="Marque" placeholder="Marque" required >                        
                    </div>            
                     <div class="form-control">
                        <label for="couleur">Couleur</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" value="{{$vehicule->couleur}}" name="Couleur" placeholder="Couleur" required >                        
                    </div>
                    <div class="form-control">
                        <label for="annee">Annee</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" value="{{$vehicule->annee}}" name="annee" placeholder="Annee" required >                        
                    </div>

                    <div class="form-control">
                        <label for="prix">Prix</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" value="{{$vehicule->prix}}" name="prix" placeholder="Prix" required >                        
                    </div>
                    <div class="form-control">
                        <label for="image">Image</label>
                        <input 
                            type="file"
                            class="Input_image" 
                            name="image" 
                            placeholder="image" 
                            required >
                        <img src="/images/{{ $vehicule->image }}" width="300px">
                        
                    </div>                     
                    <div class="submit">
                        <button type="submit"  name="submit" class="boutton"><i class="fa-solid fa-floppy-disk"></i>Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}

    <h1>Detail du vehicule</h1>
    <p>Marque: {{ $vehicule->marque }}</p>
    <p>Couleur: {{ $vehicule->couleur }}</p>
    <p>Année: {{ $vehicule->annee }}</p>
    <p>Prix: {{ $vehicule->prix }} $</p>
    <img src="/images/{{ $vehicule->image }}" width="100px">
    <a href="{{ route('vehicules.index') }}">Retour</a>
    
</x-layout>