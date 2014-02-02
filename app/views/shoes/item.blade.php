@extends('layouts.base')	
 @section('sidebar')	
 @stop	
 @section('content')	
	Vicky's shoes!

	<input type='text' id='shoes_item'><spam id='shoes_item_mssg'></spam>
<input type='text' id='shoes_descrp'><spam id='shoes_descrp_mssg'></spam>
<input type='text' id='shoes_amnt'><spam id='shoes_amnt_mssg'></spam>
<input type='text' id='shoes_unitval'><spam id='shoes_unitval_mssg'></spam>
<br>
<button class='btn' id='shoesitem_submit' >submit</button>

<script>
	$('#shoesitem_submit').click(function() {
var base=$('#base').html();
var item=$('#shoes_item').val();var descrp=$('#shoes_descrp').val();
var amnt=$('#shoes_amnt').val();var unitval=$('#shoes_unitval').val();








    var data={
    item:item,descrp:descrp,amnt:amnt,unitval:unitval





    };
var route=base+'/tasking/shoesitem';
$.post(route,data,function(result){     });
});

</script>
 @stop	
