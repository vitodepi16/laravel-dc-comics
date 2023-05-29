@extends('layout.general')

@section('content')
    <div class="container">
        <h1 class="text-white">Inserisci Nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label text-white">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                <div id="titleHelp" class="form-text">Inserisci un titolo</div>
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label text-white">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">
            </textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label text-white">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelp">
                <div id="thumbHelp" class="form-text">Inserisci immagine</div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label text-white">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp">
                <div id="priceHelp" class="form-text">Inserisci prezzo</div>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label text-white">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelp">
                <div id="seriesHelp" class="form-text">Inserisci la serie</div>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label text-white">Data</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelp">
                <div id="sale_dateHelp" class="form-text">Inserisci la data (AAAA/MM/DD)</div>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label text-white">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp">
                <div id="typeHelp" class="form-text">Inserisci il tipo</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
