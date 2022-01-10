@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') {{ __('CMS Page') }} @stop

@section('styles')

<style type="text/css">
    .cmshowitworks-list ul{
        margin: 10px 0px;
    }
    .cmshowitworks-list ul li:first-child{
        font-weight: bold;
        font-size: 14px;
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
               <h6 class="m-0">{{ __('Add/Edit Cities') }}</h6>
            </div>
            <div class="col-md-12">
               <form class="validateForm">
                  @csrf()
                  <div class="method">
                  </div>
                  <input type="hidden" name="id" id="id" value="">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="name" class="col-xs-2 col-form-label">City Name</label>
                        <input class="form-control" id="name" name="name"/>
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
               <h6 class="m-0">{{ __('Cities List') }}</h6>
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


<script>

$(document).ready(function() {

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

            var url = getBaseUrl() + "/admin/driver-data/cities";

            saveRow(url, null, data, 'admin', '/admin/driver-data/cities');


        }
    });

    // Get cmshowitworks
    $.ajax({
        type: "GET",
        url: getBaseUrl() + "/admin/driver-data/cities",
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        success: function(data) {
            var result = data.responseData;
            result.map(function(item, idx){
                $('.cmshowitworks-list').append(`
                        <ul>
                           <li>${item.name} 
                                <span class="deletecmshowitworks text-danger" id="deletecmshowitworks-${item.id}"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                <span class="editcmshowitworks text-primary" id="editcmshowitworks-${item.id}"><i class="fa fa-pencil" aria-hidden="true"></i></span>
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
            url: getBaseUrl() + `/admin/driver-data/cities/${id}`,
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
            url: getBaseUrl() + `/admin/driver-data/cities/${id}`,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            success: function(data) {
                var c_data = data.responseData;
                $('#name').val(c_data.name);
                $('#id').val(c_data.id);
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