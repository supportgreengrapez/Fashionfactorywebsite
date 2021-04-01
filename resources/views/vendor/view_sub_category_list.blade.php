@extends('vendor.layout.appvendor')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                View Sub Category
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
                        <table id="example1" class="table no-margin">
                          <thead>
                            <tr>
                              <th>ID_No</th>
                              <th>Category</th>
                              <th>Sub Category</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                                @if($result>0)
                                @foreach($result as $results)
                                <tr>          
                                  <td>{{$results->SKU}}</td>
                                  <td>{{$results->main_category}}</td>
                                  <td>{{$results->sub_category}}</td>
                                  <td><a href="{{URL('/')}}/vendor/home/edit/sub/category/{{$results->SKU}}">Edit</a>
                                      <a href="{{URL('/')}}/vendor/home/delete/sub/category/{{$results->SKU}}" style="margin-left:10px;">Delete</a></td>
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