<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			{{link_to('/','Vicky Toro fashion',$attributes = array('class'=>'brand'))}}
			<div class="nav-collapse collapse">
				<ul class="nav">
					@if(Sentry::check())
					<li><a href="{{URL::to('/shoes/out')}}">Salir</a></li>
					@endif
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>