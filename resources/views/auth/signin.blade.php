<x-guest-layout>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <x-guest.sidenav-guest />
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent text-center">
                                    <h4 class="font-weight-black text-dark display-6">Halo ..</h4>
                                </div>
                                <div class="text-center">
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    @error('message')
                                        <div class="alert alert-danger text-sm" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="card-body">
                                    <form role="form" class="text-start" method="POST" action="sign-in">
                                        @csrf
                                        <label>Email Address</label>
                                        <div class="mb-3">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Enter your email address"
                                                value="{{ old('email') ? old('email') : 'admin@corporateui.com' }}"
                                                aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-1">
                                            <input type="password" id="password" name="password"
                                                value="{{ old('password') ? old('password') : 'secret' }}"
                                                class="form-control" placeholder="Enter password" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        {{-- <div class="d-flex align-items-center">
                                            <div class="form-check form-check-info text-left mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="font-weight-normal text-dark mb-0" for="flexCheckDefault">
                                                    Ingat selama 14 hari
                                                </label>
                                            </div>
                                            <a href="{{ route('password.request') }}"
                                                class="text-xs font-weight-bold ms-auto">Lupa
                                                password</a>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">Masuk</button>
                                            {{-- <button type="button" class="btn btn-white btn-icon w-100 mb-3">
                                                <span class="btn-inner--icon me-1">
                                                    <img class="w-5" src="../assets/img/logos/google-logo.svg"
                                                        alt="google-logo" />
                                                </span>
                                                <span class="btn-inner--text">Masuk dengan Akun Google</span>
                                            </button> --}}
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-xs mx-auto">
                                        Belum Punya Akun ??
                                        <a href="{{ route('sign-up') }}" class="text-dark font-weight-bold"> KLIK INI</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-guest-layout>
