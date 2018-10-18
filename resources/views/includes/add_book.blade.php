@extends('layouts.app')

@section('title')
    Adding new book
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default w3-hover-shadow">
                <div class="panel-heading"><h3>Adding Book</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('add.book') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('book_id') ? ' has-error' : '' }}">
                            <label for="book_id" class="col-md-4 control-label">Book ID</label>

                            <div class="col-md-6">
                                <input id="book_id" type="text" class="form-control" name="book_id" value="{{ old('book_id') }}" required autofocus>

                                @if ($errors->has('book_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('book_name') ? ' has-error' : '' }}">
                            <label for="book_name" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="book_name" type="text" class="form-control" name="book_name" value="{{ old('book_name') }}" required>

                                @if ($errors->has('book_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('book_author') ? ' has-error' : '' }}">
                            <label for="book_author" class="col-md-4 control-label">Author</label>

                            <div class="col-md-6">
                                <input id="book_author" type="text" class="form-control" name="book_author" value="{{ old('book_author') }}" required>

                                @if ($errors->has('book_author'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_author') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="year" class="col-md-4 control-label">Year</label>
                            <div class="col-md-6">
                                <select class="form-control" name="year">
                                    <option value="1">1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3">3rd Year</option>
                                    <option value="4">4th Year</option>
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
                            <label for="book_file" class="col-md-4 control-label">Book Copy</label>
                            <div class="col-md-6">
                                <div class="form-control"><input type="file" name="book_file" class="" id="book_file"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary w3-right">
                                    Add
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