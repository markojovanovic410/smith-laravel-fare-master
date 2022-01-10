@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') {{ __('CMS Page') }} @stop

@section('styles')

<style type="text/css">
    .faq-list ul{
        margin: 10px 0px;
    }
    .faq-list ul li:first-child{
        font-weight: bold;
        font-size: 14px;
    }
    .deletefaq{
        margin-left: 15px;
    }
    .editfaq{
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
               <h6 class="m-0">{{ __('Faq Form') }}</h6>
            </div>
            <div class="col-md-12">
               <form class="validateForm">
                  @csrf()
                  <div class="method">
                  </div>
                  <input type="hidden" name="id" id="id" value="">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="name" class="col-xs-2 col-form-label">Question</label>
                        <input type="text" name="question" id="question" required="" class="form-control">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="name" class="col-xs-2 col-form-label">Answer</label>
                        <textarea class="form-control" id="answer" name="answer"></textarea>
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
               <h6 class="m-0">{{ __('Faq List') }}</h6>
            </div>
            <div class="col-md-12 faq-list">
               
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

            // var id = $('#id').val();
            // if (id) {
            //     var url = getBaseUrl() + "/admin/cmsfaq/" + id;
            // } else {
            //     var url = getBaseUrl() + "/admin/cmsfaq";
            // }

            var url = getBaseUrl() + "/admin/cmsfaq";

            saveRow(url, null, data, 'admin', '/admin/cmsfaq');


        }
    });

    // Get Faq
    $.ajax({
        type: "GET",
        url: getBaseUrl() + "/admin/cmsfaq",
        headers: {
            Authorization: "Bearer " + getToken("admin")
        },
        success: function(data) {
            var result = data.responseData;
            result.map(function(item, idx){
                $('.faq-list').append(`
                        <ul>
                           <li>${idx + 1}. ${item.question} 
                                <span class="deletefaq text-danger" id="deletefaq-${item.id}"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                                <span class="editfaq text-primary" id="editfaq-${item.id}"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                           </li>
                           <li>${item.answer}</li>
                        </ul>
                    `)
            });
            
            hideInlineLoader();
        },
        error: function(error){
            hideInlineLoader();
        }
    });

    // Delete Faq
    $(document).on("click", "span.deletefaq" , function() {
        showInlineLoader();
        var split = this.id.split('-');
        var id = split[1];

        $.ajax({
            type: "delete",
            url: getBaseUrl() + `/admin/cmsfaq/${id}`,
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
    $(document).on("click", "span.editfaq" , function() {
        showInlineLoader();
        var split = this.id.split('-');
        var id = split[1];

        $.ajax({
            type: "get",
            url: getBaseUrl() + `/admin/cmsfaq/${id}`,
            headers: {
                Authorization: "Bearer " + getToken("admin")
            },
            success: function(data) {
                var faq = data.responseData;
                $('#question').val(faq.question);
                $('#answer').val(faq.answer);
                $('#id').val(faq.id);
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