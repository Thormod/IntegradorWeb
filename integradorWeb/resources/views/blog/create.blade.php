@extends('layouts.app')

@section('content')

  <div class="row">
  <div class="col-md-12">
    <h1>Create data</h1>
  </div>
  </div>

  <div class="row" style="margin: 15px;">
    <div class="col-md-12">
      <form class="" action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group {{ ($errors->has('title')) ? $errors->first('title') : '' }}">
          <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title Here...">

          @if ($errors->has('title'))
              <span class="help-block">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
          @endif

        </div>
        <div class="form-group {{ ($errors->has('content_text')) ? $errors->first('content_text') : '' }}">
          <input type="text" id="content_text" name="content_text" class="form-control" placeholder="Enter description Here...">

          @if ($errors->has('content_text'))
              <span class="help-block">
                  <strong>{{ $errors->first('content_text') }}</strong>
              </span>
          @endif

        </div>

        <div class="form-group {{ ($errors->has('tag')) ? $errors->first('tag') : '' }}">
          <input type="text" id="tag" name="tag" class="form-control" placeholder="Enter tag Here...">

          @if ($errors->has('tag'))
              <span class="help-block">
                  <strong>{{ $errors->first('tag') }}</strong>
              </span>
          @endif

        </div>

        <div class="form-group {{ ($errors->has('cover')) ? $errors->first('cover') : '' }}">
          <label>Cover</label>
					<input type="file" name="cover" id="cover"/>
          @if ($errors->has('cover'))
              <span class="help-block">
                  <strong>{{ $errors->first('cover') }}</strong>
              </span>
          @endif
				</div>


        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="name" value="Save">
        </div>

      </form>
    </div>
  </div>

@endsection
