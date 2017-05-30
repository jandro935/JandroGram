<div class="col-md-6">
    <div class="u-PaddingLeft30 u-xs-PaddingLeft0">
        <div class="col-md-12">
            <h2 class="u-xs-FontSize40 u-Weight300 u-MarginTop0 u-MarginBottom15">Create New Account</h2>
            <p class="u-LineHeight2 u-MarginBottom50">Don't have an account. Please create your account</p>
        </div>
        <form method="post" action="{{ route('home.register') }}">
            {{ csrf_field() }}

            <div class="col-md-12">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="New Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Enter Password" required>
                </div>

                <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                    <input type="text" id="datepicker" name="birth_date" class="form-control" placeholder="Date of Birth (yyyy/mm/dd)" value="{{ old('birth_date') }}" required>
                    @if ($errors->has('birth_date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('birth_date') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="pull-left u-MarginTop15 text-muted u-MarginRight10">
                        <input type="checkbox" name="terms" required /> I agree with the <a href="#">Terms and Conditions</a>
                    </div>

                    <button type="submit" class="btn btn-dark pull-right pull-left--xs u-xs-MarginTop20">Register Now</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
