@extends('frontend.master')


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
                                    <p class="text-white-50 mb-5">Please Enter Your Name, Email and Password!</p>
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

                                    {{-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> --}}

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>
                                </div>


                                <div>
                                    <p class="mb-0">If you already register then<a href="{{ route('tourist.do.login') }}"
                                            class="text-white-50 fw-bold"> <button
                                                class="btn btn-primary px-3">Login</a></button>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
