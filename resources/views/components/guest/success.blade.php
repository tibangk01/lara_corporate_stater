@if ($message = Session::get('success'))

    <span class="text-danger">

        {{ $message }}

    </span>
    
@endif
