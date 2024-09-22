<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="../forms/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../forms/css/style.css">
</head>
<body>

<x-guest-layout>
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Reset Password</h2>
                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.update') }}" class="register-form" id="register-form">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="Your Email" />
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password" />
                        </div>

                        <div class="form-group form-button">
                            <x-button class="form-submit">
                                {{ __('Reset Password') }}
                            </x-button>
                        </div>
                    </form>
                </div>

                <div class="signup-image">
                    <figure><img src="../forms/images/signup-image.jpg" alt="sign up image"></figure>
                    <a href="{{ route('login') }}" class="signup-image-link">I am already a member</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

<script src="../forms/vendor/jquery/jquery.min.js"></script>
<script src="../forms/js/main.js"></script>

</body>
</html>