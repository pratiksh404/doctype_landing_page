<div class="modal fade" id="create-plan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create App Plan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url(config('landing.prefix', 'admin') . '/' .'plan')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <label for="plan_name">Plan Name</label>
                            <input type="text" name="plan_name" id="plan_name" class="form-control"
                                value="{{old('plan_name')}}" placeholder="Plan Name">
                        </div>
                        <div class="col-lg-4">
                            <label for="plan_period">Plan Period</label>
                            <select name="plan_period" id="plan_period" class="form-control">
                                <option selected>Select Plan Period..</option>
                                <option value="1">Year
                                </option>
                                <option value="2">Month
                                </option>
                                <option value="3">Day
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="plan_currency_symbol">Plan Currency Symbol</label>
                            <input type="text" name="plan_currency_symbol" id="plan_currency_symbol"
                                value="{{old('plan_currency_symbol')}}" placeholder="Plan Currency Symbol"
                                class="form-control">
                        </div>
                        <div class="col-lg-5">
                            <label for="plan_price">Plan Price</label>
                            <input type="number" name="plan_price" id="plan_price" value="{{old('plan_price')}}"
                                placeholder="Plan Price" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label for="plan_color">Plan Color</label>
                            <input type="text" class="form-control my-colorpicker1" value="{{old('plan_color')}}">
                        </div>
                    </div>
                    <hr>
                    <label>Plan Service</label>
                    <div id="service_row">
                        <div class="row">
                            <div class="col-lg-10">
                                <input type="text" name="plan_services[]" class="form-control"
                                    value="{{old('plan_services')}}" placeholder="Plan Service">
                            </div>
                            <div class=" col-lg-2 d-flex justify-content-between">
                                <button class="btn btn-danger" id="delete_service"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="new_service"></div>
                    <br>
                    <button type="button" class="btn btn-success" id="add_service"><i class="fas fa-plus"></i> Add
                        Service</button>
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