@extends ('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="product-container">
        @forelse ($products as $product)
            <div class="card">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->short_description }}</p>
                <p><strong>${{ $product->price }}</strong></p>
            </div>
        @empty
            <p>No hay productos disponibles.</p>
        @endforelse
    </div>
@endsection