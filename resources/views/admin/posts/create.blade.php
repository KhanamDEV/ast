@extends('admin.layout.admin')

@section('content')

     <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Icon Cards-->
       

        <!-- Area Chart Example-->
       
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Contact Add</div>
          <div class="card-body">
            <form role="form" action="{{ url('admins/contacts') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Name</label>
              <input class="form-control col-sm-10" placeholder="Name" name="name">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Phone</label>
              <input class="form-control col-sm-10" placeholder="Phone" name="phone">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Detail</label>
              <textarea name="detail" id="" cols="30" rows="10" class="form-control col-sm-10"></textarea>
            </div>            
            <button type="submit" class="btn btn-primary">Submit Button</button>
              <button type="reset" class="btn btn-warning">Reset Button</button>  

            </form>
          </div>
         
        </div>

      </div>

@endsection      