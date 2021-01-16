@extends('layouts.auth')

@section('title')
MyStore | Login
@endsection

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            My Store
        </p>
    </header>
    <div class="card-content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="field">
                <label class="label">E-Mail</label>
                <div class="control">
                    <input class="input @error('email') is-danger @enderror"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            autofocus>
                </div>
            </div>
            @error('email')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input class="input @error('password') is-danger @enderror"
                            type="password"
                            name="password"
                            placeholder="********"
                            autocomplete="current-password">
                </div>
            </div>
            @error('password')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
            <button class="button is-success is-fullwidth has-text-weight-bold mt-5" type="submit">Login</button>
        </form>
    </div>
</div>
@endsection
