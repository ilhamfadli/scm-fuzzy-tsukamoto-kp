<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("fragments/head", ["title" => "Dashboard - Point Of Sale (POS)"]); ?>
</head>
<body class="">
    <?php $this->load->view("fragments/cashier_sidebar"); ?>
  <div class="main-content">
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard - Point Of Sale (POS)</a>
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img src="<?= base_url("/assets/img/unsri-logo.png") ?>" alt="Logo Unsri">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="#!" class="dropdown-item">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <div class="container-fluid mt--8">
      <div class="row">
        <div class="col-xl-7 mb-3">
          <div class="card shadow" style="height: 500px;">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                  <h2 class="mb-0">Total orders</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="img-placeholder text-center">
                <img style="max-width: 50%; opacity: 0.85" src="<?= base_url("assets/img/tag-card.svg") ?>" alt="Tag Card">
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5">
          <div class="card shadow" style="height: 500px;">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                  <h2 class="mb-0">Total orders</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="product-list" style="height: 300px; background-color: #f7f7f7">

              </div>
              <hr class="mx-0 my-3">
              <div class="total-price" style="display: flex; justify-content: space-between">
                <p class="label" style="font-weight: 800;">Total</p>
                <p class="price" style="font-weight: 800;">Rp. 90.000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pb-0" style="background-color: #373a46;">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2022 <a href="https://www.linkedin.com/in/ilhamfadli/" class="font-weight-bold ml-1" target="_blank">Ilham Fadli</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>
</html>