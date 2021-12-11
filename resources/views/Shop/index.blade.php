@extends('home')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Farahnight</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>
    <div class="col text-center">
    <a href="{{ route('post.create') }}" class="btn btn-primary md col-md-2">Nouvelle robe</a>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @foreach($produits as $produit)
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top"  src="{{asset('produits/'.$produit->photo_principale)}}" height="450" width="500" alt="Card image cap">

                    <div class="card-body">
                        <p class="card-text">{{$produit->nom}} <br> {{$produit->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price"> {{number_format($produit->prix,2)}}€</span>
                            <a href="{{route('voir_produit', ['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            <a href="{{route('edit_produit', ['id'=>$produit->id]) }}">
                                <button class="btn btn-sm btn-outline-secondary">Editer</button>
                            </a>
                            <form action="{{route('delete_produit', ['id'=>$produit->id]) }}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-5 col-md-3 mx-auto">
       {{ $produits->links()}}
       </div>
    </div>
</div>
@endsection
