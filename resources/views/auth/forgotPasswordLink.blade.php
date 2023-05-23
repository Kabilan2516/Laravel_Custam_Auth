@include('includes.Header')

    <div class="container  ">
        <div class="card-header text-md-right">Reset Password</div>

        <form action="{{route('reset.password.post')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{$token}}">

        <div class="form-group-row">
            <label for="email_address" class=" col-form-label text-md-right">E-Mail Address</label>

                <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                @endif

        </div>

        <div class="form-group row">
            <label for="password" class="col-form-label text-mg-right">Password</label>

                <input type="text" id="password" class="form-control" name="password" required autofocus>
                @if ($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                @endif

        </div>

        <div class="form-group row">
            <label for="password-confirm" class="ccol-form-label text-mg-right">Confirm Password</label>

                <input type="text" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                @endif

        </div>

        <div class="col-md-6 offset-md-4">
          <br>  <button type="submit" class="btn btn-primary">
                Reset Password
            </button>
        </div>
        </form>

    </div>

@include('includes.Footer')
