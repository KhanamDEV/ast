@extends('admin.layout.admin')

@section('content')

     <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Slide Table</li>
        </ol>

        <!-- Icon Cards-->
       

        <!-- Area Chart Example-->
       
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Slide Edit</div>
          <div class="card-body">
            <form role="form" action="{{ route('slide.update',$data['id']) }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
           

              <input name="_method" type="hidden" value="PUT">
              {{ csrf_field() }}


                       <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Title</label>
              <input class="form-control col-sm-10" placeholder="Title" name="name" value="{{$data['name']}}">
            </div>
            <div class="form-group row">
             
              <label class="col-sm-2 col-form-label" >Image</label>
              <div class="col-md-10 row">
              <input type="file" name="image" class="form-control col-md-6" >
               <img id="preview" src="{{asset('img/slide/'.$data['image'])}}" class="col-md-6"
                         height="200px" width="200px"/>
                         </div>
            </div>
            <div class="form-group row">
             
              <label class="col-sm-2 col-form-label" >Image of Mobile</label>
              <div class="col-md-10 row">
              <input type="file" name="imagemobile" class="form-control col-md-6" >
               <img id="preview" src="{{asset('img/slide/'.$data['imagemobile'])}}" class="col-md-6"
                         height="200px" width="200px"/>
                         </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Detail</label>
              <textarea id="story" name="detail" rows="5" cols="33" class="form-control col-sm-10">{{$data['detail']}}</textarea>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Url</label>
              <input class="form-control col-sm-10" placeholder="Url" name="url" value="{{$data['url']}}">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Price</label>
              <input class="form-control col-sm-10" placeholder="Price" name="price" value="{{$data['price']}}">
            </div>
             <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Status</label>
                <select class="form-control col-sm-10" name="status">
                  <option value="1"  {{ $data['status'] == 1 ? 'selected="selected"' : '' }}>Show</option>
                  <option value="2"  {{ $data['status'] == 2 ? 'selected="selected"' : '' }}>Hide</option>
                </select>
            </div>
            <div class="row">
              <div class="col-md-2"><label class="col-form-label" >Special Offer</label></div>
              <div class="col-md-10">
                             <div class="form-group row" id="dvPassport">

<div class="col-md-6">
             <div class="form-group">
                <label class="col-form-label" >Status showpack</label>
                <select class="form-control" name="showpack">
                  <option value="1"  {{ $data['showpack'] == 1 ? 'selected="selected"' : '' }}>Show</option>
                  <option value="0"  {{ $data['showpack'] == 0 ? 'selected="selected"' : '' }}>Hide</option>
                </select>
            </div>
</div>
<div class="col-md-6">
            <div class="form-group">
              <label class="col-form-label" >Content Special Offer</label>
              
              <textarea id="story" name="contentpack" rows="5" cols="4" class="form-control">{{$data['contentpack']}}</textarea>
            </div>
</div>
            </div>
              </div>
            </div>
            


         

              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-warning">Reset</button>  

            </form>
          </div>
         
        </div>

      </div>

@endsection      