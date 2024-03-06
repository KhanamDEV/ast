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
<a class="btn btn-primary" href="{{ url('admins/userview/create') }}">User Add</a>

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
                  	<th>name</th>  
                    <th>email</th>
                    <th>title</th>
                    <th>street</th>
                    <th>postcode</th>
                    <th>city</th>
                    <th>country</th>
                    <th>state</th>
                    <th>phone</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>name</th>	
                  	<th>email</th>
          					<th>title</th>
          					<th>street</th>
          					<th>postcode</th>
          					<th>city</th>
          					<th>country</th>
          					<th>state</th>
          					<th>phone</th>
          					<th>Edit</th>
                  </tr>
                </tfoot>
                <tbody>
                	<?php
                	foreach ($data as $key => $valueitem) {
                	 ?>
                  <tr>
                    <td>{{ $valueitem['name'] }}</td>
                    <td>{{ $valueitem['email'] }}</td>
                    <td>{{ $valueitem['title'] }}</td>
                    <td>{{ $valueitem['street'] }}</td>
                    <td>{{ $valueitem['postcode'] }}</td>
                    <td>{{ $valueitem['city'] }}</td>
                    <td>{{ $valueitem['country'] }}</td>
                    <td>{{ $valueitem['stage'] }}</td>
                    <td>{{ $valueitem['phone'] }}</td>
                  
                    <td><a class="btn  btn-primary" href="{!! url('admins/userview/'.$valueitem['id'].'/edit') !!}">Edit</a>
                   

                    <form action="{{ url('admins/userview' , $valueitem['id'] ) }}" method="POST">
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