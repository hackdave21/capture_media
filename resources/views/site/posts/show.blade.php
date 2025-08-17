@extends('site.layout')
@section('title', $post->title.' — Capture Media')

@section('content')
<section class="py-4 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center gap-3">
      <a href="{{ route('category.show',$post->category->slug) }}" class="badge bg-secondary-subtle text-secondary text-decoration-none">
        {{ $post->category?->name }}
      </a>
      <small class="text-muted"><i class="bi bi-calendar2 me-1"></i>{{ $post->published_at?->format('d/m/Y') }}</small>
      <small class="text-muted"><i class="bi bi-person me-1"></i>{{ $post->author?->name }}</small>
    </div>
    <h1 class="mt-3 mb-0">{{ $post->title }}</h1>
  </div>
</section>

<section class="py-5">
  <div class="container">
    @if($post->cover_image)
      <img src="{{ Storage::url($post->cover_image) }}" class="img-fluid rounded mb-4" alt="{{ $post->title }}">
    @endif

    <article class="content">
      {!! nl2br(e($post->body)) !!}
    </article>

    {{-- Articles liés (même catégorie) --}}
    @php
      $related = $post->category
        ? $post->category->posts()->published()->where('id','!=',$post->id)->latest('published_at')->take(3)->get()
        : collect();
    @endphp
    @if($related->count())
      <div class="mt-5">
        <h5 class="mb-3">À lire aussi</h5>
        <div class="row g-4">
          @foreach($related as $rp)
            <div class="col-12 col-md-4">
              <article class="card h-100">
                @if($rp->cover_image)
                  <a href="{{ route('posts.show',$rp->slug) }}">
                    <img src="{{ Storage::url($rp->cover_image) }}" class="card-img-top" alt="{{ $rp->title }}">
                  </a>
                @endif
                <div class="card-body">
                  <h6 class="card-title"><a class="text-decoration-none" href="{{ route('posts.show',$rp->slug) }}">{{ $rp->title }}</a></h6>
                </div>
              </article>
            </div>
          @endforeach
        </div>
      </div>
    @endif
  </div>
</section>
@endsection
