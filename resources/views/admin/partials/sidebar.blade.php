 <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{asset('eintimatemp/logos/eintimalogoClr.png')}}" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">Eintima</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="../pages/dashboard.html">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Tableau de bord</span>
          </a>
        </li>
       <li class="nav-item">
    <a class="nav-link text-dark" href="../pages/tables.html">
        <i class="material-symbols-rounded opacity-5">group</i>
        <span class="nav-link-text ms-1">Utilisateurs</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link text-dark" href="../pages/billing.html">
        <i class="material-symbols-rounded opacity-5">shopping_cart</i>
        <span class="nav-link-text ms-1">Commandes</span>
    </a>
</li>

<!--  Catégories-->
<li class="nav-item">
    <                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">
        <i class="material-symbols-rounded opacity-5">category</i>
        <span class="nav-link-text ms-1">Catégories</span>
        <i class="material-symbols-rounded ms-auto">expand_more</i>
    </>
    <div class="collapse" id="categoriesMenu">
        <ul class="nav nav-sm flex-column ms-3">
            <li class="nav-item">
                <a class="nav-link text-dark py-2" href="{{ route('admin.categories.create') }}">
                    <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">add</i>
                    <span class="nav-link-text">Ajouter catégorie</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark py-2" href="{{ route('admin.categories.index') }}">
                    <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">list</i>
                    <span class="nav-link-text">Voir tout</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<!-- Articles -->
<li class="nav-item">
    <a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#articlesMenu" aria-expanded="false" aria-controls="articlesMenu">
        <i class="material-symbols-rounded opacity-5">inventory</i>
        <span class="nav-link-text ms-1">Articles</span>
        <i class="material-symbols-rounded ms-auto">expand_more</i>
    </a>
    <div class="collapse" id="articlesMenu">
        <ul class="nav nav-sm flex-column ms-3">
            <li class="nav-item">
                <a class="nav-link text-dark py-2" href="{{ route('admin.articles.create') }}">
                    <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">add</i>
                    <span class="nav-link-text">Ajouter article</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark py-2" href="{{ route('admin.articles.index') }}">
                    <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">list</i>
                    <span class="nav-link-text">Voir tout</span>
                </a>
            </li>
        </ul>
    </div>
</li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/notifications.html">
            <i class="material-symbols-rounded opacity-5">notifications</i>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Authentification</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/profile.html">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
