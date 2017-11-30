@extends('template')
@section('propaganda-topo')
  <section id="pg_contato" class="container">
    <h1> <i class="fa fa-envelope-o" aria-hidden="true"></i> Recuperar minha Senha...  </h1>
  </section>
@endsection
@section('conteudo')
<article id="login" class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
               <div class="panel-heading">
                 <h2>
                   Link de Recuperação de Senha
                 </h2>
               </div>
            <div class="panel-body">
                @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                @endif
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                  {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-8 control-label">
                  Meu Email Cadastrado
                </label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>
                          {{ $errors->first('email') }}
                        </strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <br />
                    <button type="submit" class="btn btn-primary">
                      Enviar link para Email
                    </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</article>
@endsection
