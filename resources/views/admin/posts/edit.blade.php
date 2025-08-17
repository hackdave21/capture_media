@extends('admin.app')
@section('title','Modifier l’article')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Modifier : {{ $post->title }}</h4>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">
      <i class="ti ti-arrow-left me-1"></i> Retour
    </a>
  </div>

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('admin.posts.update',$post) }}" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
          <label class="form-label">Titre <span class="text-danger">*</span></label>
          <input type="text" name="title" value="{{ old('title',$post->title) }}"
                 class="form-control @error('title') is-invalid @enderror" required>
          @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Catégorie <span class="text-danger">*</span></label>
            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
              <option value="">— Choisir —</option>
              @foreach($categories as $c)
                <option value="{{ $c->id }}" @selected(old('category_id',$post->category_id)==$c->id)>{{ $c->name }}</option>
              @endforeach
            </select>
            @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="col-md-6">
            <label class="form-label">Image de couverture</label>
            <input type="file" name="cover_image" class="form-control @error('cover_image') is-invalid @enderror" accept="image/*">
            @error('cover_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
            @if($post->cover_image)
              <div class="mt-2">
                <img src="{{ Storage::url($post->cover_image) }}" class="img-fluid rounded" style="max-height:120px" alt="cover">
              </div>
            @endif
          </div>
        </div>

        <div class="mb-3 mt-3">
          <label class="form-label">Résumé</label>
          <textarea name="excerpt" rows="2" class="form-control @error('excerpt') is-invalid @enderror">{{ old('excerpt',$post->excerpt) }}</textarea>
          @error('excerpt') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Contenu <span class="text-danger">*</span></label>
          <textarea name="body" rows="8" class="form-control @error('body') is-invalid @enderror" required>{{ old('body',$post->body) }}</textarea>
          @error('body') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="row g-3">
          <div class="col-md-4">
            <div class="form-check form-switch mt-4">
              <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1"
                     @checked(old('is_published',$post->is_published))>
              <label class="form-check-label" for="is_published">Publié</label>
            </div>
          </div>
          <div class="col-md-8">
            <label class="form-label">Date de publication</label>
            <input type="datetime-local" name="published_at"
                   value="{{ old('published_at', $post->published_at?->format('Y-m-d\TH:i')) }}"
                   class="form-control @error('published_at') is-invalid @enderror">
            @error('published_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="d-flex gap-2 mt-4">
          <button class="btn btn-primary" type="submit">
            <i class="ti ti-device-floppy me-1"></i> Mettre à jour
          </button>
          <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Annuler</a>
        </div>
      </form>
    </div>
  </div>
@endsection
