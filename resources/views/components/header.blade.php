<header>
    <h1>Videogames</h1>

    @auth
        <h1>Hello {{Auth::user()->name}}</h1>
            <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
    @else
        <h2>registrati</h2>
        <form action="{{route('login')}}" method="post">
        @method('post')
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <button type="submit" class="btn btn-success">Login</button>
        </form>
        
        
        <h2>Registrati</h2>
        <form action="{{route('register')}}" method="post">
            @method('post')
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Password</label>
            <input type="password" name="password">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation">
            <button type="submit" class="btn btn-success">Register</button>
        </form>

    @endauth
</header>