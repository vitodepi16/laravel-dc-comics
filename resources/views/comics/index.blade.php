@extends('layout.general')

@section('content')
    <main>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="container">
            <a href=" {{ route('comics.create') }}" class="btn btn-outline-primary mt-4 ">
                Crea il tuo fumetto
            </a>
            <div class="row ">
                @foreach ($comics as $comic)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex  p-3 mt-4">
                        <div class="card">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <div class="card-img-top">
                                    <img class="img-fluid h-100" src="{{ $comic['thumb'] }}" alt="">
                                </div>
                                <div class="card-body">
                                    <h4 class="p-4 mb-4 text-white">{{ $comic['title'] }}</h4>
                                    <a href="{{ route('comics.edit', $comic->id) }}"
                                        class="btn btn-outline-warning btn-sm">Modifica il
                                        fumetto</a>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm mt-3 delete-button">Elimina il
                                            fumetto</button>
                                    </form>

                                </div>

                            </a>

                        </div>

                    </div>
                @endforeach
            </div>

        </div>

        </div>

    </main>
@endsection
@include('partials.popupdelete')
