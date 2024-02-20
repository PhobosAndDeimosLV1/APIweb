@extends ('components.layout')


@section('conteudo')

<article>
      <h1>
        CPF: {{$usuario->cpf}}
      </h1>

      <h2>
        Nome: {{  $usuario->nome  }}
      </h2>
      <h2>
        Data de nascimento: {{  $usuario->data_nascimento  }}
      </h2>

  </article>

@endsection