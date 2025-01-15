@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="d-flex justify-content-sm-between">
	<h1>Discounts</h1>

		<a href="{{ route('dashboard.discount.create') }}" 
                    class="btn btn-success btn-sm "><i
				class="fas fa-plus-circle fa-xs px-1" style="color: #fff;"></i> create</a>
	</div>
@stop

@section('content')
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">code</th>
				<th scope="col">quantity</th>
				<th scope="col">percentage</th>
				<th scope="col">expiry_date</th>
				<th scope="col">Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($discounts as $discount)
				<tr>
					<th scope="row">{{ $loop->iteration }}</th>
					<td>{{ $discount->code }}</td>
					<td>{{ $discount->quantity }}</td>
					<td>{{ $discount->percentage }}</td>
					<td>{{ $discount->expiry_date }}</td>
					<td class="d-inline-flex card-body">
						<a href="{{ route('dashboard.discount.show', $discount->id) }}" class="btn btn-success btn-sm"><i
								class="far fa-eye fa-xs" style="color: #292e2c;"></i></a>
						<a href="{{ route('dashboard.discount.edit', $discount->id) }}" class="btn btn-primary btn-sm"><i
								class="fas fa-edit fa-xs" style="color: #292e2c;"></i></a>
						<form class="form-inline" action="{{ route('dashboard.discount.delete', $discount->id) }}" method="POST">
							@csrf @method('DELETE')
							<button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash fa-xs"></i></button>
						</form>
					</td>
				</tr>
			@endforeach

		</tbody>
	</table>

	{{ $discounts->links() }}
@stop

@section('css')
	{{-- Add here extra stylesheets --}}
	{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
	<script>
		console.log("Hi, I'm using the Laravel-AdminLTE package!");
	</script>
@stop
