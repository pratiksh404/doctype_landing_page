<div class="modal fade" id="create-service">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create App Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url(config('landing.prefix', 'admin') . '/' .'service')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="service_name">Service Name</label>
                            <input type="text" name="service_name" id="service_name" class="form-control"
                                value="{{$service->service_name ?? old('service_name')}}" placeholder="Service Name">
                        </div>
                        <div class="col-lg-6">
                            <label for="service_icon">Service Icon</label>
                            <br>
                            <input type="text" name="service_icon" id="service_icon" class="form-control"
                                value="{{$service->service_icon ?? 'fas fa-concierge-bell'}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="service_excerpt">Service Excerpt</label>

                            <textarea class="textarea" name="service_excerpt" rows="40"
                                placeholder="Place some text here"
                                style="width: 100%; height: 60vh; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;">
                                                                                                                                                            {{$service->service_about ?? old('service_about')}}
                                                                                                                                                                                                    </textarea>
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