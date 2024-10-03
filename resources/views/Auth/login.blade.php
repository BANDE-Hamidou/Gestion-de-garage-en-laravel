<x-layout>
    <div class="containeur">
        <div class="new_form">
          <form action="{{ route('logins')}}" method="post">
            @csrf
            <div class="new_formul">
              <div class="form-control">
                <label for="mail">Email</label>
                <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" class="elemntsInput" name="email" placeholder="Email" required >
              </div>
              <div class="form-control">
                <label for="pass">Mot de passe</label>
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="elemntsInput" name="password" placeholder="Mot de passe" required >
              </div>
              
              <div class="submit">
                <span class="icons"><i class="fa-solid fa-user-plus"></i></span>
                <button type="submit" name="submit" class="boutton">S'inscrire</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
</x-layout>
       
        
       