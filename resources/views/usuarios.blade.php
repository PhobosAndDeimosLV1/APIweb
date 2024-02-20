@extends ('components.layout')


@section('banner')
  <h1>Usuarios</h1>
@endsection




@section('conteudo')

  @foreach ($usuarios as $usuario)
    <article>
      <h1>
        <a href="/usuarios/{{ $usuario->cpf }}">
          CPF: {!! $usuario->cpf !!}
        </a> 
      </h1>

      
      <h2>
        Nome: {{  $usuario->nome  }}
      </h2>
      <h2>
        Data de nascimento: {{  $usuario->data_nascimento  }}
      </h2>
    </article>
  @endforeach

@endsection