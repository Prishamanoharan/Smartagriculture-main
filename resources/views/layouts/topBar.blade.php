<div class="d-flex justify-content-between p-2  position-absolute col-12 " style="z-index:999;">
    <div class="logo-text text-white">
       <img src="/images/logo.png" width="150" alt="">
    </div>
    @if (Route::has('login'))
                <div class="top-right links d-flex align-items-center" style="gap:10px;">
                    @auth
                        <a class="btn btn-sm btn-light fw-bold" type="button" href="{{ url('/home') }}" >Home</a>
                    @else
                         <a class="btn btn-sm btn-light fw-bold" type="button" href="{{ url('/homes') }}" >Home</a>
                        <a class="btn btn-sm  btn-light fw-bold" type="button" href="{{ url('/search') }}" >Search</a>
                        <a class="btn btn-sm  btn-light fw-bold" type="button" href="{{ route('login') }}" >Login</a>
                        <a class="btn btn-sm  btn-light fw-bold" type="button" href="{{ route('register') }}" >Register</a>
                    @endauth
                </div>
            @endif
</div>
