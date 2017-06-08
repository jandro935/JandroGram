@extends ('home.layout')

@section ('content')

    @include ('home.partials.header')

    <div class="text-center u-MarginTop95 u-MarginBottom60">
        <h2 class="Heading-wing">Form <strong>01</strong></h2>
    </div>
    <div class="container">
        <div class="row u-MarginBottom70">
            <form method="post" action="{{ route('upload.post') }}" enctype="multipart/form-data" novalidate>
                {{ csrf_field() }}

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" class="form-control form-control--shadow" name="image" required>
                    </div>

                    <div class="form-group select-wrapper">
                        <select class="form-control form-control--light u-Rounded" name="state" required>
                            <option>Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control form-control--shadow" name="description" rows="" placeholder="Description">
                            {{ old('description') }}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient btn--alien btn-block">Upload</button>
                </div>
            </form>
        </div>
    </div>

    @include ('home.partials.footer')

@endsection
