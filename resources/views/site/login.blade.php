@extends('backoffice.layouts.basico')

@section('conteudo')
    
<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row box w-75 p-5 text-center mt-3">
        <div class="col-12">
            <h5>LOGIN</h5>
            <h5 style="color: red; font-size: 22px;">{{ isset($erro) && $erro != '' ? $erro : '' }}</h5>
            <br>
            <form action="{{ route('site.login') }}" method="POST">
                @csrf
                <input type="text" name="user" placeholder="Email" style="width: 20%;">
                <br>
                {{ $errors->has('user') ? $errors->first('user') : '' }}
                <br><br>
                <input type="password" name="password" placeholder="Password">
                <br>
                {{ $errors->has('password') ? $errors->first('password') : '' }}
                <br><br>
                <input type="submit" value="ENTRAR">
            </form>
            
        </div>
    </div>
</main>

@endsection