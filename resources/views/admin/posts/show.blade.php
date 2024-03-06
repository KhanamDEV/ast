@extends('admin.layout.admin')

@section('content')

     <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Contact view</li>
        </ol>

        <!-- Icon Cards-->
       

        <!-- Area Chart Example-->
       
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Contact Show {{$data['name']}}</div>
          <div class="card-body">
            <form role="form" action="{{ route('userview.update',$data['id']) }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
           

              <input name="_method" type="hidden" value="PUT">
              {{ csrf_field() }}


            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Name</label>
              <input readonly class="form-control-plaintext col-sm-10" placeholder="Name" name="name" value="{{$data['name']}}">
            </div>
            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Phone</label>
              <input readonly class="form-control-plaintext col-sm-10" placeholder="Phone" name="phone" value="{{$data['phone']}}">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Detail</label>
              <textarea name="detail" id="" cols="30" rows="10" readonly class="form-control-plaintext col-sm-10">{{$data['detail']}}</textarea>
            </div>            

            

            </form>
          </div>
         
        </div>

      </div>

@endsection      