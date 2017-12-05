<div id="app">
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('OPEN ADVERTISING', 'OPEN ADVERTISING') }}
                    </a>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('Home', 'Home') }}
                    </a>

                    <a class="navbar-brand" href="{{ url('/sitios') }}">
                        {{ config('Administrar', 'Administrar') }}
                    </a>
                     <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/imagenes') }}">
                        {{ config('Administrar Imagenes', 'Administrar Imagenes') }}
                    </a>
</div>
</div>

</nav>
</div>