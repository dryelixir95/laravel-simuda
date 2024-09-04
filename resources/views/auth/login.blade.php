<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIMUDA</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body>

  <div class="container h-100 d-flex justify-content-center align-items-center ">

    <!-- Outer Row -->
    <div class="row justify-content-center w-100">
  
      <div class="col-xl-10 col-lg-12 col-md-9">
  
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center w-100 align-items-center" style="min-height: 100vh;">
  
          <div class="col-lg-6 d-none d-lg-block bg-register-image">
            <div class="p-4 text-center">
  
              <div class="mt-4">
                <img src="{{ asset('img/download__4_-removebg-preview (1) 1.png') }}" alt="logo" style="width: 30%">
                <div>
                  <h4 class="mt-3" style="color: #ffa908;"><b>Selamat Datang</b></h4>
                  <h5><b>Silahkan Login</b></h5> 
                  <p class="mt-3">Jadilah admin yang jujur dan professional</p>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-lg-6">
            <div class="container">
              <div class="card shadow" style="background-color: #134B70; color: white; border-radius: 1rem;">
                <div class="card-body p-5">
                  <div class="text-center">
                    <h1 class="h4 mb-4 mt-4"><b>Masuk</b></h1>
                  </div>
                  <form action="{{ route('login') }}" method="POST" class="user">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input name="username" type="username" class="form-control" id="exampleInputEmail" placeholder="Your Username..." style="color: #134B70;">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Password" style="color: #134B70;">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-user">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#" style="color: white;">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
  
        </div>
  
      </div>
  
    </div>
  
  </div>
  

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
