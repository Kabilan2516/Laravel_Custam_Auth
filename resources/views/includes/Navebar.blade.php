<Header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">GoldenWay Games</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavBar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="NavBar">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item "> <a class="nav-link " href="home">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Help
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Facebook</a></li>
                          <li><a class="dropdown-item" href="#">Telegram</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="https://github.com/Kabilan2516">Github</a></li>
                        </ul>
                      </li>
                      @guest
                      <li class="nav-item"> <a class="nav-link" href="login">Login</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="register">Register</a> </li>
                      @else
                       <!-- Show this button after login -->
                       <li class="nav-item ml-auto"> <!-- Add the "d-none" class to hide the element initially -->
                        <a href="logout" class="nav-link btn btn-warning ">Logout</a>
                       </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</Header>
