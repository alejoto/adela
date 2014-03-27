@extends('layouts.base')

@section('content')
<div class="row">
	<div class="span9">
		@if(Customer::all()->count())
			@include('shoes.customerlist')
		@endif
		
	</div>
	<div class="affix offset9 span2">
		<h4>Agregar cliente</h4>
		<input type='text' id='cardid' placeholder='documento'/><br>
		<input type='text' id='name' placeholder='Nombre'/><br>
		<input type='text' id='surname' placeholder='Apellido'/><br>
		<input type='text' id='company' placeholder='Empresa'/><br>
		<input type='text' id='mobile' placeholder='Celular'/><br>
		<input type='text' id='phonenumber' placeholder='Telefono empresa'/><br>
		<div id="addcustomerresult"></div>
		<button id="addcustomer">Grabar</button>
	</div>
</div>





@stop

