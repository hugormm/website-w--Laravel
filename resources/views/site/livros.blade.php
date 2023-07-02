@extends('site.layouts.basico')

@section('conteudo')

<main id="main" class="container-fluid">

    <div class="row justify-content-end">

        <div class="col-12 col-md-11">

            <div class="row box_paginas d-flex">
                <div class="col-7">
                    <div class="row d-flex flex-column">
                        <div class="title_box col px-0" style="margin: 50px 0px 10px 102px">
                            <div>Livros</div>
                        </div>
                        <div class="sub_box col px-0" style="margin-left: 102px;">
                            <p>
                                {{ $livro->titulo }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>   

    </div>

    <div class="row d-flex flex-column p-0 margin_mobile">

        <div class="col-10 col-md-8 px-0 mx-auto mx-0">
            <img class="float-start img_book" style="margin-right: 100px;" src="{{ asset($livro->imagem) }}" alt="foto">
            <div class="book_text">{{ $livro->texto }}</div>
            <button onclick="goBack()" class="back_button book float-end" style="margin-top: 85px;"></button>
            
        </div>

    </div>  

</main>

@endsection