@extends('layouts.app')

@section('title')
    Admit Card
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 w3-card w3-hover-shadow">
            <br>
            <a href="{{ route('down.admit', ['roll' => Auth::user()->roll, 'name' => Auth::user()->name]) }}" target="_blank" class="btn btn-primary w3-right">Download</a><br><br>
            <div class="panel panel-default w3-light-blue">
                @if( $admit_card->fee and Auth::user()->roll == $id )
                <div class="panel-heading w3-blue w3-center"><h3>RAJSHAHI UNIVERSITY OF ENGINEERING & TECHNOLOGY</h3></div>
                <div class="panel-body w3-center">
                    <h4>
                        <b>Department of Computer Science & Engineering</b>
                        <br><br>
                        <div class="w3-left"><b>Registration No:</b>&emsp;{{ $admit_card->reg }}</div>
                        <div class="w3-right"><b>Session:</b>&emsp;{{ $admit_card->session }}</div>
                        <br><br>
                        B.Sc Engineering <b>{{ $admit_card->year }}</b> Year <b>{{ $admit_card->semester }}</b> Semester/Backlog Examination.
                        <br><br>
                        <div class="w3-card w3-black w3-xlarge">ADMIT CARD</div>
                        <br><br>
                        <table class="w3-table">
                            <tr>
                                <th>Name:</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th>Student ID:</th>
                                <td>{{ Auth::user()->roll }}</td>
                            </tr>
                        </table>
                        <br><br>
                        <div class="w3-right w3-card col-md-5 w3-yellow">
                            Signed by the exam controller
                        </div>
                    </h4>
                </div>
                @elseif($admit_card->fee)
                <div class="panel-heading w3-blue"><h3>Warning!!!</h3></div>
                <div class="panel-body w3-center">
                    <h3>You aren't a valid user to access the data of {{ $id }} !</h3>
                </div>
                @else
                <div class="panel-heading w3-blue"><h3>Warning!!!</h3></div>
                <div class="panel-body w3-center">
                    <h3>You haven't submitted your exam fee!</h3>
                </div>
                @endif
            </div>
        </div>
    </div>
    <br>
</div>

@endsection