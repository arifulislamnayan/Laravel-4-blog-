@section('content')
 <article>
<header>
<h2>{{ $post->title }}</h2>
</header>
<div class="content">
	{{ $post->content }}


</div>

</br>

<footer>
<p> Posted {{ $post->created_at->diffForHumans() }}</p>

</footer>

 </article>


@stop