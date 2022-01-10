@extends('common.admin.layout.base')
{{ App::setLocale(  isset($_COOKIE['admin_language']) ? $_COOKIE['admin_language'] : 'en'  ) }}

@section('title') {{ __('Service Sub categories') }} @stop

@section('styles')
@parent
    <link rel="stylesheet"  type='text/css' href="{{ asset('assets/plugins/cropper/css/cropper.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/dataTables.bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugins/data-tables/css/responsive.bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/layout/css/service-master.css')}}"> -->
@stop

@section('content')
@include('common.admin.includes.image-modal')
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">{{ __('service.admin.subcategories.title') }}</span>
            <h3 class="page-title">{{ __('service.admin.subcategories.title') }}</h3>
        </div>
    </div>
    <div class="row mb-4 mt-20">
        <div class="col-md-12">
            <div class="card card-small">
                <div class="card-header border-bottom">
                    <h6 class="m-0 pull-left">{{ __('service.admin.subcategories.title') }}</h6>
                    @if(Helper::getDemomode() != 1)
                    <a href="javascript:;" class="btn btn-success pull-right add new_user"><i class="fa fa-plus"></i> {{ __('service.admin.subcategories.add') }}</a>
                    @endif
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
                        <th data-value="id">{{ __('admin.id') }}</th>
                        <th data-value="service_subcategory_name">{{ __('service.admin.subcategories.name') }}</th>
                        <th data-value="service_category_id">{{ __('service.admin.subcategories.main') }}</th>
                       <!--  <th data-value="picture">{{ __('service.admin.subcategories.image') }}</th>
                        <th data-value="service_subcategory_order">{{ __('service.admin.subcategories.order') }}</th> -->
                        <th data-value="service_subcategory_status">{{ __('service.admin.subcategories.status') }}</th>
                        <th>{{ __('admin.action') }}</th>
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
    $('.add').on('click', function(e) {
        e.preventDefault();
        $.get("{{ url('admin/service-subcategories/create') }}", function(data) {
            $('.crud-modal .modal-container').html("");
            $('.crud-modal .modal-container').html(data);
        });
        $('.crud-modal').modal('show');
    });

    $('body').on('click', '.edit', function(e) {
        e.preventDefault();
        $.get("{{ url('admin/service-subcategories/') }}/"+$(this).data('id')+"/edit", function(data) {
            $('.crud-modal .modal-container').html("");
            $('.crud-modal .modal-container').html(data);
        });
        $('.crud-modal').modal('show');
    });

    table = table.DataTable( {
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "ajax": {
            "url": getBaseUrl() + "/admin/service/subcategories",
            "type": "GET",
            'beforeSend': function (request) {
                showLoader();
            },
            "headers": {
                "Authorization": "Bearer " + getToken("admin")
            },
            data: function(data){
                //console.log(data);
                var info = $(tableName).DataTable().page.info();
                delete data.columns;
                data.page = info.page + 1;
                data.search_text = data.search['value'];
                data.order_by = $(tableName+' tr').eq(0).find('th').eq(data.order[0]['column']).data('value');
                data.order_direction = data.order[0]['dir'];                
            },
            dataFilter: function(response){        
                var json = parseData(response); 
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
            { "data": "service_subcategory_name" },
            { "data": "service_category_id", render: function (data, type, row) {
                return row.service_category.service_category_name; 
            }},
           /* { "data": "picture", render: function (data, type, row) {
                if(data){
                    return "<img src='"+data+"' class='input_img picture-src img-responsive imgsmall' title='' style='height: 50px;width:50px;'/>";
                }else{
                    return "NA";
                }
            }},
            { "data": "service_subcategory_order" },*/
            { "data": "service_subcategory_status" ,render: function (data, type, row) {
                
                return data==1?'Enable':'Disable';
            }
            },
            { "data": function (data, type, row) {
              
                if(data.service_subcategory_status ==1){
                    var status ="Disable";
                }else{
                    var status="Enable";
                }

            var button='<div class="input-group-btn action_group"> <li class="action_icon"> <button type="button"class="btn btn-info btn-block "data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true" title="View"></i></button>'+
                   '<ul class="dropdown-menu">';
                    if({{Helper::getDemomode()}} != 1){
                   button +='<li > <a class="dropdown-item status" data-id="'+data.id+'" data-value="'+data.service_subcategory_status+'"  href="javascript:;"><i class="fa fa-plus" aria-hidden="true" title="Status">&nbsp;'+status+'</i></a></li><li><a href="javascript:;" data-id="'+data.id+'" class="dropdown-item edit"><i class="fa fa-edit"></i> Edit</a> </li>';
                    }
                    button +='</ul> </li></div>';
                 return  button;  

            }}
        ],
        responsive: true,
        paging:true,
            info:true,
            lengthChange:false,
            dom: 'Bfrtip',
            buttons: [{
               extend: "copy",
               exportOptions: {
                   columns: [":visible :not(:last-child)"]
               }
            }, {
               extend: "csv",
               exportOptions: {
                   columns: [":visible :not(:last-child)"]
               }
            }, {
               extend: "excel",
               exportOptions: {
                   columns: [":visible :not(:last-child)"]
               }
            }, {
               extend: "pdf",
               exportOptions: {
                   columns: [":visible :not(:last-child)"]
               }
            }],"drawCallback": function () {
    
                var info = $(this).DataTable().page.info();
                if (info.pages<=1) {
                   $('.dataTables_paginate').hide();
                   $('.dataTables_info').hide();
                }else{
                    $('.dataTables_paginate').show();
                    $('.dataTables_info').show();
                }
            }
    } );

    $('body').on('click', '.status', function() {
        var id = $(this).data('id');
        var value = $(this).data('value');

         $(".status-modal").modal("show");
            $(".status-modal-btn")
                .off()
                .on("click", function() {
                
                    
                    var url = getBaseUrl() + "/admin/service/subcategories/"+id+'/updateStatus?status='+value;

                    $.ajax({
                        type:"GET",
                        url: url,
                        headers: {
                            Authorization: "Bearer " + getToken("admin")
                        },
                        'beforeSend': function (request) {
                            showInlineLoader();
                        },
                        success:function(data){
                            $(".status-modal").modal("hide");
                            
                            var info = $('#data-table').DataTable().page.info();
                            table.order([[ info.page, 'asc' ]] ).draw( false );
                            alertMessage("Success", data.message, "success");
                            hideInlineLoader();
                        }
                    });
                });
        
    });

} );
</script>
@stop
