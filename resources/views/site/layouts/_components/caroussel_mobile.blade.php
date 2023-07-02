<div class="row d-block d-md-none border">

    <div class="col-12 d-flex justify-content-center p-0 carousel_position mobile">

        <div id="carouselExampleCaptions2" class="carousel mobile slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                @for($i=0; $i<count($cabecalho); $i++)
                    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="{{ $i }}" class=" {{ ($i == 0) ? "active" : "" }}" aria-current="true" aria-label="Slide 1"></button>
                @endfor
            </div>

            <div class="carousel-inner">

                @foreach($cabecalho as $c)

                    {{ $i = 0 }}

                        <div class="carousel-item {{ ($i == 0) ? "active" : "" }}" data-bs-interval="5000">
                            <img src="../{{ $c->imagem_mobile }}" class="img_carousel mobile" alt="img_1">
                            <div class="carousel-caption mobile">
                                <div class='banner_new mt-0'>{{ $c->tag }}</div>
                                <div class="banner_title {{ ($i == 0) ? "" : "sem_novidade mobile"}}">{{ $c->titulo }}</div>
                                <div class="banner_text">{{ $c->texto }}</div>
                                <a href="{{ route('site.livros', ['livro_id' => $c->saber_mais]) }}">
                                    <button style="margin-top: 15px;" class="banner_button"></button>
                                </a>
                            </div>
                        </div>

                    {{ $i++ }}

                @endforeach

            </div>

        </div>

    </div>

</div>
