<x-guest-layout title="{{ __('auth.Register') }}">
    <main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
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
        <form class="form-default" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="login-form">
                <div class="logo-login">
                    <a href="{{route('home')}}""><img src="{{ asset('assets/img/logo/loder.png') }}" alt=""></a>
                </div>
                <h2>{{ __('auth.Create account') }}</h2>
                <div class="form-input">
                    <label for="name">{{ __('admin/users.Name') }}</label>
                    <input type="text" name="name" placeholder="Full name">
                </div>
                <div class="form-input">
                    <label for="name">Email Address</label>
                    <input type="email" name="email" placeholder="Email Address">
                </div>
                <div class="form-input">
                    <label for="name">{{ __('auth.Password') }}</label>
                    <input type="password" name="password" placeholder="{{ __('auth.Password') }}">
                </div>
                <div class="form-input">
                    <label for="name">{{ __('auth.Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" placeholder="{{ __('auth.Confirm Password') }}">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="{{ __('auth.Register') }}">
                </div>
                <a href="{{ route('login') }}" class="registration">{{ __('auth.Already have an account? Login') }}</a>
            </div>
        </form>
    </main>
</x-guest-layout>