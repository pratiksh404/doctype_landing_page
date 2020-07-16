@extends('adminlte::page')

@section('title', 'Show Plan')


@section('content_header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Landing Page Plan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('landing.prefix','admin').'/'.'dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ url(config('landing.prefix','admin').'/'.'plan') }}">Landing
                            Plan</a>
                    </li>
                    <li class="breadcrumb-item active">Landing Page Plan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@stop

@section('content')

<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Plans of {{$landing->landing_name ?? 'Doctype Admin Landing Page'}}
                        </h3>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#create-plan">
                            Create App Plan
                        </button>
                    </div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Plan Name</th>
                                <th>Plan Period</th>
                                <th>Plan Currency Symbol</th>
                                <th>Plan Price</th>
                                <th>Plan Color</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (count($plans) > 0)
                            @foreach ($plans as $plan)
                            <tr>
                                <td>{{$plan->id}}</td>
                                <td>{{$plan->plan_name}}</td>
                                <td>{{$plan->plan_period}}</td>
                                <td>{{$plan->plan_currency_symbol}}</td>
                                <td>{{$plan->plan_price}}</td>
                                <td style="background-color:{{$plan->plan_color}}"></td>

                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#show-plan-{{$plan->id}}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#edit-plan-{{$plan->id}}">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    {{-- Edit plan Model --}}
                                    @include('landing::backend.layouts.landing_plan.edit_model')
                                    {{-- End Edit plan Model --}}
                                    {{-- Show plan Model --}}
                                    {{--  @include('landing::backend.layouts.landing_plan.show_model') --}}
                                    {{-- End Show plan Model --}}

                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#plan-{{$plan->id}}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    {{-- Delete Model --}}
                                    @include('landing::backend.layouts.landing_plan.confirm_delete')
                                    <!-- /.modal -->
                                </td>

                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Plan Name</th>
                                <th>Plan Period</th>
                                <th>Plan Currency Symbol</th>
                                <th>Plan Price</th>
                                <th>Plan Color</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>

{{-- Create plan Model --}}
@include('landing::backend.layouts.landing_plan.create_model')
{{-- End Create plan Model --}}



@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">
@stop

@section('js')
<script>
    $(function () {
        
        //Intialize Summernote Text Editor
            $('.textarea').summernote();
        // Datatable
    $("#datatable").DataTable({
      "responsive": true,
      "autoWidth": true,
      "ordering": true,
      "info": true,
    });
  });

//Colorpicker
    $('.my-colorpicker1').colorpicker();

    $(document).ready(function(){
        $('#add_service').click(function(){
            var html = '';
            html += '<div id="service_row">';
            html += '<div class="row">';
            html += '<div class="col-lg-10">';
            html += '<input type="text" name="plan_services[]" class="form-control" <input type="text" name="plan_services[]" class="form-control" value="{{old('plan_services')}}" placeholder="Plan Service">';
            html += '</div>';
            html += '<div class="col-lg-2 d-flex justify-content-between">';
            html += '<button class="btn btn-danger" id="delete_service"><i class="fas fa-trash"></i></button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<br>';

            $('#new_service').append(html);
        });

        // remove row
                $(document).on('click', '#delete_service', function () {
                $(this).closest('#service_row').remove();
                });
    });
  
</script>
@stop