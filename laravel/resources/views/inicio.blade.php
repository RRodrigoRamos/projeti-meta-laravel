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
              </div>d
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
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/eletrodomestico/3.jpg" data-holder-rendered="true"/>
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
				<div class="col-sm-3 col-md-3">
				<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/eletrodomestico/15.jpg" data-holder-rendered="true"/>
						<div class="caption">
							<h4>Refriregador Brastemp FosterFree</h4>
								<p>Gelo Seco - Painel digital<br/>
									<b>Estado: USADO</b>
								</p>
								<p>
									<b class="btn btn-outline-primary" role="button"> 
										<i class="fa fa-money" aria-hidden="true"></i> R$ 800,000
									</b>
									<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
								</p>
								<p> 
									<b class="btn btn-outline-success" role="button">
										<i class="fa fa-whatsapp" aria-hidden="true"></i> Contato:96 - 99100-2114
									</b>
								</p>
						</div>
					</div>
			</div>
			<div class="col-sm-3 col-md-3">
					<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/eletrodomestico/26.jpg" data-holder-rendered="true"/>
							<div class="caption">
								<h4>TV 32" Samsung</h4>
									<p>DigitalTV / HDMI / USB / Som Stereo		<br/> 
										<b>Estado: NOVO</b>
									</p>
									<p> 
										<b class="btn btn-outline-primary" role="button"> 
										<i class="fa fa-money" aria-hidden="true"></i> R$ 950,000 
									</b>
										<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
									</p>
									<p> 
										<b class="btn btn-outline-success" role="button">
										<i class="fa fa-whatsapp" aria-hidden="true"></i> Contato:96 - 98100-2000
										</b>
									</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-md-3" class="patrocinio">
						<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"   src="img/rodape/meta.png" data-holder-rendered="true">
							<div class="caption">
								<h5>Patrocinador</h5>
								<p>
									<a href="http://www.meta.edu.br/faculdade/" class="btn btn-outline-secondary" role="button">Site Institucional</a>
								</p>
							</div>
					</div>
				</div>
			</div>
				<div class="row align-items-center">
					<div class="col-sm-3 col-md-3">
					<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/eletronico/1.jpg" data-holder-rendered="true"/>
							<div class="caption">
								<h4>Samsung Gran Prime</h4>
								<p>Pelicula de Vidro / G530 / Capinha Black / Wi-FI / 4G<br/> 
									<b>Estado: COM MARCAS DE USO</b>
								</p>
								<p> 
									<b class="btn btn-outline-primary" role="button"> 
										<i class="fa fa-money" aria-hidden="true"></i> R$ 450,000
									</b>
									<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
								</p>
								<p> 
									<b class="btn btn-outline-success" role="button">
										<i class="fa fa-whatsapp" aria-hidden="true"></i> Contato:96 - 99100-2099
									</b>
								</p>
							</div>
						</div>
				</div>
				<div class="col-sm-3 col-md-3">
				<div class="thumbnail">
						<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/eletronico/2.jpg" data-holder-rendered="true"/>
							<div class="caption">
								<h4>Smartphone LG K10</h4>
									<p>Power M320TV / peliculado / 4G - 3 de RAM - 32 Gigas<br/> 
										<b>Estado: SEMI-NOVO</b>
									</p>
									<p> 
										<b class="btn btn-outline-primary" role="button">
											<i class="fa fa-money" aria-hidden="true"></i> R$ 850,000 
										</b>
										<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
									</p>
									<p>
										<b class="btn btn-outline-success" role="button">
											<i class="fa fa-whatsapp" aria-hidden="true"></i> Contato:96 - 99188-0097
										</b>
									</p>
							</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
				<div class="thumbnail">
						<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/eletronico/28.jpg" data-holder-rendered="true"/>
						<div class="caption">
								<h4> MiniSystem - PHILCO</h4>
									<p>Som Sterio - Conexão Bluetooth - USB<br/> 
										<b>Estado: USADO</b>
									</p>
									<p> 
										<b class="btn btn-outline-primary" role="button">
											<i class="fa fa-money" aria-hidden="true"></i> R$ 250,000 
										</b>
										<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
									</p>
									<p> 
										<b class="btn btn-outline-success" role="button">
											<i class="fa fa-whatsapp" aria-hidden="true"></i> Contato:96 - 9102-0097
										</b>
									</p>	
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3" class="patrocinio">
						<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"   src="img/patrocinio/garden.png" data-holder-rendered="true">
							<div class="caption">
								<h5>Patrocinador</h5>
								<p>
									<a href="http://amapagardenshopping.com.br/" class="btn btn-outline-secondary" role="button">Site</a>
								</p>
							</div>
						</div>
					</div>
			</div>
			<div class="row align-items-center">
				<div class="col-sm-3 col-md-3">
					<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/automotivo/15.jpg" data-holder-rendered="true"/>
						<div class="caption">
								<h4> Honda BROS - 160cc</h4>
								<p>5 Machas / Tanque 15l / Partida Elétrica - Com Alarme <br/>
									<b>Estado: 10.000km RODADO</b>
								</p>
								<p> 
									<b class="btn btn-outline-primary" role="button"> 
										<i class="fa fa-money" aria-hidden="true"></i> R$ 4.500,00 
									</b>
									<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
								</p>
								<p> 
									<b class="btn btn-outline-success" role="button">
										<i class="fa fa-whatsapp" aria-hidden="true"></i> Contato:96 - 9012-1122
									</b>
								</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/automotivo/8.jpg" data-holder-rendered="true"/>
						<div class="caption">
								<h4>Gol - SpaceFox G5</h4>
								<p>
									Cambio Automatico 5V / 3 Airbag / IPVA 2017 Quitado 20/30 Parcelas Quitadas <br/> <b>Estado: 30.000km RODADO</b>
								</p>
								<p> 
									<b class="btn btn-outline-primary" role="button"> 
										<i class="fa fa-money" aria-hidden="true"></i> R$ 20.500,00
									</b>
										<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
								</p>
								<p>
									<b class="btn btn-outline-success" role="button">
										<i class="fa fa-whatsapp" aria-hidden="true"></i> Contato:96 - 9011-0022
									</b>
								</p>
						</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-3">
				<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"  src="img/categorias/anuncios/automotivo/5.jpg" data-holder-rendered="true"/>
						<div class="caption">
								<h4> Renalt - SANDERO/2017</h4>
								<p>Cambio Automatico / Airbag / IPVA 2017 Quitado <br/> 
									<b>Estado: 10.000km RODADO</b>
								</p>
								<p> 
									<b class="btn btn-outline-primary" role="button">
										<i class="fa fa-money" aria-hidden="true"></i> R$ 30.000,00
									</b>
									<a href="#" class="btn btn-outline-dark" role="button">Adicionar </a>
								</p>
								<p>
									<b class="btn btn-outline-success" role="button">
										<i class="fa fa-whatsapp" aria-hidden="true"></i> Contato:96 - 9091-9022
									</b>
								</p>
						</div>
				</div>
			</div>
					<div class="col-sm-3 col-md-3">
						<div class="thumbnail">
							<img data-src="holder.js/100%x100" alt="Produto -C&M-"   src="img/patrocinio/sanalucia.jpg" data-holder-rendered="true">
						<div class="caption">
							<h5>Patrocinador</h5>
							<p><a href="http://supermercadosantalucia.com.br/" class="btn btn-outline-secondary" role="button">Site</a></p>
						</div>
					</div>
				</div>
		</div>
			</div>
		</article>
@endsection