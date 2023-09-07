@extends('layouts.adminreg_layout.generic')

@section('content')
<div class="tab-content">
    <div id="login" class="tab-pane active">
        <form action="/studentsessions" method = "POST" class="form-signin">
            @csrf
            <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                Enter your username and password
            </p>
            <input type="text" name = "email" placeholder="Username" class="form-control" value="{{old('email')}}"  required/>
            @error('email')<p style="color:red;">{{ $message}} </p>@enderror
            <input type="password" name="password" placeholder="Password" class="form-control" required/>
            <input type="submit" name="btn" class="btn text-muted text-center btn-danger" id="btn" value="Sign in">

        </form>
    </div>
</div>

@endsection
