@extends ('home.layout')

@section ('content')

    @include ('home.partials.header')

    <div class="text-center u-MarginTop95 u-MarginBottom60">
        <h2 class="Heading-wing">Form <strong>01</strong></h2>
    </div>
    <div class="container">
        <div class="row u-MarginBottom70">
            <form>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control--shadow" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control--shadow" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control form-control--shadow" placeholder="Phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control form-control--shadow" rows="" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient btn--alien btn-block">Send Message</button>
                </div>
            </form>
        </div>
        <div class="row u-MarginBottom100">
            <form>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" rows="" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient btn--alien btn-block">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    @include ('home.partials.footer')

@endsection
