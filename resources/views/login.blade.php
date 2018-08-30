@extends('layouts.layout')

@section('content')       
       <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <h2>Login to your account</h2>
                            <form method="POST" action="{{ url('/checkLogin') }}">
                                {!! csrf_field() !!}
                                <!-- <input type="text" placeholder="Name" name="username" /> -->
                                <input type="email" placeholder="Email Address" name="email" value = "{{ old('email') }}" />
                                <input type="password" placeholder="Password" name="password" value = "{{ old('password') }}" />
                                <span>
                                    <input type="checkbox" class="checkbox"> 
                                    Keep me signed in
                                </span>
                                <button type="submit" class="btn btn-default">Login</button>
                            </form>
                        </div><!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form"><!--sign up form-->
                            <h2>New User Signup!</h2>
                            <form method="POST" action="{{ url('/register') }}">
                                {!! csrf_field() !!}
                                <input type="text" placeholder="Name" name="username" value = "{{ old('username') }}" />
                                <input type="email" placeholder="Email Address" name="email" value = "{{ old('email') }}" />
                                <input type="password" placeholder="Password" name="password" value = "{{ old('password' )}}" />
                                <button type="submit" class="btn btn-default">Signup</button>
                            </form>
                        </div><!--/sign up form-->
                    </div>
                </div>
            </div>
        </section><!--/form-->
@endsection