@extends('site.layout')
@section('title','Accueil — Capture Media')

@section('content')

  {{-- Bandeau / Hero léger --}}
  <section class="py-4 border-bottom">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Dernières publications</h2>
        <div class="d-none d-sm-flex gap-2">
          <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary btn-sm">Tous les articles</a>
          <a href="{{ route('videos.index') }}" class="btn btn-outline-secondary btn-sm">Toutes les vidéos</a>
        </div>
      </div>
    </div>
  </section>

  {{-- Articles récents --}}
  <section class="py-5">
    <div class="container">
      <h3 class="h5 mb-3"><i class="bi bi-newspaper me-2"></i>Articles récents</h3>
      <div class="row g-4">
        @forelse($latest_posts as $post)
          <div class="col-12 col-sm-6 col-lg-4">
            <article class="card h-100">
              @if($post->cover_image)
                <a href="{{ route('posts.show',$post->slug) }}">
                  <img src="{{ Storage::url($post->cover_image) }}" class="card-img-top" alt="{{ $post->title }}">
                </a>
              @endif
              <div class="card-body">
                <a href="{{ route('category.show', $post->category->slug) }}" class="badge bg-secondary-subtle text-secondary text-decoration-none mb-2">
                  {{ $post->category?->name }}
                </a>
                <h5 class="card-title">
                  <a href="{{ route('posts.show',$post->slug) }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                </h5>
                <p class="card-text text-muted mb-2">{{ $post->excerpt ?: Str::limit(strip_tags($post->body), 120) }}</p>
                <small class="text-muted">
                  <i class="bi bi-calendar2 me-1"></i>{{ $post->published_at?->format('d/m/Y') }} —
                  <i class="bi bi-person ms-2 me-1"></i>{{ $post->author?->name }}
                </small>
              </div>
            </article>
          </div>
        @empty
          <p class="text-muted">Aucun article publié pour le moment.</p>
        @endforelse
      </div>
    </div>
  </section>

  {{-- Vidéos récentes --}}
  <section class="py-5 bg-light-subtle">
    <div class="container">
      <h3 class="h5 mb-3"><i class="bi bi-play-btn me-2"></i>Vidéos récentes</h3>
      <div class="row g-4">
        @forelse($latest_videos as $video)
          <div class="col-12 col-sm-6 col-lg-4">
            <article class="card h-100">
              @if($video->thumbnail)
                <a href="{{ route('videos.show',$video->slug) }}">
                  <img src="{{ Storage::url($video->thumbnail) }}" class="card-img-top" alt="{{ $video->title }}">
                </a>
              @endif
              <div class="card-body">
                <a href="{{ route('category.show', $video->category->slug) }}" class="badge bg-secondary-subtle text-secondary text-decoration-none mb-2">
                  {{ $video->category?->name }}
                </a>
                <h5 class="card-title">
                  <a href="{{ route('videos.show',$video->slug) }}" class="text-decoration-none text-dark">{{ $video->title }}</a>
                </h5>
                <small class="text-muted">
                  <i class="bi bi-calendar2 me-1"></i>{{ $video->published_at?->format('d/m/Y') }} —
                  <i class="bi bi-person ms-2 me-1"></i>{{ $video->author?->name }}
                </small>
              </div>
            </article>
          </div>
        @empty
          <p class="text-muted">Aucune vidéo publiée pour le moment.</p>
        @endforelse
      </div>
    </div>
  </section>

  {{-- Sponsors --}}
  <section class="py-5">
    <div class="container">
      <h3 class="h5 mb-3"><i class="bi bi-award me-2"></i>Sponsors</h3>
      <div class="row g-3 align-items-center">
        @forelse($sponsors as $s)
          <div class="col-4 col-sm-3 col-md-2 text-center">
            @if($s->image)
              <a href="{{ $s->url ?? '#' }}" target="_blank" rel="noopener">
                <img src="{{ Storage::url($s->image) }}" class="img-fluid rounded" alt="{{ $s->name }}">
              </a>
            @else
              <span class="small text-muted">{{ $s->name }}</span>
            @endif
          </div>
        @empty
          <p class="text-muted">Aucun sponsor actif.</p>
        @endforelse
      </div>
    </div>
  </section>

@endsection
