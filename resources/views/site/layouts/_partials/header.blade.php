    <header class="container-fluid">

    <!-- CABECALHO DESKTOP -->
    <div class="row d-flex flex-column align-items-center d-none d-md-block" id="top">

        <div class="col-12 d-flex justify-content-center" style="margin-top: 52px;">

            <div class="col-6 text-center">
                <div class="top_title">Sebastião Alves</div>
            </div>

        </div>

        <div class="line_title col-11 mx-auto" style="margin: 15px;"></div>

        <div class="col-12 text-center">

            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-md py-0">
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">

                    @include('site.layouts._components.navbar_ul')

                </div>
            </nav>

        </div>

    </div>

    <!-- CAROUSSEL -->
    @include('site.layouts._components.caroussel')

    <!-- CABECALHO MOBILE -->
    <div class="row d-block d-md-none px-0" id="top_mobile">

        <div class="col-12 px-0" style="margin-top: 70px;">

            <div class="col-12 d-flex flex-nowrap justify-content-between px-4">
                <div class="top_title_mobile">Sebastião Alves</div>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="line_title mobile col-11 mx-auto" style="margin-top: 15px;"></div>

        </div>
    
        <div class="col-12 text-center px-0">

            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-md bg-body-tertiary">
                <div class="container-fluid px-0">
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                        @include('site.layouts._components.navbar_ul')

                    </div>
                </div>
            </nav>

        </div>

    </div>

    <!-- CAROUSSEL -->
    <!--@include('site.layouts._components.caroussel') -->

    </header>