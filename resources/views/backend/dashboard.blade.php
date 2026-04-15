@extends('backend.layouts.template')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 align-self-center">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>

<div class="container-fluid">

<div class="row">

    <!-- Download -->
    <div class="col-md-3">
        <div class="card bg-info text-white">
            <div class="card-body">
                <h3>6.674</h3>
                <p>DOWNLOAD</p>
            </div>
        </div>
    </div>

    <!-- Purchase -->
    <div class="col-md-3">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <h3>7.538</h3>
                <p>PURCHASE</p>
            </div>
        </div>
    </div>

    <!-- Order -->
    <div class="col-md-3">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h3>4.362</h3>
                <p>ORDER</p>
            </div>
        </div>
    </div>

    <!-- Stock -->
    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h3>1.426</h3>
                <p>STOCK</p>
            </div>
        </div>
    </div>

</div>


</div>

@endsection
