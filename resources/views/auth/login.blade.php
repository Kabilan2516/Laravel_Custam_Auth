@include('includes.Header')
@include('includes.Navebar')
<div class="container min-vh-100 d-flex justify-content-center align-items-center">

    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
    @if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>')) !!}
    </ul>
    @endif
    <form action="authenticate" method="post">
        <div class="from-group">
        <label for="">Email: <input type="text" name="email" class="form-control"></label><br>
        <label for="">Password <input type="password" name="password" class="form-control"></label><br><br>
        <a href="{{route('forgot.password.get')}}">Forgot Password?</a><br>
        <input type="submit" value="Login" class="btn btn-primary">
        @csrf
        </div>
    </form>
</div>
@include('includes.Footer')
