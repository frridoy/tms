{{-- @extends('frontend.master')


@section('content')
    <form action="{{ route('registration.store') }}" method="post">
        @csrf
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white mt-5" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="pb-5">

                                    <h2 class="fw-bold mb-2 text-white text-uppercase">Registration</h2>

                                    <div class="form-outline text-left form-white mb-4">
                                        <label class="form-label" for="typeEmailX">Name</label>
                                        <input type="name" id="typeEmailX" name="name"
                                            class="form-control form-control-lg" />
                                    </div>
                                    <div class="form-outline text-left form-white mb-4">
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <input type="email" id="typeEmailX" name="email"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline text-left form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" id="typePasswordX" name="password"
                                            class="form-control form-control-lg" />
                                    </div>


                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>
                                </div>


                                <div>
                                    <p class="mb-0">If you already register then<a href="{{ route('tourist.do.login') }}"
                                            class="text-white-50 fw-bold"> <button
                                                class="btn btn-primary px-3 ">Login</a></button>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection --}}


@extends('frontend.master')


@section('content')
<br>
<form action="{{route('registration.store')}}" method="post">
    @csrf

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <style>
     body {
       background-color: #f8f9fa;
     }

     .login-panel {
       max-width: 400px;
       margin: auto;
       margin-top: 100px;
       background-color: #ffffff;
       padding: 20px;
       border-radius: 8px;
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     }

     .login-panel h2 {
       text-align: center;
       color: #343a40;
     }

     .login-panel form {
       margin-top: 20px;
     }

     .login-panel .form-group {
       margin-bottom: 20px;
     }

     .login-panel label {
       color: #495057;
     }

     .login-panel input[type="text"],
     .login-panel input[type="password"] {
       width: 100%;
       padding: 10px;
       border: 1px solid #ced4da;
       border-radius: 4px;
       box-sizing: border-box;
     }

     .login-panel button {
       background-color: #007bff;
       color: #fff;
       padding: 10px 20px;
       border: none;
       border-radius: 4px;
       cursor: pointer;
     }

     .login-panel button:hover {
       background-color: #0056b3;
     }
   </style>
 </head>
 <body>

 <div class="container">
   <div class="login-panel">
     <h2> Registration </h2>
     <form action="{{route('admin.login.post') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="name" required class="form-control" id="email" name="name" placeholder="Enter name">
          </div>
       <div class="form-group">
         <label for="email">Email Address:</label>
         <input type="text" required class="form-control" id="email" name="email" placeholder="Enter email">
       </div>
       <div class="form-group">
         <label for="password">Password:</label>
         <input type="password" required class="form-control" id="password" name="password" placeholder="Enter password">
       </div>
       <button type="submit" class="btn btn-primary btn-block">Submit</button>
     </form>
   </div>
 </div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 </body>
 </html>
</form>
<br>
 @endsection
