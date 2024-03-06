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
            Slide Add</div>
          <div class="card-body">
            <form role="form" action="{{ url('admins/slide') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}



            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Title</label>
              <input class="form-control col-sm-10" placeholder="Title" name="name">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Image</label>
              <input type="file" name="image" class="form-control col-sm-10" >
            </div>
             <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Image of Mobile</label>
              <input type="file" name="filemobile" class="form-control col-sm-10" >
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Details</label>
              <textarea id="story" name="detail" rows="5" cols="33" class="form-control col-sm-10"></textarea>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Link to post</label>
              <input class="form-control col-sm-10" placeholder="Link to post" name="url">
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" >Price</label>
              <input class="form-control col-sm-10" placeholder="Price" name="price">
            </div>
             <div class="form-group row">
                <label class="col-sm-2 col-form-label" >Status</label>
                <select class="form-control col-sm-10" name="status">
                  <option value="1">Show</option>
                  <option value="2">Hide</option>
                </select>
            </div>

  <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" id="chkPassport">
        <label class="custom-control-label" for="chkPassport">
          Special Offer
        </label>
      </div>
    </div>
  </div>
<!--                <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="chkPassport">    
   Special Offer </label>
<input class="form-control col-sm-10" type="checkbox" id="chkPassport" />

   </div> -->
             <div class="form-group row" id="dvPassport" style="display: none">
<div class="col-md-6">
             <div class="form-group">
                <label class="col-form-label" >Status</label>
                <select class="form-control" name="showpack">
                   <option value="0">Hide</option>
                  <option value="1">Show</option>
                 
                </select>
            </div>
</div>
<div class="col-md-6">
            <div class="form-group">
              <label class="col-form-label" >Content Special Offer</label>
              <input class="form-control" placeholder="Content" name="contentpack">
            </div>
</div>
            </div>

              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-warning">Reset</button>  

            </form>
          </div>
         
        </div>

      </div>

@section('ngocjs')
<script>
  $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
                $("#AddPassport").hide();
            } else {
                $("#dvPassport").hide();
                $("#AddPassport").show();
            }
        });
    });
</script>
@endsection   

@endsection      