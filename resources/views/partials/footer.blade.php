<footer>
    <div class="row m-0">
        @foreach ($data as $fLink)
            <div class="col p-0">
                <ul class="d-flex flex-column p-0  align-items-center h-100">

                    <h5 class="p-3 text-uppercase text-white">{{ $fLink['title'] }}</h5>
                    @foreach ($fLink['links'] as $link)
                        <li class="d-flex  pb-2">
                            <a href="/">{{ $link['text'] }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        @endforeach
    </div>
</footer>
<style lang="scss" scoped>
    footer {}

    li {
        list-style: none;

    }

    a {
        text-decoration: none;
    }
</style>
