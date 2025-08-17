@php
  use App\Models\Category;
  use App\Models\Sponsor;

  $footerCategories = Category::where('is_active', true)->orderBy('name')->take(8)->get();
  $footerSponsors  = Sponsor::where('is_active', true)->latest('id')->take(8)->get();
@endphp

<footer id="footer" class="footer">
  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center text-decoration-none">
          <span class="sitename">Capture Media</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Lomé, Togo</p>
          <p class="mt-3"><strong>Téléphone:</strong> <span>+228 00 00 00 00</span></p>
          <p><strong>Email:</strong> <span>contact@capturemedia.tg</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Liens utiles</h4>
        <ul>
          <li><a href="{{ route('home') }}">Accueil</a></li>
          <li><a href="{{ route('posts.index') }}">Articles</a></li>
          <li><a href="{{ route('videos.index') }}">Vidéos</a></li>
          <li><a href="{{ route('search') }}">Recherche</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Catégories</h4>
        <ul>
          @foreach($footerCategories as $cat)
            <li><a href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a></li>
          @endforeach
        </ul>
      </div>

      <div class="col-lg-4 col-md-12">
        <h4>Sponsors actifs</h4>
        <div class="row g-3">
          @forelse($footerSponsors as $s)
            <div class="col-4 col-sm-3">
              @if($s->image)
                <a href="{{ $s->url ?? '#' }}" target="_blank" class="d-inline-block">
                  <img src="{{ Storage::url($s->image) }}" class="img-fluid rounded" alt="{{ $s->name }}">
                </a>
              @else
                <span class="small text-muted">{{ $s->name }}</span>
              @endif
            </div>
          @empty
            <div class="col-12 small text-muted">Aucun sponsor actif.</div>
          @endforelse
        </div>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>{{ date('Y') }}</span> <strong class="px-1 sitename">Capture Media</strong> <span>Tous droits réservés</span></p>
    <div class="credits">Design propulsé par <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></div>
  </div>
</footer>
