@extends('dummy')

@section('title')
Registration Call for Essay
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/user-regis-cfe.css') }}">
@endsection

@section('content')
    <div class="card">
        <h2>Registration <br> Call for Essay</h2>

        <!-- Warning -->
        <div class="warn-container"></div>
        @if (Session::has('error'))
            <span class="alert fail">{{ Session::get('error') }}</span>
        @endif

        <!-- Form -->
        <form action="{{ route('essay.form') }}" method="post">
            @csrf
            <h4>Full Name</h4>
            <input type="text" id="fullname" name="fullname" class="mandatory" >
            @error('fullname')
                <span class="fail">{{ $message }}</span>
            @enderror
            <div class="age-phone">
                <div>
                    <h4>Age</h4>
                    <input type="text" id="age" name="age" class="mandatory" value="{{ old('fullname') }}">
                </div>
                <div>
                    <h4>Phone Number</h4>
                    <input type="text" id="phone" name="phone" class="mandatory">
                </div>
            </div>
            <h4>Email</h4>
            <input type="text" id="email" name="email" class="mandatory" value="{{ old('email') }}">
            @error('email')
                <span class="fail">{{ $message }}</span>
            @enderror
            <h4>Address</h4>
            <input type="text" id="addr" name="addr" class="mandatory">
            <h4>Institute</h4>
            <input type="text" id="institute" name="institute" class="mandatory">
            <h4>Essay Title</h4>
            <input type="text" id="essay" name="essay" class="mandatory">
            <h4>Google Drive Link <img class="help" src="{{ asset('assets/img/help.svg') }}" data-toggle="modal"
                    data-target="#helpGdrive"></h4>
            <input type="text" id="link" name="link" class="mandatory">
            <hr>
            <button type="submit" class="btn-green" id="btn-regis">Register</button>
        </form>
    </div>

    <!-- Modals Help G-Drive Link -->
    <div class="modal fade" id="helpGdrive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img src="{{ asset('assets/img/modal-help-gdrive.svg') }}" class="modal-icon">
                    <div class="desc">
                        <h4>The link provided will <span class="text-red">include</span> these following documents:</h4>
                        <ol>
                            <li class="text-green" style="font-weight: 500;">Photo with size 3&times;4</li>
                            <li class="text-green" style="font-weight: 500;">Scan of ID Card (KTP/KTM)</li>
                            <li class="text-green" style="font-weight: 500;">Your essay</li>
                        </ol>
                        <p>*Remember to set your drive <span class="text-red">access to public</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Thanks -->
    {{-- <div class="modal fade" id="thanks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2>Thank you for Registering</h2>
                    <p>Please <span class="text-red">pay</span> and <span class="text-red">upload</span><br>
                        the transfer slip <span class="text-red">before dd/mm/yyyy</span></p>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- Image -->
    <img class="bg green" src="{{ asset('assets/img/registration-green.svg') }}" alt="">
    <img class="bg red" src="{{ asset('assets/img/registration-red.svg') }}" alt="">

</body>
@endsection

@section('js')
<script src="{{ asset('assets/js/user-regis-cfe.js') }}"></script>
@endsection
