@extends('template')
	@section('propaganda-topo')
	  <section id="topoAcessorio">
			<h1> Sessão de Acessórios</h1>
			<h3>Brindes, Pulseiras, Relogios...</h3>
	  </section>
	@endsection
	@section('conteudo')
	<article id="pg_acessorio">
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
								<b>Estado: {{ $produto->estado }}</b>
							</p>
							<p>
								<b class="btn btn-outline-primary" role="button">
									<i class="fa fa-money" aria-hidden="true"></i> R$ {{  $produto->valor }}
								</b>
								<a href="#" class="btn btn-outline-dark" role="button">Favoritar </a>
							</p>
							@foreach ($users as $user)
								<p>
									<b class="btn btn-outline-success" role="button">
										<i class="fa 	fa-whatsapp" aria-hidden="true"></i> Contato: <wbr>{{ $user->cpf }}
									</b>
								</p>
							@endforeach
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
	@stop
