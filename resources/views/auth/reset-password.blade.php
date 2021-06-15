<x-guest-layout title="{{ __('auth.Reset Password') }}">
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="flex-1 items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <img class="w-32 h-32 mx-auto" src="{{ asset('images/icone.png') }}">
                        <h1 class="mb-4 text-center text-xl font-semibold text-gray-700 dark:text-gray-200">
                            {{ __('auth.Reset Password') }}
                        </h1>
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

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="block">
                                <x-label value="Email" />
                                <x-input class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label value="{{ __('auth.Password') }}" />
                                <x-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-label value="{{ __('auth.Confirm Password') }}" />
                                <x-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button>
                                    {{ __('Reset Password') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>