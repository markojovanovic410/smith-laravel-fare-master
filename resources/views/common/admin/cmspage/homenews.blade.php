@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') {{ __('CMS Page') }} @stop

@section('styles')

<style type="text/css">
    .cmshomenews-list ul{
        margin: 10px 0px;
    }
    .cmshomenews-list ul li:first-child{
        font-weight: bold;
        font-size: 14px;
    }
    .deletecmshomenews{
        margin-left: 15px;
    }
    .editcmshomenews{
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
               <h6 class="m-0">{{ __('How it works Form') }}</h6>
            </div>
            <div class="col-md-12">
               <form class="validateForm">
                  @csrf()
                  <div class="method">
                  </div>
                  <input type="hidden" name="id" id="id" value="">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="name" class="col-xs-2 col-form-label">Photo</label>
                        <input type="file" accept="image/*" name="photo" class="dropify form-control-file" autocomplete="off" id="photo" aria-describedby="fileHelp">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="name" class="col-xs-2 col-form-label">Heading</label>
                        <input class="form-control" id="heading" name="heading"/>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="name" class="col-xs-2 col-form-label">Content</label>
                        <textarea class="form-control" id="content" name="content"></textarea>
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
               <h6 class="m-0">{{ __('How It works List') }}</h6>
            </div>
            <div class="col-md-12 cmshomenews-list">
               
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
            question: {
                required: true
            },
            answer: {
                required: true
            },
        },

        messages: {
            question: {
                required: "Question is required."
            },
            answer: {
                required: "Answer is required."
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

            photo = $( 'input[name=photo]' )[0].files[0]
            if(typeof photo != "undefined") {
              data.append( 'photo', photo );
            }

            var url = getBaseUrl() + "/admin/cmshomenews";

            saveRow(url, null, data, 'admin', '/admin/cmshomenews');


        }
    });

    // Get cmshomenews
    $.ajax({
        type: "GET",
        url: getBaseUrl() + "/admin/cmshomenews",
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        success: function(data) {
            var result = data.responseData;
            result.map(function(item, idx){
                $('.cmshomenews-list').append(`
                        <ul>
                           <li>${item.heading} 
                                <span class="deletecmshomenews text-danger" id="deletecmshomenews-${item.id}"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                <span class="editcmshomenews text-primary" id="editcmshomenews-${item.id}"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                           </li>
                           <li>${item.content}</li>
                        </ul>
                    `)
            });
            
            hideInlineLoader();
        },
        error: function(error){
            hideInlineLoader();
        }
    });

    // Delete cmshomenews
    $(document).on("click", "span.deletecmshomenews" , function() {
        showInlineLoader();
        var split = this.id.split('-');
        var id = split[1];

        $.ajax({
            type: "delete",
            url: getBaseUrl() + `/admin/cmshomenews/${id}`,
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
    $(document).on("click", "span.editcmshomenews" , function() {
        showInlineLoader();
        var split = this.id.split('-');
        var id = split[1];

        $.ajax({
            type: "get",
            url: getBaseUrl() + `/admin/cmshomenews/${id}`,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            success: function(data) {
                var cmshomenews = data.responseData;
                $('#heading').val(cmshomenews.heading);
                $('#step').val(cmshomenews.step);
                $('#content').val(cmshomenews.content);
                $('#id').val(cmshomenews.id);
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