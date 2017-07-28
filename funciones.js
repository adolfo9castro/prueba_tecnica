jQuery(document).ready(function($){
	$(".btn-info.engrane").on("mouseover", function(){
		$(".btn-info.engrane .fa.fa-cog").addClass("fa-spin")
	});

	$(".btn-info.engrane").on("mouseleave", function(){
		$(".btn-info.engrane .fa.fa-cog").removeClass("fa-spin")
	});
})

function mandarDatos(){

	var nombre = jQuery("input:text[name=nombre]").val();

	var apellido = jQuery("input:text[name=apellido]").val();

	var cedula = jQuery("input:text[name=cedula]").val();	

	//var _id = jQuery("input:text[name=_id]").val();	

	jQuery.ajax({
		type: "POST",
		data: {"nombre":nombre, "apellido":apellido, "cedula":cedula},
		url: "loading.php",
		async: false,
		success: function(addNewUser) {			
			jQuery("#borrame").remove();
			jQuery("#formImpri").append(addNewUser);
			jQuery("#custom").fadeIn("slow");
			setTimeout(function(){
				jQuery("#custom").fadeOut("slow");
			}, 5000);
		},
	}); 
		
}

function pedirDatos(){
	jQuery.ajax({
		type: "POST",		
		url: "print.php",
		async: false,
		success: function(addNewUser) {			
			if (addNewUser != "") {
				jQuery("#formImpri").append(addNewUser);
				jQuery("#borrame").remove();
			}else{
				jQuery("#formImpri").append("<h3 id='borrame' class='col-centered alert alert-info text-center'>La base de datos está vacía</h3>");
			}			

		},
	}); 
	jQuery("#pedirDatos").removeAttr("onclick","pedirDatos()");
	
}

function borrarTodo(){
	jQuery.ajax({
		type: "get",		
		url: "delall.php",
		async: false,
		success: function(addNewUser) {			
			document.getElementById("formImpri").innerHTML="";
		},
	});
	
}
/*TODO
function delOne(){
	jQuery.ajax({
		type: "get",		
		url: "delone.php",
		async: false,
		success: function(addNewUser) {			
			document.getElementById("formImpri").innerHTML="";
		},
	});
}*/

