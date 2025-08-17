@extends('admin.app')

@section('title', 'Tableau de bord')

@section('content')

<!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tableau de bord</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Taper ici...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav d-flex align-items-center  justify-content-end">

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown pe-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-symbols-rounded">notifications</i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="{{asset('eintimatemp/assets/img/team-2.jpg')}}" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Nouveau message</span>
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
               <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="{{asset('eintimatemp/assets/img/team-2.jpg')}}" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Nouveau message</span>
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="#" class="nav-link text-body font-weight-bold px-0">
                <i class="material-symbols-rounded">account_circle</i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
     <div class="row" style="padding: 30px">
    <div class="ms-3">
        <h3 class="mb-0 h4 font-weight-bolder">Tableau de bord</h3>
    </div>


{{-- Articles --}}
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
    <div class="card-header p-2 ps-3">
      <div class="d-flex justify-content-between">
        <div>
          <p class="text-sm mb-0 text-capitalize">Articles</p>
          <h4 class="mb-0">{{ $posts_count }}</h4>
        </div>
        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
          <i class="material-symbols-rounded opacity-10">article</i>
        </div>
      </div>
    </div>
    <hr class="dark horizontal my-0">
    <div class="card-footer p-2 ps-3">
      <p class="mb-0 text-sm">Publiés : {{ $posts_published_count }}</p>
    </div>
  </div>
</div>

{{-- Vidéos  --}}
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
    <div class="card-header p-2 ps-3">
      <div class="d-flex justify-content-between">
        <div>
          <p class="text-sm mb-0 text-capitalize">Vidéos</p>
          <h4 class="mb-0">{{ $videos_count }}</h4>
        </div>
        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
          <i class="material-symbols-rounded opacity-10">smart_display</i>
        </div>
      </div>
    </div>
    <hr class="dark horizontal my-0">
    <div class="card-footer p-2 ps-3">
      <p class="mb-0 text-sm">Publiées : {{ $videos_published_count }}</p>
    </div>
  </div>
</div>

{{-- Catégories --}}
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
    <div class="card-header p-2 ps-3">
      <div class="d-flex justify-content-between">
        <div>
          <p class="text-sm mb-0 text-capitalize">Catégories</p>
          <h4 class="mb-0">{{ $categories_count }}</h4>
        </div>
        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
          <i class="material-symbols-rounded opacity-10">category</i>
        </div>
      </div>
    </div>
    <hr class="dark horizontal my-0">
    <div class="card-footer p-2 ps-3">
      <p class="mb-0 text-sm">Actives : {{ $categories_active_count }}</p>
    </div>
  </div>
</div>

{{-- Articles en attente  --}}
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
  <div class="card">
    <div class="card-header p-2 ps-3">
      <div class="d-flex justify-content-between">
        <div>
          <p class="text-sm mb-0 text-capitalize">En attente</p>
          <h4 class="mb-0">{{ $pending_posts_count }}</h4>
        </div>
        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
          <i class="material-symbols-rounded opacity-10">pending_actions</i>
        </div>
      </div>
    </div>
    <hr class="dark horizontal my-0">
    <div class="card-footer p-2 ps-3">
      <p class="mb-0 text-sm">Articles à publier</p>
    </div>
  </div>
</div>

{{-- Publications du jour  --}}
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
  <div class="card">
    <div class="card-header p-2 ps-3">
      <div class="d-flex justify-content-between">
        <div>
          <p class="text-sm mb-0 text-capitalize">Aujourd'hui</p>
          <h4 class="mb-0">{{ $today_publications_count }}</h4>
        </div>
        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
          <i class="material-symbols-rounded opacity-10">today</i>
        </div>
      </div>
    </div>
    <hr class="dark horizontal my-0">
    <div class="card-footer p-2 ps-3">
      <p class="mb-0 text-sm">Articles : {{ $today_posts_count }} • Vidéos : {{ $today_videos_count }}</p>
    </div>
  </div>
</div>

{{-- Sponsors  --}}
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
  <div class="card">
    <div class="card-header p-2 ps-3">
      <div class="d-flex justify-content-between">
        <div>
          <p class="text-sm mb-0 text-capitalize">Sponsors actifs</p>
          <h4 class="mb-0">{{ $sponsors_active_count }}</h4>
        </div>
        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
          <i class="material-symbols-rounded opacity-10">diversity_3</i>
        </div>
      </div>
    </div>
    <hr class="dark horizontal my-0">
    <div class="card-footer p-2 ps-3">
      <p class="mb-0 text-sm">Total sponsors : {{ $sponsors_count }}</p>
    </div>
  </div>
</div>

{{-- Contenu total  --}}
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
  <div class="card">
    <div class="card-header p-2 ps-3">
      <div class="d-flex justify-content-between">
        <div>
          <p class="text-sm mb-0 text-capitalize">Contenu total</p>
          <h4 class="mb-0">{{ $posts_count + $videos_count }}</h4>
        </div>
        <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
          <i class="material-symbols-rounded opacity-10">analytics</i>
        </div>
      </div>
    </div>
    <hr class="dark horizontal my-0">
    <div class="card-footer p-2 ps-3">
      <p class="mb-0 text-sm">Articles + Vidéos</p>
    </div>
  </div>
</div>

@endsection
