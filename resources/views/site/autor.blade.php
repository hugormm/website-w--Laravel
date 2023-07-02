@extends('site.layouts.basico')

@section('conteudo')

<main id="main" class="container-fluid">

        <div class="row justify-content-end">

            <div class="col-12 col-md-11">
                <div class="row box_paginas d-flex">

                    <div class="col-7">
                        <div class="row d-flex flex-column">
                            <div class="title_box col px-0" style="margin: 50px 0px 10px 102px">
                                <div>Autor</div>
                            </div>
                            <div class="sub_box col px-0" style="margin-left: 102px;">
                                <p>
                                    Sobre mim
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>  

        </div>

        <div class="row d-flex flex-column margin_mobile">

            <div class="col-12 px-0 d-flex justify-content-center">
                <img src="{{ asset($autor->foto) }}" alt="foto" class="img_about_me">
            </div>

            <div class="col-10 col-sm-9 about_me_text mobile d-none align-self-center">
                <div class="d-block" id="texto_menor">{{ $autor->texto }} ...</div>
                <div class="d-none" id="texto_maior">{{ $autor->texto }}</div>
                <button onclick="seeMore()" class="see_more_button mx-auto" id="ver_mais" style="margin-top: 40px;"></button>
                <button onclick="goBack()" class="back_button" style="margin-top: 20px;"></button>
            </div>

            <div class="col-10 col-sm-9 about_me_text align-self-center">
                <div>{{ $autor->texto }}</div>
                <button onclick="goBack()" class="back_button" style="margin-top: 20px;"></button>
            </div>
        </div>    
        
    </main>
    
@endsection
    