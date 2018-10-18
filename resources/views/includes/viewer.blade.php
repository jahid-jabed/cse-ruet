@extends('layouts.app')

@section('title')
    {{ $filename }}
@endsection

@section('content')
<div class="container">
    <div class="col-md-12 w3-card w3-hover-shadow w3-blue" style="width: 100%; height: 670px;">
        <h1 class="w3-center", style="font-family: monospace">{{ $filename }}</h1>
        <embed src="{{ route('book.pdf', ['filename' => $filename.'.pdf']) }}" type='application/pdf' style="width: 100%; height: 580px;">
    </div>
</div>
<br>
@endsection