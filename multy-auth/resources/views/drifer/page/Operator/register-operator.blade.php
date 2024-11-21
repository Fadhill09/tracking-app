
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
                                        <h5 class="card-title text-center pb-0 fs-4">Register Your Account</h5>
                                        <p class="text-center small">Enter your data to Register</p>
                                    </div>


                                    <form action="{{ route('register') }}" class="row g-3 needs-validation" method="POST" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"  id="name" name="name" value="{{ old('name') }}" required autocomplete="name"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Name</label>
                                                <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput"  id="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Email address</label>
                                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPassword" id="password" name="password" required autocomplete="new-password"
                                                    placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                                <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPassword" id="password_confirmation"
                                                 name="password_confirmation" required autocomplete="new-password"
                                                    placeholder="Password">
                                                <label for="floatingPassword">Confirm Password</label>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Register</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0"><a class="text-decoration-none"
                                                    href="{{ route('login') }}">Already register?</a></p>
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

