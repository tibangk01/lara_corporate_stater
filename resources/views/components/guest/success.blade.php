@if ($message = Session::get('success'))

    <span class="sent-message">

        {{ $message }}

        //TODO : success message : Your message has been sent. Thank you!

    </span>

@endif
