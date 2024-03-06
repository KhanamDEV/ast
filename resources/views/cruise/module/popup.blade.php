  @if (Auth::check())
<div class="modal fade" id="ctmd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MANAGE MY BOOKINGS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
             <form method="GET" action="/my-booking?code=agentsearch">
            <div class="modal-body">
                <div class="input-md-bk">
                    <div class="input-group mb-3">
                      
                        <input type="text" class="search-query form-control" name="bookingcode" placeholder="Booking ID" autocomplete="off" />
                        <div class="input-group-append">
                            <button class="btn btn-xanh-twt" type="submit">
                                <i class="fa fa-search"></i>
                            </button>

                        </div>
                    </div>
                    <div class="input-group mb-3">
                          <input type="text" class="search-query form-control" name="bookingname" placeholder="Guest Name" autocomplete="off" />
                        <div class="input-group-append">
                            <button class="btn btn-xanh-twt" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bb_content">
                  <?php 
                    $array_count_booking =  App::make("App\Http\Controllers\CartController")->countbooking();
                     $array_count_booking[1] = isset($array_count_booking[1])?$array_count_booking[1]:'0';
                                      $array_count_booking[2] = isset($array_count_booking[2])?$array_count_booking[2]:'0';
                                      $array_count_booking[3] = isset($array_count_booking[3])?$array_count_booking[3]:'0';
                                      $array_count_booking[4] = isset($array_count_booking[4])?$array_count_booking[4]:'0';
                                      $array_count_booking[5] = isset($array_count_booking[5])?$array_count_booking[5]:'0';
                                      $array_count_booking[6] = isset($array_count_booking[6])?$array_count_booking[6]:'0';
                                      $array_count_booking[7] = isset($array_count_booking[7])?$array_count_booking[7]:'0';
                                      $array_count_booking[8] = isset($array_count_booking[8])?$array_count_booking[8]:'0';
                                      $array_count_booking[9] = isset($array_count_booking[9])?$array_count_booking[9]:'0';
                                      $array_count_booking[10] = isset($array_count_booking[10])?$array_count_booking[10]:'0';
                                      $array_count_booking[11] = isset($array_count_booking[11])?$array_count_booking[11]:'0';
                                      $array_count_booking[12] = isset($array_count_booking[12])?$array_count_booking[12]:'0';
                                      $array_count_booking[13] = isset($array_count_booking[13])?$array_count_booking[13]:'0';
                                      $array_count_booking[14] = isset($array_count_booking[14])?$array_count_booking[14]:'0';
                                       $array_count_booking[16] = isset($array_count_booking[16])?$array_count_booking[16]:'0';
                   ?>
                              <div class="table-display">
                                      <div class="cell-display div2" style="background: #E8E8E8;">
                        <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_paid_twt.png" alt="" style="width:40px;"></div> PENDING </div>
                   <div class="cell-display">
                        <div class="div3 {{ ($array_count_booking[1] != 0)?'bold':'' }}" >
                          <a href="{{ route('mybooking', ['status' => 1]) }}">Quote <span class="bb_right">{{ isset($array_count_booking[1])?$array_count_booking[1]:'0' }}</span> </a> 
                      </div>
                      <div class="div4 {{ ($array_count_booking[2] != 0)?'bold':'' }}">
                        <a href="{{ route('mybooking', ['status' => 2]) }}">Instant Purchase (Booking Unconfirmed) <span class="bb_right">{{ isset($array_count_booking[2])?$array_count_booking[2]:'0' }}</span></a>
                      </div>
                      <div class="div5 {{ ($array_count_booking[3] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 3]) }}">Amendment Request <span class="bb_right">{{ isset($array_count_booking[3])?$array_count_booking[3]:'0' }}</span></a></div>
                      <div class="div6 {{ ($array_count_booking[4] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 4]) }}">Amendment Declined <span class="bb_right">{{ isset($array_count_booking[4])?$array_count_booking[4]:'0' }}</span></a></div>
                      <div class="div6 {{ ($array_count_booking[5] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 5]) }}">Cancellation Request <span class="bb_right">{{ isset($array_count_booking[5])?$array_count_booking[5]:'0' }}</span></a></div>
                    </div>
                </div>
                <div class="table-display">
                    <div class="cell-display div2" style="background: #E8E8E8;"> <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_unpaid_twt.png" alt="" style="width:40px;"></div> UNPAID </div>
                   <div class="cell-display">
                      <div class="div3 {{ ($array_count_booking[6] != 0)?'bold':'' }}"><a class="disabled" href="{{ route('mybooking', ['status' => 6]) }}">Confirmed Unpaid <span class="bb_right">{{ isset($array_count_booking[6])?$array_count_booking[6]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[7] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 7]) }}">Payment Due In 48 Hours <span class="bb_right">{{ isset($array_count_booking[7])?$array_count_booking[7]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[8] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 8]) }}">Payment Due In 7 Days <span class="bb_right">{{ isset($array_count_booking[8])?$array_count_booking[8]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[9] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 9]) }}">Payment Due In 30 Days <span class="bb_right">{{ isset($array_count_booking[9])?$array_count_booking[9]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[16] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 16]) }}">Quote Accepted <span class="bb_right">{{ isset($array_count_booking[16])?$array_count_booking[16]:'0' }}</span></a></div>
                      
                    </div>
                </div>
                <div class="table-display">
                    <div class="cell-display div2" style="background: #E8E8E8;"> <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_check_twt.png" alt="" style="width:40px;"></div> PAID </div>
                   <div class="cell-display">
                      <div class="div3 {{ ($array_count_booking[10] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 10]) }}">Booking Confirmed (Full Paid) <span class="bb_right">{{ isset($array_count_booking[10])?$array_count_booking[10]:'0' }}</span></a></div>
                      <div class="div3 {{ ($array_count_booking[11] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 11]) }}">Booking Confirmed (Deposit Paid) <span class="bb_right">{{ isset($array_count_booking[11])?$array_count_booking[11]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[12] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 12]) }}">Refund Pending <span class="bb_right">{{ isset($array_count_booking[12])?$array_count_booking[12]:'0' }}</span></a></div>
                      <div class="div5 {{ ($array_count_booking[13] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 13]) }}">Commission Paid <span class="bb_right">{{ isset($array_count_booking[13])?$array_count_booking[13]:'0' }}</span></a></div>
                      <div class="div5 {{ ($array_count_booking[14] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 14]) }}">Commission Unpaid <span class="bb_right">{{ isset($array_count_booking[14])?$array_count_booking[14]:'0' }}</span></a></div>
                    </div>
                </div>
            </div>
            </div>
          </form>
            <div class="modal-footer">
                <button type="button" class="btn button-xanh" data-dismiss="modal">Close</button>
                <a class="btn button-vang" href="{{ url('/my-bookings') }}">View All</a> 
            </div>
        </div>
    </div>
</div>
  @endif
<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="modalloginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
  <!-- <div class="container"> -->
    <!-- <div class="row"> -->
      <!-- <div class="col-sm-12 mx-auto"> -->
        <div class="card card-signin">
          <div class="card-body">
            <h5 class="card-title text-center text-dark">Sign In</h5>
          
              <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                 {{ csrf_field() }}
              <div class="form-label-group mb-3">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus style="height: 50px;border-radius: 20px;">
              </div>
              <div class="form-label-group mb-3">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required style="height: 50px;border-radius: 20px;">
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                <label class="custom-control-label text-dark" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-block text-uppercase mauvang maunentwtx" type="submit">Sign in</button>
<div class="clearfix pt-3">
  <a href="{{ url('/password/reset') }}" class="float-left text-secondary">Forgot your password ?</a>
  <a href="{{ url('/register') }}" class="float-right text-secondary">Registration</a>
</div>
            </form>
          </div>
        </div>
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
    </div>
  </div>
</div>

<div class="modal fade fix-showmb-scruise" id="menusearchcruise" tabindex="-1" role="dialog" aria-labelledby="modalsearchcruise" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

 <form action="/search" method="GET">
    <div class="container p-3" style="background-color: #22374e;z-index: 123;">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">DEPARTURE DATE</label>
                    <input type="text" class="form-control rounded-0 pick-date" id="inputEdeparture" name="departure" placeholder="MONTH OF DEPARTURE DATE" autocomplete="off">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">Destination/Region</label>
                    <input type="text" class="form-control rounded-0" id="iddestination" name="destination" autocomplete="off" placeholder="Destination/Region" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">Ship Name</label>
                    <select class="form-control rounded-0" id="shipname" name="shipname"><option value="" selected="selected">All</option><option value="Barge Anne Marie">Barge Anne Marie</option><option value="Barge Daniele">Barge Daniele</option><option value="Barge Deborah">Barge Deborah</option><option value="Barge Madeleine">Barge Madeleine</option><option value="Barge Jeanine">Barge Jeanine</option><option value="Barge Raymonde">Barge Raymonde</option><option value="Era Cruise">Era Cruise</option><option value="Legend">Legend</option><option value="MS La Belle de l Adriatique">MS La Belle de l Adriatique</option><option value="MS Amalia Rodrigues">MS Amalia Rodrigues</option><option value="MS Fernao de Magalhaes">MS Fernao de Magalhaes</option><option value="MS Gil Eanes">MS Gil Eanes</option><option value="MS Infrante Don Henrique">MS Infrante Don Henrique</option><option value="MS Miguel Torga">MS Miguel Torga</option><option value="MS Vasco de Gama">MS Vasco de Gama</option><option value="MS Elbe Princesse">MS Elbe Princesse</option><option value="MS Elbe Princesse II">MS Elbe Princesse II</option><option value="MS Cyrano de Bergerac">MS Cyrano de Bergerac</option><option value="MS France">MS France</option><option value="MS Princesse d'Aquitaine">MS Princesse d'Aquitaine</option><option value="MS La Belle de Cadix">MS La Belle de Cadix</option><option value="MS Loire Princesse">MS Loire Princesse</option><option value="MS Michenlangelo">MS Michenlangelo</option><option value="MS Beethoven">MS Beethoven</option><option value="MS Douce France">MS Douce France</option><option value="MS Europe">MS Europe</option><option value="MS Gerard Schmitter">MS Gerard Schmitter</option><option value="MS La Boheme">MS La Boheme</option><option value="MS Lafayette">MS Lafayette</option><option value="MS Leonard de Vinci">MS Leonard de Vinci</option><option value="MS Modigliani">MS Modigliani</option><option value="MS Mona Lisa">MS Mona Lisa</option><option value="MS Monet">MS Monet</option><option value="MS Symphonie">MS Symphonie</option><option value="MS Victor Hugo">MS Victor Hugo</option><option value="MS Vivaldi">MS Vivaldi</option><option value="MS Camargue">MS Camargue</option><option value="MS Mistral">MS Mistral</option><option value="MS Van Gogh">MS Van Gogh</option><option value="MS Botticelli">MS Botticelli</option><option value="MS Renoir">MS Renoir</option><option value="MS Rhone Princess">MS Rhone Princess</option><option value="MS Seine Princess">MS Seine Princess</option><option value="MS Jacques Cartier">MS Jacques Cartier</option><option value="MS Georgy Chicherin">MS Georgy Chicherin</option><option value="MS Kronstadt">MS Kronstadt</option><option value="MS Lev Tolstoi">MS Lev Tolstoi</option><option value="Ocean Nova">Ocean Nova</option><option value="Paragon">Paragon</option><option value="Rostropovitch">Rostropovitch</option><option value="RV African Dream">RV African Dream</option><option value="RV Indochina Pandaw">RV Indochina Pandaw</option><option value="RV Kalaw">RV Kalaw</option><option value="RV Indochine">RV Indochine</option><option value="RV Indochine II">RV Indochine II</option><option value="RV Lan Diep">RV Lan Diep</option><option value="RV Navigator">RV Navigator</option><option value="RV Princess">RV Princess</option><option value="Stella Australis">Stella Australis</option><option value="Zafiro">Zafiro</option></select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-6">
                <div class="form-group">
                    <label class="chutrang" for="">DURATION</label>
                    <select class="form-control rounded-0" id="duration" name="duration"><option value="" selected="selected">All</option><option value="1;3">1 - 3 Days</option><option value="3;8">3 - 8 Days</option><option value="9;15">9 - 15 Days</option><option value="16;19">16 - 19 Days</option><option value="20;99">20 Days and Above</option></select>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="form-group">
                    <label class="chutrang" for="">Ship Category</label>
                    <select class="form-control rounded-0" id="shipcategory" name="shipcategory"><option value="" selected="selected">All</option><option value="STD">Standard</option><option value="PREM">Premium</option></select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">Price Range</label>
                    <select class="form-control rounded-0" id="pricerange" name="pricerange"><option value="" selected="selected">All</option><option value="1000;3000">$1000 - $3000</option><option value="3000;5000">$3000 - $5000</option><option value="5000;7000">$5000 - $7000</option><option value="7000;9000">$7000 - $9000</option><option value="9000;11000">$9000 - $11000</option><option value="11000;13000">$11000 - $13000</option><option value="13000;15000">$13000 - $15000</option><option value="15000;17000">$15000 - $17000</option><option value="17000;19000">$17000 - $19000</option><option value="19000;21000">$19000 - $21000</option><option value="21000;23000">$21000 - $23000</option><option value="23000;25000">$23000 - $25000</option><option value="25500;99999999">Over $25,500</option></select>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-4 col-6">
                <div class="form-group">
                    <label class="chutrang" for="">OR/</label>
                    <input type="text" class="form-control rounded-0" id="idsearch" name="search" autocomplete="off">
                </div>
            </div>
          <div class="col-md-2 col-6">
                <div class="form-group">
                    <label class="chutrang" for="" style="white-space: nowrap;">Flexi date (+/-days)</label>
                    <input type="text" class="form-control rounded-0" id="idflexidate" name="flexidate" autocomplete="off">
                </div> 
            </div>
  <!--         <div class="col-md-6">
              <div class="form-group">
                    <label class="chutrang" for=""></label>
               <button type="submit" class="btn text-white btn-lg btn-block maunentwt" style="margin-top: 6px;padding: 5px;">SEARCH</button>
               </div>
            </div> -->
        </div>   
        <div class="row pt-2">
          <div class="col-8">
            <div class="form-group mb-0">
             
               <button type="submit" class="btn text-white btn-lg btn-block maunentwt" style="padding: 2px;">SEARCH</button>
               </div>
          </div>
                    <div class="col-4">
                      <div class="form-group mb-0">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal" style="padding: 2px;">Close</button>
                      </div>
          </div>
        </div>

    </div>



 
  </form>
    </div>
  </div>
    </div>


  <div class="modal fade" id="askaquestion" tabindex="-1" role="dialog" aria-labelledby="askaquestiontitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border: 2px solid rgba(34, 55, 78, 0.5);">
      <div class="modal-header">
        <p class="modal-title" id="exampleModalLongTitle">ASK A QUESTION</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Messager</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">SEND</button>
        </form>
      </div>
    </div>
  </div>
</div>


  <div class="modal fade" id="findanagent" tabindex="-1" role="dialog" aria-labelledby="findanagenttitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border: 2px solid rgba(34, 55, 78, 0.5);">
      <div class="modal-header">
        <p class="modal-title" id="exampleModalLongTitle">FIND AN AGENT</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
               <form action="/find-agent?code=find" method="POST" name="contactForm">
                {{ csrf_field() }}
      <div class="inputContainer pb-3">
        <input type="text" class="form-control rounded-0" id="exampleFormControlInput1" placeholder="Postcode / Suburb" name="postcode" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary-tn btn-block">Find</button>
        </form>
      </div>
    </div>
  </div>
</div>