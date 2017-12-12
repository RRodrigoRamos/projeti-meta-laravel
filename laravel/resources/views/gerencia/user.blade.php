@extends('template')
@section('conteudo')
  <article id="siteUser" role"main">
      <h2 class="text-center">

        {{dd(Auth::user()->email)}}
        Bem Vindo, <i class="fa fa-user" aria-hidden="true"></i> <ul class="nav justify-content-center">
            <!-- Authentication Links -->
            @guest
                <li>
                    <a href="{{ route('login') }}">
                    ENTRAR
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        NOVO REGISTRO
                    </a>
                </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                              <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul> administração do usuário <i class="fa fa-wrench" aria-hidden="true"></i>
      </h2>
      <section id="cadastro" class="jumbotron text-center">
              <div class="container">
                  <h1 class="jumbotron-heading">Cadastrar Produto</h1>
                <h4>
                  Você poderá cadastrar produtos com informações relevantes para que pessoas interessadas possam comprar ou entrar em contato para negociação mediante as informações coletadas aqui!
                </h4>
                <p><br/>
                  <a href="#" class="btn btn-primary">Cadastrar Novo Produto</a>
                  <a href="#" class="btn btn-secondary">Editar Meus Dados</a>
                </p>
              </div>
    </section>
    <hr class="col-12 align-items-center"><br/>
    <h2 class="text-center">
      Produtos Cadastrados do Usuario
      <i class="fa fa-user" aria-hidden="true"></i>
      Rodrigo Ramos
      <i class="fa fa-wrench" aria-hidden="true"></i>
    </h2>
    <br/><hr class="col-12 align-items-center"><br/>
        <div class="row align-items-center">
          <div class="col-sm-3 col-md-3">
             <div class="thumbnail">
               <img data-src="holder.js/100%x100" alt="Produto -CM-"  src="../img/categorias/anuncios/imovel/1.png" data-holder-rendered="true"/>
                 <div class="caption">
                     <h4>Titulo Produto </h4>
                        <p>Descrição 1 do Produto <br/>Descrição 2 do Produto<br/>
                            <b>
                              Estado(): Se for casa é localição se for carro KM Rodados
                            </b>
                        </p>
                        <p>
                           <b class="btn btn-outline-primary" role="button">
                             <i class="fa fa-money" aria-hidden="true"></i>
                              R$ 50.500,00
                          </b>
                         <a href="#" class="btn btn-outline-dark" role="button">
                           DELETAR
                         </a>
                       </p>
                       <p>
                        <b class="btn btn-outline-success" role="button">
                          <i class="fa fa-whatsapp" aria-hidden="true"></i>
                           Contato:96 - 99771-1777
                        </b>
                      </p>
               </div>
           </div>
         </div>
      </div>
  </article>
@endsection
