@extends('site.layout')
@section('title', 'Accueil — Capture Media')

@section('content')

<!-- Hero Section avec animation -->
<section class="hero-section position-relative overflow-hidden py-5" style="background: black; min-height: 70vh;">
  <div class="container">
    <div class="row align-items-center min-vh-50">
      <div class="col-lg-6 text-white">
        <h1 class="display-4 fw-bold mb-4 animate-slide-in text-white">
          <i class="bi bi-broadcast text-warning me-3"></i>
          Capture Media
        </h1>
        <p class="lead mb-4 animate-fade-in-up" style="animation-delay: 0.2s;">
          Votre source d'information de référence pour l'Afrique. Découvrez les dernières actualités, analyses approfondies et reportages exclusifs qui façonnent le continent africain.
        </p>
        <div class="d-flex flex-wrap gap-3 mb-4 animate-fade-in-up" style="animation-delay: 0.4s;">
          <div class="d-flex align-items-center text-white-50">
            <i class="bi bi-globe-africa-europe fs-5 me-2 text-warning"></i>
            <span>Couverture Panafricaine</span>
          </div>
          <div class="d-flex align-items-center text-white-50">
            <i class="bi bi-lightning-charge fs-5 me-2 text-warning"></i>
            <span>Info en temps réel</span>
          </div>
          <div class="d-flex align-items-center text-white-50">
            <i class="bi bi-award fs-5 me-2 text-warning"></i>
            <span>Analyses expertes</span>
          </div>
        </div>
        <div class="animate-fade-in-up" style="animation-delay: 0.6s;">
          <a href="{{ route('posts.index') }}" class="btn btn-warning btn-lg me-3 mb-2">
            <i class="bi bi-newspaper me-2"></i>Découvrir les Articles
          </a>
          <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg mb-2">
            <i class="bi bi-info-circle me-2"></i>En savoir plus
          </a>
        </div>
      </div>
      <div class="col-lg-6 text-center animate-float">
        <div class="position-relative">
          <i class="bi bi-camera-reels display-1 text-warning opacity-75"></i>
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
            <div class="bg-white bg-opacity-10 rounded-circle p-4 backdrop-blur">
              <i class="bi bi-play-fill display-4 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Particles d'animation -->
  <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden">
    <div class="particle particle-1"></div>
    <div class="particle particle-2"></div>
    <div class="particle particle-3"></div>
    <div class="particle particle-4"></div>
    <div class="particle particle-5"></div>
  </div>
</section>

<!-- Statistiques animées -->
<section class="py-5 bg-light position-relative">
  <div class="container">
    <div class="row g-4">
      <div class="col-6 col-md-3 text-center">
        <div class="stats-card p-4 bg-white rounded-3 shadow-sm h-100 animate-on-scroll">
          <i class="bi bi-newspaper display-4 text-primary mb-3"></i>
          <h3 class="h2 mb-1 text-primary counter" data-target="500">0</h3>
          <p class="text-muted mb-0">Articles publiés</p>
        </div>
      </div>
      <div class="col-6 col-md-3 text-center">
        <div class="stats-card p-4 bg-white rounded-3 shadow-sm h-100 animate-on-scroll" style="animation-delay: 0.1s;">
          <i class="bi bi-play-btn display-4 text-success mb-3"></i>
          <h3 class="h2 mb-1 text-success counter" data-target="150">0</h3>
          <p class="text-muted mb-0">Vidéos exclusives</p>
        </div>
      </div>
      <div class="col-6 col-md-3 text-center">
        <div class="stats-card p-4 bg-white rounded-3 shadow-sm h-100 animate-on-scroll" style="animation-delay: 0.2s;">
          <i class="bi bi-people display-4 text-warning mb-3"></i>
          <h3 class="h2 mb-1 text-warning counter" data-target="10000">0</h3>
          <p class="text-muted mb-0">Lecteurs fidèles</p>
        </div>
      </div>
      <div class="col-6 col-md-3 text-center">
        <div class="stats-card p-4 bg-white rounded-3 shadow-sm h-100 animate-on-scroll" style="animation-delay: 0.3s;">
          <i class="bi bi-globe-africa-europe display-4 text-info mb-3"></i>
          <h3 class="h2 mb-1 text-info counter" data-target="54">0</h3>
          <p class="text-muted mb-0">Pays couverts</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Nos domaines d'expertise -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5 animate-on-scroll">
      <h2 class="display-5 fw-bold mb-3">
        <i class="bi bi-star text-warning me-3"></i>
        Nos Domaines d'Expertise
      </h2>
      <p class="lead text-muted">Une couverture complète de l'actualité africaine dans tous les secteurs clés</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="expertise-card text-center p-4 bg-white rounded-3 shadow-sm h-100 animate-on-scroll hover-lift">
          <div class="icon-circle bg-primary bg-opacity-10 rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-bank2 fs-1 text-primary"></i>
          </div>
          <h4 class="h5 mb-3">Politique & Gouvernance</h4>
          <p class="text-muted small">Analyses des enjeux politiques, élections, politiques publiques et gouvernance à travers le continent africain.</p>
          <div class="mt-3">
            <span class="badge bg-primary bg-opacity-10 text-primary me-1">Élections</span>
            <span class="badge bg-primary bg-opacity-10 text-primary me-1">Diplomatie</span>
            <span class="badge bg-primary bg-opacity-10 text-primary">Réformes</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="expertise-card text-center p-4 bg-white rounded-3 shadow-sm h-100 animate-on-scroll hover-lift" style="animation-delay: 0.1s;">
          <div class="icon-circle bg-success bg-opacity-10 rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-graph-up-arrow fs-1 text-success"></i>
          </div>
          <h4 class="h5 mb-3">Économie & Business</h4>
          <p class="text-muted small">Tendances économiques, entrepreneuriat, investissements et développement des marchés africains.</p>
          <div class="mt-3">
            <span class="badge bg-success bg-opacity-10 text-success me-1">Startups</span>
            <span class="badge bg-success bg-opacity-10 text-success me-1">Finance</span>
            <span class="badge bg-success bg-opacity-10 text-success">Commerce</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="expertise-card text-center p-4 bg-white rounded-3 shadow-sm h-100 animate-on-scroll hover-lift" style="animation-delay: 0.2s;">
          <div class="icon-circle bg-warning bg-opacity-10 rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-palette2 fs-1 text-warning"></i>
          </div>
          <h4 class="h5 mb-3">Culture & Société</h4>
          <p class="text-muted small">Arts, musique, littérature, traditions et évolutions sociales qui définissent l'identité africaine moderne.</p>
          <div class="mt-3">
            <span class="badge bg-warning bg-opacity-10 text-warning me-1">Arts</span>
            <span class="badge bg-warning bg-opacity-10 text-warning me-1">Musique</span>
            <span class="badge bg-warning bg-opacity-10 text-warning">Traditions</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="expertise-card text-center p-4 bg-white rounded-3 shadow-sm h-100 animate-on-scroll hover-lift" style="animation-delay: 0.3s;">
          <div class="icon-circle bg-info bg-opacity-10 rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-trophy fs-1 text-info"></i>
          </div>
          <h4 class="h5 mb-3">Sport & Loisirs</h4>
          <p class="text-muted small">Football, athlétisme, sports traditionnels et événements sportifs majeurs du continent africain.</p>
          <div class="mt-3">
            <span class="badge bg-info bg-opacity-10 text-info me-1">Football</span>
            <span class="badge bg-info bg-opacity-10 text-info me-1">CAN</span>
            <span class="badge bg-info bg-opacity-10 text-info">Olympiades</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Pourquoi nous choisir -->
<section class="py-5 bg-gradient-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 animate-on-scroll">
        <h2 class="display-6 fw-bold mb-4">
          <i class="bi bi-shield-check text-success me-3"></i>
          Pourquoi Capture Media ?
        </h2>
        <p class="lead mb-4">Notre engagement envers l'excellence journalistique et notre connaissance approfondie du continent africain font de nous votre source d'information de confiance.</p>

        <div class="row g-3">
          <div class="col-sm-6">
            <div class="d-flex align-items-start">
              <div class="flex-shrink-0">
                <i class="bi bi-check-circle-fill text-success fs-4"></i>
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="h6 mb-1">Journalisme de qualité</h5>
                <p class="text-muted small mb-0">Sources vérifiées et analyses approfondies par des experts locaux.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="d-flex align-items-start">
              <div class="flex-shrink-0">
                <i class="bi bi-clock-fill text-primary fs-4"></i>
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="h6 mb-1">Actualité en temps réel</h5>
                <p class="text-muted small mb-0">Suivi permanent des événements majeurs du continent.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="d-flex align-items-start">
              <div class="flex-shrink-0">
                <i class="bi bi-people-fill text-warning fs-4"></i>
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="h6 mb-1">Réseau pan-africain</h5>
                <p class="text-muted small mb-0">Correspondants dans tous les pays africains.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="d-flex align-items-start">
              <div class="flex-shrink-0">
                <i class="bi bi-device-mobile-fill text-info fs-4"></i>
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="h6 mb-1">Contenu multimédia</h5>
                <p class="text-muted small mb-0">Articles, vidéos, podcasts et infographies.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 text-center animate-on-scroll" style="animation-delay: 0.2s;">
        <div class="position-relative">
          <div class="bg-primary bg-opacity-10 rounded-circle p-5 d-inline-block">
            <i class="bi bi-gem display-1 text-primary"></i>
          </div>
          <div class="position-absolute top-0 start-50 translate-middle-x">
            <span class="badge bg-warning">Excellence</span>
          </div>
          <div class="position-absolute bottom-0 end-0">
            <span class="badge bg-success">Fiabilité</span>
          </div>
          <div class="position-absolute top-50 start-0 translate-middle-y">
            <span class="badge bg-info">Innovation</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Articles récents avec plus de style -->
<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div class="animate-on-scroll">
        <h2 class="display-6 fw-bold mb-2">
          <i class="bi bi-newspaper text-primary me-3"></i>
          Derniers Articles
        </h2>
        <p class="text-muted">Restez informés avec nos dernières publications</p>
      </div>
      <div class="d-none d-md-block animate-on-scroll">
        <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">
          <i class="bi bi-arrow-right me-2"></i>Voir tout
        </a>
      </div>
    </div>

    <div class="row g-4">
      @forelse($latest_posts as $index => $post)
      <div class="col-12 col-sm-6 col-lg-4">
        <article class="card h-100 border-0 shadow-sm hover-lift animate-on-scroll" style="animation-delay: {{ $index * 0.1 }}s;">
          @if($post->cover_image)
            <div class="position-relative overflow-hidden">
              <a href="{{ route('posts.show', $post->slug) }}">
                <img src="{{ Storage::url($post->cover_image) }}" class="card-img-top hover-zoom" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
              </a>
              <div class="position-absolute top-0 end-0 m-2">
                <span class="badge bg-dark bg-opacity-75">
                  <i class="bi bi-eye me-1"></i>Nouveau
                </span>
              </div>
            </div>
          @endif
          <div class="card-body d-flex flex-column">
            <div class="mb-2">
              <a href="{{ route('category.show', $post->category->slug) }}" class="badge bg-primary bg-opacity-10 text-primary text-decoration-none">
                <i class="bi bi-tag me-1"></i>{{ $post->category?->name }}
              </a>
            </div>
            <h5 class="card-title mb-3">
              <a href="{{ route('posts.show', $post->slug) }}" class="text-decoration-none text-dark hover-primary">{{ $post->title }}</a>
            </h5>
            <p class="card-text text-muted mb-3 flex-grow-1">{{ $post->excerpt ?: Str::limit(strip_tags($post->body), 120) }}</p>
            <div class="d-flex align-items-center justify-content-between text-muted small">
              <div class="d-flex align-items-center">
                <i class="bi bi-calendar3 me-1"></i>
                {{ $post->published_at?->format('d/m/Y') }}
              </div>
              <div class="d-flex align-items-center">
                <i class="bi bi-person-circle me-1"></i>
                {{ $post->author?->name }}
              </div>
            </div>
          </div>
        </article>
      </div>
      @empty
        <div class="col-12 text-center py-5">
          <i class="bi bi-newspaper display-1 text-muted mb-3"></i>
          <p class="text-muted">Aucun article publié pour le moment.</p>
          <p class="text-muted small">Revenez bientôt pour découvrir nos dernières actualités !</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

<!-- Vidéos récentes avec plus de style -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div class="animate-on-scroll">
        <h2 class="display-6 fw-bold mb-2">
          <i class="bi bi-play-circle text-danger me-3"></i>
          Vidéos Récentes
        </h2>
        <p class="text-muted">Découvrez nos reportages et analyses vidéo</p>
      </div>
      <div class="d-none d-md-block animate-on-scroll">
        <a href="{{ route('videos.index') }}" class="btn btn-outline-danger">
          <i class="bi bi-arrow-right me-2"></i>Voir tout
        </a>
      </div>
    </div>

    <div class="row g-4">
      @forelse($latest_videos as $index => $video)
      <div class="col-12 col-sm-6 col-lg-4">
        <article class="card h-100 border-0 shadow-sm hover-lift animate-on-scroll" style="animation-delay: {{ $index * 0.1 }}s;">
          @if($video->thumbnail)
            <div class="position-relative overflow-hidden">
              <a href="{{ route('videos.show', $video->slug) }}">
                <img src="{{ Storage::url($video->thumbnail) }}" class="card-img-top hover-zoom" alt="{{ $video->title }}" style="height: 200px; object-fit: cover;">
              </a>
              <div class="position-absolute top-50 start-50 translate-middle">
                <div class="bg-danger rounded-circle p-3 hover-scale">
                  <i class="bi bi-play-fill text-white fs-3"></i>
                </div>
              </div>
              <div class="position-absolute bottom-0 start-0 end-0 bg-gradient-dark p-2">
                <small class="text-white">
                  <i class="bi bi-play me-1"></i>Vidéo
                </small>
              </div>
            </div>
          @endif
          <div class="card-body d-flex flex-column">
            <div class="mb-2">
              <a href="{{ route('category.show', $video->category->slug) }}" class="badge bg-danger bg-opacity-10 text-danger text-decoration-none">
                <i class="bi bi-tag me-1"></i>{{ $video->category?->name }}
              </a>
            </div>
            <h5 class="card-title mb-3">
              <a href="{{ route('videos.show', $video->slug) }}" class="text-decoration-none text-dark hover-danger">{{ $video->title }}</a>
            </h5>
            <div class="d-flex align-items-center justify-content-between text-muted small mt-auto">
              <div class="d-flex align-items-center">
                <i class="bi bi-calendar3 me-1"></i>
                {{ $video->published_at?->format('d/m/Y') }}
              </div>
              <div class="d-flex align-items-center">
                <i class="bi bi-person-circle me-1"></i>
                {{ $video->author?->name }}
              </div>
            </div>
          </div>
        </article>
      </div>
      @empty
        <div class="col-12 text-center py-5">
          <i class="bi bi-camera-video display-1 text-muted mb-3"></i>
          <p class="text-muted">Aucune vidéo publiée pour le moment.</p>
          <p class="text-muted small">Nos premiers reportages vidéo arriveront bientôt !</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

<!-- Newsletter avec plus de style -->
<section class="py-5 bg-dark text-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 animate-on-scroll">
        <h2 class="display-6 fw-bold mb-3 text-white">
          <i class="bi bi-envelope-heart me-3"></i>
          Restez Connectés !
        </h2>
        <p class="lead mb-4">Inscrivez-vous à notre newsletter pour recevoir les dernières actualités africaines directement dans votre boîte mail.</p>
        <div class="d-flex flex-wrap gap-3 mb-4">
          <div class="d-flex align-items-center text-white-50">
            <i class="bi bi-check-circle me-2"></i>
            <span>Actualités quotidiennes</span>
          </div>
          <div class="d-flex align-items-center text-white-50">
            <i class="bi bi-check-circle me-2"></i>
            <span>Analyses exclusives</span>
          </div>
          <div class="d-flex align-items-center text-white-50">
            <i class="bi bi-check-circle me-2"></i>
            <span>Sans spam</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 animate-on-scroll" style="animation-delay: 0.2s;">
        <div class="card bg-white text-dark">
          <div class="card-body p-4">
            <form class="row g-3">
              <div class="col-12">
                <label for="newsletter-email" class="form-label">Votre adresse email</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                  </span>
                  <input type="email" class="form-control" id="newsletter-email" placeholder="votre@email.com" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="newsletter-consent" required>
                  <label class="form-check-label small text-muted" for="newsletter-consent">
                    J'accepte de recevoir la newsletter de Capture Media
                  </label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-warning w-100 btn-lg">
                  <i class="bi bi-send me-2"></i>S'inscrire maintenant
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sponsors avec plus de style -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5 animate-on-scroll">
      <h2 class="display-6 fw-bold mb-3">
        <i class="bi bi-award text-warning me-3"></i>
        Nos Partenaires
      </h2>
      <p class="text-muted">Ils nous font confiance pour promouvoir l'excellence africaine</p>
    </div>

    <div class="row g-4 align-items-center justify-content-center">
      @forelse($sponsors as $index => $s)
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
          <div class="sponsor-card p-3 bg-white rounded-3 shadow-sm hover-lift animate-on-scroll" style="animation-delay: {{ $index * 0.1 }}s;">
            @if($s->image)
              <a href="{{ $s->url ?? '#' }}" target="_blank" rel="noopener" class="d-block">
                <img src="{{ Storage::url($s->image) }}" class="img-fluid rounded hover-scale" alt="{{ $s->name }}" style="max-height: 60px; object-fit: contain;">
              </a>
            @else
              <div class="p-3">
                <span class="small text-muted fw-medium">{{ $s->name }}</span>
              </div>
            @endif
          </div>
        </div>
      @empty
        <div class="col-12 text-center py-4">
          <i class="bi bi-building display-1 text-muted mb-3"></i>
          <p class="text-muted">Aucun sponsor actif pour le moment.</p>
          <p class="text-muted small">Contactez-nous pour devenir partenaire !</p>
        </div>
      @endforelse
    </div>

    @if($sponsors->count() > 0)
    <div class="text-center mt-5">
      <p class="text-muted mb-3">Vous souhaitez devenir partenaire ?</p>
     
    </div>
    @endif
  </div>
</section>

<style>
/* Animations CSS */
@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
}

.animate-slide-in {
  animation: slideInLeft 0.8s ease-out;
}

.animate-fade-in-up {
  animation: fadeInUp 0.8s ease-out;
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}

.animate-on-scroll {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 0.8s ease-out forwards;
}

/* Hover effects */
.hover-lift {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.hover-zoom img {
  transition: transform 0.3s ease;
}

.hover-zoom:hover img {
  transform: scale(1.05);
}

.hover-scale {
  transition: transform 0.3s ease;
}

.hover-scale:hover {
  transform: scale(1.1);
}

.hover-primary:hover {
  color: var(--bs-primary) !important;
}

.hover-danger:hover {
  color: var(--bs-danger) !important;
}

/* Background gradients */
.bg-gradient-light {
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.bg-gradient-dark {
  background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%);
}

/* Particles animation */
.particle {
  position: absolute;
  background: rgba(255,255,255,0.1);
  border-radius: 50%;
  pointer-events: none;
}

.particle-1 {
  width: 10px;
  height: 10px;
  top: 10%;
  left: 10%;
  animation: float 4s ease-in-out infinite;
}

.particle-2 {
  width: 6px;
  height: 6px;
  top: 70%;
  left: 80%;
  animation: float 3s ease-in-out infinite reverse;
}

.particle-3 {
  width: 8px;
  height: 8px;
  top: 30%;
  left: 70%;
  animation: float 5s ease-in-out infinite;
}

.particle-4 {
  width: 4px;
  height: 4px;
  top: 80%;
  left: 20%;
  animation: float 3.5s ease-in-out infinite;
}

.particle-5 {
  width: 12px;
  height: 12px;
  top: 20%;
  left: 90%;
  animation: float 4.5s ease-in-out infinite reverse;
}

/* Stats counter effect */
.counter {
  font-weight: 700;
}

/* Custom buttons */
.btn-warning {
  background: linear-gradient(135deg, #ffc107, #ff8c00);
  border: none;
  box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
}

.btn-warning:hover {
  background: linear-gradient(135deg, #ff8c00, #ffc107);
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(255, 193, 7, 0.4);
}

/* Card enhancements */
.stats-card {
  transition: all 0.3s ease;
  border: 1px solid rgba(0,0,0,0.05);
}

.stats-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
}

.expertise-card {
  transition: all 0.3s ease;
  border: 1px solid rgba(0,0,0,0.05);
}

.expertise-card:hover {
  border-color: rgba(0,0,0,0.1);
}

.sponsor-card {
  transition: all 0.3s ease;
  border: 1px solid rgba(0,0,0,0.05);
}

.sponsor-card:hover {
  border-color: rgba(0,0,0,0.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .display-4 {
    font-size: 2rem;
  }

  .display-5 {
    font-size: 1.75rem;
  }

  .display-6 {
    font-size: 1.5rem;
  }

  .hero-section {
    min-height: 60vh !important;
  }

  .animate-on-scroll {
    opacity: 1;
    transform: none;
    animation: none;
  }
}

/* Loading animation for images */
img {
  opacity: 0;
  transition: opacity 0.3s ease;
}

img.loaded {
  opacity: 1;
}

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>

<script>
// Animation des compteurs
document.addEventListener('DOMContentLoaded', function() {
  // Observer pour les animations au scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, observerOptions);

  // Observer tous les éléments avec animation
  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    observer.observe(el);
  });

  // Animation des compteurs
  function animateCounter(element, target, duration = 2000) {
    let start = 0;
    const increment = target / (duration / 16);

    function updateCounter() {
      start += increment;
      if (start < target) {
        element.textContent = Math.floor(start);
        requestAnimationFrame(updateCounter);
      } else {
        element.textContent = target;
      }
    }

    updateCounter();
  }

  // Observer pour les compteurs
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        const target = parseInt(counter.getAttribute('data-target'));
        animateCounter(counter, target);
        counterObserver.unobserve(counter);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.counter').forEach(counter => {
    counterObserver.observe(counter);
  });

  // Effet de chargement des images
  document.querySelectorAll('img').forEach(img => {
    if (img.complete) {
      img.classList.add('loaded');
    } else {
      img.addEventListener('load', function() {
        this.classList.add('loaded');
      });
    }
  });

  // Animation du formulaire newsletter
  const newsletterForm = document.querySelector('section.bg-primary form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const button = this.querySelector('button[type="submit"]');
      const originalText = button.innerHTML;

      // Animation de chargement
      button.innerHTML = '<i class="bi bi-arrow-clockwise me-2 spin"></i>Inscription en cours...';
      button.disabled = true;

      // Simulation d'envoi (remplacer par vraie logique)
      setTimeout(() => {
        button.innerHTML = '<i class="bi bi-check-circle me-2"></i>Inscrit avec succès !';
        button.classList.remove('btn-primary');
        button.classList.add('btn-success');

        setTimeout(() => {
          button.innerHTML = originalText;
          button.disabled = false;
          button.classList.remove('btn-success');
          button.classList.add('btn-primary');
          this.reset();
        }, 3000);
      }, 2000);
    });
  }

  // Smooth scroll pour les liens internes
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Parallax léger pour le hero
  window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('.hero-section');
    if (hero && scrolled < hero.offsetHeight) {
      hero.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
  });

  // Animation CSS pour le spinner
  const style = document.createElement('style');
  style.textContent = `
    .spin {
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
  `;
  document.head.appendChild(style);
});
</script>

@endsection
