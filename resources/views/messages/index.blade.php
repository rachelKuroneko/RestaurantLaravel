@foreach ($messages as $message)
	<p>{{ json_encode($message) }}</p>
@endforeach
