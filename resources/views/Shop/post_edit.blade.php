@extends('home')
@section('content')
    @php $title = $produit->name @endphp
    <h1>Nouvelle robe</h1>
    <form action="{{route('update_produit', ['id'=>$produit->id]) }}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <input type="text" name="nom" class="form-control" value="{{$produit->nom}}" placeholder="Nom de la robe">
        </div>
        <div class="form-group">
            <textarea name="description" class="form-control" value="{{$produit->description}}" placeholder="Description robe" rows="5"></textarea>
        </div>
        <div class="form-group">
            <input type="number" name="prix" class="form-control" value="{{$produit->prix}}" placeholder="Prix de la robe" rows="5"></input>
        </div>
        <div class="form-group">
            <input type="file" name="photo_principale" class="form-control" value="{{$produit->photo_principale}}" placeholder="1ere image">
        </div>
        <div class="form-group">
            <input type="file" name="photo_secondaire" class="form-control" value="{{$produit->photo_secondaire}}" placeholder="1ere image">
        </div>
        <div>
            <button type="submit" class="btn btn-outline-success">Mettre à jour</button>
        </div>
    </form>

@endsection
