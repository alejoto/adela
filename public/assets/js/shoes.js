$(function(){
	$('#addcustomer').click(function(e){
		e.preventDefault();
		var cardid=$('#cardid').val().trim();
		var name=$('#name').val().trim();
		var surname=$('#surname').val().trim();
		var company=$('#company').val().trim();
		var mobile=$('#mobile').val().trim();
		var phonenumber=$('#phonenumber').val().trim();

		if (name.trim()!='') {
			var base=$('#base').html();
			$('#addcustomer').hide('fast');
			$.post(base+'/shoes/addcustomer'
				,{cardid:cardid,name:name,surname:surname,company:company,mobile:mobile,phonenumber:phonenumber}
				,function(d){
					if (d==1) {
						location.reload();
					}	
				}
			);
		}
		else {
			$('#name').focus();
			$('#addcustomerresult').html('Debe ingresar por lo menos el nombre;');
		}
	});

	function addcardid(id){
		$('#addcardid'+id).click(function(e){
			e.preventDefault();
			$(this).hide('fast');
			$('#hiddeninputaddcardid'+id).show('fast');
			$('#buttonaddcardid'+id).show('fast');
		});
	}

	function canceladdingcardid(id){
		$('#canceladdingcardid'+id).click(function(e){
			e.preventDefault();
			$('#addcardid'+id).show('fast');
			$('#hiddeninputaddcardid'+id).hide('fast');
			$('#buttonaddcardid'+id).hide('fast');
		});
	}

	function confirmaddingcardid(id){
		$('#confirmaddingcardid'+id).click(function(e){
			e.preventDefault();
			var cardid=$('#entercardid'+id).val().trim();
			var base=$('#base').html();
			$.post(base+'/shoes/cardid',{id:id,cardid:cardid},function(d){
				if (d==1) {
					location.reload();
				};
			});
			
		});
	}

	$('.addcardid').each(function(){
		var id=$(this).attr('id');
		id=id.replace('addcardid','');
		addcardid(id);
		canceladdingcardid(id);
		confirmaddingcardid(id);
	});

	function addcompany(id){
		$('#addcompany'+id).click(function(e){
			e.preventDefault();
			$(this).hide('fast');
			$('#hiddeninputaddcompany'+id).show('fast');
			$('#buttonaddcompany'+id).show('fast');
		});
	}

	function canceladdcompany(id){
		$('#canceladdcompany'+id).click(function(e){
			e.preventDefault();
			$('#addcompany'+id).show('fast');
			$('#buttonaddcompany'+id).hide('fast');
			$('#hiddeninputaddcompany'+id).hide('fast');
		})
	}

	function confirmaddcompany(id){
		$('#confirmaddcompany'+id).click(function(e){
			e.preventDefault();
			var company=$('#entercompany'+id).val().trim();
			var base=$('#base').html();
			$.post(base+'/shoes/company',{id:id,company:company},function(d){
				if (d==1) {
					location.reload();
				}
			});
		});
	}

	$('.addcompany').each(function(){
		var id=$(this).attr('id');
		id=id.replace('addcompany','');
		addcompany(id);
		canceladdcompany(id);
		confirmaddcompany(id);
	});

	function addphone(id){
		$('#addphone'+id).click(function(e){
			e.preventDefault();
			$(this).hide('fast');
			$('#hiddenenterphone'+id).show('fast');
			$('#buttonsaddphone'+id).show('fast');
		});
	}

	function cancelenterphone(id){
		$('#cancelenterphone'+id).click(function(e){
			e.preventDefault();
			$('#addphone'+id).show('fast');
			$('#hiddenenterphone'+id).hide('fast');
			$('#buttonsaddphone'+id).hide('fast');
		});
	}

	function confirmenterphone(id){
		$('#confirmenterphone'+id).click(function(e){
			e.preventDefault();
			var mobile=$('#entermobile'+id).val();
			var phonenumber=$('#enterphone'+id).val();
			if (mobile!=''||phonenumber!='') {
				var base=$('#base').html();
				$.post(base+'/shoes/addphone',{id:id,mobile:mobile,phonenumber:phonenumber},function(d){
					if (d==1) {
						location.reload();
					}
				});
			}
		});
	}

	$('.addphone').each(function(){
		var id=$(this).attr('id');
		id=id.replace('addphone','');
		addphone(id);
		cancelenterphone(id);
		confirmenterphone(id);
	});
});