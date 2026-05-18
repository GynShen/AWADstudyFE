<x-header data="User" />

@if ($user == 'Peter')
    <h2>Hello, {{ $user }}</h2>
@elseif($user == 'Ali')
    <h2>Apa khabar, {{ $user }}</h2>
@elseif($user == 'Chong')
    <h2>Ni Hao, {{ $user }}</h2>
@else
    <h2>Unknown User</h2>
@endif
