<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h3>Welcome, {{ Auth::user()->name }}</h3>
                        <p>This is your dashboard. You can customize it to display relevant information and features for your users.</p>
                        <p>Example: Display user-specific data, notifications, recent activities, etc.</p>
                    </div>
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
@endsection
