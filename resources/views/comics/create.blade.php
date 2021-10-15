@section('section-id', 'ctrate-comic')

@section( 'content')

<div class="card-title">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Inserisci un nuovo fumetto </h1>
        <a href="{{ route('comics.index')}}" class="btn btn-outline-secondary">INDIETRO</a>
    </div>
</div>

<div class="card-body">
    <form method="POST" action="{{ route ('comics.store')}}">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" required>
                <div class="form-text">Inserisci il titolo del fumetto</div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Genere</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                    <div class="form-text">Inserisci il genere del fumetto</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="price" class="form-label">Costo</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                    <div class="form-text">Inserisci il costo del fumetto</div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input type="text" class="form-control" id="thumb" name="cover" required>
                    <div class="form-text">Inserisci la copertina del fumetto</div>
                </div>
            </div>
            <div class="col-md-1 d-flex align-items-center justify-content-center mb-3">
                <img src="https://img.icons8.com/carbon_copy/2x/full-image.png" alt="preview" width="50"
                    class="img-fluid" id="preview">
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                    <div class="form-text">Inserire una descrizione. &Egrave; possibile utilizzare HTML.</div>
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-end">
                <button type="reset" class="btn btn-secondary me-2">Cancella</button>
                <button type="submit" class="btn btn-success">Crea</button>
            </div>
        </div>

    </form>
</div>
@endsection

@section('scripts')