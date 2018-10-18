@extends('layouts.app')

@section('title')
    {{ Auth::user()->name }}
@endsection

@section('content')
<div class="container">
    @if( Auth::user()->roll == $data->user_id )
    <div class="col-md-10 col-md-offset-1 w3-card-4">
        <div class="row w3-blue">
            <div class="col-md-8">
                <br>
                <img src="{{ asset('images/ruet.png') }}" style="width: 120%">
                <div class="col-md-12 col-md-offset-3">
                    <p class="w3-large" style="font-family: monospace;">Department of Computer Science & Engineering</p>
                </div>
            </div>
            <div class="col-md-2 w3-right col-md-pull-1">
                <br>
                @if(Storage::disk('local')->has(Auth::user()->roll.'-'.Auth::user()->id.'.jpg'))
                    <img src="{{ route('get.image', ['filename' => Auth::user()->roll.'-'.Auth::user()->id.'.jpg']) }}" style="height: 145px; width: 130px;">
                @else
                    <img src="{{ asset('images/default.bmp') }}" style="height: 145px; width: 130px;">
                @endif
                <a onclick="document.getElementById('edt_image').style.display='block'" class="w3-display-bottom w3-large w3-btn-floating w3-transparent w3-hover-blue">Edit</a>
            </div>
            <br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    <br>
    <div class="col-md-10 col-md-offset-1 w3-card-4">
        <h3 class="w3-light-grey w3-border"><br>&nbsp;&nbsp;About {{ Auth::user()->name }}<br><br></h3>
        <table class="w3-table w3-striped w3-bordered w3-border">
            <tr>
                <th><h4>Name</h4></th>
                <td><h4>{{ Auth::user()->name }}<button onclick="document.getElementById('edt_name').style.display='block'" class="btn btn-primary w3-right">Edit</button></h4></td>
            </tr>
            <tr>
                <th><h4>Student ID</h4></th>
                <td><h4>{{ Auth::user()->roll }}<button onclick="document.getElementById('edt_roll').style.display='block'" class="btn btn-primary w3-right">Edit</button></h4></td>
            </tr>
            <tr>
                <th><h4>Blood Group</h4></th>
                <td><h4>{{ $data->blood/*Auth::user()->data()->where('user_id', Auth::user()->roll)->first() ? Auth::user()->data()->where('user_id', Auth::user()->roll)->first()->blood : '...'*/ }}<button onclick="document.getElementById('edt_blood').style.display='block'" class="btn btn-primary w3-right">Edit</button></h4></td>
            </tr>
            <tr>
                <th><h4>Mobile</h4></th>
                <td><h4>{{ $data->mobile }}<button onclick="document.getElementById('edt_mobile').style.display='block'" class="btn btn-primary w3-right">Edit</button></h4></td>
            </tr>
            <tr>
                <th><h4>Email</h4></th>
                <td><h4>{{ Auth::user()->email }}<button onclick="document.getElementById('edt_email').style.display='block'" class="btn btn-primary w3-right">Edit</button></h4></td>
            </tr>
            <tr>
                <th><h4>Date of Birth</h4></th>
                <td><h4>{{ $data->birth }}<button onclick="document.getElementById('edt_birth').style.display='block'" class="btn btn-primary w3-right">Edit</button></h4></td>
            </tr>
            <tr>
                <th><h4>Present Address</h4></th>
                <td><h5 style="font-family: console">{{ $data->pre_address }}<button onclick="document.getElementById('edt_address').style.display='block'" class="btn btn-primary w3-right">Edit</button></h5></td>
            </tr>
            <tr>
                <th><h4>Permanent Address</h4></th>
                <td><h5 style="font-family: console">{{ $data->per_address }}<button onclick="document.getElementById('edt_p_address').style.display='block'" class="btn btn-primary w3-right">Edit</button></h5></td>
            </tr>
        </table>
        <br>
    </div>
    @else
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default w3-hover-shadow w3-light-blue">
            <div class="panel-heading w3-blue"><h3>Warning!!!</h3></div>
            <div class="panel-body w3-center">
                <h3>You aren't a valid user to access the data of {{ $data->user_id }} !</h3>
            </div>
        </div>
    </div>
    @endif
</div>
<br><br>


<!--Modal-->

<div id="edt_name" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_name').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.name', ['id' => Auth::user()->id]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edt_roll" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_roll').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.roll', ['id' => Auth::user()->id]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('roll') ? ' has-error' : '' }}">
                    <label for="roll" class="col-md-4 control-label">Student ID</label>

                    <div class="col-md-6">
                        <input id="roll" type="text" class="form-control" name="roll" value="{{ Auth::user()->roll }}" required autofocus>

                        @if ($errors->has('roll'))
                            <span class="help-block">
                                <strong>{{ $errors->first('roll') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edt_blood" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_blood').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.blood', ['id' => Auth::user()->roll]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('blood') ? ' has-error' : '' }}">
                    <label for="blood" class="col-md-4 control-label">Blood Group</label>

                    <div class="col-md-6">
                        <select class="form-control" name="blood">
                            <option value="" disabled selected>Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>

                        @if ($errors->has('blood'))
                            <span class="help-block">
                                <strong>{{ $errors->first('blood') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edt_mobile" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_mobile').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.mobile', ['id' => Auth::user()->roll]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                    <label for="mobile" class="col-md-4 control-label">Mobile</label>

                    <div class="col-md-6">
                        <input id="mobile" type="text" class="form-control" name="mobile" value="{{ $data->mobile }}" required autofocus>

                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edt_email" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_email').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.email', ['id' => Auth::user()->id]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">Email</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edt_birth" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_birth').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.birth', ['id' => Auth::user()->roll]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
                    <label for="birth" class="col-md-4 control-label">Date of Birth</label>

                    <div class="col-md-6">
                        <input id="birth" type="date" class="form-control" name="birth" value="{{ $data->birth }}" required autofocus>

                        @if ($errors->has('birth'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birth') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edt_address" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_address').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.pre_address', ['id' => Auth::user()->roll]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="address" class="col-md-4 control-label">Present Address</label>

                    <div class="col-md-6">
                        <textarea id="address" type="text" class="form-control" name="address" value="{{ $data->pre_address }}" required autofocus></textarea>

                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edt_p_address" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_p_address').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.per_address', ['id' => Auth::user()->roll]) }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('p_address') ? ' has-error' : '' }}">
                    <label for="p_address" class="col-md-4 control-label">Permanent Address</label>

                    <div class="col-md-6">
                        <textarea id="p_address" type="text" class="form-control" name="p_address" value="{{ $data->per_address }}" required autofocus></textarea>

                        @if ($errors->has('p_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('p_address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edt_image" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-8 col-md-6 col-md-offset-3 w3-round">
        <br>
        <header class="w3-container w3-blue w3-round">
            <h2>Update
                <span onclick="document.getElementById('edt_image').style.display='none'" 
                class="w3-closebtn">&times;</span></h2>
        </header>
        <br>
        
        <div class="w3-light-grey w3-round">
            <br>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('edt.image', ['id' => Auth::user()->id, 'roll' => Auth::user()->roll]) }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label for="image" class="col-md-4 control-label">Profile Picture</label>

                    <div class="col-md-6">
                        <div class="form-control">
                            <input id="image" type="file" name="image" >
                        </div>
                        

                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save Change
                        </button>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>


<!--    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default w3-hover-shadow">
                    <div class="panel-heading"><h3>Update</h3></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="#">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('roll') ? ' has-error' : '' }}">
                                <label for="roll" class="col-md-4 control-label">Roll</label>

                                <div class="col-md-6">
                                    <input id="roll" type="text" class="form-control" name="roll" value="{{ Auth::user()->roll }}" required>

                                    @if ($errors->has('roll'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('roll') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label for="mobile" class="col-md-4 control-label">Mobile</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="mobile" class="form-control" name="mobile" value="{{ old('mobile') }}" required>

                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('blood') ? ' has-error' : '' }}">
                                <label for="blood" class="col-md-4 control-label">Blood Group</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="blood">
                                        <option value="" disabled selected>Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>

                                    @if ($errors->has('blood'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('blood') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('present_address') ? ' has-error' : '' }}">
                                <label for="present_address" class="col-md-4 control-label">Present Address</label>

                                <div class="col-md-6">
                                    <textarea id="present_address" type="text" class="form-control" name="present_address" required></textarea>

                                    @if ($errors->has('present_address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('present_address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('permanent_address') ? ' has-error' : '' }}">
                                <label for="permanent_address" class="col-md-4 control-label">Permanent Address</label>

                                <div class="col-md-6">
                                    <textarea id="permanent_address" type="text" class="form-control" name="permanent_address" required></textarea>

                                    @if ($errors->has('permanent_address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('permanent_address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="image" class="col-md-4 control-label">Profile Picture</label>
                                <div class="col-md-6">
                                    <div class="form-control"><input type="file" name="image" id="image"></div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('newpassword') ? ' has-error' : '' }}">
                                <label for="newpassword" class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input id="newpassword" type="password" class="form-control" name="newpassword" required>

                                    @if ($errors->has('newpassword'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('newpassword') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('newpassword_confirmation') ? ' has-error' : '' }}">
                                <label for="newpassword-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                <div class="col-md-6">
                                    <input id="newpassword-confirm" type="password" class="form-control" name="newpassword_confirmation" required>

                                    @if ($errors->has('newpassword_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('newpassword_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
@endsection