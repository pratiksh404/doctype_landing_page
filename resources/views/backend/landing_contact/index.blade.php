@extends('adminlte::page')

@section('title', 'Show feature')


@section('content_header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Landing Page Contacts</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('landing.prefix','admin').'/'.'dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('landing.prefix','admin').'/'.'contact') }}">Landing
                            Contacts</a>
                    </li>
                    <li class="breadcrumb-item active">Landing Page Contacts</li>
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

                    <h3 class="card-title">Features of {{$landing->landing_name ?? 'Doctype Admin Landing Page'}}
                    </h3>

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
                                <th>Contactor Name</th>
                                <th>Contactor Email</th>
                                <th>Contactor Subject</th>
                                <th>Contactor Message</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($contacts as $contact)
                            <tr>
                                <th>{{$contact->id}}</th>
                                <th>{{$contact->contact_name}}</th>
                                <th>{{$contact->contact_email}}</th>
                                <th>{{$contact->contact_subject}}</th>
                                <th>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#show-contact-{{$contact->id}}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    {{-- Show Feature Model --}}
                                    @include('landing::backend.layouts.landing_contact.show_model')
                                </th>


                            </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Contactor Name</th>
                                <th>Contactor Email</th>
                                <th>Contactor Subject</th>
                                <th>Contactor Message</th>
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