<x-header data="User Login" />
<br>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/login" method="POST">
    @csrf
    <input type="text" id="email" name="email" placeholder="Enter email" /><br><br>

    <input type="password" id="password" name="password" placeholder="Enter password" /><br><br>

    <button type="submit">Login</button>
</form>
