@include('includes.Header')
@include('includes.Navebar')
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    @if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>')) !!}
    </ul>
    @endif
    <form action="/store" method="post">
        <div class="form-group">
            <label for="">Name: <input type="text" class="form-control" name="name"></label><br>
            <label for="">Email: <input type="text" name="email" class="form-control"></label><br>
            <label for="">Password <input type="password" name="password" class="form-control"></label><br>
            <label for="">Confirm Password:<input type="Password" class="form-control" name="password_confirmation"></label><br><br>
            <input type="submit" value="Register" class="btn btn-primary">
             @csrf
        </div>
        @csrf
    </form>
</div>


@include('includes.Footer')
