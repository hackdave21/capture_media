@extends('admin.app')

@section('title', 'Tableau de bord')

@section('content')
  {{-- Titre de page --}}
  <div class="col-12 mb-3">
    <div class="d-flex align-items-center justify-content-between">
      <h4 class="mb-0">Tableau de bord</h4>
      {{-- (optionnel) bouton action rapide
      <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
        <i class="ti ti-plus me-1"></i>Nouveau post
      </a>
      --}}
    </div>
  </div>

  {{-- Cartes de stats — ligne 1 --}}
  <div class="col-12 col-sm-6 col-lg-3 mb-4">
    <div class="card h-100">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-1 text-muted">Articles</p>
            <h4 class="mb-0">{{ $posts_count ?? 0 }}</h4>
            @isset($posts_published_count)
              <small class="text-muted">Publiés : {{ $posts_published_count }}</small>
            @endisset
          </div>
          <div class="rounded-2 p-3 bg-light">
            <i class="ti ti-article fs-5"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-lg-3 mb-4">
    <div class="card h-100">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-1 text-muted">Vidéos</p>
            <h4 class="mb-0">{{ $videos_count ?? 0 }}</h4>
            @isset($videos_published_count)
              <small class="text-muted">Publiées : {{ $videos_published_count }}</small>
            @endisset
          </div>
          <div class="rounded-2 p-3 bg-light">
            <i class="ti ti-player-play fs-5"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-lg-3 mb-4">
    <div class="card h-100">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-1 text-muted">Catégories</p>
            <h4 class="mb-0">{{ $categories_count ?? 0 }}</h4>
            @isset($categories_active_count)
              <small class="text-muted">Actives : {{ $categories_active_count }}</small>
            @endisset
          </div>
          <div class="rounded-2 p-3 bg-light">
            <i class="ti ti-category fs-5"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-lg-3 mb-4">
    <div class="card h-100">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-1 text-muted">Sponsors</p>
            <h4 class="mb-0">{{ $sponsors_count ?? 0 }}</h4>
            @isset($sponsors_active_count)
              <small class="text-muted">Actifs : {{ $sponsors_active_count }}</small>
            @endisset
          </div>
          <div class="rounded-2 p-3 bg-light">
            <i class="ti ti-building-skyscraper fs-5"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Cartes optionnelles — affichées seulement si les variables existent --}}
  @isset($pending_posts_count)
  <div class="col-12 col-sm-6 col-lg-3 mb-4">
    <div class="card h-100">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-1 text-muted">En attente</p>
            <h4 class="mb-0">{{ $pending_posts_count }}</h4>
            <small class="text-muted">Articles à publier</small>
          </div>
          <div class="rounded-2 p-3 bg-light">
            <i class="ti ti-clock-hour-4 fs-5"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endisset

  @if(isset($today_publications_count) || isset($today_posts_count) || isset($today_videos_count))
  <div class="col-12 col-sm-6 col-lg-3 mb-4">
    <div class="card h-100">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-1 text-muted">Aujourd'hui</p>
            <h4 class="mb-0">{{ $today_publications_count ?? (($today_posts_count ?? 0) + ($today_videos_count ?? 0)) }}</h4>
            <small class="text-muted">Articles : {{ $today_posts_count ?? 0 }} • Vidéos : {{ $today_videos_count ?? 0 }}</small>
          </div>
          <div class="rounded-2 p-3 bg-light">
            <i class="ti ti-calendar-event fs-5"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif

  @isset($users_count)
  <div class="col-12 col-sm-6 col-lg-3 mb-4">
    <div class="card h-100">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-1 text-muted">Utilisateurs</p>
            <h4 class="mb-0">{{ $users_count }}</h4>
            <small class="text-muted">Comptes enregistrés</small>
          </div>
          <div class="rounded-2 p-3 bg-light">
            <i class="ti ti-users fs-5"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endisset

  @if(isset($posts_count) && isset($videos_count))
  <div class="col-12 col-sm-6 col-lg-3 mb-4">
    <div class="card h-100">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <p class="mb-1 text-muted">Contenu total</p>
            <h4 class="mb-0">{{ ($posts_count ?? 0) + ($videos_count ?? 0) }}</h4>
            <small class="text-muted">Articles + Vidéos</small>
          </div>
          <div class="rounded-2 p-3 bg-light">
            <i class="ti ti-chart-bar fs-5"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
@endsection
