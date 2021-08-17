@extends('dummy')

@section('title')
    Payment
@endsection

@section('content')
    <h1>Payment</h1>
    <h2>for {{ $email }}</h2>
    <form action="{{ route('essay.payment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="email" value="{{ $email }}">
        <select name="method" id="">
            <option value="ovo">ovo</option>
            <option value="gopay">gopay</option>
        </select>
        @error('method')
            <span class="fail">{{ $message }}</span>
        @enderror
        <input type="file" name="bukti" id="">
        @error('bukti')
            <span class="fail">{{ $message }}</span>
        @enderror
        <button type="submit">PAID</button>

    </form>
@endsection
