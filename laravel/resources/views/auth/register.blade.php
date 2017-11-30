@extends('template')
@section('conteudo')
<article id="pg_cadastro" class="container">
    <hr />
    <h2 class="text-center">
        <i class="fa fa-user-plus" aria-hidden="true"></i> Cadastro de Usúario
    </h2>
    <hr>
    <br/>
    <form id="cadastro" method="POST" action="{{ route('register') }}">
        <div class="form-row justify-content-around">
        {{ csrf_field() }}
        <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="EmailUser">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    Email*
                </label>
                  <input id="email" type="email" class="form-control" id="EmailUser" name="email" placeholder="Digite seu Email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
        </div>

        <div class="form-group col-md-5{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> SENHA</label>
            <div>
                <input id="password" type="password" class="form-control" name="password" placeholder="Deve ter entre 8 e 15 caracteres." maxlength="15" required>

                @if($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
      </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="control-label">
                  <i class="fa fa-user" aria-hidden="true"></i> Nome Completo*
              </label>
              <div>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Digite seu Nome" required autofocus>
                        @if ($errors->has('name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group col-sm-10 {{ $errors->has('sexo') ? ' has-error' : '' }}">
              <label class="control-label control-label-required"><i class="fa fa-transgender" aria-hidden="true"></i> Sexo*</label>
      			  <div class="col-md-7">
      			  	<div class="col-xs-6 col-sm-4 radio d-inline">
      			  		<input type="radio" id="homem" name="sexo" value="{{ old('M') }}">
      			 		 <label for="homem">Masculino</label>
      			 	</div>
      			 	<div class="col-xs-6 col-sm-4 radio d-inline">
      			  		<input type="radio" id="mulher" name="sexo" value="{{ old('F') }}">
      			 	 	<label for="mulher">Feminino</label>
      			 	</div>
              @if ($errors->has('sexo'))
                      <span class="help-block">
                      <strong>{{ $errors->first('sexo') }}</strong>
                  </span>
              @endif
      			  </div>
      		  </div>

            <div class="form-row justify-content-around">
      				  <div class="form-group col-md-4 {{ $errors->has('cpf') ? ' has-error' : '' }}">
      				    <label for="cpf"><b>CPF*</b></label>
      				    <input type="text" class="form-control" name="cpf" id="cpf" value="{{ old('cpf') }}" placeholder="___.___.___-__" maxlength="14" required>
                  @if ($errors->has('cpf'))
                          <span class="help-block">
                          <strong>{{ $errors->first('cpf') }}</strong>
                      </span>
                  @endif
      				  </div>
      				  <div class="form-group col-md-4 {{ $errors->has('cpf') ? ' has-error' : '' }}">
      				    <label for="date"> <i class="fa fa-calendar" aria-hidden="true"></i> Data de Nascimento*</label>
      				    <input type="date" class="form-control" name="data_nasc" id="data_nasc" required>
                  @if ($errors->has('date'))
                      <span class="help-block">
                          <strong>{{ $errors->first('data_nasc') }}</strong>
                      </span>
                  @endif
      				  </div>
      		  </div>
            <div class="form-row justify-content-around">
      				  <div class="form-group col-md-6 {{ $errors->has('telefone') ? ' has-error' : '' }}">
      				    <label for="telefone"><i class="fa fa-phone" aria-hidden="true"></i></label>Telefone Para Contato</label>
      				    <input type="text" class="form-control" name="telefone" id="telefone" value="{{ old('telefone') }}" placeholder="___.___.___-__" maxlength="15" required>
                  @if ($errors->has('telefone'))
                          <span class="help-block">
                          <strong>{{ $errors->first('telefone') }}</strong>
                      </span>
                  @endif
      				  </div>
      				  <div class="form-group col-md-6 {{ $errors->has('whats') ? ' has-error' : '' }}">
      				    <label for="whats"> <i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp**</label>
      				    <input type="text" class="form-control" name="whats" id="whats" placeholder="(__) ____-_____" maxlength="15" required>
                  @if ($errors->has('whats'))
                      <span class="help-block">
                          <strong>{{ $errors->first('whats') }}</strong>
                      </span>
                  @endif
      				  </div>
      		  </div>
            <br/>
            <h5> <i class="fa fa-map-marker" aria-hidden="true"></i> Endereço de Cadastro </h5>
            <hr>

            <div class="form-row">
              <div class="form-group col-md-5">
                Estado
                <select id="estado" name="C" class="form-control">
                  <option selected value="{{old ('amapa-ap')}}" > Amapá - AP </option>
                  <option>...</option>
                </select>
              </div>

              <div class="form-group col-md-4">
      		      Cidade
      		       <input type="text" name="cidade" value="macapa">
      		    </div>
              <div class="form-group col-md-3">
      		      Bairro
      		    <input type="text" name="bairro" value="macapa">
      		    </div>

              </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    CADASTRAR USUARIO
                                </button>
                            </div>
                        </div>
                    </form>
</article>
@endsection
