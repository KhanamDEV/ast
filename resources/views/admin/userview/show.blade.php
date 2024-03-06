@extends('admin.layout.admin')

@section('content')

     <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">User view</li>
        </ol>

        <!-- Icon Cards-->
       

        <!-- Area Chart Example-->
       
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            User Show {{$data['name']}}</div>
          <div class="card-body">
            <form role="form" action="{{ route('userview.update',$data['id']) }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
           

              <input name="_method" type="hidden" value="PUT">
              {{ csrf_field() }}


            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Name</label>
              <input readonly class="form-control-plaintext col-sm-10" placeholder="Trip code" name="name" value="{{$data['name']}}">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Email</label>
              <input readonly class="form-control-plaintext col-sm-10" placeholder="Email" name="email" value="{{$data['email']}}">
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Title</label>
                <select readonly class="form-control-plaintext col-sm-10" name="title">
                  <option value="Mr" {{ $data['title'] == 'Mr' ? 'selected="selected"' : '' }}>Mr</option>
                  <option value="Ms" {{ $data['title'] == 'Ms' ? 'selected="selected"' : '' }}>Ms</option>
                </select>
            </div>


            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Street</label>
              <input readonly class="form-control-plaintext col-sm-10" placeholder="Street" name="street" value="{{$data['street']}}">
            </div>            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Post code</label>
              <input readonly class="form-control-plaintext col-sm-10" placeholder="Post code"  name="postcode" value="{{$data['postcode']}}">
            </div>         
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Country</label>
               <select name="country" id="country" readonly class="form-control-plaintext col-sm-10" required="">
                <option value="">---</option>
                <option value="Au" {{ $data['country'] == 'Au' ? 'selected="selected"' : '' }}>Australia</option>
                <option value="Gr" {{ $data['country'] == 'Gr' ? 'selected="selected"' : '' }}>Greece</option>
                <option value="Ne" {{ $data['country'] == 'Ne' ? 'selected="selected"' : '' }}>New Zealand</option>
                <option value="Si" {{ $data['country'] == 'Si' ? 'selected="selected"' : '' }}>Singapore</option>
                <option value="Th" {{ $data['country'] == 'Th' ? 'selected="selected"' : '' }}>Thailand</option>
                <option value="Uk" {{ $data['country'] == 'Uk' ? 'selected="selected"' : '' }}>United Kingdom</option>
                <option value="Us" {{ $data['country'] == 'Us' ? 'selected="selected"' : '' }}>United States</option>
                <option value="Ot" {{ $data['country'] == 'Ot' ? 'selected="selected"' : '' }}>Other</option>
              </select>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >State</label>
              <input readonly class="form-control-plaintext col-sm-10" placeholder="State" name="stage" value="{{$data['stage']}}">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >phone</label>
              <input readonly class="form-control-plaintext col-sm-10" placeholder="Phone" name="phone" value="{{$data['phone']}}">
            </div>            
            
         

            

            </form>
          </div>
         
        </div>

      </div>

@endsection      