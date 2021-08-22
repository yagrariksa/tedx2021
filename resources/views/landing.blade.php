@extends('layouts.client')

@section('title')
    LANDING
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}" />
@endsection

@section('content')
    <!-- Konten -->
    <div class="ripple">
        <div class="fill">
            <img class="title mb-4" src="{{ asset('assets/img/landing/ripple.svg') }}" alt="">
            <h3 style="display: none">
                rip·ple ef·fect <br>
                /ˈripəl əˌfekt/
            </h3>
            <h2>“Small Matters, Bright Impact”</h2>
            <p>
                An impact still can be made regardless of how people perceive the changes they have created. Each impact
                of the deeds will eventually spread and influence society to a certain extent that people have never
                imagined before. This inappreciable motion that generates a disparity is called the ripple effect.
                Everything starts with those first small steps. Then, what step will you take for your next movement?
            </p>
            <a href="{{route('essay.branding')}}" class="button btn-green mt-4">Call For Essay</a>
        </div>
    </div>

    <!-- Image -->
    <img class="bg red" src="{{ asset('assets/img/landing/landing-red.svg') }}" alt="">
    <img class="bg green" src="{{ asset('assets/img/landing/landing-green.svg') }}" alt="">
    <img class="bg-sm green1" src="{{ asset('assets/img/landing/landing-green1-sm.svg') }}" alt="">
    <img class="bg-sm green2" src="{{ asset('assets/img/landing/landing-green2-sm.svg') }}" alt="">
    <img class="bg-sm red" src="{{ asset('assets/img/landing/landing-red-sm.svg') }}" alt="">
@endsection
