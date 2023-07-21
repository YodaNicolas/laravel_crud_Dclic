<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/ajout.css')}}">

    <title>Document</title>



</head>

<body>

    <x-guest-layout>
        <div>

            <x-auth-card>
                <!-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            </x-slot> -->

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form class="corpsConn" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="form-control block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                        @endif

                        <x-button class="ml-3 btn btn-primary">
                            {{ __('Se connecter') }}
                        </x-button>

                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Creer un compte</a>
                    </div>
                </form>





                <!-- <div class="login-box">
                    <h2>Login</h2>
                    <form>
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>Username</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="" required="">
                            <label>Password</label>
                        </div>

                         
                        <a href="#"> <x-button class="ml-3 btn btn-primary">
                            {{ __('Se connecter') }}
                        </x-button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Submit
                        </a>
                    </form>
                </div> -->

            </x-auth-card>
        </div>
    </x-guest-layout>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>