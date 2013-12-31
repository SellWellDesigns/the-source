<h1>Please Login</h1>

{{ Session::get('message') }}

<form action="{{route('login')}}" method="post">
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="Password" />
    <input type="submit" />
</form>