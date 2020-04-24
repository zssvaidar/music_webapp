

 <div class="navigation shadow">
    <div class="flex ">
      <div class="navigation-margin">
        <div class="toolbar layout-gt-sm-row d-flex ">
          <div class="inline logo">
            <a href="/">
              <img src="{{asset('img/mini.png')}}">
            </a>
          </div>

          <span class="navigation-main-menu flex-gt-sm  ">
              <a class="btn menu-btn" href="#">About</a>

              <a class="btn menu-btn" href="#">Tracks</a>

              <a class="btn menu-btn" href="#">Videos</a>

              <a class="btn menu-btn" href="#">Contact</a>
          </span>

          <div class="inline card-menu primary-border no-border">
              <i class="material-icons md-dark"></i>
            $0.00
          </div>

        
            @guest

                <a data-toggle="modal" data-target="#loginModal">
                  <div class="inline card-menu primary primary-border">
                      LOG IN 
                  </div>
                </a>
              
            @else

              <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <div class="inline card-menu primary primary-border">
                    LOG OUT
                  </div>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

          @endguest
      
        </div>
      </div>
    </div>
  </div>