@extends('adminlte::page')

@section('title', 'Edit Plan')

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
                    <form action="{{url(config('landing.prefix', 'admin') . '/' .'plan').'/'.$plan->id}}" method="POST"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="plan_name">Plan Name</label>
                                <input type="text" name="plan_name" id="plan_name" class="form-control"
                                    value="{{$plan->plan_name ?? old('plan_name')}}" placeholder="Plan Name">
                            </div>
                            <div class="col-lg-4">
                                <label for="plan_period">Plan Period</label>
                                <select name="plan_period" id="plan_period" class="form-control">
                                    <option selected>Select Plan Period..</option>
                                    <option value="1"
                                        {{isset($plan->plan_period) ? $plan->plan_period == "Year" ? 'selected' : '' : ''}}>
                                        Year
                                    </option>
                                    <option value="2"
                                        {{isset($plan->plan_period) ? $plan->plan_period == "Month" ? 'selected' : '' : ''}}>
                                        Month
                                    </option>
                                    <option value="3"
                                        {{isset($plan->plan_period) ? $plan->plan_period == "Day" ? 'selected' : '' : ''}}>
                                        Day
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="plan_currency_symbol">Plan Currency Symbol</label>
                                <input type="text" name="plan_currency_symbol" id="plan_currency_symbol"
                                    value="{{$plan->plan_currency_symbol ?? old('plan_currency_symbol')}}"
                                    placeholder="Plan Currency Symbol" class="form-control">
                            </div>
                            <div class="col-lg-5">
                                <label for="plan_price">Plan Price</label>
                                <input type="number" name="plan_price" id="plan_price"
                                    value="{{$plan->plan_price ?? old('plan_price')}}" placeholder="Plan Price"
                                    class="form-control">
                            </div>
                            <div class="col-lg-4">
                                <label for="plan_color">Plan Color</label>
                                <input type="text" class="form-control my-colorpicker1"
                                    value="{{$plan->plan_color ?? old('plan_color')}}">
                            </div>
                        </div>
                        <hr>
                        <label>Plan Service</label>

                        @foreach ($plan->plan_services as $service)
                        @if ($service)
                        <div id="service_row">
                            <div class="row">
                                <div class="col-lg-10">
                                    <input type="text" name="plan_services[]" class="form-control"
                                        value="{{$service ?? ''}}" placeholder="Plan Service">
                                </div>
                                <div class="col-lg-2 d-flex justify-content-between">
                                    <button type="button" class="btn btn-danger" id="delete_service"><i
                                            class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <br>
                        <div id="new_service"></div>
                        <br>
                        <button type="button" class="btn btn-success" id="add_service"><i class="fas fa-plus"></i> Add
                            Service</button>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
</section>

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
    html += '<div class="service_row">';
        html += '<div class="row">';
            html += '<div class="col-lg-10">';
                html += '<input type="text" name="plan_services[]" class="form-control" <input type="text" name="plan_services[]" class="form-control" value="{{old('plan_services')}}" placeholder="Plan Service">';
                html += '</div>';
            html += '<div class="col-lg-2 d-flex justify-content-between">';
                html += '<button class="btn btn-danger" class="delete_service"><i class="fas fa-trash"></i></button>';
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