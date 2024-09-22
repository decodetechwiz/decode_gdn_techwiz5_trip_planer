<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Email Verification</title>
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #212529;
            color: white;
        }
    </style>
</head>

<body>
    <x-guest-layout>
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="container bg-dark text-white p-5 rounded" style="max-width: 600px;">
                <x-slot name="logo">
                    <x-authentication-card-logo />
                </x-slot>

                <h2 class="mb-4 text-center">Verify Your Account</h2>
                <div class="mb-4 text-sm">
                    {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                    </div>
                @endif

                <div class="text-center mb-4">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-success btn-lg text-white">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </form>
                </div>


                <div class="mt-4 d-flex justify-content-between">
                    <a href="{{ route('profile.show') }}" class="text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Edit Profile') }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger text-sm text-gray-600 hover:text-gray-900 ms-2">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>

                <p class="mt-4">If you have any questions, just reply to this email — we're always happy to help out.</p>
                <p>Cheers,<br>BBB Team</p>
            </div>
        </div>
    </x-guest-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>