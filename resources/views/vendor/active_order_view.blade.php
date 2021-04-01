@extends('vendor.layout.appvendor')
<script>
  var OrgID=-1;
    function getId(id)
    {
  
      
      OrgID = id;
      return true;
    }
    function getreal()
    {
      alert(OrgID);
      
     
    }
    
    
  
  </script>
@section('content')

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Active Orders
          </h1>
                  </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">			 
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border table-responsive">
                  
                <div class="box-body">
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                      
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Status Change</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Update Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option>Select status</option>
                                    
                                        <option value="1">Shipped</option>
                                        <option value="2">canceled</option>
                                        <option value="3">Returned</option>
                            
                             
                                     
                                    </select>
                             </div>
                             <button id="b1" type="button" class="btn btn-submmit">Submit</button>
                            </div>
                          </div>
                      
                        </div>
                      </div>
                    <table id="example1" class="table no-margin">
                      <thead>
                        <tr>
                          <th>O_ID</th>
                      
                        <th>Total Price</th>
                      <th>Discounted Price</th>
                        <th>Discount</th>
                          <th>Quantity</th>
                   
                          <th>Status</th>
                          <th> Actions</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($result)>0)
                        @foreach($result as $results)
                        <tr>
                          <td>{{$results->order_id}}</td>
                       
              
                 
                  
                      <td>PKR {{number_format($results->price)}}</td>
                             <td>PKR {{number_format($results->discount_price)}}</td>
                             @if($results->percentage > 0)
                                <td>{{$results->percentage}}%</td>
                                @else
                                  <td> </td>
                                  @endif
                                  
                                   <td>{{$results->quantity}}</td>     
                          @if($results->v_order_status == 1)
                          <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-primary" data-toggle="modal" data-target="#myModal">shipped</span></td>
                          @elseif($results->v_order_status == 0)
                          <td><span id="{{$results->pk_id}}" onclick="getId(this.id)" class="label label-warning" data-toggle="modal" data-target="#myModal">In progress</span></td>
             
                    
                        
                          @endif
                          <td><a href="{{url('/')}}/vendor/home/view/active/order/view/specific/order/{{$results->product_id}}/{{$results->order_id}}">View</a></td>
                          
                        </tr>
                        @endforeach
                        @endif
                
                 
              
                      </tbody>
                    </table><!-- /.table-responsive -->
                </div><!-- /.box-body -->
               
                </div><!-- /.box-header -->
                <!-- /.box-footer -->
                <!-- /.box-footer add button next/previus
                
                
                
                
                 -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     @endsection