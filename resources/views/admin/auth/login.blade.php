<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admintemp/assets/logo.jpg') }}">
  <link rel="icon" type="image/png" href="{{ asset('admintemp/assets/logo.jpg') }}">
  <title>Admin-Capture-Media-Connexion</title>

  {{-- Bootstrap 5 + MDB UI Kit --}}
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css"/>

  {{-- Google Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --brand: #fbbf24;
      --brand-dark: #d4a61f;
      --gradient: linear-gradient(135deg, #fadc90 0%, #fbbf24 100%);
      --shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
      --shadow-lg: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--gradient);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Animations d'entrée */
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

    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(50px);
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
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    /* Conteneur principal */
    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 2rem 1rem;
      position: relative;
    }

    /* Particules flottantes */
    .floating-shapes {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 1;
    }

    .shape {
      position: absolute;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      animation: float 6s ease-in-out infinite;
    }

    .shape:nth-child(1) {
      width: 80px;
      height: 80px;
      top: 20%;
      left: 10%;
      animation-delay: 0s;
    }

    .shape:nth-child(2) {
      width: 120px;
      height: 120px;
      top: 60%;
      right: 10%;
      animation-delay: 2s;
    }

    .shape:nth-child(3) {
      width: 60px;
      height: 60px;
      bottom: 20%;
      left: 20%;
      animation-delay: 4s;
    }

    /* Carte principale */
    .login-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border-radius: 24px;
      box-shadow: var(--shadow-lg);
      border: 1px solid rgba(255, 255, 255, 0.2);
      overflow: hidden;
      position: relative;
      z-index: 2;
      max-width: 1000px;
      width: 100%;
      margin: 0 auto;
    }

    /* Section gauche */
    .left-section {
      padding: 3rem;
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      animation: slideInLeft 0.8s ease-out;
    }

    .logo-container {
      margin-bottom: 2rem;
      animation: pulse 3s infinite;
    }

    .logo-container img {
      width: 120px;
      height: 120px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease;
    }

    .logo-container img:hover {
      transform: scale(1.05) rotate(5deg);
    }

    .welcome-text h2 {
      color: #1a202c;
      font-weight: 700;
      margin-bottom: 1rem;
      font-size: 2.2rem;
    }

    .welcome-text p {
      color: #4a5568;
      font-size: 1.1rem;
      line-height: 1.6;
      max-width: 300px;
    }

    /* Section droite */
    .right-section {
      padding: 3rem;
      animation: slideInRight 0.8s ease-out 0.2s both;
    }

    .form-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .form-header h3 {
      color: #1a202c;
      font-weight: 600;
      margin-bottom: 0.5rem;
      font-size: 1.8rem;
    }

    .form-header p {
      color: #718096;
      font-size: 0.95rem;
    }

    /* Champs de formulaire */
    .form-group {
      position: relative;
      margin-bottom: 1.5rem;
      animation: fadeInUp 0.6s ease-out;
    }

    .form-group:nth-child(2) { animation-delay: 0.4s; }
    .form-group:nth-child(3) { animation-delay: 0.6s; }

    .form-control {
      background: white;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      padding: 0.75rem 1rem;
      font-size: 0.95rem;
      width: 100%;
      transition: all 0.2s ease;
      outline: none;
    }

    .form-control:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.1);
    }

    .form-control:hover {
      border-color: #9ca3af;
    }

    .form-control::placeholder {
      color: #9ca3af;
      font-weight: 400;
    }

    /* Bouton toggle password */
    .password-toggle {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      border: 0;
      background: transparent;
      padding: 0.5rem;
      line-height: 0;
      color: #718096;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .password-toggle:hover {
      color: var(--brand);
      background: rgba(251, 191, 36, 0.1);
      transform: translateY(-50%) scale(1.1);
    }

    /* Bouton principal */
    .btn-login {
      background: var(--brand);
      border: none;
      border-radius: 12px;
      padding: 1rem 2rem;
      font-weight: 600;
      font-size: 1rem;
      color: white;
      width: 100%;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      position: relative;
      overflow: hidden;
    }

    .btn-login::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .btn-login:hover::before {
      left: 100%;
    }

    .btn-login:hover {
      background: var(--brand-dark);
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(251, 191, 36, 0.3);
    }

    .btn-login:active {
      transform: translateY(-1px);
    }

    /* Checkbox et options */
    .form-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 1.5rem 0;
      animation: fadeInUp 0.6s ease-out 0.8s both;
    }

    .form-check {
      display: flex;
      align-items: center;
    }

    .form-check-input {
      margin-right: 0.5rem;
      border-radius: 4px;
    }

    .form-check-label {
      color: #4a5568;
      font-size: 0.9rem;
    }

    /* Footer */
    .login-footer {
      background: rgba(251, 191, 36, 0.9);
      padding: 1.5rem 2rem;
      text-align: center;
      backdrop-filter: blur(10px);
    }

    .login-footer p {
      color: white;
      margin: 0;
      font-weight: 500;
    }

    /* Messages d'erreur */
    .error-message {
      color: #e53e3e;
      font-size: 0.85rem;
      margin-top: 0.5rem;
      animation: fadeInUp 0.3s ease-out;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .login-card {
        margin: 1rem;
        border-radius: 16px;
      }

      .left-section,
      .right-section {
        padding: 2rem 1.5rem;
      }

      .welcome-text h2 {
        font-size: 1.8rem;
      }

      .logo-container img {
        width: 100px;
        height: 100px;
      }
    }

    /* Effet de chargement */
    .loading {
      position: relative;
      pointer-events: none;
    }

    .loading::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 20px;
      height: 20px;
      border: 2px solid #ffffff;
      border-radius: 50%;
      border-top-color: transparent;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to { transform: translate(-50%, -50%) rotate(360deg); }
    }
  </style>
</head>
<body>

<div class="login-container">
  <!-- Formes flottantes -->
  <div class="floating-shapes">
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
  </div>

  <div class="login-card">
    <div class="row g-0">
      <!-- Section gauche avec logo et texte -->
      <div class="col-md-6">
        <div class="left-section">
          <div class="logo-container">
            <img src="{{ asset('admintemp/assets/logo.jpg') }}" alt="Logo Admin" class="img-fluid">
          </div>

          <div class="welcome-text">
            <h2>Bienvenue</h2>
            <p>Accédez à votre espace d'administration pour gérer votre plateforme de capture média en toute sécurité.</p>
          </div>
        </div>
      </div>

      <!-- Section droite avec formulaire -->
      <div class="col-md-6">
        <div class="right-section">
          <div class="form-header">
            <h3>Connexion Admin</h3>
            <p>Veuillez vous authentifier pour continuer</p>
          </div>

          <form method="POST" action="{{ route('admin.login.attempt') }}" id="loginForm">
            @csrf

            <!-- Email -->
            <div class="form-group">
              <input type="email"
                     name="email"
                     id="email"
                     class="form-control"
                     placeholder="Email "
                     value="{{ old('email') }}"
                     required
                     autofocus />
              @error('email')
                <div class="error-message">{{ $message }}</div>
              @enderror
            </div>

            <!-- Mot de passe avec toggle -->
            <div class="form-group position-relative">
              <input type="password"
                     name="password"
                     id="password"
                     class="form-control pe-5"
                     placeholder="Mot de passe"
                     required />

              <button type="button" id="togglePassword" class="password-toggle" aria-label="Afficher le mot de passe">
                <svg data-eye="open" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                  <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z"/>
                  <circle cx="12" cy="12" r="3"/>
                </svg>
                <svg data-eye="close" style="display:none" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 3l18 18"/>
                  <path d="M10.58 10.58a2 2 0 0 0 2.83 2.83"/>
                  <path d="M16.24 7.76A10.94 10.94 0 0 1 21 12s-4 7-9 7a10.44 10.44 0 0 1-5.1-1.3"/>
                  <path d="M6.35 6.35A10.94 10.94 0 0 0 3 12s4 7 9 7a10.44 10.44 0 0 0 5.1-1.3"/>
                </svg>
              </button>

              @error('password')
                <div class="error-message">{{ $message }}</div>
              @enderror
            </div>

            <!-- Options -->
            <div class="form-options">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1" />
                <label class="form-check-label" for="remember">Se souvenir de moi</label>
              </div>
            </div>

            <!-- Bouton de connexion -->
            <button type="submit" class="btn btn-login" id="submitBtn">
              <span id="btnText">Se Connecter</span>
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="login-footer">
      <p>&copy; {{ date('Y') }} Capture Media. Tous droits réservés.</p>
    </div>
  </div>
</div>

{{-- Scripts vendor --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.js"></script>

<script>
  // Toggle password visibility
  (function(){
    const btn = document.getElementById('togglePassword');
    if(!btn) return;

    btn.addEventListener('click', function(){
      const input = document.getElementById('password');
      const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
      input.setAttribute('type', type);

      const open = btn.querySelector('[data-eye="open"]');
      const close = btn.querySelector('[data-eye="close"]');

      if (type === 'text') {
        open.style.display = 'none';
        close.style.display = '';
      } else {
        open.style.display = '';
        close.style.display = 'none';
      }
    });
  })();

  // Animation du formulaire au submit
  document.getElementById('loginForm').addEventListener('submit', function() {
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');

    submitBtn.classList.add('loading');
    btnText.style.opacity = '0';

    setTimeout(() => {
      btnText.textContent = 'Connexion...';
      btnText.style.opacity = '1';
    }, 200);
  });

  // Animation des champs au focus
  document.querySelectorAll('.form-control').forEach(input => {
    input.addEventListener('focus', function() {
      this.parentElement.style.transform = 'translateY(-2px)';
    });

    input.addEventListener('blur', function() {
      this.parentElement.style.transform = 'translateY(0)';
    });
  });

  // Effet de parallaxe léger pour les formes flottantes
  document.addEventListener('mousemove', function(e) {
    const shapes = document.querySelectorAll('.shape');
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;

    shapes.forEach((shape, index) => {
      const speed = (index + 1) * 0.5;
      const xPos = x * speed * 20;
      const yPos = y * speed * 20;

      shape.style.transform = `translate(${xPos}px, ${yPos}px)`;
    });
  });
</script>
</body>
</html>
