@extends('site.layout')
@section('title', $category->name.' — Capture Media')

@section('content')
<section class="py-4 border-bottom">
  <div class="container">
    <h2 class="mb-0">{{ $category->name }}</h2>
    @if($category->description)
      <p class="text-muted mb-0">{{ $category->description }}</p>
    @endif
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h3 class="h6 text-uppercase text-muted mb-3"><i class="bi bi-newspaper me-2"></i>Articles</h3>
    <div class="row g-4">
      @forelse($posts as $post)
        <div class="col-12 col-md-6 col-lg-4">
          <article class="card h-100">
            @if($post->cover_image)
              <a href="{{ route('posts.show',$post->slug) }}">
                <img src="{{ Storage::url($post->cover_image) }}" class="card-img-top" alt="{{ $post->title }}">
              </a>
            @endif
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{ route('posts.show',$post->slug) }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
              </h5>
              <p class="card-text text-muted">{{ $post->excerpt ?: Str::limit(strip_tags($post->body), 120) }}</p>
            </div>
          </article>
        </div>
      @empty
        <p class="text-muted">Aucun article dans cette catégorie.</p>
      @endforelse
    </div>

    <div class="mt-4">
      {{ $posts->appends(['videos_page' => request('videos_page')])->links() }}
    </div>
  </div>
</section>

<section class="py-5 bg-light-subtle">
  <div class="container">
    <h3 class="h6 text-uppercase text-muted mb-3"><i class="bi bi-play-btn me-2"></i>Vidéos</h3>
    <div class="row g-4">
      @forelse($videos as $video)
        <div class="col-12 col-md-6 col-lg-4">
          <article class="card h-100">
            @if($video->thumbnail)
              <a href="{{ route('videos.show',$video->slug) }}">
                <img src="{{ Storage::url($video->thumbnail) }}" class="card-img-top" alt="{{ $video->title }}">
              </a>
            @endif
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{ route('videos.show',$video->slug) }}" class="text-decoration-none text-dark">{{ $video->title }}</a>
              </h5>
              <p class="card-text text-muted">{{ Str::limit(strip_tags($video->description), 120) }}</p>
            </div>
          </article>
        </div>
      @empty
        <p class="text-muted">Aucune vidéo dans cette catégorie.</p>
      @endforelse
    </div>

    <div class="mt-4">
      {{ $videos->appends(['page' => request('page')])->links() }}
    </div>
  </div>
</section>
@endsection
