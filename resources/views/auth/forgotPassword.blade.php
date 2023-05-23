@include('includes.Header')
@include('includes.Navebar')
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center">


         <div class="card-header ">Reset Password</div>

         @if (Session::has('message'))
             <div class="alert alert-success" role="alert">
                 {{ Session::get('message') }}
             </div>
         @endif

         <form action="{{route('forgot.password.post')}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="email_address" class=" col-form-label text-md-right">Email Address</label><br>

                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif

            </div>
            <div class="col-md-6 offset-md-4">
             <br>   <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
            </div>
         </form>


    </div>

</div>
@include('includes.Footer')
