@extends('layouts.base')

@section('content')

<h1 class='muted'>Adela & Vicky's shoes</h1>
	<form action="{{URL::to('/shoes/login')}}" method='post'>
		<input type="email" id="user" name="user" placeholder='Enter email'>
		<br>
		<input type="password" id='pwd' name='pwd' placeholder='Enter password'>
		<br>
		<input type="submit" value='log in'>
	</form>
	
@stop