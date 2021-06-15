<x-guest-layout  title="Two Factor challenge">
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

                        <div x-data="{ recovery: false }">
                            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                                {{ __('auth.Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                            </div>

                            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                                {{ __('auth.Please confirm access to your account by entering one of your emergency recovery codes.') }}
                            </div>

                            <x-validation-errors class="mb-4" />

                            <form method="POST" action="/two-factor-challenge">
                                @csrf

                                <div class="mt-4" x-show="! recovery">
                                    <x-label value="{{ __('auth.Code?') }}" />
                                    <x-input class="block mt-1 w-full" type="text" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                                </div>

                                <div class="mt-4" x-show="recovery">
                                    <x-label value="Recovery Code" />
                                    <x-input class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                                    x-show="! recovery"
                                                    x-on:click="
                                                        recovery = true;
                                                        $nextTick(() => { $refs.recovery_code.focus() })
                                                    ">
                                        {{ __('auth.Use a recovery code') }}
                                    </button>

                                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                                    x-show="recovery"
                                                    x-on:click="
                                                        recovery = false;
                                                        $nextTick(() => { $refs.code.focus() })
                                                    ">
                                        {{ __('auth.Use an authentication code') }}
                                    </button>

                                    <x-button class="ml-4">
                                        {{ __('auth.Login') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
