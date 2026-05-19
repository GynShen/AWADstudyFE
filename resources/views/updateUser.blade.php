<x-header data="Update User"/>

<form action="/updateUser" method="POST">
  @csrf
  <input type="hidden" name="id" id="id" value="{{ $user->id }}" />

  <label for="name">Name</label><br>
  <input type="text" name="name" id="name" value="{{ $user->name }}" required /><br><br>

  <label for="email">Email</label><br>
  <input type="email" name="email" id="email" value="{{ $user->email }}" required /><br><br>

  <button type="submit">Update User</button>
</form>