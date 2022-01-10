@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') - News @stop

@section('styles')

<style type="text/css">
    .cmshowitworks-list ul{
        margin: 10px 0px;
    }
    .cmshowitworks-list ul li:first-child{
        font-size: 14px;
    }
    .cmshowitworks-list ul li b{
        font-weight: bold;
    }
    .deletecmshowitworks{
        margin-left: 15px;
    }
    .editcmshowitworks{
        margin-left: 10px;
    }
</style>

@parent
@stop
@section('content') 

<div class="main-content-container container-fluid px-4">
   <div class="row mb-4 mt-20">
      <div class="col-md-12">
         <div class="note_txt">
            @if(Helper::getDemomode() == 1)
            <p>** Demo Mode : {{ __('admin.demomode') }}</p>
            <span class="pull-left">(*personal information hidden in demo)</span>
            @endif
         </div>
      </div>
      <div class="col-md-6">
         <div class="card card-small">
            <div class="card-header border-bottom">
               <h6 class="m-0">{{ __('Add/Edit News') }}</h6>
            </div>
            <div class="col-md-12">
               <form class="validateForm">
                  @csrf()
                  <div class="method">
                  </div>
                  <input type="hidden" name="id" id="id" value="">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="user_type" class="col-xs-2 col-form-label">User Type</label>
                        <select name="user_type" required="" id="user_type" class="form-control">
                            <option value="DRIVER">Driver</option>
                            <option value="USER">User</option>
                            <option value="BOTH">Both</option>
                        </select>
                     </div>
                     <div class="form-group col-md-12">
                        <label for="restaurant_name" class="col-xs-2 col-form-label">Title</label>
                        <input type="text" name="title" required="" id="title" class="form-control">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="content" class="col-xs-2 col-form-label">content</label>
                        <textarea class="form-control" name="content" id="content" required=""></textarea>
                     </div>
                     <!-- <div class="form-group col-md-12">
                        <label for="url" class="col-xs-2 col-form-label">URL</label>
                        <input type="text" name="url" id="url" class="form-control" required="">
                     </div> -->
                     <div class="form-group col-md-12" id="amount_div">
                        <label for="image" class="col-xs-2 col-form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control" required="">
                     </div>
                  </div>
                  @if(Helper::getDemomode() != 1)
                  <button type="submit" class="btn btn-accent">{{ __('Submit') }}</button>
                  @endif
                  <br><br><br>
               </form>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="card card-small">
            <div class="card-header border-bottom">
               <h6 class="m-0">{{ __('News List') }}</h6>
            </div>
            <div class="col-md-12 cmshowitworks-list">
               
            </div>
         </div>
      </div>
   </div>
</div>
@stop

<style type="text/css">
    .cke_contents > iframe{
  width: 100% !important;
}
</style>

@section('scripts')
@parent

<!-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script> -->
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>

<script>

$(document).ready(function() {
CKEDITOR.replace( 'content' );

    $('#city_div').hide();

    $('#free').on('change', function(){
        if($(this).prop("checked") == true){
            $('#amount_div').hide();
        }
        else if($(this).prop("checked") == false){
            $('#amount_div').show();
        }
    });

    $.ajax({
        type: "GET",
        url: getBaseUrl() + "/admin/all-countries",
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        success: function(result) {
            var data = result.responseData;
            $('#country_id').append('<option value="" disabled selected>select country</option>');
            $.each(data, function(key, value) {   
                 $('#country_id').append($("<option></option>")
                                .attr("value", value.id)
                                .text(value.country_name)); 
            });
            
            hideInlineLoader();
        },
        error: function(error){
            hideInlineLoader();
        }
    });

    $('#country_id').on('change', function(){
        var id = $(this).val();

        $.ajax({
            type: "GET",
            url: getBaseUrl() + "/admin/all-countries/cities/"+id,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            success: function(result) {
                $('#city_id').empty();
                $('#city_id').append('<option value="" disabled selected>select city</option>');
                var data = result.responseData;
                $.each(data, function(key, value) {   
                     $('#city_id').append($("<option></option>")
                                    .attr("value", value.id)
                                    .text(value.city_name)); 
                });

                $('#city_div').show();
                
                hideInlineLoader();
            },
            error: function(error){
                hideInlineLoader();
            }
        });
    })

    basicFunctions();
    showInlineLoader();

    $('.validateForm').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focusurl the last invalid input
        rules: {
            name: {
                required: true
            },
        },

        messages: {
            name: {
                required: "Question is required."
            },

        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        success: function(label) {
            label.closest('.form-group').removeClass('has-error');
            label.remove();
        },
        submitHandler: function(form) {
            var formGroup = $(".validateForm").serialize().split("&");
            var data = new FormData();
            for (var i in formGroup) {
                var params = formGroup[i].split("=");
                data.append(params[0], decodeURIComponent(params[1]));
            }
            var image_input = document.getElementById('image');
            var file = image_input.files[0];
            data.append('image', file);
            var url = getBaseUrl() + "/admin/news";
            saveRow(url, null, data, 'admin', '/admin/news');


        }
    });

    // Get cmshowitworks
    $.ajax({
        type: "GET",
        url: getBaseUrl() + "/admin/news",
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        success: function(data) {
            var result = data.responseData;
            result.map(function(item, idx){
                $('.cmshowitworks-list').append(`
                        <ul>
                           <li>
                                <span class="deletecmshowitworks text-danger float-right" id="deletecmshowitworks-${item.id}"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                <span class="editcmshowitworks text-primary float-right" id="editcmshowitworks-${item.id}"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                <b>Title:</b> ${item.title}<br>
                                <b>Content:</b> ${item.content.substring(0,100)}<br>
                                <b>Image:</b> <img src="${item.image}" style="width:50px">
                                <hr>
                           </li>
                        </ul>
                    `)
            });
            
            hideInlineLoader();
        },
        error: function(error){
            hideInlineLoader();
        }
    });

    // Delete cmshowitworks
    $(document).on("click", "span.deletecmshowitworks" , function() {
        showInlineLoader();
        var split = this.id.split('-');
        var id = split[1];

        $.ajax({
            type: "delete",
            url: getBaseUrl() + `/admin/news/delete/${id}`,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            success: function(data) {
                location.reload(true);
                hideInlineLoader();
            },
            error: function(error){
                hideInlineLoader();
            }
        });
    });

    // Get By Id
    $(document).on("click", "span.editcmshowitworks" , function() {
        showInlineLoader();
        var split = this.id.split('-');
        var id = split[1];

        $.ajax({
            type: "get",
            url: getBaseUrl() + `/admin/news/${id}`,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            success: function(data) {
                var c_data = data.responseData;
                $('#id').val(c_data.id);
                $('#title').val(c_data.title);
                $('#url').val(c_data.url);
                $('#content').text(c_data.content);
                hideInlineLoader();
            },
            error: function(error){
                hideInlineLoader();
            }
        });
    });

});
</script>
@stop
