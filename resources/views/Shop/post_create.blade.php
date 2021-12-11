@extends('home')
@section('content')
    <h1>Nouvelle robe</h1>
    <form action="{{route('post.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="nom" class="form-control" placeholder="Nom de la robe">
        </div>
        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Description robe" rows="5"></textarea>
        </div>
        <div class="form-group">
            <input type="number" name="prix" class="form-control" placeholder="Prix de la robe" rows="5"></input>
        </div>
        <div class="form-group">
            <input type="file" name="photo_principale" class="form-control" placeholder="1ere image">
        </div>
        <div class="form-group">
            <input type="file" name="photo_secondaire" class="form-control" placeholder="1ere image">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Ajouter</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>

@endsection
