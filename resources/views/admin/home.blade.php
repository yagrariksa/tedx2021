@extends('layouts.admin')

@section('title')
    Homepage Admin
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/chocolat/dist/css/chocolat.css') }}">
@endsection

@section('header')
Homepage
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-4 col-lg-4">
      <div class="pricing">
        <div class="pricing-title">
          Competition
        </div>
        <div class="pricing-padding">
          <div class="pricing-price m-0">
            <div>CFE</div>
            <div>Call For Essay</div>
          </div>
        </div>
        <div class="pricing-cta m-0">
          <a href="{{ route('admin.essay.home') }}">Show <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 col-lg-4">
      <div class="pricing">
        <div class="pricing-title">
          Competition
        </div>
        <div class="pricing-padding">
          <div class="pricing-price m-0">
            <div>CFSS</div>
            <div>Call For Student Speaker</div>
          </div>
        </div>
        <div class="pricing-cta m-0">
          <a href="{{ route('admin.speaker.participant') }}">Show <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
    {{-- <div class="col-12 col-md-4 col-lg-4">
      <div class="pricing">
        <div class="pricing-title">
          Competition
        </div>
        <div class="pricing-padding">
          <div class="pricing-price m-0">
            <div>CFE</div>
            <div>Call For Essay</div>
          </div>
        </div>
        <div class="pricing-cta m-0">
          <a href="#">Show <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div> --}}

  </div>
@endsection
