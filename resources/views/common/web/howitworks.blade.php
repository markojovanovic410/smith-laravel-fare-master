@extends('common.web.layout.base')
@section('style')
 	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 	<style type="text/css">
 		/*process-box*/
		body{
		    background: #eee;
		}
		.process-box{
		    background: #fff;
		    padding: 10px;
		    border-radius: 15px;
		    position: relative;
		    box-shadow: 2px 2px 7px 0 #00000057;
		    bottom: 115px;
		}
		.process-left:after{
		        content: "";
		    border-top: 15px solid #ffffff;
		    border-bottom: 15px solid #ffffff;
		    border-left: 15px solid #ffffff;
		    border-right: 15px solid #ffffff;
		    display: inline-grid;
		    position: absolute;
		    right: -15px;
		    top: 42%;
		    transform: rotate(45deg);
		    box-shadow: 3px -2px 3px 0px #00000036;
		    z-index: 1;
		}
		.process-right:after{
		        content: "";
		    border-top: 15px solid #ffffff00;
		    border-bottom: 15px solid #ffffff;
		    border-left: 15px solid #ffffff;
		    border-right: 15px solid #ffffff00;
		    display: inline-grid;
		    position: absolute;
		    left: -15px;
		    top: 42%;
		    transform: rotate(45deg);
		    box-shadow: -1px 1px 3px 0px #0000001a;
		    z-index: 1;
		}
		.process-step{
		    background: #062d55;
		    text-align: center;
		    width: 80%;
		    margin: 0 auto;
		    color: #fff;
		    height: 100%;
		    padding-top: 8px;
		    position: relative;
		    top: -26px;
		    border-radius: 0px 0px 10px 10px;
		    box-shadow: -6px 8px 0px 0px #00000014;
		}
		.process-point-right{
		    background: #ffffff;
		    width: 25px;
		    height: 25px;
		    border-radius: 50%;
		    border: 8px solid #00bcd4;
		    box-shadow: 0 0 0px 4px #5c5c5c;
		    margin: auto 0;
		    position: absolute;
		    bottom: 40px;
		    left: -63px;
		}
		.process-point-right:before{
		    content: "";
		    height: 144px;
		    width: 11px;
		    background: #5c5c5c;
		    display: inline-grid;
		    transform: rotate(36deg);
		    position: relative;
		    left: -50px;
		    top: -0px;
		}
		.process-point-left{
		    background: #ffffff;
		    width: 25px;
		    height: 25px;
		    border-radius: 50%;
		    border: 8px solid #00bcd4;
		    box-shadow: 0 0 0px 4px #5c5c5c;
		    margin: auto 0;
		    position: absolute;
		    bottom: 40px;
		    right: -63px;
		}
		.process-point-left:before {
		    content: "";
		    height: 144px;
		    width: 11px;
		    background: #5c5c5c;
		    display: inline-grid;
		    transform: rotate(-38deg);
		    position: relative;
		    left: 50px;
		    top: 0px;

		}

		.process-last:before{
		    display: none;
		}
		.process-box p{
		    z-index: 9;
		}
		.process-step p{
		    font-size: 20px;
		}
		.process-step h2{
		    font-size: 39px;
		}
		.process-step:after{
		    content: "";
		    border-top: 8px solid #04889800;
		    border-bottom: 8px solid #c1272d;
		    border-left: 8px solid #04889800;
		    border-right: 8px solid #c1272d;
		    display: inline-grid;
		    position: absolute;
		    left: -16px;
		    top: 0;
		}
		.process-step:before{
		    content: "";
		    border-top: 8px solid #ff000000;
		    border-bottom: 8px solid #c1272d;
		    border-left: 8px solid #c1272d;
		    border-right: 8px solid #ff000000;
		    display: inline-grid;
		    position: absolute;
		    right: -16px;
		    top: 0;
		}
		.process-line-l{
		    background: white;
		    height: 4px;
		    position: absolute;
		    width: 136px;
		    right: -153px;
		    top: 64px;
		    z-index: 9;
		}
		.process-line-r{
		    background: white;
		    height: 4px;
		    position: absolute;
		    width: 136px;
		    left: -153px;
		    top: 63px;
		    z-index: 9;
		}
 	</style>
@endsection

@section('content')

<section class="our-blog p-0 m-0 bg-silver" style="padding: 250px 0 50px 0px">
    <div class="container work-process  pb-5 pt-5">

        
    </div>
</section>

@endsection

@section('script')
    @parent
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>

	  $.ajax({
	        type: "GET",
	        url: "{{Helper::getBaseUrl()}}/cmshowitworks",
	        data: {
	        	company_id: 1
	        },
	        success: function(data) {
	            var result = data.responseData;
	            result.map(function(item, idx){
	                if(!isEven(idx)){
	                	$('.work-process').append(`
							<div class="row">
					            <div class="col-md-5">
					                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
					                    <div class="row">
					                        <div class="col-md-5">
					                            <div class="process-step">
					                                <p class="m-0 p-0">Step</p>
					                                <h2 class="m-0 p-0">${item.step}</h2>
					                            </div>
					                        </div>
					                        <div class="col-md-7">
					                            <h5>${item.heading}</h5>
					                            <p><small>${item.content}}</small></p>
					                        </div>
					                    </div>
					                    <div class="process-line-l"></div>
					                </div>
					            </div>
					            <div class="col-md-2"></div>
					            <div class="col-md-5">
					                <div class="process-point-right"></div>
					            </div>
					        </div>
						`)
	                }
	                else{
	                	$('.work-process').append(`
							<div class="row">
					            <div class="col-md-5">
					                <div class="process-point-left"></div>
					            </div>
					            <div class="col-md-2"></div>
					            <div class="col-md-5">
					                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
					                    <div class="row">
					                        <div class="col-md-5">
					                            <div class="process-step">
					                                <p class="m-0 p-0">Step</p>
					                                <h2 class="m-0 p-0">${item.step}</h2>
					                            </div>
					                        </div>
					                        <div class="col-md-7">
					                            <h5>${item.heading}</h5>
					                            <p><small>${item.content}</small></p>
					                        </div>
					                    </div>
					                    <div class="process-line-r"></div>
					                </div>
					            </div>

					        </div>
						`)
	                }
	            });
	            AOS.init();
	        }
	    });

	  	function isEven(value) {
			if (value%2 == 0)
				return true;
			else
				return false;
		}
	</script>
@endsection
