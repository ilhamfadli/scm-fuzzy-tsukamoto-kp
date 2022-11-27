<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("fragments/head", ["title" => "Sign In"]); ?>
</head>
<body class="bg-default">
  <div class="main-content">
    <div class="container mt-5 pb-5">
      <div class="row justify-content-center mb-3">
        <img style="max-width: 250px;" src="/assets/img/unsri-logo.png" alt="Logo Unsri">
      </div>
      <h2 class="text-center text-white">Warehouse & Store Application</h2>
      <p class="text-center text-white">Supply Chain Management System With Fuzzy Tsukamoto</p>
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary btn-block mt-4"><i class="fa-solid fa-right-to-bracket"></i>Sign In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="copyright text-center text-muted">
          © 2022 <a href="https://www.linkedin.com/in/ilhamfadli/" class="font-weight-bold ml-1" target="_blank">Ilham Fadli</a>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>