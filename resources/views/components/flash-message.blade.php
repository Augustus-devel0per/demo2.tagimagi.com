@foreach( $messages as $key => $message)
    <div class="alert {{ $key }}">
        <p>{!! $message !!}</p>
    </div>
@endforeach