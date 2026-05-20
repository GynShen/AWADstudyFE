<x-header data="User Sign Up" />
Hi,{{session('user')}}! You have done the registration.
@if($errors->any())
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif

<form action="/signUp" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" placeholder="Enter Name" required/><br><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" placeholder="Enter Email" required/><br><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" placeholder="Enter Password" required/><br><br>

    <label for="confirm_password">Password</label><br>
    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required/><br><br>

    <button type="submit">Sign Up</button>
</form>
