@extends('common.web.layout.base')
@section('style')
 	<style type="text/css">
 		/*process-box*/
		
 	</style>
@endsection

@section('content')

<section class="our-blog p-0 m-0 bg-silver" style="padding: 100px 0 50px 0px">
    <div class="container  pb-5 pt-5">
    	<div class="row homenews">
    	</div>
    </div>
</section>

@endsection

@section('script')
    @parent
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>

	  $.ajax({
	        type: "GET",
	        url: "{{Helper::getBaseUrl()}}/cmshomenews",
	        data: {
	        	company_id: 1,
	        	id: '{{$id}}'
	        },
	        success: function(data) {
	            var result = data.responseData;
	            $('.homenews').append(`
	            	<div class="col-md-12">
	            		<img src="${result.photo}">
	            	</div>
                	<div class="col-md-12">
		    			<h3>${result.heading}</h3>
		    		</div>
		    		<div class="col-md-12">
		    			${result.content}
		    		</div>
            	`)
        	}
    	});
	</script>
@endsection
