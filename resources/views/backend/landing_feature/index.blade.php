@extends('adminlte::page')

@section('title', 'Show feature')


@section('content_header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Landing Page Feature</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('landing.prefix','admin').'/'.'dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('landing.prefix','admin').'/'.'feature') }}">Landing
                            Feature</a>
                    </li>
                    <li class="breadcrumb-item active">Landing Page Feature</li>
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
                        <h3 class="card-title">Features of {{$landing->landing_name ?? 'Doctype Admin Landing Page'}}
                        </h3>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#create-feature">
                            Create App Feature
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
                                <th>Feature Name</th>
                                <th>Feature About</th>
                                <th>Feature Image</th>
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
                                    {{--      <a href="{{url(config('landing.prefix','admin').'/'.'feature').'/'.$feature->id}}"
                                    class="btn btn-sm btn-primary" target="_blank" title="Show feature"><i
                                        class="fas fa-eye"></i></a>
                                    <a href="{{url(config('landing.prefix','admin').'/'.'feature').'/'.$feature->id.'/edit'}}"
                                        target="_blank" class="btn btn-sm btn-warning" title="Edit feature"><i
                                            class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#feature-{{$feature->id}}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    {{-- Delete Model --}}
                                    @include('landing::backend.layouts.landing_feature.confirm_delete')
                                    <!-- /.modal -->
                                </td>
                                </th>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Feature Name</th>
                                <th>Feature About</th>
                                <th>Feature Image</th>
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

{{-- Create feature Model --}}

<div class="modal fade" id="create-feature">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create App Feature</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/feature')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="feature_name">Feature Name</label>
                            <input type="text" name="feature_name" id="feature_name" class="form-control"
                                value="{{$feature->feature_name ?? old('feature_name')}}" placeholder="Feature Name">
                        </div>
                        <div class="col-lg-6">
                            <label for="feature_img">Feature Image</label>
                            <br>
                            <input type="file" name="feature_img" id="feature_img" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="feature_about">Feature About</label>
                            <input type="text" name="feature_about" id="feature_about" class="form-control"
                                value="{{$feature->feature_excerpt ?? old('feature_about')}}"
                                placeholder="Feature About">
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