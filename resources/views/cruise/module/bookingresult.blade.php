@extends('cruise.layouts.cruisepayment')

@section('content') 

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card shadow text-center p-4">
          <i class="far fa-check-circle fa-3x chutwt pb-2"></i>
          <h3 class="chutwt">Thank you !</h4>
          <p>Thank you for your booking. Your booking Reference number: <b>{{$data_ordercode}}</b>. <br/>We will confirm your booking when your payment reach our bank. Please allow 3 working days for your payment to clear.</p>
          <p>For further enquires related to your booking, please contact us via email <a href ="mailto:contact@worldwiderivercruises.com.au">contact@worldwiderivercruises.com.au </a> or call us on <b class="chutwt">1300 356 391</b></p>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection