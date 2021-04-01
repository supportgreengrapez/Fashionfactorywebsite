@extends('client.layout.app')
@section('content')

<!-- /NAVIGATION --> 

<!-- BREADCRUMB -->
<div id="breadcrumb">
    
    <div class="section"> 
        <!-- container -->
        <div class="container"> 
          <!-- row -->
          <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                <h3>
                Order Tracking
                </h3>
                        </section>
    <tbody class="nDividerBlockOuter">
              <tr>
        <td class="nDividerBlockInner" style="padding: 18px;"><table class="nDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top-width: 5px;border-top-style: solid;border-top-color:#ed6c71;">
            <tbody>
              <tr>
                <td><span></span></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
            </tbody>
    
    <!-- Main content --> 
    <!-- /.content --> 
  </div>
          <!-- /row -->
          <div class="wrappers" style="margin:0 auto; width:70%;">
          <div class="row">
                <form method="post" action = "{{url('/')}}/guest/order/tracking" class="login100-form validate-form ">
                     {{ csrf_field() }}
    @if($errors->any())
<div class="alert alert-danger">
 <strong>Danger!</strong> {{$errors->first()}}
</div>
@endif
              <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="boxcheck1">
                  <div class="form-group">
            <label for="text">Order ID</label>
            <input type="number" name ="orderid" class="form-control" required  >
          </div>
                  <div class="form-group">
            <label for="txt">Email Address</label>
            <input type="email" name ="email" class="form-control" required  >
          </div>
                </div>
        <div class="newbox">
                  <div class="checkbox">
            <button type="submit" class="btn btn-default btn1">Search</button>
          </div>
                  <br>
                </div>
      </div>
            </form>
   
  </div>
  </div>
        </div>
      </div>


@endsection