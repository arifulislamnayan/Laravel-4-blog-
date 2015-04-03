@section('content')
<h3> Add a blog post </h3>
<form action="{{ URL::route('newPost')}}" method="post">
	<div class="form-group">
    	<input type="text" name="title" class="form-control" placeholder="Title"/>

	</div>
	<div class="form-group">
    	<textarea  name="content" class="form-control" placeholder="Describe yourself here..."> </textarea>

	</div>
	<input type="submit" class="btn btn-primary"/>
</form>

@stop