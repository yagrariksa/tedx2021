@extends('layouts.clientNew')

@section('title', "TEDx UNAIR")

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/stream.css') }}">
@endsection

@section('content')

    @if (\Carbon\Carbon::now() > \Carbon\Carbon::createFromFormat('d/m/Y/H/i/s', '29/11/2021/00/00/00'))
    <div id="mediagroup" data-link="OvSwlxpZIX8">
        <div class="col" id="videogroup">
            <iframe frameborder="0" width="100%" height="100%" src="https://www.youtube.com/embed/OvSwlxpZIX8?modestbranding=1&showinfo=0&autohide=1&autoplay=1"
                allowfullscreen allow="autoplay">
            </iframe>
            {{-- <lite-youtube width="100%" id="video" videoid="OvSwlxpZIX8"></lite-youtube> --}}
        </div>
    </div>
    @elseif (\Carbon\Carbon::now() > \Carbon\Carbon::createFromFormat('d/m/Y/H/i/s', '28/11/2021/12/45/00'))
    {{-- <h1>Stream title</h1> --}}
    {{-- <h3>Featuring : speaker name</h3> --}}

    <div id="mediagroup" data-link="OvSwlxpZIX8">
        <div class="col col-lg-8" id="videogroup">
            <iframe frameborder="0" width="100%" height="100%" src="https://www.youtube.com/embed/OvSwlxpZIX8?modestbranding=1&showinfo=0&autohide=1&autoplay=1"
                allowfullscreen allow="autoplay">
            </iframe>
            {{-- <lite-youtube width="100%" id="video" videoid="OvSwlxpZIX8"></lite-youtube> --}}
        </div>
        <div class="col col-lg-4 p-0" id="livechatgroup">
            <iframe class="lazy" id="livechat" width="100%" height="100%"
                src="https://www.youtube.com/"
                frameborder="0"></iframe>
        </div>
    </div>
    @else
    <div class="countdown">
        <h2>Streaming starts in</h2>
        <h1 id="timer">00:00:00</h1>
    </div>
    @endif
@endsection

@section('script')
<script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1.2.0/lite-youtube.js"></script>
<script src="{{ asset('assets/js/revamp/stream.js') }}"></script>
<script>
    $('#livechat').ready(function() {
        var livechatlink = 'https://www.youtube.com/live_chat?v=' + $('#mediagroup').data('link') + '&embed_domain=' + window.location.hostname;
        $('#livechat').attr('src', livechatlink);
    });
</script>
@endsection
