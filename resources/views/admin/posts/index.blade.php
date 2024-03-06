@extends('admin.layout.admin')

@section('content')

     <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Posts List</li>
        </ol>

        <!-- Icon Cards-->
       

        <!-- Area Chart Example-->
       
        <!-- DataTables Example -->
        <div class="card mb-3">
          	<div class="card-header">
	            <i class="fas fa-table"></i>
	            Posts List


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
                  	<th>Trip Code</th>	
                  	<th>Title</th>
                    <th>Status</th>
					          <th>Edit</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>Trip Code</th> 
                    <th>Title</th>
                    <th>Status</th>
                   <th>Edit</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php
                	foreach ($data as $key => $valueitem) {
                	 ?>
                  <tr>

                    <td>{{ $valueitem->tripcode }}</td>
                    <td>{{ $valueitem->title }}</td>
                   <td><?php echo ($valueitem->status = 1)?'Publish':'Draft' ?></td>
                   
                    <td><a class="btn btn-primary btn-sm" href="#">View</a>
                   <a class="btn btn-primary btn-sm" href="#">PriceTable</a>
                   <a class="btn btn-primary btn-sm" href="#">Edit </a> </td>
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