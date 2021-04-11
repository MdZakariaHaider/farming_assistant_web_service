@extends('backend.master')
@section('orders')

<div class="row">
    <div class="col-md-3 ">
        <div class="card bg-success text-white shadow" style="width: 15rem;height:10rem;">
            <div class="card-body">
                <h5> <small>Total Farmers</small></h5>
                <h1>5000</h1>
            </div>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="card bg-warning text-white shadow" style="width: 15rem; height:10rem">
            <div class="card-body">
                <h5> <small>Total Agents </small> </h5>
                <h1>100</h1>
            </div>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="card bg-primary text-white shadow" style="width: 15rem;height:10rem;">
            <div class="card-body">
                <h5> <small>Total Retailers</small> </h5>
               <h1>150</h1>
            </div>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="card bg-dark text-white shadow" style="width: 15rem;height:10rem;">
            <div class="card-body">
                <h5> <small>Total Products</small> </h5>
                <h1>50</h1>
            </div>
        </div>
    </div>
</div>


@endsection

