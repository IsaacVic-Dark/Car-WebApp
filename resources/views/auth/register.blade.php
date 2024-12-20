<x-guest-layout title="SignUp" bodyClass="page-signup">
    <h1 class="auth-page-title">Signup</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="First Name" />
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Your Password" />
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" />
        </div>
        <hr />
        <button class="btn btn-primary btn-login w-full">Register</button>

        <x-slot:footerLink>
            Already have an account? -
            <a href="{{ route('login') }}"> Click here to login </a>
        </x-slot:footerLink>
    </form>
</x-guest-layout>
