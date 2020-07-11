@extends('adminlte::page')

@section('title', 'Show service')


@section('content_header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Landing Page Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('setting.prefix','admin').'/'.'dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('landing.prefix','admin').'/'.'service') }}">Landing
                            Service</a>
                    </li>
                    <li class="breadcrumb-item active">Landing Page Service</li>
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
                        <h3 class="card-title">Services of {{$landing->landing_name ?? 'Doctype Admin Landing Page'}}
                        </h3>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#create-service">
                            Create Service
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
                                <th>Service Name</th>
                                <th>Service Excerpt</th>
                                <th>Service Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>
                                <td class="d-flex justify-content-around">
                                    {{--      <a href="{{url(config('setting.prefix','admin').'/'.'service').'/'.$service->id}}"
                                    class="btn btn-sm btn-primary" target="_blank" title="Show service"><i
                                        class="fas fa-eye"></i></a>
                                    <a href="{{url(config('setting.prefix','admin').'/'.'service').'/'.$service->id.'/edit'}}"
                                        target="_blank" class="btn btn-sm btn-warning" title="Edit service"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#service-{{$service->id}}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    {{-- Delete Model --}}
                                    @include('landing::backend.layouts.landing_service.confirm_delete')
                                    <!-- /.modal -->
                                </td>
                                </th>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Service Name</th>
                                <th>Service Excerpt</th>
                                <th>Service Icon</th>
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

{{-- Create Service Model --}}

<div class="modal fade" id="create-service">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/service')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="service_name">Service Name</label>
                            <input type="text" name="service_name" id="service_name" class="form-control"
                                value="{{$service->service_name ?? old('service_name')}}" placeholder="Service Name">
                        </div>
                        <div class="col-lg-6">
                            <label for="service_icon">Service Icon</label>
                            <input type="text" name="service_icon" id="service_icon" class="form-control"
                                value="{{$service->service_icon ?? old('service_icon')}}" placeholder="Service Icon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="service_excerpt">Service Excerpt</label>
                            <input type="text" name="service_excerpt" id="service_excerpt" class="form-control"
                                value="{{$service->service_excerpt ?? old('service_excerpt')}}"
                                placeholder="Service Excerpt">
                        </div>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">
@stop

@section('js')
<script>
    $(function () {
        // Datatable
    $("#datatable").DataTable({
      "responsive": true,
      "autoWidth": true,
      "ordering": true,
      "info": true,
    });
  });
</script>
@stop