<div class="modal fade" id="show-service-{{$service->id}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Show App Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="height: auto;max-height:70vh;padding:2em">
                    <div class="col-lg-5">
                        <div class="row d-flex justify-content-center">
                            <b>{{$service->service_name}}</b>
                        </div>
                        <hr>
                        <div class="row d-flex justify-content-center">
                            <i class="{{$service->service_icon}}" style="font-size: 6em"></i>
                        </div>
                    </div>
                    <div class="col-lg-7" style="overflow-y:scroll;padding:2em">
                        {!! $service->service_excerpt !!}
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