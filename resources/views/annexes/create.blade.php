<x-layout>
    @if (auth()->check()) 
                    $user = auth()->user();
                    @if ($user->is_admin)

    <div class="containeur">
        <h2>Ajouter une annexe</h2>
        <div class="new_form">
            <form method="POST" action="{{ route('annexes.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="new_formul">

                    <div class="form-control">
                        <label for="nom">Nom</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" name="nom" placeholder="Nom de l'annexe" required >
                        
                    </div>

                    <div class="form-control">
                        <label for="localisation">Localisation</label>
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="elemntsInput" name="localisation" placeholder="Situation geographique" required >
                        
                    </div>
                                       
                    <div class="submit">
                        <button type="submit"  name="submit" class="boutton"><i class="fa-solid fa-floppy-disk">S'inscrire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endif
        @endif
</x-layout>