@extends('site.layout')
@section('title','Contact — Capture Media')

@section('content')
<section class="py-4 border-bottom">
  <div class="container">
    <h2 class="mb-1">Contact</h2>
    <p class="text-muted mb-0">Une question, une suggestion, une information ? Écrivez-nous.</p>
  </div>
</section>

<section class="py-5">
  <div class="container">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row g-4">
      {{-- Infos de contact --}}
      <div class="col-12 col-lg-5">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title mb-3"><i class="bi bi-info-circle me-2"></i>Coordonnées</h5>
            <ul class="list-unstyled mb-4">
              <li class="mb-2">
                <i class="bi bi-geo-alt me-2"></i> Lomé, Togo
              </li>
              <li class="mb-2">
                <i class="bi bi-telephone me-2"></i> +228 00 00 00 00
              </li>
              <li class="mb-2">
                <i class="bi bi-envelope me-2"></i> capturedreamsmakers@gmail.com
              </li>
            </ul>

            <h6 class="mb-2">Suivez-nous</h6>
            <div class="d-flex gap-2 mb-4">
              <a href="https://www.facebook.com/share/1AacLUBLTi/?mibextid=wwXIfr" class="btn btn-outline-secondary btn-sm"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/cap.ture.media?igsh=MXdncnd1b25pZTM4cg%3D%3D&utm_source=qr" class="btn btn-outline-secondary btn-sm"><i class="bi bi-instagram"></i></a>
              <a href="https://www.tiktok.com/@capture.media0?_t=ZM-8xTAWNfnRlF&_r=1" class="btn btn-outline-secondary btn-sm"><i class="bi bi-tiktok"></i></a>
            </div>

            <div class="ratio ratio-16x9">
              {{-- Carte  --}}
              <iframe
                src="https://www.openstreetmap.org/export/embed.html?bbox=1.19%2C6.10%2C1.30%2C6.25&layer=mapnik"
                style="border:0;" allowfullscreen loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>

      {{-- Formulaire --}}
      <div class="col-12 col-lg-7">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title mb-3"><i class="bi bi-chat-dots me-2"></i>Écrivez-nous</h5>

            @if(request()->has('sent'))
  <div class="alert alert-success">Merci, votre message a bien été envoyé !</div>
@endif

<form action="https://formspree.io/f/mrblvodn" method="POST" accept-charset="UTF-8">
  <input type="hidden" name="_next" value="{{ route('contact.show') }}?sent=1">
  <input type="hidden" name="_subject" value="Contact — Capture Media">
  <input type="text" name="_gotcha" class="d-none" tabindex="-1" autocomplete="off">

  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Nom <span class="text-danger">*</span></label>
      <input type="text" name="name" class="form-control" required>
    </div>

    <div class="col-md-6">
      <label class="form-label">Email <span class="text-danger">*</span></label>
      <input type="email" name="email" class="form-control" required>
    </div>

     <div class="col-md-6">
      <label class="form-label">Objet</label>
      <input type="text" name="subject" class="form-control">
    </div>

     <div class="col-md-6">
      <label class="form-label">Téléphone</label>
     <input type="text" name="phone" class="form-control">
    </div>

    <div class="col-12">
      <label class="form-label">Message <span class="text-danger">*</span></label>
      <textarea name="message" rows="6" class="form-control" required></textarea>
    </div>
  </div>

  <div class="mt-4 d-grid d-sm-flex gap-2">
    <button type="submit" class="btn btn-primary">
      <i class="bi bi-send me-1"></i> Envoyer
    </button>
    <a href="{{ route('home') }}" class="btn btn-outline-secondary">Annuler</a>
  </div>
</form>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
