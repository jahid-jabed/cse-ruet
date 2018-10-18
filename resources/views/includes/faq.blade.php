@extends('layouts.app')

@section('title')
    FAQs
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default w3-hover-shadow">
                <div class="panel-heading"><h3>Drop a Query</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('add.comment') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">Student ID</label>
                            <div class="col-md-6">
                                <select class="form-control" name="id">
                                    <option value="{{ Auth::user()->roll }}">{{ Auth::user()->roll }}</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Your Question</label>

                            <div class="col-md-6">
                                <textarea id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required autofocus></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary w3-right">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default w3-hover-shadow">
                <div class="panel-heading"><h3>Student Queries</h3></div>
                <div   style="height: 390px; overflow:auto;">
                @foreach ($comments as $comment)
                <div class="panel-body">
                        @foreach($users as $user)
                            @if ($user->roll == $comment->roll)
                            <h4 class="w3-text-blue">{{ $user->name }}</h4>
                            @endif
                        @endforeach
                        
                        <h5>&emsp;{{ $comment->text }}</h5>
                        <h6>{{ date_format($comment->created_at, 'D, d M, Y | H:i:s') }}&emsp;
                    @if(Auth::user()->isAdmin() and !$comment->reply)
                    <button class="btn btn-link" onclick="document.getElementById({{ $comment->roll }}).style.display='block'">Reply</button>
                    @endif
                    <br></h6>
                    @if($comment->reply)
                    <div class="col-md-11 col-md-offset-1">
                    <h5 class="w3-text-blue">Admin</h5>
                    <h5>{{ $comment->reply }}</h5>
                    <h6>{{ date_format($comment->updated_at, 'D, d M, Y | H:i:s') }}</h6>
                    </div>
                    @endif
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($comments as $comment)
<div id="{{ $comment->roll }}" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Reply
                <span onclick="document.getElementById('{{ $comment->roll }}').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('post.reply', ['id' => $comment->id]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('reply') ? ' has-error' : '' }}">
                    <label for="reply" class="col-md-4 control-label">Reply</label>

                    <div class="col-md-6">
                        <textarea id="reply" type="text" class="form-control" name="reply" value="{{ old('reply') }}" required autofocus></textarea>

                        @if ($errors->has('reply'))
                            <span class="help-block">
                                <strong>{{ $errors->first('reply') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

