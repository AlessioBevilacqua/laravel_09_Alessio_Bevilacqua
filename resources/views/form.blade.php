<x-layout>
    <div class="container my-5 text-center ">
        <div class="row align-items-center flex-column">
            <div class="col">
                <h1 class="display-3">Form</h1>
                <p class="lead">inserisci i dati del prodotto</p>
            </div>
            
            <x-error />

            
            <form class="col-6" action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" id="price" step="0.01" min="0" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" name="img" class="form-control" id="img">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-layout>