@extends('template')

@section('propaganda-topo')
<section id="carousel" class="container-fluid col-sm-9">
      <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
          <ol class="carousel-indicators">
             	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
            	</li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1">
              </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2">
              </li>
          </ol>
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
              	<img class="d-block img-fluid" src="img/home/teste5.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/home/teste4.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/home/teste2.jpg" alt="Third slide">
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            	<span class="carousel-control-next-icon" aria-hidden="true">
            	</span>
            	<span class="sr-only">Next</span>
          </a>
        </div>
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
                <h4>Teste {{ $produto->titulo }} </h4>
								<p><b>n° P{{ $produto->id }}</b> &nbsp;
                  {{ $produto->descricao }} <br/>
									<b>Estado:{{ $produto->estado }}</b>
								</p>
								<p>
									<b class="btn btn-outline-primary" role="button">
										<i class="fa fa-money" aria-hidden="true"></i> R$ {{  $produto->valor }}
									</b>
									<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
								</p>
								<p>
									<b class="btn btn-outline-success" role="button">
									<i class="fa 	fa-whatsapp" aria-hidden="true"></i> Contato:96 - 99102-9214
									</b>
								</p>
						</div>
					</div>
				</div>
            @if($indice % 3 === 2)
              <div class="col-sm-3 col-md-3" class="patrocinio">
                <div class="thumbnail">
                  <img data-src="holder.js/100%x100" alt="Produto -C&amp;M-"   src="img/rodape/meta.png" data-holder-rendered="true">
                  <div class="caption">
                    <h5>Patrocinador</h5>
                    <p>
                      <a href="http://www.meta.edu.br/faculdade/" class="btn btn-outline-secondary" role="button">Site Institucional</a>
                    </p>
                  </div>
              </div>
            </div>
            @endif
        @endforeach
			</div>
		</div>
</article>
@endsection
