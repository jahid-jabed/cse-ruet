@extends('layouts.app')

@section('title')
    Course Registration
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default w3-hover-shadow">
                <div class="panel-heading"><h3>Course Registration<a href="{{ route('pdf.viewer', ['filename' => 'Course Registration']) }}" target="_blank" class="btn btn-primary w3-right">Download</a></h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('course.reg', ['id' => Auth::user()->roll]) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="err" class="col-md-12 control-label w3-red w3-small w3-center" style="font-family: monospace">If you do not want to register for any course/s, add a space in 'Course No' and 'Tittle', and 0.00 in 'Credit' fields of those course/s.</label><br><br><br>
                        
                        <div class="form-group{{ $errors->has('c1n') ? ' has-error' : '' }}">
                            <label for="c1n" class="col-md-4 control-label">Course 1.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c1n" type="text" class="form-control" name="c1n" value="{{ old('c1n') }}">
                                
                                @if ($errors->has('c1n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c1n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c1t') ? ' has-error' : '' }}">
                            <label for="c1t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c1t" type="text" class="form-control" name="c1t" value="{{ old('c1t') }}">
                                
                                @if ($errors->has('c1t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c1t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c1c') ? ' has-error' : '' }}">
                            <label for="c1c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c1c" type="text" class="form-control" name="c1c" value="{{ old('c1c') }}">
                                
                                @if ($errors->has('c1c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c1c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c2n') ? ' has-error' : '' }}">
                            <label for="c2n" class="col-md-4 control-label">Course 2.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c2n" type="text" class="form-control" name="c2n" value="{{ old('c2n') }}">
                                
                                @if ($errors->has('c2n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c2n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c2t') ? ' has-error' : '' }}">
                            <label for="c2t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c2t" type="text" class="form-control" name="c2t" value="{{ old('c2t') }}">
                                
                                @if ($errors->has('c2t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c2t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c2c') ? ' has-error' : '' }}">
                            <label for="c2c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c2c" type="text" class="form-control" name="c2c" value="{{ old('c2c') }}">
                                
                                @if ($errors->has('c2c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c2c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c3n') ? ' has-error' : '' }}">
                            <label for="c3n" class="col-md-4 control-label">Course 3.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c3n" type="text" class="form-control" name="c3n" value="{{ old('c3n') }}">
                                
                                @if ($errors->has('c3n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c3n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c3t') ? ' has-error' : '' }}">
                            <label for="c3t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c3t" type="text" class="form-control" name="c3t" value="{{ old('c3t') }}">
                                
                                @if ($errors->has('c3t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c3t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c3c') ? ' has-error' : '' }}">
                            <label for="c3c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c3c" type="text" class="form-control" name="c3c" value="{{ old('c3c') }}">
                                
                                @if ($errors->has('c3c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c3c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c4n') ? ' has-error' : '' }}">
                            <label for="c4n" class="col-md-4 control-label">Course 4.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c4n" type="text" class="form-control" name="c4n" value="{{ old('c4n') }}">
                                
                                @if ($errors->has('c4n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c4n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c4t') ? ' has-error' : '' }}">
                            <label for="c4t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c4t" type="text" class="form-control" name="c4t" value="{{ old('c4t') }}">
                                
                                @if ($errors->has('c4t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c4t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c4c') ? ' has-error' : '' }}">
                            <label for="c4c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c4c" type="text" class="form-control" name="c4c" value="{{ old('c4c') }}">
                                
                                @if ($errors->has('c4c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c4c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c5n') ? ' has-error' : '' }}">
                            <label for="c5n" class="col-md-4 control-label">Course 5.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c5n" type="text" class="form-control" name="c5n" value="{{ old('c5n') }}">
                                
                                @if ($errors->has('c5n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c5n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c5t') ? ' has-error' : '' }}">
                            <label for="c5t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c5t" type="text" class="form-control" name="c5t" value="{{ old('c5t') }}">
                                
                                @if ($errors->has('c5t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c5t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c5c') ? ' has-error' : '' }}">
                            <label for="c5c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c5c" type="text" class="form-control" name="c5c" value="{{ old('c5c') }}">
                                
                                @if ($errors->has('c5c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c5c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c6n') ? ' has-error' : '' }}">
                            <label for="c6n" class="col-md-4 control-label">Course 6.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c6n" type="text" class="form-control" name="c6n" value="{{ old('c6n') }}">
                                
                                @if ($errors->has('c6n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c6n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c6t') ? ' has-error' : '' }}">
                            <label for="c6t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c6t" type="text" class="form-control" name="c6t" value="{{ old('c6t') }}">
                                
                                @if ($errors->has('c6t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c6t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c6c') ? ' has-error' : '' }}">
                            <label for="c6c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c6c" type="text" class="form-control" name="c6c" value="{{ old('c6c') }}">
                                
                                @if ($errors->has('c6c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c6c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c7n') ? ' has-error' : '' }}">
                            <label for="c7n" class="col-md-4 control-label">Course 7.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c7n" type="text" class="form-control" name="c7n" value="{{ old('c7n') }}">
                                
                                @if ($errors->has('c7n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c7n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c7t') ? ' has-error' : '' }}">
                            <label for="c7t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c7t" type="text" class="form-control" name="c7t" value="{{ old('c7t') }}">
                                
                                @if ($errors->has('c7t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c7t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c7c') ? ' has-error' : '' }}">
                            <label for="c7c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c7c" type="text" class="form-control" name="c7c" value="{{ old('c7c') }}">
                                
                                @if ($errors->has('c7c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c7c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c8n') ? ' has-error' : '' }}">
                            <label for="c8n" class="col-md-4 control-label">Course 8.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c8n" type="text" class="form-control" name="c8n" value="{{ old('c8n') }}">
                                
                                @if ($errors->has('c8n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c8n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c8t') ? ' has-error' : '' }}">
                            <label for="c8t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c8t" type="text" class="form-control" name="c8t" value="{{ old('c8t') }}">
                                
                                @if ($errors->has('c8t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c8t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c8c') ? ' has-error' : '' }}">
                            <label for="c8c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c8c" type="text" class="form-control" name="c8c" value="{{ old('c8c') }}">
                                
                                @if ($errors->has('c8c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c8c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c9n') ? ' has-error' : '' }}">
                            <label for="c9n" class="col-md-4 control-label">Course 9.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c9n" type="text" class="form-control" name="c9n" value="{{ old('c9n') }}">
                                
                                @if ($errors->has('c9n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c9n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c9t') ? ' has-error' : '' }}">
                            <label for="c9t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c9t" type="text" class="form-control" name="c9t" value="{{ old('c9t') }}">
                                
                                @if ($errors->has('c9t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c9t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c9c') ? ' has-error' : '' }}">
                            <label for="c9c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c9c" type="text" class="form-control" name="c9c" value="{{ old('c9c') }}">
                                
                                @if ($errors->has('c9c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c9c') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('c0n') ? ' has-error' : '' }}">
                            <label for="c0n" class="col-md-4 control-label">Course 10.</label>

                            <div class="col-md-6">
                                <input placeholder="Course No" id="c0n" type="text" class="form-control" name="c0n" value="{{ old('c0n') }}">
                                
                                @if ($errors->has('c0n'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c0n') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c0t') ? ' has-error' : '' }}">
                            <label for="c0t" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Title" id="c0t" type="text" class="form-control" name="c0t" value="{{ old('c0t') }}">
                                
                                @if ($errors->has('c0t'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c0t') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('c0c') ? ' has-error' : '' }}">
                            <label for="c0c" class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-6">
                                <input placeholder="Credit" id="c0c" type="text" class="form-control" name="c0c" value="{{ old('c0c') }}">
                                
                                @if ($errors->has('c0c'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('c0c') }}</strong>
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
                        
                        <div class="form-group{{ $errors->has('receipt_no') ? ' has-error' : '' }}">
                            <label for="receipt_no" class="col-md-4 control-label">Bank Receipt No</label>

                            <div class="col-md-6">
                                <input id="receipt_no" type="text" class="form-control" name="receipt_no" value="{{ old('receipt_no') }}" required>

                                @if ($errors->has('receipt_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('receipt_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary w3-right">
                                    Register
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