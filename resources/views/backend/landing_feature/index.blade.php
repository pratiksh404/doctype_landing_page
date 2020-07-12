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
                                <th>Feature Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($features as $feature)
                            <tr>
                                <th>{{$feature->id}}</th>
                                <th>{{$feature->feature_name}}</th>
                                <th>
                                    <img src="{{asset('/storage').'/'.$feature->feature_image}}"
                                        alt="{{$feature->feature_name}}" class="img-fluid">
                                </th>
                                <th>
                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#show-feature-{{$feature->id}}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#edit-feature-{{$feature->id}}">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    {{-- Edit Feature Model --}}
                                    @include('landing::backend.layouts.landing_feature.edit_model')
                                    {{-- End Edit Feature Model --}}
                                    {{-- Show Feature Model --}}
                                    @include('landing::backend.layouts.landing_feature.show_model')
                                    {{-- End Show Feature Model --}}

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
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Feature Name</th>
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

{{-- Create Feature Model --}}
@include('landing::backend.layouts.landing_feature.create_model')
{{-- End Create Feature Model --}}



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
</script>
@stop