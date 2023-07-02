@extends('site.layouts.basico')

@section('conteudo')

<main class="container-fluid">

    <div class="row justify-content-end">

        <div class="col-12 col-md-11 box">

            <div class="row welcome_box d-flex flex-nowrap justify-content-center gap-5">

                <div class="col-4 p-0 d-flex justify-content-center" style="width: 344px;">
                    <img class="welcome_img" src="{{ $home->imagem }}" alt="foto">
                </div>

                <div class="col-5 div_welcome" style="width: 600px;">

                    <div class="row d-flex flex-column">
                        <div class="welcome_title col-12 mt-2 px-0">
                            <div>Bem-vindo ao meu website</div>
                        </div>
                        <div class="welcome_text col-12 px-0">
                            <div>{{ $home->texto }}...</div>
                        </div>
                        <div class="col-3 welcome_button align-self-end text-end p-0 mt-3 d-flex justify-content-center">
                            <a href="{{ route('site.autor' )}}">
                                <button style="margin-top: 40px;" class="banner_button"></button>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>   

    </div>

    <div class="row d-flex flex-column justify-content-center align-items-center margin_mobile">

        <div class="col-12 col-sm-11 last_books_title px-0">Ultimos Livros</div>

        <div class="col-12 col-sm-11 last_books_text">
            <div>{{ $home->texto }}</div>
        </div>

        <!-- CARDS -->
        <div class="col-12">

            <div class="row d-flex justify-content-center flex-wrap gap-5">

                @for($i=0; $i<count($books); $i++)
                    @php $b = $books[$i] @endphp
                    @php $c = $i + 1 @endphp

                        <div class="col-3 card d-flex flex-column p-0">
                        <div class="col p-0">
                            <img class="card_img" src="{{ $b->imagem }}" alt="book">
                        </div>
                        <div class="col-9 card_title p-0">{{ $b->titulo }}</div>
                        <div class="col-4 card_new p-0">{{ $home->{'observacao_'.$c} }}</div>
                        <div class="col card_text p-0">
                            <div>{{ $b->texto }}</div>
                        </div>

                        <div class="col align-self-end">
                            <a href="{{ route('site.livros', ['livro_id' => $home->{'destaque_'.$c} ]) }}">
                                <button style="margin-top: 15px;" class="card_button"></button>
                            </a>
                        </div>
                        
                    </div>
                @endfor

            </div>

        </div>

    </div>  

</main>

@endsection
