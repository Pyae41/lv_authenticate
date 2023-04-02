<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">{{ __('langs.home') }}</a></li>
                <li><a href="#" class="nav-link px-2 text-white">{{ __('langs.features') }}</a></li>
                <li><a href="#" class="nav-link px-2 text-white">{{ __('langs.pricing') }}</a></li>
                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 text-white">{{ __('langs.about') }}</a></li>
            </ul>

            @auth
                <p class="m-2">{{ auth()->user()->name }}</p>
                <div class="text-end">
                    <form action="{{ route('logout') }}" method="post" class="me-2">
                        @csrf
                        <button class="btn btn-outline-light me-2">{{ __('langs.logout') }}</button>
                    </form>
                </div>
                <div>
                    <select name="" id="lan-option" class="form-control text-white">
                        <option value="en" @if(Session::get('locale') == 'en')selected @endif>EN</option>
                        <option value="mm" @if(Session::get('locale') == 'mm')selected @endif>MM</option>
                    </select>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.show') }}" class="btn btn-outline-light me-2">{{ __('langs.login') }}</a>
                    <a href="{{ route('register.show') }}" class="btn btn-outline-light me-2">{{ __('langs.sign-up') }}</a>
                </div>
                <div>
                    <select name="" id="lan-option" class="form-control text-white">
                        {{ Session::get('locale')}}
                        <option value="en" @if(Session::get('locale') == 'en')selected @endif>EN</option>
                        <option value="mm" @if(Session::get('locale') == 'mm')selected @endif>MM</option>
                    </select>
                </div>
            @endguest

        </div>
    </div>
</header>
