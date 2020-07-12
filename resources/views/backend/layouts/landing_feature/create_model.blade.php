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
                <form action="{{url(config('landing.prefix', 'admin') . '/' .'feature')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="feature_name">Feature Name</label>
                            <input type="text" name="feature_name" id="feature_name" class="form-control"
                                value="{{$feature->feature_name ?? old('feature_name')}}" placeholder="Feature Name">
                        </div>
                        <div class="col-lg-6">
                            <label for="feature_image">Feature Image</label>
                            <br>
                            <input type="file" name="feature_image" id="feature_image" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="feature_about">Feature About</label>

                            <textarea class="textarea" name="feature_about" rows="40" placeholder="Place some text here"
                                style="width: 100%; height: 60vh; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 5px;">
                                                                                                                                                            {{$feature->feature_about ?? old('feature_about')}}
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