@if ($brokenLinksCheck)
    @component('oh-dear::partials.info', ['type' => 'success'])
        No broken links found on {{ $url['name'] }}
    @endcomponent
@else
    @component('oh-dear::partials.info', ['type' => 'failed'])
        Broken links found.
    @endcomponent
@endif