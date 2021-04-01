@extends('client.layout.app')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="salogan">
        <h2>Sales</h2>
      </div>
      <div class="items"> @if(count($d)>0)
        @foreach($d as $results)
        <div class="col-lg-3 col-md-3 col-lg-12">
          <div data-price="674" class="item"> <a href="{{URL('/')}}/products/details/{{$results->pk_id}}/{{$results->sku}}"><img src="{{URL('/')}}/storage/images/{{$results->thumbnail}}" alt="jacket" class="img-item"></a>
            <div class="info">
              <h3>{{$results->name}}</h3>
              <h4> PKR {{number_format($results->price)}}</h4>
              <label class="label label-success">off PKR {{($results->price*$results->percentage)/100}}</label>
              <h5> PKR {{number_format($results->price - (($results->price*$results->percentage)/100))}}</h5>
            </div>
          </div>
        </div>
        @endforeach
        
        @endif </div>
    </div>
  </div>
</div>

@endsection