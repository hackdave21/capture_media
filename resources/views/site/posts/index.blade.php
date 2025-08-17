@extends('site.layout')
@section('title','Articles — Capture Media')

@section('content')
<section class="py-4 border-bottom">
  <div class="container d-flex justify-content-between align-items-center">
    <h2 class="mb-0">Articles</h2>
    <form action="{{ route('search') }}" method="GET" class="d-none d-sm-flex" role="search">
      <input type="text" name="q" class="form-control" placeholder="Recherche d’articles..." value="{{ request('q') }}">
    </form>
  </div>
</section>

<section class="py-5">
  <div class="container">
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
              <a href="{{ route('category.show',$post->category->slug) }}" class="badge bg-secondary-subtle text-secondary text-decoration-none mb-2">
                {{ $post->category?->name }}
              </a>
              <h5 class="card-title">
                <a href="{{ route('posts.show',$post->slug) }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
              </h5>
              <p class="card-text text-muted">{{ $post->excerpt ?: Str::limit(strip_tags($post->body), 120) }}</p>
              <small class="text-muted"><i class="bi bi-calendar2 me-1"></i>{{ $post->published_at?->format('d/m/Y') }}</small>
            </div>
          </article>
        </div>
      @empty
        <p class="text-muted">Aucun article trouvé.</p>
      @endforelse
    </div>

    <div class="mt-4">
      {{ $posts->links() }}
    </div>
  </div>
</section>
@endsection
