<nav
    class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white"
    id="sidenav-main">
    <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand pt-0" href="<?= base_url() ?>">
            <img
                style="max-width: 250px;"
                src="<?= base_url("/assets/img/unsri-logo.png") ?>"
                alt="Logo Unsri">
        </a>
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a
                    class="nav-link nav-link-icon"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div
                    class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
                    aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img src="<?= base_url("/assets/img/unsri-logo.png") ?>" alt="Logo Unsri">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="<?= base_url()?>">
                            <img
                                style="max-width: 250px;"
                                src="<?= base_url("/assets/img/unsri-logo.png") ?>"
                                alt="Logo Unsri">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button
                            type="button"
                            class="navbar-toggler"
                            data-toggle="collapse"
                            data-target="#sidenav-collapse-main"
                            aria-controls="sidenav-main"
                            aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item  active ">
                    <a class="nav-link  active " href="./index.html">
                        <i class="fa-solid fa-cash-register text-primary"></i>
                        Point Of Sale (POS)
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./examples/icons.html">
                        <i class="fa-solid fa-box-archive text-primary"></i>
                        Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./examples/maps.html">
                        <i class="fa-solid fa-cart-shopping text-primary"></i>
                        Purchase History
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>