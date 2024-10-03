<x-layout>

    <div class="containeur">
        <h2 class="reparation">Ajouter une réparation</h2>
        <div class="new_form">
            <form method="post" action="{{ route('create_user')}}" >
                @csrf
                <div class="new_formul">

                    <div class="form-control">
                        <label for="nom">Modèle de vehicule</label>
                        <input type="text" class="elemntsInput" name="Marque" placeholder="Marque" required >
                        
                    </div>

                    <div class="form-control">
                        <label for="nom">Motif de la réparation</label>
                        <input type="text" class="elemntsInput" name="Couleur" placeholder="Prenom" required >
                        
                    </div>
            
                     <div class="form-control">
                        <label for="nom">Date</label>
                        <input type="Date" class="Input_date" name="image" placeholder="Prenom" required >
                        
                    </div>                     
                    <div class="submit">
                        <button type="submit"  name="submit" class="boutton">S'inscrire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>