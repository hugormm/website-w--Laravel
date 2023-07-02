@extends('site.layouts.basico')

@section('conteudo')

<main id="main" class="container-fluid">

    <div class="row justify-content-end">

        <div class="col-12 col-md-11">

            <div class="row box_paginas d-flex">
                <div class="col-7">
                    <div class="row d-flex flex-column">
                        <div class="title_box col px-0" style="margin: 50px 0px 10px 102px">
                            <div>Imprensa</div>
                        </div>
                        <div class="sub_box col px-0" style="margin-left: 102px;">
                            <p>
                                Ultimas notícias
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>   

    </div>

    @foreach($imprensa as $i)

    <div class="row margin_mobile_contactos d-flex flex-column {{ ($i->id == 1) ? "box_imprensa" : "" }}">

        <div class="col-11 col-md-9 mx-auto px-4">
            <div class="sub_box imprensa">{{ $i->titulo }}</div>
            <div class="line_imprensa" style="margin-top: 12px;"></div>
            <div class="date_imprensa float-end" style="margin-top: 12px;">{{ $i->created_at }}</div>
            <img class="img_imprensa" style="margin: 50px 0px;" src="{{ $i->imagem }}" alt="foto">
            <div class="text_imprensa">{{ $i->texto }}</div>
        </div>

    </div>   

    @endforeach

    {{ $imprensa->links() }}

</main>

@endsection
