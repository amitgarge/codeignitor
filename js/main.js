$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
						$(".upload_resume").change(function()
						{
							if($(".upload_resume :selected").text()=="Job seekers")
							{
								$(".resume").show();
							}
							else{
								$(".resume").hide();
							}

						});
						
			$().UItoTop({ easingType: 'easeOutQuart' });
			$(".scroll-to-top").hide();
				

$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});

$("#flexiselDemo1").flexisel({
							visibleItems: 2,
							animationSpeed: 1000,
							autoPlay:false,
							autoPlaySpeed: 2500,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:1
								},
								tablet: { 
									changePoint:768,
									visibleItems: 1
								}
							}
						});		
			});