{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card-header border-bottom">
            @if(empty($id))
                @php($action_text=__('admin.add'))
            @else
                @php($action_text=__('admin.edit'))
                    
            @endif
            <h6 class="m-0"style="margin:10!important;"> {{$action_text}} {{ __('Driver Promotions') }}</h6>
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
                        <label for="bonus" class="col-xs-2 col-form-label">Bonus Amount</label>
                        <div class="col-xs-10">
                            <input class="form-control numbers" type="text" value="{{ old('bonus') }}" name="bonus" required id="bonus" placeholder="Bonus Amount" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="no_of_rides" class="col-xs-2 col-form-label">No of rides</label>
                        <div class="col-xs-10">
                            <input class="form-control numbers" type="text" value="{{ old('no_of_rides') }}" name="no_of_rides" required id="no_of_rides" placeholder="No of rides" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="description" class="col-xs-2 col-form-label">Description</label>
                        <div class="col-xs-10">
                        <textarea id="description" placeholder="Description" class="form-control" name="description">{{old('description')}}</textarea>
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
                    <div class="form-group col-md-3">
                        <label for="picture">{{ __('admin.picture') }}</label>
                        <div class="image-placeholder w-100">
                            <img width="100" height="100" />
                            <input type="file" name="picture" class="upload-btn picture_upload">
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-accent">{{$action_text}} {{ __('Promotion') }}</button>
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
        var url = getBaseUrl() + "/admin/driver-promotion"+id;
        setData( url );
     }

     $('.validateForm').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        rules: {
            service: { required: true},
            bonus: { required: true},
            no_of_rides: { required: true},
            description: { required: true},
            start: { required: true},
            end: { required: true},
        },

        messages: {
            service: { required: "Service is required"},
            bonus: { required: "Bonus is required"},
            no_of_rides: { required: "No of Rides is required"},
            start: { required: "Start Date is required"},
            end: { required: "End Date is required"},
            description: { required: "Description is required"},
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
            
            var url = getBaseUrl() + "/admin/driver-promotion"+id;
            saveRow( url, table, data);

        }
    });
    $('.cancel').on('click', function(){
        $(".crud-modal").modal("hide");
    });
    $('.datetimepicker').datepicker();

});
</script>
