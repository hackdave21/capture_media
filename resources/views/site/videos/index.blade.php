@extends('site.layout')
@section('title','Vidéos — Capture Media')

@section('content')
<section class="py-4 border-bottom">
  <div class="container d-flex justify-content-between align-items-center">
    <h2 class="mb-0">Vidéos</h2>
    <form action="{{ route('search') }}" method="GET" class="d-none d-sm-flex" role="search">
      <input type="text" name="q" class="form-control" placeholder="Recherche de vidéos..." value="{{ request('q') }}">
    </form>
  </div>
</section>

<section class="py-5">
  <div class="container">
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
              <small class="text-muted"><i class="bi bi-calendar2 me-1"></i>{{ $video->published_at?->format('d/m/Y') }}</small>
            </div>
          </article>
        </div>
      @empty
        <p class="text-muted">Aucune vidéo trouvée.</p>
      @endforelse
    </div>

    <div class="mt-4">
      {{ $videos->links() }}
    </div>
  </div>
</section>
@endsection
