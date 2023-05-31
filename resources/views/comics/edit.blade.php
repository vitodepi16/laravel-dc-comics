@extends('layout.general')

@section('content')
    <div class="container">
        <h1 class="text-white">Modifica il fumetto</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label text-white">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelp" value="{{ $comic->title }}">
                <div id="titleHelp" class="form-text">Inserisci un titolo</div>
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label text-white">Descrizione</label>
                <textarea class="form-controll  @error('description') is-invalid @enderror" name="description" id="description"
                    cols="30" rows="10" value="{{ $comic->description }}">
            </textarea>
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label text-white">Immagine</label>
                <input type="text" class="form-control  @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelp" value="{{ $comic->thumb }}">
                <div id="thumbHelp" class="form-text">Inserisci immagine</div>
                @error('thumb')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label text-white">Prezzo</label>
                <input type="text" class="form-control  @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="priceHelp" value="{{ $comic->price }}">
                <div id="priceHelp" class="form-text">Inserisci prezzo</div>
                @error('price')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label text-white">Serie</label>
                <input type="text" class="form-control  @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="seriesHelp" value="{{ $comic->series }}">
                <div id="seriesHelp" class="form-text">Inserisci la serie</div>
                @error('series')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label text-white">Data</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="sale_dateHelp" value="{{ $comic->sale_date }}">
                <div id="sale_dateHelp" class="form-text">Inserisci la data (AAAA/MM/DD)</div>
                @error('sale_date')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="type" class="form-label text-white">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="typeHelp" value="{{ $comic->type }}">
                <div id="typeHelp" class="form-text">Inserisci il tipo</div>
                @error('type')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
