@extends ('master')

@section ('content')
	{!! Form::open(['route'=>['articles.update', $article->id], 'method'=>'put']) !!}

		<legend> Edit Article </legend>

		<div class="form-group">
			<label for="">Title</label>
		    <input type="text" class="form-control" value=" {{ $article->title }}"    name="title" >
		</div>

		<div class="form-group">
			<label for="">Body</label>
		    <textarea class="form-control" rows="3" name="body">{{$article->body}}</textarea>

		</div>
		<button type="submit" class="btn btn-primary"> Submit </button>

	{!! Form::close() !!}
@stop