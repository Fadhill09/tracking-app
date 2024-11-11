<x-guest-layout>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <div class="mb-3">
                                <div class="d-flex justify-content-center py-4">
                                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                                        <img src="{{ asset('logo.png') }}" alt="">
                                    </a>
                                </div><!-- End Logo -->

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your email & password to login</p>
                                    </div>


                                    <form action="{{ route('login') }}" class="row g-3 needs-validation" method="POST" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" id="email" name="email" value="{{ old('email') }}"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Email address</label>
                                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPassword" id="password" name="password" value="{{ old('password') }}"
                                                    placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                                <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <div class="d-flex justify-content-between ">
                                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                                    @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}"
                                                            class="text-decoration-none">
                                                            Forgot your password?
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Don't have account? <a class="text-decoration-none"
                                                    href="{{ route('register') }}">Create an account</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <div class="fs-6 text-secondary ">
                                    Designed by <a class="text-decoration-none" href="https://bootstrapmade.com/">Alif
                                        ghea yanuar</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
</x-guest-layout>
