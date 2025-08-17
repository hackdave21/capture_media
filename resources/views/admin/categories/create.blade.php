@extends('admin.app')
@section('title','Nouvelle catégorie')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Nouvelle catégorie</h4>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">
      <i class="ti ti-arrow-left me-1"></i> Retour
    </a>
  </div>

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('admin.categories.store') }}">
        @csrf

        <div class="mb-3">
          <label class="form-label">Nom <span class="text-danger">*</span></label>
          <input type="text" name="name" value="{{ old('name') }}"
                 class="form-control @error('name') is-invalid @enderror" required>
          @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Parent</label>
          <select name="parent_id" class="form-select">
            <option value="">— Aucune —</option>
            @foreach($parents as $p)
              <option value="{{ $p->id }}" @selected(old('parent_id')==$p->id)>{{ $p->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea name="description" rows="4" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="form-check form-switch mb-4">
          <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1"
                 @checked(old('is_active', true))>
          <label class="form-check-label" for="is_active">Active</label>
        </div>

        <div class="d-flex gap-2">
          <button class="btn btn-primary" type="submit">
            <i class="ti ti-device-floppy me-1"></i> Enregistrer
          </button>
          <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
      </form>
    </div>
  </div>
@endsection
