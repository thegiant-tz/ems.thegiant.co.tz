@extends('layouts.v1.frontend')

@section('content')
    <!-- [ signin-img-tabs ] start -->
    <div class="blur-bg-images"
        style="background: url({{ asset('images/bm2.jpg') }}); background-repeat: no-repeat; background-size: cover;"></div>
    <div class="auth-wrapper">
        <div class="auth-content container">
            <div class="card">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="card-body">

                            <div class="text-center">
                                <img src="{{ asset('images/logo.png') }}" height="100px" alt="" srcset="">
                            </div>
                            <h3 class="mb-3 text-center">FINMASTER</h3>
                            {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has
                                been the industrys.</p> --}}
                            <form method="POST" action="{{ route('login') }}" class="toggle-block">
                                @csrf
                                <ol class="position-relative carousel-indicators justify-content-start">
                                    <li class="active" style="background: var(--green)"></li>
                                </ol>
                                <div class="form-group mb-2">
                                    <label class="form-label">Enter Username</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Enter Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Enter Password">
                                    @error('status')
                                        <div class="alert alert-danger alert-dismissible mt-3" role="alert">
                                            <p class="mb-0 font-size-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group text-start">
                                    <div class="checkbox checkbox-primary d-inline">
                                        <input type="checkbox" name="remember" id="checkbox-fill-a1" checked="">
                                        <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary mb-4 btf">Login</button>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block" style="text-align: center">
                        <img src="{{ asset('images/logo.png') }}" style="height: 250px" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ signin-img-tabs ] end -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $('.toggle-btn').on('click', function() {
            $('.toggle-block').toggle();
        })
    </script>


    {{-- <div class="footer-fab">
        <div class="b-bg">
            <i class="fas fa-question"></i>
        </div>
        <div class="fab-hover">
            <ul class="list-unstyled">
                <li><a href="https://html.phoenixcoded.net/dasho/bootstrap/doc/index-bc-package.html" target="_blank"
                        data-text="UI Kit" class="btn btn-icon btn-rounded btn-info m-0"><i
                            class="feather icon-layers"></i></a></li>
                <li><a href="https://html.phoenixcoded.net/dasho/bootstrap/doc/index.html" target="_blank"
                        data-text="Document" class="btn btn-icon btn-rounded btn-primary m-0"><i
                            class="feather icon feather icon-book"></i></a></li>
            </ul>
        </div>
    </div> --}}

@stop
