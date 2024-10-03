<x-layout>


    <div class="containeur">
        <div class="form">
            <form method="post" action="{{ route('create_user')}}" >
                @csrf
                <div class="formul">
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="input" name="name" placeholder="Nom" required >
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="input" name="prenom" placeholder="Prenom" required >
                        <label for="nom">Prenom</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="number" class="input" name="age" placeholder="Age" >
                        <label for="nom">Age</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="text" class="input" name="adresse" placeholder="Adresse" required >
                        <label for="nom">adresse</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-heart"></i></span>
                        <input type="email" class="input" name="email" placeholder="Email" required >
                        <label for="mail">Mail</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="input" name="password" required >
                        <label for="pass">Mot de passe</label>
                      </div>                  
                    <div class="submit">
                        <span class="icons"><i class="fa-solid fa-heart"></i></span>
                        <button type="submit" name="submit" class="boutton">S'inscrire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
    
        
