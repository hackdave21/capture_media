@extends('site.layout')
@section('title','Recherche — Capture Media')

@section('content')
<section class="py-4 border-bottom">
  <div class="container">
    <h2 class="mb-0">Résultats de recherche</h2>
    <form action="{{ route('search') }}" method="GET" class="mt-3" role="search">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Tapez un mot-clé..." value="{{ $q }}">
        <button class="btn btn-primary" type="submit"><i class="bi bi-search me-1"></i>Rechercher</button>
      </div>
    </form>
  </div>
</section>

<section class="py-5">
  <div class="container">
    @if(!$q)
      <p class="text-muted">Saisissez un mot-clé ci-dessus.</p>
    @else
      <h3 class="h6 text-uppercase text-muted mb-3"><i class="bi bi-newspaper me-2"></i>Articles</h3>
      <div class="row g-4 mb-5">
        @forelse($posts as $post)
          <div class="col-12 col-md-6 col-lg-4">
            <article class="card h-100">
              @if($post->cover_image)
                <a href="{{ route('posts.show',$post->slug) }}">
                  <img src="{{ Storage::url($post->cover_image) }}" class="card-img-top" alt="{{ $post->title }}">
                </a>
              @endif
              <div class="card-body">
                <a href="{{ route('category.show',$post->category->slug) }}" class="badge bg-secondary-subtle text-secondary text-decoration-none mb-2">
                  {{ $post->category?->name }}
                </a>
                <h5 class="card-title">
                  <a href="{{ route('posts.show',$post->slug) }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                </h5>
                <p class="card-text text-muted">{{ $post->excerpt ?: Str::limit(strip_tags($post->body), 120) }}</p>
              </div>
            </article>
          </div>
        @empty
          <p class="text-muted">Aucun article ne correspond à “{{ $q }}”.</p>
        @endforelse
      </div>

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
                <a href="{{ route('category.show',$video->category->slug) }}" class="badge bg-secondary-subtle text-secondary text-decoration-none mb-2">
                  {{ $video->category?->name }}
                </a>
                <h5 class="card-title">
                  <a href="{{ route('videos.show',$video->slug) }}" class="text-decoration-none text-dark">{{ $video->title }}</a>
                </h5>
                <p class="card-text text-muted">{{ Str::limit(strip_tags($video->description), 120) }}</p>
              </div>
            </article>
          </div>
        @empty
          <p class="text-muted">Aucune vidéo ne correspond à “{{ $q }}”.</p>
        @endforelse
      </div>
    @endif
  </div>
</section>
@endsection
