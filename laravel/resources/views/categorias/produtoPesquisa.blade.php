@extends('template')
@section('propaganda-topo')
  <section id="topoAcessorio">
    <h1> Produtos Pesquisado </h1>
  </section>
@endsection
@section('conteudo')
  <article id="conteudo"><!-- inicio conteudo -->
      <div class="bs-example">
        <div class="row align-items-center">
        @foreach ($produtos as $indice => $produto)
          <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
              <img data-src="holder.js/100%x100" alt="Produto -C&amp;M-"  src="{{ $produto->urlimg }}" data-holder-rendered="true"/>
              <div class="caption">
                <h4>{{ $produto->titulo }} </h4>
                <p><b>n° P{{ $produto->id }}</b> &nbsp;
                  {{ $produto->descricao }} <br/>
                  <b>Estado: {{ $produto->estado }}</b>
                </p>
                <p>
                  <b class="btn btn-outline-primary" role="button">
                    <i class="fa fa-money" aria-hidden="true"></i> R$ {{  $produto->valor }}
                  </b>
                  <a href="#" class="btn btn-outline-dark" role="button">Favoritar </a>
                </p>
                <p>
                  <b class="btn btn-outline-success" role="button">
                  <i class="fa 	fa-whatsapp" aria-hidden="true"></i> Contato:<wbr>  n° Contato/Whats
                  </b>
                </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</article>
@endsection
