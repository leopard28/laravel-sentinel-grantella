<h1>Hello</h1>

<p>
	Please click the following link to reset your password,

	 <a href="http://localhost:8000/reset/{{ $user->email }}/{{ $code }}">click here!</a>
	{{-- <a href="{{ env("APP_KEY") }}" >Visit</a> --}}
</p>