<x-header data="User" />

@include('userInner')

@if ($user == 'Peter')
    <h2>Hello, {{ $user }}</h2>
@elseif($user == 'Ali')
    <h2>Apa khabar, {{ $user }}</h2>
@elseif($user == 'Chong')
    <h2>Ni Hao, {{ $user }}</h2>
@else
    <h2>Unknown User</h2>
@endif

@foreach($users as $user)
  <h1> {{$user}} </h1>
@endforeach

<script>
  var data=@json($users);
  console.warn(data);
</script>

@csrf