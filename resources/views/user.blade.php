<x-header data="User"/>
@if (!empty($user))
	<h1>Hello, {{ $user }}</h1>
@endif