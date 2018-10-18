@extends('layouts.app')

@section('title')
    Admit Card
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default w3-hover-shadow">
                <div class="panel-heading"><h3>Updating Admit Card Info</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update.admit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label">Studen ID</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{ $id }}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('reg') ? ' has-error' : '' }}">
                            <label for="reg" class="col-md-4 control-label">Registration No</label>

                            <div class="col-md-6">
                                <input id="reg" type="text" class="form-control" name="reg" value="{{ old('reg') }}" required>

                                @if ($errors->has('reg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
                            <label for="session" class="col-md-4 control-label">Session</label>

                            <div class="col-md-6">
                                <input id="session" type="text" class="form-control" name="session" value="{{ old('session') }}" required>

                                @if ($errors->has('session'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('session') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="year" class="col-md-4 control-label">Year</label>
                            <div class="col-md-6">
                                <select class="form-control" name="year">
                                    <option value="1st">1st Year</option>
                                    <option value="2nd">2nd Year</option>
                                    <option value="3rd">3rd Year</option>
                                    <option value="4th">4th Year</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="semester" class="col-md-4 control-label">Semester</label>
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" name="semester" value="Odd">Odd Semester
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="semester" value="Even">Even Semester
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="fee" class="col-md-4 control-label">Exam Fee</label>
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" name="fee" value="0">Not Clear
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="fee" value="1">Clear
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary w3-right">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection