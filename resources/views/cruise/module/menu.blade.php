   <style type="text/css">
    #winner{
          position: absolute;
          display: none;
    }
  </style>
  <?php 
  $menu_view = isset($menu_view)?$menu_view:'home';
   ?>
 <div class="navbar navbar-expand-lg navbar-dark py-2 sty-tn-nav px-4 navbar-light hide-mobile-menu " style="background: #F3F1F5;z-index: 123;">
    <div class="container-fluid">

      <button class="navbar-toggler fix-out-line-fc" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid rgba(213, 176, 75, 1);">
        <i class="fas fa-bars mauvang"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item font-size-13 margin-l-65 {{ ($menu_view == 'home')?'active':'' }}">
        <a class="nav-link chutwtt" href="{{ url('/') }}">
         HOME
        </a>
      </li> 

      <li class="nav-item dropdown font-size-13 margin-l-65 {{ ($menu_view == 'destination')?'active':'' }}">
        <a class="nav-link dropdown-toggle chutwtt" href="{{ url('/destination') }}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
         DESTINATIONS
        </a>
        <div class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown" style="font-size: 1.2rem;min-width: 19rem;padding: 0;background-color: rgb(6, 175, 143);">
            <a class="dropdown-item" href="{{ url('/destination',['Vietnam']) }}">Vietnam</a>
            <a class="dropdown-item" href="{{ url('/destination',['Laos']) }}">Laos</a>
            <a class="dropdown-item" href="{{ url('/destination',['Cambodia']) }}">Cambodia</a>
            <a class="dropdown-item" href="{{ url('/destination',['Japan']) }}">Japan</a>
            <a class="dropdown-item" href="{{ url('/destination',['China']) }}">China</a>
            <a class="dropdown-item" href="{{ url('/destination',['Myanmar']) }}">Myanmar</a>
            <a class="dropdown-item" href="{{ url('/destination',['Malaysia']) }}">Malaysia</a>
            <a class="dropdown-item" href="{{ url('/destination',['Sri Lanka']) }}">Sri Lanka</a>
            <a class="dropdown-item" href="{{ url('/destination',['Mongolia']) }}">Mongolia</a>
        </div>
      </li> 


      <li class="nav-item dropdown font-size-13 margin-l-65 {{ ($menu_view == 'triptype')?'active':'' }}">
        <a class="nav-link dropdown-toggle chutwtt" href="{{ url('/trip-types') }}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
         TRIP TYPES
        </a>
        <div class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown" style="font-size: 1.2rem;min-width: 19rem;padding: 0;background-color: rgb(6, 175, 143);">
          <a class="dropdown-item" href="{{ url('/trip-types',['Explorer-Trips']) }}">Explorer Trips</a>
          <a class="dropdown-item" href="{{ url('/trip-types',['Adventure-Trips']) }}">Adventure Trips</a>
          <a class="dropdown-item" href="{{ url('/trip-types',['Field-trek-Trips']) }}">Field-trek Trips</a>
        </div>
      </li> 
     
   <li class="nav-item dropdown font-size-13 margin-l-65 {{ ($menu_view == 'projects')?'active':'' }}">
        <a class="nav-link dropdown-toggle chutwtt" href="{{ url('/projects') }}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
         PROJECTS
        </a>
        <div class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown" style="font-size: 1.2rem;min-width: 19rem;padding: 0;background-color: rgb(6, 175, 143);">
          <a class="dropdown-item" href="{{ url('/projects',['Community-Project']) }}">Community Project</a>
          <a class="dropdown-item" href="{{ url('/projects',['Volunteering-Activities']) }}">Volunteering Activity</a>
          <a class="dropdown-item" href="{{ url('/projects',['Field-Study-Project']) }}">Field Study Project</a>
        </div>
      </li> 
       


        <li class="nav-item dropdown font-size-13 margin-l-65 {{ ($menu_view == 'teachers')?'active':'' }}">
          <a class="nav-link dropdown-toggle chutwtt" href="{{ url('/teachers') }}" >TEACHERS</a>
                    <ul class="dropdown-menu dropdown-menu1 multi-level"  style="font-size: 1.2rem;min-width: 22rem;padding: 0;background-color: rgb(6, 175, 143);">
                        <li class=""><a class="dropdown-item" href="{{ url('/teachers',['whats-involved']) }}">What's Involved?</a></li>
                        
                        <li class="dropdown-submenu">
                          <a class="dropdown-item" href="{{ url('/teachers',['become-an-escort-teacher']) }}">Become an Escort Teacher</a>
                            <ul class="dropdown-menu" style="font-size: 1.2rem;padding: 0;background-color: rgb(6, 175, 143);">
                              <li class=""><a class="dropdown-item" href="{{ url('/teachers') }}">Our Consents Management</a></li>
                              <li class=""><a class="dropdown-item" href="{{ url('/teachers') }}">Our Risks Management</a></li>
                              <li class=""><a class="dropdown-item" href="{{ url('/',['new-teacher-registration']) }}">Registration To Be a Lead Teacher</a></li>
                            </ul>
                        </li>
                        <li class=""><a class="dropdown-item" href="{{ url('/teachers',['faq']) }}">FAQ</a></li>
                    </ul>
         </li>
<!--
<li class="nav-item dropdown font-size-13 margin-l-65 {{ ($menu_view == 'teachers')?'active':'' }}">
          <a class="nav-link dropdown-toggle chutwtt" href="{{ url('/teachers') }}" >TEACHERS</a>
                    <ul class="dropdown-menu dropdown-menu1 multi-level"  style="font-size: 1.2rem;min-width: 22rem;padding: 0;background-color: rgb(6, 175, 143);">
                        <li class=""><a class="dropdown-item" href="{{ url('/teachers',['whats-involved']) }}">What's Involved?</a></li>
                        
                        <li class="dropdown-submenu">
                          <a class="dropdown-item" href="{{ url('/teachers',['teacher-registration']) }}">Become a Lead Teacher</a>
                            <ul class="dropdown-menu" style="font-size: 1.2rem;padding: 0;background-color: rgb(6, 175, 143);">
                              <li class=""><a class="dropdown-item" href="{{ url('/teachers',['Our-Consents-Management']) }}">Our Consents Management</a></li>
                              <li class=""><a class="dropdown-item" href="{{ url('/teachers',['Our-Risks-Management']) }}">Our Risks Management</a></li>
                              <li class=""><a class="dropdown-item" href="{{ url('/teachers',['new-teacher-registration']) }}">Registration To Be a Lead Teacher</a></li>
                            </ul>
                        </li>
                        <li class=""><a class="dropdown-item" href="{{ url('/teachers',['about-us']) }}">FAQ</a></li>
                    </ul>
         </li> -->


      <li class="nav-item dropdown font-size-13 margin-l-65 {{ ($menu_view == 'safety')?'active':'' }}">
        <a class="nav-link dropdown-toggle chutwtt" href="{{ url('/safety') }}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false"> SAFETY </a>
        <ul class="dropdown-menu dropdown-menu1 multi-level"  style="font-size: 1.2rem;min-width: 22rem;padding: 0;background-color: rgb(6, 175, 143);">
            <li class=""><a class="dropdown-item" href="{{ url('/safety',['preparation-planning-for-safety']) }}">Preparation & Planning for Safety</a></li>
            <li class=""><a class="dropdown-item" href="{{ url('/safety',['responsibilities-duty-care']) }}">Responsibilities & Duty Care</a></li>
            <li class=""><a class="dropdown-item" href="{{ url('/safety',['during-the-tour']) }}">During The Tour</a></li>
        </ul>
      </li>
        
        <li class="nav-item font-size-13 margin-l-65 {{ ($menu_view == 'aboutus')?'active':'' }} ">
        <a class="nav-link chutwtt" href="{{ url('/about-us') }}">
         ABOUT US
        </a>
      </li> 
        </ul>
    <li class="nav-item fix-li-search">
      <form action="#">
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

