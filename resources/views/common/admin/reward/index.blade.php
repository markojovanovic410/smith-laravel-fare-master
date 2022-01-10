@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') - Reward @stop

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
               <h6 class="m-0">{{ __('Add Reward') }}</h6>
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
                        <div class="row">
                            <div class="col-md-6">
                                <label for="country_id" class="col-xs-2 col-form-label">Country</label>
                                <select name="country_id" required="" id="country_id" class="form-control">
                                    
                                </select>
                            </div>
                            <div class="col-md-6" id="city_div">
                                <label for="city_id" class="col-xs-2 col-form-label">City</label>
                                <select name="city_id" required="" id="city_id" class="form-control">
                                    
                                </select>
                            </div>
                        </div>
                     </div>
                     <div class="form-group col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="restaurant_name" class="col-xs-2 col-form-label">Business Name</label>
                                <input type="text" name="restaurant_name" required="" id="restaurant_name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="item_name" class="col-xs-2 col-form-label">Item Name</label>
                                <input type="text" name="item_name" required="" id="item_name" class="form-control">
                            </div>
                        </div>
                     </div>
                     <div class="form-group col-md-12">
                        <label for="free" class="col-xs-2 col-form-label">Free</label>
                        <input type="checkbox" name="free" id="free" class="form-control">
                     </div>
                     <div class="form-group col-md-12" id="amount_div">
                        <label for="amount" class="col-xs-2 col-form-label">Discount Amount</label>
                        <input type="number" name="amount" id="amount" class="form-control">
                     </div>
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
            var url = getBaseUrl() + "/admin/reward";
            saveRow(url, null, data, 'admin', '/admin/reward');


        }
    });

    // Get cmshowitworks
    $.ajax({
        type: "GET",
        url: getBaseUrl() + "/admin/rewards",
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
                                <b>Amount:</b> ${item.free?'Free':item.amount}<br>
                                <b>Code:</b> ${item.code}<br>
                                <b>Business Name:</b> ${item.free?'Free':item.restaurant_name} (${item.city.city_name}, ${item.country.country_name})<br>
                                <b>User Type:</b> ${item.user_type}<br>
                                <b>Item:</b> ${item.item_name}<br>
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
            url: getBaseUrl() + `/admin/reward/delete/${id}`,
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
