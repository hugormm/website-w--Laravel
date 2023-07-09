@extends('backoffice.layouts.basico')

@section('conteudo')

<main class="container-fluid d-flex flex-column align-items-center gap-4">
    <div class="row w-75">
        <div class="col-12 box mt-3 p-4 text-center">
            <h3>Destaques</h3>
            <br>
            <table class="w-100">
                <tr>
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Observação</th>
                    <th>Acções</th>
                </tr>
                @for($i=0; $i<count($books); $i++)
                    @php $b = $books[$i] @endphp
                    @php $id = $i + 1 @endphp
                    <tr>
                        @if(!empty($books[$i]))
                            <td><img class="imagem" src="{{ asset($b->imagem) }}" alt=""></td>
                            <td>{{ $b->titulo }}</td>
                            <td>{{ ($home->{'observacao_'.$id}) }}</td>
                            <td>
                                <a href="{{ route('destaques.edit', ['destaque' => $id, 'titulo' => $b->titulo]) }}">
                                    <button>Editar</button>
                                </a>
                            </td>
                        @else
                            <td>----</td>
                            <td>----</td>
                            <td>----</td>
                            <td>
                                <a href="{{ route('destaques.edit', ['livros' => $livros, 'home' => $home, 'destaque' => $id, 'dados_livro' => 0]) }}">
                                    <button>Editar</button>
                                </a>
                            </td>
                        @endif
                    </tr>
                @endfor
            </table>
        </div>
    </div>
</main>

@endsection