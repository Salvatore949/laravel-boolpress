<header>
    <h1>header</h1>

    @guest

    <form action="{{route('register')}}" method="POST">

         @method('POST')
         @csrf

        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <label for="password_confirmation">Password-confirmation</label>
        <input type="password" name="password_confirmation">

        <input type="submit" value= "Register">
    </form>

    <form action="{{route('login')}}" method="POST">

        @method('POST')
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">

        <input type="submit" value="Login">
    </form>
    @else

    <h2> Hello to {{Auth::user() -> name }}</h2>

    @endguest


</header>