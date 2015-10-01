<nav class="main-nav">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <nav class="pushmenu pushmenu-left">   
                        <h2>Menu</h2>
                        <a href='home'>Home</a>
                        <a href='collectible_stores'>Collectible Stores</a>
                        <a href='autograph_sellers'>Autograph Sellers</a>
                        <a href='live_events'>Live Events</a>
                         
                        
                @if (Auth::guest())
                    <a data-toggle="modal" href='#modal-id2'><i
                                    class="fa fa-sign-in"></i> Login</a>
                    <a data-toggle="modal" href='#modal-id'>Sign Up</a>
                @else
                <ul class="list">
                    <li class="dropdown">
                        <a class="dropdown" href='profile' class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                                    class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::check())
                                @if(Auth::user()->admin==1)
                                    <li>
                                        <a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a> 
                                    </li>
                                @endif
                               
                            @endif
                            <li>
                                <a href="{{ URL::to('profile') }}">Profile</a> 
                            </li>
                            <li>
                                <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
                    </nav>

                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="nav">
                        <div id="logo">
                           
                            <img src="{{ URL::to('/') }}/img/toyboxlogo-01.png" width="325" height="100"/>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="modal-links">
                        @if (Auth::guest())       
                            <a data-toggle="modal" href='#modal-id'>Sign Up</a> |
                        @else
                        @if(Auth::check())
                                @if(Auth::user()->admin==1)
                                    <a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a> |
                                @else
                                    <a href='profile'>Profile</a> |
                                @endif
                        @endif
                        @endif
                        <div class="modal fade" id="modal-id">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Sign Up</h2>
                                    </div>
                                    {!! Form::open(array('url' => URL::to('auth/register'), 'method' => 'post', 'files'=> true)) !!}
                                        <div class="modal-body">
                                            <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                                                {!! Form::label('name', trans('site/user.name'), array('class' => 'control-label')) !!}
                                                <div class="controls">
                                                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                                    <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group  {{ $errors->has('username') ? 'has-error' : '' }}">
                                                {!! Form::label('username', 'Username', array('class' => 'control-label')) !!}
                                                <div class="controls">
                                                    {!! Form::text('username', null, array('class' => 'form-control')) !!}
                                                    <span class="help-block">{{ $errors->first('username', ':message') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                                                {!! Form::label('email', trans('site/user.e_mail'), array('class' => 'control-label')) !!}
                                                <div class="controls">
                                                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                                                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                                                <div class="controls">
                                                    {!! Form::password('password', array('class' => 'form-control')) !!}
                                                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                                {!! Form::label('password_confirmation', "Confirm Password", array('class' => 'control-label')) !!}
                                                <div class="controls">
                                                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                                                    <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modalfooter">
                                            <button type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @if (Auth::guest())
                            <a data-toggle="modal" href='#modal-id2'>Login</a>
                        @else
                            <a href="{{ URL::to('auth/logout') }}"> Logout</a>
                        @endif 
                        <div class="modal fade" id="modal-id2">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Welcome Back</h2>
                                    </div>
                                    {!! Form::open(array('url' => URL::to('auth/login'), 'method' => 'post', 'files'=> true)) !!}
                                        <div class="modal-body">
                                            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                                                {!! Form::label('email', "E-Mail", array('class' => 'control-label')) !!}
                                                <div class="controls">
                                                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                                                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                                                <div class="controls">
                                                    {!! Form::password('password', array('class' => 'form-control')) !!}
                                                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                                </div>
                                                <a href="{{ URL::to('/password/email') }}">Forgot Your Password?</a>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember"> Remember Me
                                                    </label>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="modalfooter">
                                            <button type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit">Log In</button>
                                        </div>
                                    {!! Form::close() !!}
                                    
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </nav>