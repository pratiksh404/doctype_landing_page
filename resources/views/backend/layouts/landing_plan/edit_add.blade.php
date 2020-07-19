<div class="row">
    <div class="col-lg-8">
        <label for="plan_name">Plan Name</label>
        <input type="text" name="plan_name" id="plan_name" class="form-control"
            value="{{$plan->plan_name ?? old('plan_name')}}" placeholder="Plan Name">
    </div>
    <div class="col-lg-4">
        <label for="plan_period">Plan Period</label>
        <select name="plan_period" id="plan_period" class="form-control">
            <option selected>Select Plan Period..</option>
            <option value="1" {{isset($plan->plan_period) ? $plan->plan_period == 1 ? 'selected' : '' : ''}}>Year
            </option>
            <option value="2" {{isset($plan->plan_period) ? $plan->plan_period == 1 ? 'selected' : '' : ''}}>Month
            </option>
            <option value="3" {{isset($plan->plan_period) ? $plan->plan_period == 1 ? 'selected' : '' : ''}}>Day
            </option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <label for="plan_currency_symbol">Plan Currency Symbol</label>
        <input type="text" name="plan_currency_symbol" id="plan_currency_symbol"
            value="{{$plan->plan_currency_symbol ?? old('plan_currency_symbol')}}" placeholder="Plan Currency Symbol"
            class="form-control">
    </div>
    <div class="col-lg-5">
        <label for="plan_price">Plan Price</label>
        <input type="number" name="plan_price" id="plan_price" value="{{$plan->plan_price ?? old('plan_price')}}"
            placeholder="Plan Price" class="form-control">
    </div>
    <div class="col-lg-4">
        <label for="plan_color">Plan Color</label>
        <input type="text" class="form-control my-colorpicker1" value="{{$plan->plan_color ?? old('plan_color')}}">
    </div>
</div>
<hr>
<label>Plan Service</label>
<div id="service_row">
    <div class="row">
        <div class="col-lg-10">
            <input type="text" name="plan_services[]" class="form-control" value="{{old('plan_services')}}"
                placeholder="Plan Service">
        </div>
        <div class=" col-lg-2 d-flex justify-content-between">
            <button class="btn btn-danger" id="delete_service"><i class="fas fa-trash"></i></button>
        </div>
    </div>
</div>

@if (isset($plan->plan_services))
<br>
@foreach ($plan->plan_services as $service)
@if ($service)
<div id="service_row">
    <div class="row">
        <div class="col-lg-10">
            <input type="text" name="plan_services[]" class="form-control" value="{{$service ?? ''}}"
                placeholder="Plan Service">
        </div>
        <div class=" col-lg-2 d-flex justify-content-between">
            <button class="btn btn-danger" id="delete_service"><i class="fas fa-trash"></i></button>
        </div>
    </div>
</div>
@endif
@endforeach
@endif
<br>
<div id="new_service"></div>
<br>
<button type="button" class="btn btn-success" id="add_service"><i class="fas fa-plus"></i> Add Service</button>