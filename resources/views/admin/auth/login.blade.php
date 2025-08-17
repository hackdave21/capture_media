<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin-Capture-Media-Connexion</title>

  <link rel="shortcut icon" type="image/png" href="{{ asset('admintemp/assets/logo.jpg') }}" />
  {{-- admintemp (WrapPixel) CSS --}}
  <link rel="stylesheet" href="{{ asset('admintemp/assets/css/styles.min.css') }}" />

  {{-- Overrides de marque --}}
  <style>
    :root { --brand:#fbbf24; }
    .btn-primary { background-color: var(--brand); border-color: var(--brand); }
    .btn-primary:hover, .btn-primary:focus { filter: brightness(.95); }
    .text-primary, .link-primary { color: var(--brand)!important; }
    .form-check-input:checked { background-color: var(--brand); border-color: var(--brand); }

    /* Input œil */
    .pwd-toggle {
      position:absolute; right:.75rem; top:50%; transform:translateY(-50%);
      border:0; background:transparent; padding:.25rem; line-height:0; color:#6b7280;
    }
    .pwd-toggle:hover { color:#111827; }
    .input-wrapper { position: relative; }
  </style>
</head>

<body>
  <!-- Wrapper admintemp -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical"
       data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed"
       data-header-position="fixed">

    <div class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0 shadow-sm">
              <div class="card-body">
                {{-- Logo --}}
                <a href="{{ route('admin.login') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{ asset('admintemp/assets/logo.jpg') }}" alt="Logo" style="height:64px;width:auto;border-radius:12px;">
                </a>
                <p class="text-center mb-4">Espace d’administration — Capture Medias</p>

                {{-- Messages d’erreur globaux --}}
                @if($errors->any())
                  <div class="alert alert-danger py-2 px-3">
                    {{ $errors->first() }}
                  </div>
                @endif

                {{-- Formulaire de connexion --}}
                <form method="POST" action="{{ route('admin.login.attempt') }}" id="loginForm" novalidate>
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           id="email" name="email"
                           value="{{ old('email') }}" required autofocus
                           placeholder="Email">
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                  </div>

                  <div class="mb-4">
                    <label for="password" class="form-label">Mot de passe</label>
                    <div class="input-wrapper">
                      <input type="password"
                             class="form-control @error('password') is-invalid @enderror pe-5"
                             id="password" name="password" required
                             placeholder="Mot de passe">
                      <button type="button" id="togglePassword" class="pwd-toggle" aria-label="Afficher le mot de passe">
                        {{-- œil ouvert --}}
                        <svg data-eye="open" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                          <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z"/>
                          <circle cx="12" cy="12" r="3"/>
                        </svg>
                        {{-- œil barré --}}
                        <svg data-eye="close" style="display:none" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 3l18 18"/>
                          <path d="M10.58 10.58a2 2 0 0 0 2.83 2.83"/>
                          <path d="M16.24 7.76A10.94 10.94 0 0 1 21 12s-4 7-9 7a10.44 10.44 0 0 1-5.1-1.3"/>
                          <path d="M6.35 6.35A10.94 10.94 0 0 0 3 12s4 7 9 7a10.44 10.44 0 0 0 5.1-1.3"/>
                        </svg>
                      </button>
                      @error('password')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>
                  </div>

                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label text-dark" for="remember">Se souvenir de moi</label>
                    </div>
                    <a class="text-primary fw-bold" href="#">Mot de passe oublié ?</a>
                  </div>

                  <button type="submit" class="btn btn-primary w-100 py-3 fs-5 mb-3 rounded-2" id="submitBtn">
                    <span id="btnText">Se connecter</span>
                  </button>
                </form>
              </div>
            </div> <!-- /card -->
          </div>
        </div>
      </div>
    </div> <!-- /centered section -->
  </div> <!-- /page-wrapper -->

  {{-- Scripts admintemp (jQuery + Bootstrap bundle) --}}
  <script src="{{ asset('admintemp/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admintemp/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  {{-- (optionnel) Solar icons / Iconify si tu veux d’autres icônes --}}
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  {{-- Toggle œil + petit état "loading" --}}
  <script>
    (function () {
      const btn = document.getElementById('togglePassword');
      if (btn) {
        btn.addEventListener('click', function(){
          const input = document.getElementById('password');
          const isPwd = input.getAttribute('type') === 'password';
          input.setAttribute('type', isPwd ? 'text' : 'password');
          const open = btn.querySelector('[data-eye="open"]');
          const close = btn.querySelector('[data-eye="close"]');
          if (isPwd) { open.style.display = 'none'; close.style.display = ''; }
          else       { open.style.display = '';    close.style.display = 'none'; }
        });
      }

      const form = document.getElementById('loginForm');
      if (form) {
        form.addEventListener('submit', function(){
          const submitBtn = document.getElementById('submitBtn');
          const btnText   = document.getElementById('btnText');
          submitBtn.disabled = true;
          btnText.textContent = 'Connexion...';
        });
      }
    })();
  </script>
</body>
</html>
