
<article>
<header>
<h2>{{ $post->title }}</h2>
</header>


<p> Posted {{ $post->created_at->diffForHumans() }}</p>

<div class="content">
	{{ $post->content }}


</div>

</br>

<!-- <footer>
<p> Posted {{ $post->created_at->diffForHumans() }}</p>

</footer> -->

 </article>
