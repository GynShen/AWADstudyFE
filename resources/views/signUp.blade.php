<x-header data="User Sign Up" />

<form action="/signUp" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" placeholder="Enter Name" /><br><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" placeholder="Enter Email" /><br><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" placeholder="Enter Password" /><br><br>

    <input type="hidden" name="is_admin" id="is_admin" value=0 /><br>

    <button type="submit">Sign Up</button>
</form>
