<div class="col-md-6">
    <div class="u-BoxShadow40 u-Padding30 u-xs-MarginBottom30 u-sm-MarginBottom30">
        <div class="col-md-12">
            <h2 class="u-xs-FontSize40 u-Weight300 u-MarginTop50 u-xs-MarginTop0 u-MarginBottom15">Sign In</h2>
            <p class="u-LineHeight2 u-MarginBottom50">Enter your information below to sign in</p>
        </div>
        <form method="post" action="{{ route('home.login') }}">
            {{ csrf_field() }}

            <div class="col-md-12 u-MarginBottom100 u-xs-MarginBottom0">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>

                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <a href="#" class="pull-left u-MarginTop15 text-muted u-MarginRight10">Forgot Password ?</a>
                    <button type="submit" class="btn btn-primary pull-right">Sign In</button>
                </div>
            </div>
            <div class="clearfix"></div>

        </form>
    </div>
</div>
