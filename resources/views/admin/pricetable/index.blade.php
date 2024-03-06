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
	            Price Table List
<a class="btn btn-primary" href="{{ url('admins/pricetable/create') }}">Price Table Add</a>
<a class="btn btn-primary" href="{{ url('admins/pricetables/imports') }}">Price Table Import</a>
        	</div>
          <div class="card-body">
          	@if(session()->has('message'))
			    <div class="alert alert-success">
			        {{ session()->get('message') }}
			    </div>
			@endif
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  	<th>Trip code</th>	
                  	<th>Ship</th>
					<th>Ship Category</th>
					<th>Cabin type</th>
					<th>Start date</th>
					<th>End date</th>
					<th>Price pp twin share</th>
					<th>Price singe</th>
					<th>Available Cabins</th>
					<th>Special</th>
					<th>Status</th>
                   <th>Edit</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Trip code</th>	
                  	<th>Ship</th>
					<th>Ship Category</th>
					<th>Cabin type</th>
					<th>Start date</th>
					<th>End date</th>
					<th>Price pp twin share</th>
					<th>Price singe</th>
					<th>Available Cabins</th>
					<th>Special</th>
					<th>Status</th>
					<th>Edit</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php
                	foreach ($data as $key => $valueitem) {
                	 ?>
                  <tr>

                    <td>{{ $valueitem['tripcode'] }}</td>
                    <td>{{ $valueitem['ship'] }}</td>
                    <td>{{ $valueitem['shipcategory'] }}</td>
                    <td>{{ $valueitem['cabintype'] }}</td>
                    <td>{{ $valueitem['startdate'] }}</td>
                    <td>{{ $valueitem['enddate'] }}</td>
                    <td>{{ $valueitem['pricepptwin'] }}</td>
                    <td>{{ $valueitem['pricesinge'] }}</td>
                    <td>{{ $valueitem['availablecabins'] }}</td>
                    <td>{{ $valueitem['special'] }}</td>
                    <td>{{ $valueitem['status'] }}</td>
                    <td><a class="btn  btn-primary" href="{!! url('admins/pricetable/'.$valueitem['id'].'/edit') !!}">Edit</a>
                   

                    <form action="{{ url('admins/pricetable' , $valueitem['id'] ) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn  btn-danger">Delete</button>
                    </form>


                     </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>

@endsection      