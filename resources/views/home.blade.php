@extends('layout.general')

@section('content')
    <main>

        <div class="container">
            <div class="row ">
                @foreach ($products as $product)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3  d-flex p-3 mb-4 mt-4">
                        <a class="card" href="{{ route('comic', ['id' => $loop->index]) }}">
                            <div class="card-img-top">
                                <img class="img-fluid h-100" src="{{ $product['thumb'] }}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="p-4 mb-4 text-white">{{ $product['title'] }}</h4>
                            </div>
                        </a>


                    </div>
                @endforeach
            </div>

        </div>

    </main>
@endsection

<style lang="scss" scoped>
    main {
        background-color: black;


    }

    .card-body {
        background-color: black;

    }

    .card {
        border: 0;
        transition: 0.2s;

        text-decoration: none;

        &:hover {
            cursor: pointer;
            background-color: gray;

        }
    }
</style>
