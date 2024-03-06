@extends('admin.layout.admin')

@section('content')

     <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Price Table</li>
        </ol>

        <!-- Icon Cards-->
       

        <!-- Area Chart Example-->
       
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Price Table Add</div>
          <div class="card-body">
            <form role="form" action="{{ url('admins/pricetable') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Trip code</label>
              <input class="form-control col-sm-10" placeholder="Trip code" name="tripcode">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Ship</label>
              <input class="form-control col-sm-10" placeholder="Ship" name="ship">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Ship Category</label>
              <input class="form-control col-sm-10" placeholder="Ship Category" name="shipcategory">
            </div>            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Cabin type</label>
              <input class="form-control col-sm-10" placeholder="Cabin type"  name="cabintype">
            </div>         
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Start date</label>
              <input class="form-control col-sm-10" placeholder="Start date" name="startdate">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >End date</label>
              <input class="form-control col-sm-10" placeholder="End date" name="enddate">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Price pp twin shar</label>
              <input class="form-control col-sm-10" placeholder="Price pp twin shar" name="pricepptwin">
            </div>            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Price singe</label>
              <input class="form-control col-sm-10" placeholder="Price singe" name="pricesinge">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Available Cabins</label>
              <input class="form-control col-sm-10" placeholder="Available Cabins" name="availablecabins">
            </div> 
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Special</label>
                <select class="form-control col-sm-10" name="special">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Status Booking</label>
                <select class="form-control col-sm-10" name="status">
                  <option value="1">Book now</option>
                  <option value="2">On request</option>
                  <option value="3">Sold Out</option>
                </select>
            </div>
         

              <button type="submit" class="btn btn-primary">Submit Button</button>
              <button type="reset" class="btn btn-warning">Reset Button</button>  

            </form>
          </div>
         
        </div>

      </div>

@endsection      