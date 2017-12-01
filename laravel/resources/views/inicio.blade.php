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
					<div class="col-sm-3 col-md-3">
						<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&amp;M-"  src="" data-holder-rendered="true"/>
							<div class="caption">
								<h4>Fogão Esmaltec AutoLimpante</h4>
								<p>Fogão 5 Bocas - Esmaltec 2017 <br/>
									<b>Estado: NOVO</b>
								</p>
								<p>
									<b class="btn btn-outline-primary" role="button">
										<i class="fa fa-money" aria-hidden="true"></i> R$ 600,000
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
			</div>
		</div>
</article>
@endsection
