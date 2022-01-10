@extends('common.web.layout.base')
@section('style')
 <style type="text/css">
 	body{
 		background: white;
 	}
 	.template_faq {
	    background: #edf3fe none repeat scroll 0 0;
	}
	.panel-group {
	    background: #fff none repeat scroll 0 0;
	    border-radius: 3px;
	    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
	    margin-bottom: 0;
	    padding: 30px;
	}
	#accordion .panel {
	    border: medium none;
	    border-radius: 0;
	    box-shadow: none;
	    margin: 0 0 15px 10px;
	}
	#accordion .panel-heading {
	    border-radius: 30px;
	    padding: 0;
	}
	#accordion .panel-title a {
	    background: #062d55 none repeat scroll 0 0;
	    border: 1px solid transparent;
	    border-radius: 30px;
	    color: #fff;
	    display: block;
	    font-size: 18px;
	    font-weight: 600;
	    padding: 12px 20px 12px 50px;
	    position: relative;
	    transition: all 0.3s ease 0s;
	}
	#accordion .panel-title a.collapsed {
	    background: #fff none repeat scroll 0 0;
	    border: 1px solid #ddd;
	    color: #333;
	}
	#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
	    background: #062d55 none repeat scroll 0 0;
	    border: 1px solid transparent;
	    border-radius: 50%;
	    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
	    color: #fff;
	    content: "";
	    font-family: fontawesome;
	    font-size: 25px;
	    height: 55px;
	    left: -20px;
	    line-height: 55px;
	    position: absolute;
	    text-align: center;
	    top: -5px;
	    transition: all 0.3s ease 0s;
	    width: 55px;
	}
	#accordion .panel-title a.collapsed::after {
	    background: #fff none repeat scroll 0 0;
	    border: 1px solid #ddd;
	    box-shadow: none;
	    color: #333;
	    content: "";
	}
	#accordion .panel-body {
	    background: transparent none repeat scroll 0 0;
	    border-top: medium none;
	    padding: 20px 25px 10px 9px;
	    position: relative;
	}
	#accordion .panel-body p {
	    border-left: 1px dashed #8c8c8c;
	    padding-left: 25px;
	}
 </style>
@endsection

@section('content')

<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-12">
			<div class="section-title text-center wow zoomIn">
				<h1>Frequently Asked Questions</h1>
				<span></span>
				<p>Our Frequently Asked Questions here.</p>
			</div>
		</div>
	</div>
	<div class="row">				
		<div class="col-md-12">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

			</div>
		</div><!--- END COL -->		
	</div><!--- END ROW -->			
</div>

@endsection

@section('script')
    @parent
    <script type="text/javascript">
    	(function($) {
			'use strict';
			jQuery(document).on('ready', function(){
				$('a.page-scroll').on('click', function(e){
					var anchor = $(this);
					$('html, body').stop().animate({
						scrollTop: $(anchor.attr('href')).offset().top - 50
					}, 1500);
					e.preventDefault();
				});		
			}); 							
		})(jQuery);

		// Get Faq
	    $.ajax({
	        type: "GET",
	        url: "{{Helper::getBaseUrl()}}/cmsfaq",
	        data: {
	        	company_id: 1
	        },
	        success: function(data) {
	            var result = data.responseData;
	            result.map(function(item, idx){
	                $('.panel-group').append(
	                	`
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading${idx}">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse${idx}" aria-expanded="false" aria-controls="collapse${idx}">
										${item.question}
									</a>
								</h4>
							</div>
							<div id="collapse${idx}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading${idx}">
								<div class="panel-body">
									<p>
										${item.answer}
									</p>
								</div>
							</div>
						</div>
					`
	                	)
	            });
	            
	        }
	    });
    </script>
@endsection
