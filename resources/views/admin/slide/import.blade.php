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
	            Price Table Import
	            <a class="btn btn-primary" href="{{ url('admins/pricetable') }}">Price Table List</a>
<a class="btn btn-primary" href="{{ url('admins/pricetable/create') }}">Price Table Add</a>

        	</div>
          <div class="card-body">
          	@if(session()->has('message'))
			    <div class="alert alert-success">
			        {{ session()->get('message') }}
			    </div>
			@endif
            <div class="table-responsive">
              	@if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
						{{ Session::get('success') }}
					</div>
				@endif


				@if ($message = Session::get('error'))
					<div class="alert alert-danger" role="alert">
						{{ Session::get('error') }}
					</div>
				@endif


				<h3>Import File Form:</h3>
				<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('admins/pricetables/importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">


					<input type="file" name="import_file" />
					{{ csrf_field() }}
					<br/>


					<button class="btn btn-primary">Import Excel File</button>


				</form>
            </div>
          </div>
          <div class="card-footer small text-muted"> </div>
        </div>

      </div>

@endsection      