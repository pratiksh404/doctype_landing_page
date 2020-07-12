<div class="modal fade" id="show-feature-{{$feature->id}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Show App Feature</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="height: auto;max-height:70vh;padding:2em">
                    <div class="col-lg-5">
                        <div class="row">
                            <b>{{$feature->feature_name}}</b>
                        </div>
                        <hr>
                        <div class="row">
                            <img src="{{asset('storage').'/'.$feature->feature_image}}" alt="{{$feature->feature_name}}"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7" style="overflow-y:scroll;padding:2em">
                        {!! $feature->feature_about !!}
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->