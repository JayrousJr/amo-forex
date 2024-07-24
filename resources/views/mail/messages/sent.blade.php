<x-mail::message>
    # Message From <strong>{{$name}}</strong><br>
    <x-mail::panel>
        <strong>Subject</strong> <br>{{$subject}} <br>
    </x-mail::panel>
    <x-mail::panel>
        <strong>Message Body</strong> {{$content}}
    </x-mail::panel>


    <x-mail::button :url="'https://amoforex.com'">

        Visit Website
    </x-mail::button>

    Thanks,<br>
    Amo, Chief Executive Officer (CEO),<br>
    {{ config('app.name') }}
</x-mail::message>