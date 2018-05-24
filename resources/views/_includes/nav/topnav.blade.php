<nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel Answers</a>
          </div>
          <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Popular</a></li>
              </ul>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
              <a href="#" class="btn btn-primary" style="margin-top:5px;">Ask A Question</a>
                                           <!-- Authentication Links -->
                                           @guest
                                           <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                           <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                       @else
                                           <li class="nav-item dropdown">
                                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                   {{ Auth::user()->name }} <span class="caret"></span>
                                               </a>
               
                                               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                                      onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                       {{ __('Logout') }}
                                                   </a>
               
                                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                       @csrf
                                                   </form>
                                               </div>
                                           </li>
            </ul>
      
                               @endguest
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>