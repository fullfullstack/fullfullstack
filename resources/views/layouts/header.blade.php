<div class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="/" style="padding-top: 0;padding-bottom: 0;">
          <img src="/assets/fullfullstacklogo.png" alt="Full Full Stack Logo" height="52" style="max-height: 52px" >
        </a>

        <button class="button navbar-burger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

      <div class="navbar-menu">
        <div class="navbar-start">
          <!-- navbar items -->
        </div>

        <div class="navbar-end">
              <!-- navbar items -->

              {{-- @guest
                  <a class="navbar-item" href="{{ route('login') }}">Login</a>
                  <a class="navbar-item" href="{{ route('register') }}">Register</a>
              @else
                <div class="navbar-item has-dropdown">
                  <a class="navbar-link">
                    {{ Auth::user()->name }}
                  </a>

                  <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>

                  </div>
                </div>

              @endguest --}}
        </div>
      </div>

    </nav>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
</script>