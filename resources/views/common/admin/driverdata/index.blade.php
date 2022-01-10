@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') Users @stop

@section('styles')
@parent
    <link rel="stylesheet"  type='text/css' href="{{ asset('assets/plugins/cropper/css/cropper.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/dataTables.bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/responsive.bootstrap.min.css')}}">
@stop

@section('content')
@include('common.admin.includes.image-modal')
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Users</span>
            <h3 class="page-title">Users List</h3>
        </div>
    </div>
    <div class="row mb-4 mt-20">
        <div class="col-md-12">
            <div class="card card-small">
                <div class="card-header border-bottom">
                    <h6 class="m-0 pull-left">Drivers Data</h6>
                    
                    
                </div>

                <div class="col-md-12">
                    <div class="note_txt">
                        @if(Helper::getDemomode() == 1)
                        <p>** Demo Mode : {{ __('admin.demomode') }}</p>
                        <span class="pull-left">(*personal information hidden in demo)</span>
                        @endif
                    </div>
                </div>

                <table id="data-table" class="table table-hover table_width display">
                <thead>
                    <tr>
                        <th data-value="id">Id</th>
                        <th data-value="first_name">Name</th>
                        <th data-value="phone">Phone</th>
                        <th data-value="email">Email</th>
                        <th data-value="city">City</th>
                        <th data-value="type_of_car">Type of Car</th>
                        <!-- <th data-value="rating">{{ __('admin.users.Rating') }}</th>
                        <th data-value="wallet_balance">{{ __('admin.users.Wallet_Amount') }}</th>
                        <th data-value="status">{{ __('admin.status') }}</th>
                        <th>{{ __('admin.action') }}</th> -->
                    </tr>
                 </thead>


                </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
@parent

<script src="{{ asset('assets/plugins/data-tables/js/buttons.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/data-tables/js/buttons.html5.min.js')}}"></script>

<script src = "{{ asset('assets/plugins/cropper/js/cropper.js')}}" > </script> 
<script src = "{{ asset('assets/layout/js/crop.js')}}" > </script> 
<script>
var tableName = '#data-table';
var table = $(tableName);

showLoader();

$(document).ready(function() {

    var url = getBaseUrl() + "/admin/driver-data";

 

    table = table.DataTable( {
        'searching': false,
        "processing": true,
        "serverSide": true,
        "aoColumnDefs": [{ "bSortable": false, "aTargets": [4]}],
        "pageLength": 10,
        "ajax": {
            "url": url,
            "type": "GET",
            'beforeSend': function (request) {
                showLoader();
            },
            "headers": {
                "Authorization": "Bearer " + getToken("admin")
            },
            data: function(data){

                var info = $(tableName).DataTable().page.info();
                delete data.columns;
               data.page = info.page + 1;
                // data.search_text = data.search['value']; 
                data.order_by = $(tableName+' tr').eq(0).find('th').eq(data.order[0]['column']).data('value');
                data.order_direction = data.order[0]['dir'];
                

                
            },
            dataFilter: function(response){
                
                var data = parseData(response);        
                var json = data;

                json.recordsTotal = json.responseData.total;
                json.recordsFiltered = json.responseData.total;
                json.data = json.responseData.data;
                hideLoader();
                return JSON.stringify( json ); // return JSON string
            }
        },
        "columns": [
            { "data": "id" ,render: function (data, type, row, meta) {
               return meta.row + meta.settings._iDisplayStart + 1;
              }
            },
            { "data": "name" },
            { "data": "phone" },
            { "data": "email" },           
            { "data": function (data, type, dataToSet) {
                return data.city.name

            } },
            { "data": function (data, type, dataToSet) {  
                 return data.type.name;
            } },
        ],
        responsive: true,
        paging:true,
        info:true,
        lengthChange:false,
        dom: 'Bfrtip',
        buttons: [],
        "drawCallback": function () {

            var info = $('#data-table').DataTable().page.info();
            
            if (info.pages<=1) {
               $('#data-table .dataTables_paginate').hide();
               $('#data-table .dataTables_info').hide();
            }else{
               $('#data-table .dataTables_paginate').show();
               $('#data-table .dataTables_info').show();
            }
        }
    });
   

});
</script>
@stop
