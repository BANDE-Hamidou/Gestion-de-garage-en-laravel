<x-layout>
    {{-- @if (auth()->check()) 
                    $user = auth()->user();
                    @if ($user->is_admin) --}}

    <div class="containeur">
        <h2>Ajouter un vehicule</h2>
        <div class="new_form">
            <form method="POST" action="{{ route('vehicules.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="new_formul">

                    <div class="form-control">
                        <label for="marque">Marque</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" name="marque" placeholder="Marque" required >
                        
                    </div>

                    <div class="form-control">
                        <label for="couleur">Couleur</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" name="couleur" placeholder="Prenom" required >
                        
                    </div>

                    <div class="form-control">
                        <label for="annee">Couleur</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" name="annee" placeholder="Prenom" required >
                        
                    </div>
                    <div class="form-control">
                        <label for="prix">Prix</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" name="prix" placeholder="Prenom" required >                        
                    </div>
            
                     <div class="form-control">
                        <label for="image">Image</label>
                        <input type="file"
                         class="Input_image" 
                         name="image" 
                         placeholder="Prenom" required >
                        
                    </div>                     
                    <div class="submit">
                        <button type="submit"  name="submit" class="boutton"><i class="fa-solid fa-floppy-disk">S'inscrire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- @endif
        @endif --}}
</x-layout>