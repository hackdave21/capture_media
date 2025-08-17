@extends('admin.app')
@section('title','Nouvelle vidéo')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Nouvelle vidéo</h4>
    <a href="{{ route('admin.videos.index') }}" class="btn btn-outline-secondary">
      <i class="ti ti-arrow-left me-1"></i> Retour
    </a>
  </div>

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('admin.videos.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label class="form-label">Titre <span class="text-danger">*</span></label>
          <input type="text" name="title" value="{{ old('title') }}"
                 class="form-control @error('title') is-invalid @enderror" required>
          @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Catégorie <span class="text-danger">*</span></label>
            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
              <option value="">— Choisir —</option>
              @foreach($categories as $c)
                <option value="{{ $c->id }}" @selected(old('category_id')==$c->id)>{{ $c->name }}</option>
              @endforeach
            </select>
            @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="col-md-6">
            <label class="form-label">Miniature</label>
            <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" accept="image/*">
            @error('thumbnail') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="mb-3 mt-3">
          <label class="form-label">URL de la vidéo <span class="text-danger">*</span></label>
          <input type="url" name="video_url" value="{{ old('video_url') }}"
                 class="form-control @error('video_url') is-invalid @enderror" required placeholder="https://...">
          @error('video_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
          @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="row g-3">
          <div class="col-md-4">
            <div class="form-check form-switch mt-4">
              <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1"
                     @checked(old('is_published'))>
              <label class="form-check-label" for="is_published">Publié</label>
            </div>
          </div>
          <div class="col-md-8">
            <label class="form-label">Date de publication</label>
            <input type="datetime-local" name="published_at"
                   value="{{ old('published_at') }}"
                   class="form-control @error('published_at') is-invalid @enderror">
            @error('published_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="d-flex gap-2 mt-4">
          <button class="btn btn-primary" type="submit">
            <i class="ti ti-device-floppy me-1"></i> Enregistrer
          </button>
          <a href="{{ route('admin.videos.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
      </form>
    </div>
  </div>
@endsection
