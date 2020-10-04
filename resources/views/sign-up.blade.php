@extends('index')
@section('content')
    <div class="user-auth container">
        
        <form action="" class="sign-in">
            <div>
                <h1>SIGN UP</h1>
                <label for="email">Email</label> <br>
                <input type="email" name='email' required minlength="5"> <br>
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password" minlength="8" maxlength="20"> <br>
                <button type="submit">Sign UP</button> <br>
            </div>
        </form>
    </div>
@endsection
