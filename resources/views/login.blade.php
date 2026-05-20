<x-header data="User Login" />
<br>

<form action="/login" method="POST">
    @csrf
    <input type="text" id="username" name="username" placeholder="Enter username" /><br><br>

    <input type="password" id="password" name="password" placeholder="Enter password" /><br><br>

    <input type="hidden" name="is_admin" value=0 /> <br><br>

    <button type="submit">Login</button>
</form>
