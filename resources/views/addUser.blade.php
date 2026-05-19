<x-header data="Add User" />

<form action="/addUser" method="POST">
    @csrf
    <label for="name">Name</label><br>
    <input id="name" name="name" placeholder="Enter Name"/><br><br>

    <label for="email">Email</label><br>
    <input id="email" name="email" placeholder="Enter Email"/><br><br>

    <button type="submit">Add User</button>
</form>
