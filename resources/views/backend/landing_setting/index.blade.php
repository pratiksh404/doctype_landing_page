@extends('adminlte::page')

@section('title', 'Show Post')


@section('content_header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Landing Page Setting</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('blog.prefix','admin').'/'.'dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ url(config('landing.prefix','admin').'/'.'post') }}">Landing
                            Setting</a>
                    </li>
                    <li class="breadcrumb-item active">Landing Page Setting</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@stop

@section('content')

<section class="content">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{$landing_setting->landing_name ?? 'Doctype Admin'}} Landing Page</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{url('/landing_page/1')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row" style="height: 70vh">

                    <div class="col-lg-3">
                        <div class="card card-outline card-primary" style="height: 68vh">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="https://mcdn.wallpapersafari.com/medium/5/88/aEFcRk.jpg"
                                        alt="Landing Page Logo">
                                </div>
                                <br>
                                <input type="file" name="landing_logo" id="Landing Page Favicon">
                                <hr>
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="https://mcdn.wallpapersafari.com/medium/5/88/aEFcRk.jpg"
                                        alt="Landing Page Logo" style="width:4vw;height:auto">
                                </div>
                                <br>
                                <input type="file" name="landing_favicon" id="landing_favicon">
                                <hr>
                                <img src="https://wallpaperplay.com/walls/full/d/9/a/15054.jpg" class="img-fluid"
                                    name="landing_app_img" id="landing_app_img" alt="Landing App Image">
                                <br><br>
                                <input type="file" name="landing_app_img" id="landing_app_img">
                                <br><br>

                                <button type="submit" class="btn btn-primary btn-block">Submit</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card card-outline card-primary" style="height: 68vh;overflow-y:scroll">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="landing_name">App Name</label>
                                        <input type="text" name="landing_name" id="landing_name" class="form-control"
                                            value="{{$landing_setting->landing_name ?? old('landing_name')}}"
                                            placeholder="App Name">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="landing_contact">Company Contact</label>
                                        <input type="number" name="landing_contact" id="landing_contact"
                                            class="form-control"
                                            value="{{$landing_setting->landing_contact ?? old('landing_contact')}}"
                                            placeholder="Company Contact">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="landing_location">Company Location</label>
                                        <input type="text" name="landing_location" id="landing_location"
                                            class="form-control"
                                            value="{{$landing_setting->landing_location ?? old('landing_location')}}"
                                            placeholder="Company Location">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-6" style="padding:1em">
                                        <div class="row">
                                            <label for="landing_excerpt">Landing Page Excerpt</label>
                                            <br>
                                            <textarea name="landing_excerpt" id="landing_excerpt" cols="45"
                                                rows="5">{{$landing_setting->landing_excerpt ?? old('landing_excerpt')}}</textarea>
                                        </div>
                                        <div class="row">
                                            <label for="landing_facebook">Company Facebook</label>
                                            <input type="text" name="landing_facebook" id="landing_facebook"
                                                value="{{$landing_setting->landing_facebook ?? old('landing_facebook')}}"
                                                class="form-control" placeholder="Company Facebook">
                                        </div>
                                        <div class="row">
                                            <label for="landing_instagram">Company Instagram</label>
                                            <input type="text" name="landing_instagram" id="landing_instagram"
                                                value="{{$landing_setting->landing_instagram ?? old('landing_instagram')}}"
                                                class="form-control" placeholder="Company Instagram">
                                        </div>
                                        <div class="row">
                                            <label for="landing_messenger">Company Messenger</label>
                                            <input type="text" name="landing_messenger" id="landing_messenger"
                                                value="{{$landing_setting->landing_messenger ?? old('landing_messenger')}}"
                                                class="form-control" placeholder="Company Messenger">
                                        </div>
                                        <div class="row">
                                            <label for="landing_github">Company Github</label>
                                            <input type="text" name="landing_github" id="landing_github"
                                                value="{{$landing_setting->landing_github ?? old('landing_github')}}"
                                                class="form-control" placeholder="Company Github">
                                        </div>
                                        <div class="row">
                                            <label for="landing_linkedin">Company Linkedin</label>
                                            <input type="text" name="landing_linkedin" id="landing_linkedin"
                                                value="{{$landing_setting->landing_linkedin ?? old('landing_linkedin')}}"
                                                class="form-control" placeholder="Company Linkedin">
                                        </div>
                                        <div class="row">
                                            <label for="landing_email">Company Email</label>
                                            <input type="text" name="landing_email" id="landing_email"
                                                value="{{$landing_setting->landing_email ?? old('landing_email')}}"
                                                class="form-control" placeholder="Company Email">
                                        </div>
                                        <div class="row">
                                            <label for="landing_patreon">Company Patreon</label>
                                            <input type="text" name="landing_patreon" id="landing_patreon"
                                                value="{{$landing_setting->landing_patreon ?? old('landing_patreon')}}"
                                                class="form-control" placeholder="Company Patreon">
                                        </div>
                                        <div class="row">
                                            <label for="landing_app_video">App Demo Video</label>
                                            <input type="text" name="landing_app_video" id="landing_app_video"
                                                value="{{$landing_setting->landing_app_video ?? old('landing_app_video')}}"
                                                class="form-control" placeholder="App Demo Video">
                                        </div>
                                    </div>
                                    <div class="col-lg-6" style="padding:1em">
                                        <div class="row">
                                            <div class="card card-outline card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">App About</h3>

                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="maximize"><i class="fas fa-expand"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <textarea class="textarea" name="landing_about" rows="40"
                                                        placeholder="Place some text here"
                                                        style="width: 100%; height: 60vh; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;">
                                                                                                                        {{$landing_setting->landing_about ?? old('landing_about')}}
                                                                                                                                                                </textarea>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <div class="row">
                                            <label for="landing_google_map">Company Google Map</label>
                                            <input type="text" name="landing_google_map" id="landing_google_map"
                                                value="{{$landing_setting->landing_google_map ?? old('landing_google_map')}}"
                                                class="form-control" placeholder="Company Google Map">
                                        </div>
                                        <div class="row">
                                            <label for="landing_web_app">Web App Link</label>
                                            <input type="text" name="landing_web_app" id="landing_web_app"
                                                value="{{$landing_setting->landing_web_app ?? old('landing_web_app')}}"
                                                class="form-control" placeholder="Web App Link">
                                        </div>
                                        <div class="row">
                                            <label for="landing_android_app">Android App Link</label>
                                            <input type="text" name="landing_android_app" id="landing_android_app"
                                                value="{{$landing_setting->landing_android_app ?? old('landing_android_app')}}"
                                                class="form-control" placeholder="Android App Link">
                                        </div>
                                        <div class="row">
                                            <label for="landing_ios_app">IOS App Link</label>
                                            <input type="text" name="landing_ios_app" id="landing_ios_app"
                                                value="{{$landing_setting->landing_ios_app ?? old('landing_ios_app')}}"
                                                class="form-control" placeholder="IOS App Link">
                                        </div>
                                        <div class="row">
                                            <label for="landing_documentation">App Documentation Link</label>
                                            <input type="text" name="landing_documentation" id="landing_documentation"
                                                value="{{$landing_setting->landing_documentation ?? old('landing_documentation')}}"
                                                class="form-control" placeholder="App Documentation Link">
                                        </div>
                                        <div class="row">
                                            <label for="landing_trial">App Trial Link</label>
                                            <input type="text" name="landing_trial" id="landing_trial"
                                                value="{{$landing_setting->landing_trial ?? old('landing_trial')}}"
                                                class="form-control" placeholder="App Trial Link">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
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
 });
</script>
@stop