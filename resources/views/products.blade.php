<x-layout>
    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col">
                <h1 class="display-1 my-5">Products</h1>
            </div>
        </div>
        
        <x-success />
        
        <div class="row">
            @foreach($products as $product)
            <div class="col-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        @if($product->img)
                        <img src="{{ Storage::url($product->img) }}" class="card-img-top mb-3" alt="{{ $product->name }}">
                        @endif
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>Price: </strong>${{ number_format($product->price, 2) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>