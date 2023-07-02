@extends('site.layouts.basico')

@section('conteudo')

<main id="main" class="container-fluid">

    <div class="row justify-content-end">

        <div class="col-12 col-md-11">

            <div class="row box_paginas d-flex">
                <div class="col-7">
                    <div class="row d-flex flex-column">
                        <div class="title_box col px-0" style="margin: 50px 0px 10px 102px">
                            <div>Contactos</div>
                        </div>
                        <div class="sub_box col px-0" style="margin-left: 102px;">
                            <p>
                                Pode contactar-me através do e-mail ou telefone
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>   

    </div>

    <div class="row d-flex flex-column justify-content-center align-items-center gap-5 px-0 margin_mobile_contactos">

        <div class="col-12 px-0 text-center">
            <div class="sub_contactos">TELEFONE</div>
            <div class="sub_text">{{ $contactos->telefone }}</div>
        </div>

        <div class="col-8 px-0 text-center">
            <div class="sub_contactos">MORADA</div>
            <div class="sub_text">{{ $contactos->morada }}</div>
        </div>

        <div class="col-12 px-0 text-center">
            <div class="sub_contactos">EMAIL</div>
            <div class="sub_text">{{ $contactos->email }}</div>
        </div>

    </div>    

    <div class="line_contactos col-2 mx-auto" style="margin-top: 40px;"></div>

    <div class="col-12 px-0 mx-auto text-center" style="margin-top: 40px;">

        <div class="sub_contactos">HORARIO</div>
        <div class="sub_text">{{ $contactos->horario }}</div>

    </div>
    
</main>

@endsection