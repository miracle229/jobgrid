<header class="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="index-2.html">
                        <img class="logo1" src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="active" href="{{ route('home') }}">Blog</a></li>
                                <li class="nav-item"><a href="{{ route('admin_home') }}">Admin</a></li>
                            </ul>
                        </div>
                        
                        <div class="button">
                            <a href="javacript:" data-toggle="modal" data-target="#login" class="login"><i class="lni lni-lock-alt"></i> Login</a>
                            <a href="javacript:" data-toggle="modal" data-target="#signup" class="btn">Sign Up</a>
                        </div>
                    </nav>
                
                </div>
            </div>
        
        </div>
    
    </div>
    
</header>