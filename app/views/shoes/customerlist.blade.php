<input class='span9' type="text" id="searchcustomer" placeholder='Buscar cliente por nombre cedula o empresa'/>
<br>
<table class="table table-condensed table-hover">
	<tr>
		<th class='span1'>Documento</th>
		<th class='span3'>Nombre</th>
		<th class='span2'>Empresa</th>
		<th class='span2'>Celular | Fijo</th>
		<th class='span1'>Editar</th>
	</tr>
	@foreach(Customer::all() as $c)
		<tr>
			<td>
				@if($c->cardid=='')
				<a href="" class="addcardid" id='addcardid{{$c->id}}'>Agregar</a>
				@else 
				{{$c->cardid}}
				@endif
				<div class="hide" id="hiddeninputaddcardid{{$c->id}}">
					<input type="text" id='entercardid{{$c->id}}' class='span1'>
					<br>
					<div id="buttonaddcardid{{$c->id}}" class="hide">
						<a href="" id='confirmaddingcardid{{$c->id}}'>OK</a> | 
						<a href="" id='canceladdingcardid{{$c->id}}'>Cancel</a>
					</div>
				</div>
			</td>
			<td>{{$c->name}} {{$c->surname}} (<spam class="text-error">-$55.660</spam>)</td>
			<td>
				@if($c->company!='')
				<div id="company{{$c->id}}">
					{{$c->company}}
				</div>
				@else
				<a href="" class='addcompany' id="addcompany{{$c->id}}">Agregar</a>
				<div class="hide" id="hiddeninputaddcompany{{$c->id}}">
					<input type="text" id="entercompany{{$c->id}}">
					<div class="hmdhide" id="buttonaddcompany{{$c->id}}">
						<a href="" id="confirmaddcompany{{$c->id}}">OK</a> |
						<a href="" id="canceladdcompany{{$c->id}}">Cancel</a>
					</div>
				</div>
				@endif
				
				
				
			</td>
			<td>
				<?php 
				$mobile='';
				$phonenumber='';
				if (isset($c->mobile)) {
					$mobile=$c->mobil;
				}
				if (isset($c->phonenumber)) {
					$phonenumber=$c->phonenumber;
				}
				 ?>
			@if($c->mobile!=''||$c->phonenumber!='')
				{{$c->mobile}} | {{$c->phonenumber}}</td>
			@else
				<a href="" class='addphone' id='addphone{{$c->id}}'>Agregar</a>
				<div id="hiddenenterphone{{$c->id}}" class="hide">
					<input type="text" id="entermobile{{$c->id}}" value='{{$mobile}}'placeholder='Celular'>
					<input type="text" id="enterphone{{$c->id}}" value='{{$phonenumber}}'placeholder='Telefono fijo'>
				</div>
				<div id="buttonsaddphone{{$c->id}}" class="hide">
					<a href="" id="confirmenterphone{{$c->id}}">OK</a> |
					<a href="" id="cancelenterphone{{$c->id}}">Cancel</a>
				</div>
			@endif
				
			<td>
				<div class="btn-group">
				  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
				    Accion
				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				    <li><a tabindex="-1" href="#">Ver perfil</a></li>
				  <li><a tabindex="-1" href="#">Agregar venta</a></li>
				  <li><a tabindex="-1" href="#">abc</a></li>
				  <li class="divider"></li>
				  <li><a tabindex="-1" href="#">Separated link</a></li>
				  </ul>
				</div>


				
			</td>
		</tr>
	@endforeach
</table>
@foreach(Customer::all() as $c)
	 
@endforeach