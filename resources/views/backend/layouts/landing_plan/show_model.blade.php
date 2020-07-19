<div class="modal fade" id="show-plan-{{$plan->id}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Show App Plan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="height: auto;max-height:70vh;padding:2em">
                    <div class="col-lg-4"><b>Plan Name : </b>{{$plan->plan_name}}</div>
                    <div class="col-lg-4"><b>Plan Period : </b>{{$plan->plan_period}}</div>
                    <div class="col-lg-4"><b>Plan Price : </b>{{$plan->plan_currency_symbol}} {{$plan->plan_price}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-group">
                            <b>Plan Services : </b>
                            @foreach ($plan->plan_services as $service)
                            <li class="list-group-item" style="width:100%">{{$service}}</li>
                            @endforeach
                        </ul>
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