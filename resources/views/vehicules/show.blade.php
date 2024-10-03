<x-layout>
    {{-- <div class="card mt-5"> --}}

        {{-- <h2 class="card-header">Afficher le vehicule</h2>
        <div class="card-body">
        
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-primary btn-sm" href="{{ route('vehicules.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Marque:</strong> <br/>
                      {{ $vehicule->marque }}
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                  <div class="form-group">
                      <strong>couleur:</strong> <br/>
                      {{ $vehicule->couleur }}
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Annee:</strong> <br/>
                    {{ $vehicule->Annee }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Prix:</strong> <br/>
                    {{ $vehicule->prix }}
                </div>
            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Image:</strong><br/>
                      <img src="/images/{{ $vehicule->image }}" width="500px">
                  </div>
              </div>
          </div>
        
        </div>
      </div> --}}

      <h1>Editer le vehicule</h1>
      <form action="{{ route('vehicules.update', $vehicule->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <label for="marque">Marque:</label>
          <input type="text" name="marque" value="{{ $vehicule->marque }}">
          <label for="couleur">Couleur:</label>
          <input type="text" name="couleur" value="{{ $vehicule->couleur }}">
          <label for="annee">Année:</label>
          <input type="text" name="annee" value="{{ $vehicule->annee }}">
          <label for="prix">Prix:</label>
          <input type="text" name="prix" value="{{ $vehicule->prix }}">
          <label for="image">Image:</label>
          <input type="file" name="image">
          <button type="submit">Mettre à jour</button>
      </form>
</x-layout>