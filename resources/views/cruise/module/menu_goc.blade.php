   <style type="text/css">
    #winner{
          position: absolute;
          display: none;
    }
  </style>
 <div class="navbar navbar-expand-lg navbar-dark py-2 sty-tn-nav px-4 navbar-light" style="background: #F3F1F5;z-index: 123;">
    <div class="container-fluid">

      <button class="navbar-toggler fix-out-line-fc" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid rgba(213, 176, 75, 1);">
        <i class="fas fa-bars mauvang"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav mr-auto">

  <li class="nav-item hide-mobile">
    <a class="nav-link chutwt font-size-13" href="#" data-toggle="modal" data-target="#menusearchcruise">CRUISE SEARCH</a>
  </li>

          <li class="nav-item hide-mobile-menu" style="position: unset;">
            <a  class="nav-link chutwt font-size-13" id="navbarDropdown1"  href="#" >CRUISE SEARCH</a>

<div class="dropdown-menu-sty-tn" id="winner" >
   <form action="/search" method="GET">
    <div class="container p-4" style="background-color: #22374e;z-index: 123;">
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
                    <input type="text" class="form-control rounded-0" id="" name="destination" autocomplete="off" placeholder="Destination/Region" >
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
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">DURATION</label>
                    <select class="form-control rounded-0" id="duration" name="duration"><option value="" selected="selected">All</option><option value="1;3">1 - 3 Days</option><option value="3;8">3 - 8 Days</option><option value="9;15">9 - 15 Days</option><option value="16;19">16 - 19 Days</option><option value="20;99">20 Days and Above</option></select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">Ship Category</label>
                    <select class="form-control rounded-0" id="shipcategory" name="shipcategory"><option value="" selected="selected">All</option><option value="STD">Standard</option><option value="PREM">Premium</option></select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">Price Range</label>
                    <select class="form-control rounded-0" id="duration" name="pricerange"><option value="" selected="selected">All</option><option value="1000;3000">$1000 - $3000</option><option value="3000;5000">$3000 - $5000</option><option value="5000;7000">$5000 - $7000</option><option value="7000;9000">$7000 - $9000</option><option value="9000;11000">$9000 - $11000</option><option value="11000;13000">$11000 - $13000</option><option value="13000;15000">$13000 - $15000</option><option value="15000;17000">$15000 - $17000</option><option value="17000;19000">$17000 - $19000</option><option value="19000;21000">$19000 - $21000</option><option value="21000;23000">$21000 - $23000</option><option value="23000;25000">$23000 - $25000</option><option value="25500;99999999">Over $25,500</option></select>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">OR/</label>
                    <input type="text" class="form-control rounded-0" id="" name="search" autocomplete="off">
                </div>
            </div>
          <div class="col-md-2">
                <div class="form-group">
                    <label class="chutrang" for="" style="white-space: nowrap;">Flexi date (+/-days)/</label>
                    <input type="text" class="form-control rounded-0" id="" name="flexidate" autocomplete="off">
                </div>
            </div>
          <div class="col-md-6">
              <div class="form-group">
                    <label class="chutrang" for=""></label>
               <button type="submit" class="btn text-white btn-lg btn-block maunentwt" style="margin-top: 6px;padding: 5px;">SEARCH</button>
               </div>
            </div>
        </div>               
    </div>
  </form>
</div> 
</li>


          <li class="nav-item dropdown font-size-13 margin-l-65">
        <a class="nav-link dropdown-toggle chutwt" href="{{ url('/europe-cruises') }}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
         EUROPE CRUISES
        </a>
        <div class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown" style="font-size: 1.2rem;min-width: 19rem;padding: 0;background-color: #22374e;">
          <a class="dropdown-item" href="{{ url('/m',['16','Northern-Europe']) }}">Northern Europe</a>
          <a class="dropdown-item" href="{{ url('/m',['17','Southern-Europe']) }}">Southern Europe</a>
          <a class="dropdown-item" href="{{ url('/m',['18','Central-Europe']) }}">Central Europe</a>
          <a class="dropdown-item" href="{{ url('/m',['19','French-Rivers-and-Canals']) }}">French Rivers and Canals</a>
          <a class="dropdown-item" href="{{ url('/l',['20','Multi-River-Cruises']) }}">Multi River Cruises</a>
        </div>
      </li> 
          <li class="nav-item dropdown font-size-13 margin-l-65">
        <a class="nav-link dropdown-toggle chutwt" href="{{ url('/worldwide-cruises') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" >WORLDWIDE CRUISES</a>
        <div class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown" style="font-size: 1.2rem;min-width: 19rem;padding: 0;background-color: #22374e;">
          <a class="dropdown-item" href="{{ url('/l',['25','Mekong-River-Vietnam-and-Cambodia']) }}">Mekong Delta</a>
          <a class="dropdown-item" href="{{ url('/l',['65','Southern-Africa-Cruises' ]) }}">Southern Africa</a>
          <a class="dropdown-item" href="{{ url('/l',['23','Cruise-the-St-Lawrence-in-Canada']) }}">North America (Canada)</a>
          <a class="dropdown-item" href="{{ url('/l',['24','Volga-River-Russia']) }}">Russia</a>
          <a class="dropdown-item" href="{{ url('/l',['15','Coastal-Cruises']) }}">Coastal Cruises</a>
        </div>
          </li>
          <li class="nav-item dropdown font-size-13 margin-l-65">
        <a class="nav-link dropdown-toggle chutwt" href="{{ url('/themed-cruises') }}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">THEMED CRUISES</a>
        <div class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown" style="font-size: 1.2rem;min-width: 19rem;padding: 0;background-color: #22374e;">
          <a class="dropdown-item" href="{{ url('/l',['203','Family-Club']) }}">Family Club</a>
          <a class="dropdown-item" href="{{ url('/l',['201','Hiking-Cruises']) }}">Hiking Cruises</a>
          <a class="dropdown-item" href="{{ url('/l',['201','Biking-Cruises']) }}">Biking Cruises</a>
          <a class="dropdown-item" href="{{ url('/l',['204','gastronomy-and-wine-cruises']) }}">Gastronomy and Wine Cruises</a>
          <a class="dropdown-item" href="{{ url('/l',['21','Christmas-and-New-Year-Cruises']) }}">Christmas and New Year</a>
        </div>
          </li>  
        </ul>
<!--             <form class="form-inline my-2 my-lg-0 bt-nav-tn" action="/cruise">
            <input class="form-control mr-sm-1 rounded-0" type="text" name="search" placeholder="Search" aria-label="Search" autocomplete="off">
      <button style="background: #D5B04B" class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search" style="color: #fff"></i></button>
    </form> -->
    <li class="nav-item fix-li-search">
      <form action="/cruise">
          <div class="input-group">
      <input class="form-control py-2" type="text" name="search" placeholder="Search" aria-label="Search" autocomplete="off">
      <span class="input-group-append">
        <button style="background: #D5B04B" class="btn my-sm-0" type="submit"><i class="fas fa-search" style="color: #fff"></i></button>
      </span>
</div>
</form>
    </li>

      </div>
    </div>
  </div>

