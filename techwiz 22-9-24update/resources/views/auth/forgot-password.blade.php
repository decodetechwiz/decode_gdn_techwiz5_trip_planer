<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forms/css/forgot_password.css">
    
       <!-- Include Bootstrap and Google Fonts -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<!-- Main css -->

</head>
<body id="body"
>
<x-guest-layout>
  <x-authentication-card>
      <x-slot name="logo">
      </x-slot>
      <!-- Add a Bootstrap card to match the frontend UI -->

      <div class="email-container">
          <h1>Hi [Product Name] </h1>
          <div class="mb-4 text-sm text-gray-600">
          You recently requested to reset your password for your [Product Name] account. Use the button below to reset it. This password reset is only valid for the next 24 hours.
          </div>

          @if (session('status'))
              <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
              </div>
          @endif

          <x-validation-errors class="mb-4" />

          <!-- Password reset form -->
          <form method="POST" action="{{ route('password.email') }}">
              @csrf

              <!-- Email input field -->
              <div class="block">
                  <x-label for="email" value="{{ __('Email') }}" />
                  <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
              </div>

              <!-- Submit button -->
              <div class="flex items-center justify-end mt-4">
                  <x-button class="btn-reset">
                      {{ __('Email Password Reset Link') }}
                  </x-button>
              </div>
          </form>

          <!-- Footer message for email reset -->
          <p class="footer-text mt-3">For security, this request was received from your current device. If you did not request a password reset, please ignore this email or <a href="#">contact support</a> if you have questions.</p>
          <p>Thanks,<br>The [Product Name] team</p>
      </div>

      <head>
        <!-- Include Bootstrap and Google Fonts -->
       
    
        <!-- Your custom styles -->
       
      </x-authentication-card>
    </x-guest-layout> 


       
</body>
</html>