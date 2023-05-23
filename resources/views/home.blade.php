@include('includes.Header')
@include('includes.Navebar')
    <div class="container">
       @auth
       <h1>welcome bro {{auth()->user()->name}}</h1>
        @else
        <h3>you are not login , login now</h3>
        @endauth
    </div>
@include('includes.Footer')
