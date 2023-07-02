<div class="row d-none d-md-block">

    <div class="col-12 d-flex justify-content-center p-0 carousel_position">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                @for($i=0; $i<count($cabecalho); $i++)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $i }}" class=" {{ ($i == 0) ? "active" : "" }}" aria-current="true" aria-label="Slide 1"></button>
                @endfor;
            </div>

            <div class="carousel-inner border">

                
                @foreach($cabecalho as $c)

                    {{ $i = 0 }}

                    <div class="carousel-item {{ ($i == 0) ? "active" : "" }}" data-bs-interval="5000">
                        <img src="../{{ $c->imagem }}" class="img_carousel" alt="img_1">
                        <div class="cabecalho_text carousel-caption d-none d-md-block">
                            <div class="banner_new">{{ $c->tag }}</div>
                            <div class="banner_title">{{ $c->titulo }}</div>
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