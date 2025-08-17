@extends('admin.app')
@section('title','Nouveau sponsor')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Nouveau sponsor</h4>
    <a href="{{ route('admin.sponsors.index') }}" class="btn btn-outline-secondary">
      <i class="ti ti-arrow-left me-1"></i> Retour
    </a>
  </div>

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('admin.sponsors.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label class="form-label">Nom <span class="text-danger">*</span></label>
          <input type="text" name="name" value="{{ old('name') }}"
                 class="form-control @error('name') is-invalid @enderror" required>
          @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">URL</label>
            <input type="url" name="url" value="{{ old('url') }}"
                   class="form-control @error('url') is-invalid @enderror" placeholder="https://...">
            @error('url') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="col-md-6">
            <label class="form-label">Logo (image)</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
            @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="form-check form-switch mt-3 mb-4">
          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1"
                 @checked(old('is_active', true))>
          <label class="form-check-label" for="is_active">Actif</label>
        </div>

        <div class="d-flex gap-2">
          <button class="btn btn-primary" type="submit">
            <i class="ti ti-device-floppy me-1"></i> Enregistrer
          </button>
          <a href="{{ route('admin.sponsors.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
      </form>
    </div>
  </div>
@endsection
