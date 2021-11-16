@extends('layouts.clientNew')

@section('title', "TEDx UNAIR")

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/revamp/stream.css') }}">
@endsection

@section('content')

    @if (\Carbon\Carbon::now() > \Carbon\Carbon::createFromFormat('d/m/Y/H/i/s', '29/11/2021/00/00/00'))
    <div id="mediagroup" data-link="5qap5aO4i9A">
        <div class="col" id="videogroup">
            <iframe frameborder="0" width="100%" height="100%" src="https://www.youtube.com/embed/5qap5aO4i9A"
                allowfullscreen allow="autoplay">
            </iframe>
            {{-- <lite-youtube width="100%" id="video" videoid="5qap5aO4i9A"></lite-youtube> --}}
        </div>
    </div>
    @elseif (\Carbon\Carbon::now() > \Carbon\Carbon::createFromFormat('d/m/Y/H/i/s', '28/11/2021/13/00/00'))
    <h1>Stream title</h1>
    <h3>Featuring : speaker name</h3>

    <div id="mediagroup" data-link="5qap5aO4i9A">
        <div class="col col-lg-8" id="videogroup">
            <iframe frameborder="0" width="100%" height="100%" src="https://www.youtube.com/embed/5qap5aO4i9A"
                allowfullscreen allow="autoplay">
            </iframe>
            {{-- <lite-youtube width="100%" id="video" videoid="5qap5aO4i9A"></lite-youtube> --}}
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
    {{-- <div class="stream">
        <div class="video">
            <!-- IMPORTANT:: src-nya yang diganti abis /embed/ aja (kalo jadi pake yt sih) -->
            <iframe frameborder="0" width="100%" height="100%" src="https://www.youtube.com/embed/x98RMADqop8"
                allowfullscreen allow="autoplay">
            </iframe>
        </div>
        <div class="chat">
            <div class="chat-header">
                <!-- <img class="hide" src="assets/img/arrow-right-black.svg" alt=""> -->
                <h2>Stream Chat</h2>
            </div>
            <div class="chat-room">
                <div class="userchat">
                    <h5>username</h5>
                    <div class="bubble-chat">
                        <h5>woah mantap</h5>
                    </div>
                </div>
                <div class="userchat">
                    <h5>username</h5>
                    <div class="bubble-chat">
                        <h5>iya keren banget</h5>
                        <h5>bikin laper anjir:'></h5>
                    </div>
                </div>
                <div class="userchat mine">
                    <div class="bubble-chat" id="here">
                        <h5>laalalalalaapeerrrrr</h5>
                        <h5>busetdah</h5>
                    </div>
                </div>
                <div class="userchat">
                    <h5>username</h5>
                    <div class="bubble-chat">
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, sequi ut? Alias
                            quae, beatae quia ducimus culpa reiciendis suscipit ea cumque sapiente repudiandae!
                            Eaque fuga reprehenderit consectetur quidem, quos sit suscipit culpa maxime quia
                            enim amet id autem, ipsa recusandae dolorem quam ex. Voluptas, tempora nulla amet
                            voluptatem soluta reiciendis, cum eos velit ea minima labore tempore sunt delectus
                            ducimus, impedit eius temporibus eligendi natus. Dolorum iusto veritatis placeat
                            nisi fugit vel quas fugiat tempore ad porro, ea at iste voluptate tempora. Dolore at
                            expedita, unde asperiores voluptatibus debitis sed exercitationem! Molestias
                            explicabo quaerat voluptas quo harum nihil expedita repellat.</h5>
                    </div>
                </div>
                <div class="userchat mine">
                    <div class="bubble-chat">
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptatum,
                            inventore, officiis atque distinctio laboriosam ea autem laudantium aut non
                            incidunt! Rerum eaque magnam reprehenderit dicta illo nulla similique saepe vero,
                            laborum iure cum quae enim, dolorem dolorum soluta minima? Doloribus corrupti
                            aperiam praesentium, error obcaecati sed? Ipsam, quas sunt.</h5>
                    </div>
                </div>
            </div>
            <div class="chat-footer">
                <input type="text" name="chat" id="chat" placeholder="Type something...">
                <button id="send-chat"><img src="assets/img/send-chat.svg" alt=""></button>
            </div>
        </div>
    </div> --}}
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
