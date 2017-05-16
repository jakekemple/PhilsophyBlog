<!-- Section -->
  <section id="">
    <header class="major">
      <h2>Posts</h2>
    </header>
    <div class="posts">

  @foreach($posts as $post)
  <article>
  <!-- <a href="#" class="image"><img src="{{ theme('images/pic01.jpg') }}" alt="" /></a> -->
  <h3><a href="{{ route('blog.post', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h3>
  <p>Posted by {{ $post->author->name }} on {{ $post->published_date }}</p>
  </article>
  @endforeach

</div>
</section>

{!! $posts->render() !!}
