@extends('admin.layouts.app')

@section('title',config('app.name')." | Peoduct Show")
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded h-100 p-4">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="col-12 col-md-123 col-xs-12">
                   <img src="@if(isset($data->foto)) {{asset('images_brand/'.$data->foto)}} @else {{asset('logo.jpg')}} @endif" alt="" width="250px" height="250px"   >
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="row">
                    <div class="col-4 col-4 col-md-4 col-xs-12">
                        <label for="">Name Brand</label>
                    </div>
                    <div class="col-8 col-md-8 col-xs-12">
                        <h6 for="">: {{$data->name}}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-12 col-md-12 col-sm-12 d-flex justify-content-end">
                <a href="{{url('/admin/brand')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection