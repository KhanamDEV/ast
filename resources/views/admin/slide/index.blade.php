@extends('admin.layout.admin')

@section('content')

     <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Slide</li>
        </ol>

        <!-- Icon Cards-->
       

        <!-- Area Chart Example-->
       
        <!-- DataTables Example -->
        <div class="card mb-3">
          	<div class="card-header">
	            <i class="fas fa-table"></i>
	           Slide List
<a class="btn btn-primary" href="{{ url('admins/slide/create') }}">Add Slide</a>

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
                  	<th>Title</th>
<th>Image</th>
<th>Status</th>
<th>Show Special Offer</th>
<th>Details</th>
<th>Link to post</th>
<th>Price</th>
                   <th>Edit</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>Title</th>
<th>Image</th>
<th>Status</th>
<th>Show Special Offer</th>
<th>Details</th>
<th>Link to post</th>
<th>Price</th>
					<th>Edit</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php
                	foreach ($data as $key => $valueitem) {
                	 ?>
                  <tr>

                    <td>{{ $valueitem['name'] }}</td>
                    <td>{{ $valueitem['image'] }}</td>
                    <td>{{ ($valueitem['status'] == '1')?"Show":"Hide" }}</td>
                    <td><span style="font-weight: 600">{{ ($valueitem['showpack'] == '1')?"Show":"Hide" }}</span></td>
                    <td>{{ $valueitem['detail'] }}</td>
                    <td>{{ $valueitem['url'] }}</td>
                    <td>{{ $valueitem['price'] }}</td>
                    <td><a class="btn  btn-primary" href="{!! url('admins/slide/'.$valueitem['id'].'/edit') !!}">Edit</a>
                   

                    <form action="{{ url('admins/slide' , $valueitem['id'] ) }}" method="POST">
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