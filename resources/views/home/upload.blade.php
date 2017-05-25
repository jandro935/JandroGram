@extends ('home.layout')

@section('content')
    <div id="content-block" class="work-box">
        <div class="work-area">
            <div class="container be-detail-container">
                <h5 class="content-title">Add Project</h5>
                <div class="row be-large-post large-area">
                    <form role="form" method="POST" action="" enctype="multipart/form-data" novalidate>
                        {{ csrf_field() }}

                        <div class="col-xs-12 col-md-9">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                @if ($errors->has('title'))
                                    <input type="text" id="title" name="title" class="be-error-input" value="{{ old('title') }}" required>
                                    <p>{{ $errors->first('title') }}</p>
                                @else
                                    <input type="text" id="title" name="title" class="form-input" value="{{ old('title') }}" required>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="summary">Summary:</label>
                                @if ($errors->has('summary'))
                                    <input type="text" id="summary" name="summary" class="be-error-input" value="{{ old('summary') }}" required>
                                    <p>{{ $errors->first('summary') }}</p>
                                @else
                                    <input type="text" id="summary" name="summary" class="form-input" value="{{ old('summary') }}" required>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="category">Category:</label>
                                @if ($errors->has('category'))
                                    <input type="text" id="category" name="category" class="be-error-input" value="{{ old('category') }}" required>
                                    <p>{{ $errors->first('category') }}</p>
                                @else
                                    <input type="text" id="category" name="category" class="form-input" value="{{ old('category') }}" placeholder="Type category..." required>
                                @endif
                                <input type="hidden" name="category-id" class="category-id" value="">
                            </div>
                            <div class="form-group">
                                <label for="comment">Description:</label>
                                @if ($errors->has('description'))
                                    {{--<textarea id="description" name="description" class="ckeditor be-error-input" rows="10" required>{{ old('description') }}</textarea>--}}
                                    <textarea id="description" name="description" class="be-error-input" rows="10" required>{{ old('description') }}</textarea>
                                    <p>{{ $errors->first('description') }}</p>
                                @else
                                    {{--<textarea id="description" name="description" class="ckeditor form-input" rows="10" required>{{ old('description') }}</textarea>--}}
                                    <textarea id="description" name="description" class="form-input" rows="10" required>{{ old('description') }}</textarea>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 st-col left-feild">
                            <div class="be-vidget behance-style">
                                <div class="form-group">
                                    <label for="image">Add featured image:</label>
                                    <div class="upload-zone">
                                        <i class="fa center-i fa-cloud-upload"></i>
                                        <input type="file" id="image-media" name="image" class="file"  />

                                        <img class="preview-image" src="#" width="260" height="198">
                                    </div>

                                    @if ($errors->has('image'))
                                        <p>{{ $errors->first('image') }}</p>
                                    @endif
                                    {{-- @TODO: Maquetar !! --}}
                                    <a class="btn color-1 size-2 hover-1 change-image-button">change</a>
                                </div>

                                <div class="form-group">
                                    <label for="status">Project Status:</label>
                                    <div class="form-checkbox style-2">
                                        <input type="radio" name="status" value="idea" {{ old('status') == 'idea' ? 'checked' : '' }} />
                                        <span class="check"><i class="fa fa-check"></i></span>
                                        <i class="fa fa-battery-empty" aria-hidden="true"></i>
                                        <label>Idea</label>
                                    </div>
                                    <div class="form-checkbox style-2">
                                        <input type="radio" name="status" value="in progress" {{ old('status') == 'in progress' ? 'checked' : '' }} />
                                        <span class="check"><i class="fa fa-check"></i></span>
                                        <i class="fa fa-battery-half" aria-hidden="true"></i>
                                        <label>In Progress</label>
                                    </div>
                                    <div class="form-checkbox style-2">
                                        <input type="radio" name="status" value="finalized" {{ old('status') == 'finalized' ? 'checked' : '' }} />
                                        <span class="check"><i class="fa fa-check"></i></span>
                                        <i class="fa fa-battery-full" aria-hidden="true"></i>
                                        <label>Finalized</label>
                                    </div>
                                    @if ($errors->has('status'))
                                        <p>{{ $errors->first('status') }}</p>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="privacy">Project Privacy</label>
                                    <label class="switch">
                                        <input type="checkbox" name="privacy" value="private" {{ old('privacy') == 'private' ? 'checked' : '' }}>
                                        <div class="slider round"></div>
                                    </label>
                                </div>

                                <div class="be-drop-down color-3">
                                    <span class="be-dropdown-content"> More information </span>
                                    <ul class="drop-down-list">
                                        <li>
                                            <a>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                culpa qui officia deserunt mollit anim id est laborum."</a>
                                        </li>
                                    </ul>
                                </div>
                                {{-- @TODO: Maquetar !! (Esta clase no puede llevar estas medidas !!) --}}
                                <div class="btnsave">
                                    <button class="btn color-1 size-1 hover-3" type="submit" value="Save">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
