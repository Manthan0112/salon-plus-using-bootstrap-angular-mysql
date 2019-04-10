function search() {
	// body...

		function capitalize(city)
		{
			return city[0].toUpperCase()+city.slice(1).toLowerCase();
		}

		$(document).ready(function(){
			$(".division").show();
		});

		$(".search_button").click(function(){
			var value;
			value=capitalize(document.getElementById('search').value);

			$(".division").hide();
			$("."+value).show();
		});

		$("#hairsalon").click(function(){
			var value;
			value=capitalize('haircut');

			$(".division").hide();
			$("."+value).show();
		});

		$("#hairstyle").click(function(){
			var value;
			value=capitalize('haircut');

			$(".division").hide();
			$("."+value).show();
		});

		

		$("#nailspa").click(function(){
			var value;
			value=capitalize('nailspa');

			$(".division").hide();
			$("."+value).show();
		});

		$("#bodyart").click(function(){
			var value;
			value=capitalize('bodyart');
			console.log("manthan");
			$(".division").hide();
			$("."+value).show();
		});

		$("#bridalmakeup").click(function(){
			var value;
			value=capitalize('bridalmakeup');

			$(".division").hide();
			$("."+value).show();
		});

		 $("#5star").click(function(){
	            if($(this).prop("checked") == true){
	                var value;
					value=capitalize('5');
					$(".division").hide();
					$("."+value).show();
	            }
	            
	        });


		 $("#4star").click(function(){
	            if($(this).prop("checked") == true){
	                var value;
					value=capitalize('4');
					$(".division").hide();
					$("."+value).show();
	            }
	            
	        });

		 $("#3star").click(function(){
	            if($(this).prop("checked") == true){
	                var value;
					value=capitalize('3');
					$(".division").hide();
					$("."+value).show();
	            }
	            
	        });

		 $("#2star").click(function(){
	            if($(this).prop("checked") == true){
	                var value;
					value=capitalize('2');
					$(".division").hide();
					$("."+value).show();
	            }
	            
	        });

		 $("#1star").click(function(){
	            if($(this).prop("checked") == true){
	                var value;
					value=capitalize('1');
					$(".division").hide();
					$("."+value).show();
	            }
	            
	        });
}
