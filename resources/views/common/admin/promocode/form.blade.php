{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">
            @if(empty($id))
                @php($action_text=__('admin.add'))
            @else
                @php($action_text=__('admin.edit'))
                    
            @endif
            <h6 class="m-0"style="margin:10!important;"> {{$action_text}} {{ __('Promocodes') }}</h6>
        </div>
        <div class="form_pad">
            <form class="validateForm">
                @csrf()
                @if(!empty($id))
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id" value="{{$id}}">
                @endif
                <div class="form-row">
                    @if(count(Helper::getServiceList())> 1)
                        <div class="form-group col-md-6">
                            <label for="notify_type" class="col-xs-2 col-form-label">@lang('admin.provides.service_name')    </label>
                            <select name="service" class="form-control">
                                <option value="">Select</option>
                                    @foreach(Helper::getServiceList() as $service) 
                                        <option value={{$service}}>{{$service}}</option>
                                    @endforeach
                            </select>
                        </div>
                    @else
                        <input type="hidden" name ="service" value="{{Helper::getServiceList()[key(Helper::getServiceList())]}}" />
                    @endif
                    <div class="form-group col-md-6">
                        <label for="percentage" class="col-xs-2 col-form-label">@lang('admin.promocode.percentage')</label>
                        <div class="col-xs-10">
                            <input class="form-control numbers" type="text" value="{{ old('percentage') }}" name="percentage" required id="percentage" placeholder="Percentage" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="notify_type" class="col-xs-2 col-form-label">User Types</label>
                        <select name="user_type" class="form-control">
                            <option value="">Select</option>
                                <option value="ALL">All Users</option>
                                <option value="NEW">New Users</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="no_of_rides" class="col-xs-2 col-form-label">No of rides</label>
                        <div class="col-xs-10">
                            <input class="form-control numbers" type="text" value="{{ old('no_of_rides') }}" name="no_of_rides" required id="no_of_rides" placeholder="No of rides" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="start" class="col-xs-2 col-form-label">Start Date</label>
                        <div class="col-xs-10">
                            <input class="form-control datepicker" type="date" value="{{ old('start') }}" name="start" required id="start" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="end" class="col-xs-2 col-form-label">End Date</label>
                        <div class="col-xs-10">
                            <input class="form-control datepicker" autocomplete="off"  type="date" value="{{ old('end') }}" name="end" required id="end">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="apply_type" class="col-xs-2 col-form-label">Apply Type</label>
                        <select name="apply_type" class="form-control" id="apply_type">
                            <option value="">Select</option>
                                <option value="DIRECT">Apply Directly</option>
                                <option value="PROMOCODE">Using Promocode</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 promocode-div" style="display: none">
                        <label for="promo_code" class="col-xs-2 col-form-label">Promocode</label>
                        <div class="col-xs-10">
                            <input class="form-control" autocomplete="off"  type="text" value="{{ old('promo_code') }}" name="promo_code" required id="promo_code" placeholder="Promocode">
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('#apply_type').on('change', function(){
                            if ($(this).val() == 'PROMOCODE'){
                                $('.promocode-div').css('display', 'block');
                            }
                            else{
                                $('.promocode-div').css('display', 'none');
                            }
                        });
                    </script>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="max_amount" class="col-xs-2 col-form-label">@lang('admin.promocode.max_amount')</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control numbers" name="max_amount" required id="max_amount" placeholder="Max Amount" value="{{old('max_amount')}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="promo_description" class="col-xs-2 col-form-label">@lang('admin.promocode.promo_description')</label>
                        <div class="col-xs-10">
                        <textarea id="promo_description" placeholder="Description" class="form-control" name="promo_description">{{old('promo_description')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="picture">{{ __('admin.picture') }}</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="picture" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-accent">{{$action_text}} {{ __('Promocode') }}</button>
                <button type="reset" class="btn btn-danger cancel">{{ __('Cancel') }}</button>

            </form>
        </div>
    </div>
</div>


<script>

var blobImage = '';
var blobName = '';

$(document).ready(function()
{
    // $('input[name=start]').datepicker({
    //         rtl: false,
    //         orientation: "left",
    //         todayHighlight: true,
    //         autoclose: true,
    //         startDate:new Date()
    //     });

    $('.picture_upload').on('change', function(e) {
      var files = e.target.files;
      var obj = $(this);
      if (files && files.length > 0) {
        blobName = files[0].name;
         cropImage(obj, files[0], obj.closest('.image-placeholder').find('img'), function(data) {
            blobImage = data;
         });
      }
    });

     basicFunctions();

     var id = "";

     if($("input[name=id]").length){
        id = "/"+ $("input[name=id]").val();
        var url = getBaseUrl() + "/admin/promocode"+id;
        setData( url );
     }

     $('.validateForm').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        rules: {
            service: { required: true},
            percentage: { required: true},
            user_type: { required: true},
            no_of_rides: { required: true},
            start: { required: true},
            end: { required: true},
            apply_type: { required: true},
            promo_description: { required: true},
            max_amount: { required: true},
        },

        messages: {
            service: { required: "Service is required"},
            percentage: { required: "Percentage is required"},
            user_type: { required: "User Type is required"},
            no_of_rides: { required: "No of Rides is required"},
            start: { required: "Start Date is required"},
            end: { required: "End Date is required"},
            apply_type: { required: "Apply Type is required"},
            promo_description: { required: "Description is required"},
            max_amount: { required: "Max Amount is required"},
        },

        highlight: function(element)
        {
            $(element).closest('.form-group').addClass('has-error');
        },

        success: function(label) {
            label.closest('.form-group').removeClass('has-error');
            label.remove();
        },

        submitHandler: function(form) {

            var formGroup = $(".validateForm").serialize().split("&");
            var data = new FormData();
            for(var i in formGroup) {
                var params = formGroup[i].split("=");
                data.append( params[0], decodeURIComponent(params[1]) );
            }

            if(blobImage != "") data.append('picture', blobImage, blobName);
            
            var url = getBaseUrl() + "/admin/promocode"+id;
            saveRow( url, table, data);

        }
    });

        $("#percentage").on('keyup', function(){
            var per=$(this).val()||0;
            var max=$("#max_amount").val()||0;
            $("#promo_description").val(per+'% off, Max discount is '+max);
        });

        $("#max_amount").on('keyup', function(){
            var max=$(this).val()||0;
            var per=$("#percentage").val()||0;
            $("#promo_description").val(per+'% off, Max discount is '+max);
        });

    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });
    $('.datetimepicker').datepicker();

});
</script>
