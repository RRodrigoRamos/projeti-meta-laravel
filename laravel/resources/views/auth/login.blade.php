  @extends('template')
@section('conteudo')

<article id="login">
    <div class="tela">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="form-signin-heading">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Área para Usuário Cadastrado:
                  </h2>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                 Entre com seu Email:
                </label>
                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                          <span class="help-block">
                                <strong>{{ $errors->
                                  first('email') }}
                                </strong>
                          </span>
                      @endif
                  </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">
                <i class="fa fa-key" aria-hidden="true"></i>
                 Digite uma Senha:
              </label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>
                            {{ $errors->first('password') }}
                          </strong>
                        </span>
                  @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                     Manter-me Conectado!
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    &nbsp;&nbsp;Acessar&nbsp;&nbsp;
                </button>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  Esqueceu sua Senha ?
                </a>
            </div>
          </div>
        </form>
        <a href="/register" ></a><button class="btn btn-primary">
            &nbsp;&nbsp;NOVO CADASTRO&nbsp;&nbsp;
        </button>
      </a>
      </div>
    </div>
  </div>
</article>
@endsection
