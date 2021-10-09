<div>

    @if (! request()->route()->named('home'))

        <x-guest.breadcrumb/>

    @endif

    Main

    {{ $slot }}

</div>
