<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ route('product.index') }}">LOGO COMING</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">    
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="{{ route('product.shoppingCart') }}">
          <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Shopping Cart 
          <span class="badge green">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </a>
      </li>
      <li class="dropdown">
        <a href="{{ route('user.signin') }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"></i> User Management <b class="caret"></b></a>
        <ul class="dropdown-menu">
          @if(Auth::check())
            <li>
              <a href="{{ route('user.profile') }}">
                <i class="fa fa-user" aria-hidden="true"></i> User Profile
              </a>
            </li>
            <li role="separator" class="divider"></li>
            <li>
              <a href="{{ route('user.logout') }}">
                <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out
              </a>
            </li>
          @else
            <li>
              <a href="{{ route('user.signin') }}">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Sign In
              </a>
            </li>
            <li>
              <a href="{{ route('user.signup') }}">
                <i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up
              </a>
            </li>
          @endif
          
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>