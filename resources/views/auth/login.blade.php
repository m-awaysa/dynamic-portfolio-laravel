@include('layouts.public_header')

<div class="vh-100 d-flex justify-content-center align-items-center">
	<div class="col-md-4 p-5 shadow-sm border rounded-3">
		<h2 class="text-center mb-4 text-primary">Login Form</h2>
		<!-- invalid information  -->
		@if(session('status'))
		<div class="text-danger">
			{{session('status')}}
		</div>
		@endif
		<form action="{{route('login')}}" method="post">
			@csrf
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label text-warning">Email address</label>
				<input type="email" class="form-control border border-warning @error('email') border-danger @enderror"
					name="email" value="{{ old('email') }}">
				@error('email')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="password" class="form-label text-warning">Password</label>
				<input type="password"
					class="form-control border  border-warning @error('password') border-danger @enderror"
					name="password">
				@error('password')
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<br>
			<div class="d-grid">
				<button class="btn btn-primary" type="submit">Login</button>
			</div>
		</form>
	</div>
</div>