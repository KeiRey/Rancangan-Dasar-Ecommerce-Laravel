<h1>Helloooo {{ $user['name']}}</h1>
<p>Please klik link below Verification your Email {{ $user['email'] }}</p>
<a href="{{ url('/erification', $user->verification->token) }}">Verify</a>






