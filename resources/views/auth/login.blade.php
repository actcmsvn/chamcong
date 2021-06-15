<x-guest-layout title="{{ __('auth.Login') }}">
    <main class="login-body" data-vide-bg="{{ asset('assets/img/login-bg.mp4')}}">
        @if ($errors->any())
        <div class="mb-4">
            <div class="font-medium text-red-600">{{ __('message.Whoops! Something went wrong.') }}</div>

            <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('status'))
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <form class="form-default" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="login-form">
                <div class="logo-login">
                    <a href="{{route('home')}}"><img src="{{ asset('assets/img/logo/loder.png') }}" alt="" ></a>
                </div>
                <h2>{{ __('auth.Login') }}</h2>
                <div class="form-input">
                    <label for="name">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="form-input">
                    <label for="name">{{ __('auth.Password') }}</label>
                    <input type="password" name="password" placeholder="{{ __('auth.Password') }}">
                </div>
                <div class="form-input">
                    <label for="remember">{{ __('auth.Remember me') }}</label>
                    <input type="checkbox" name="remember">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="{{ __('auth.Login') }}">
                </div>
                <a href="{{ route('password.request') }}" class="forget">{{ __('auth.Forgot your password?') }}</a>
                <a href="{{ route('register') }}" class="registration">{{ __('auth.Register') }}</a>
            </div>
        </form>
    </main>
</x-guest-layout>