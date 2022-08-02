<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart['products'] as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>Rp {{ number_format($product->price,2,",",".") }}</td>
                                <td>
                                    <button wire:click="removeFromCart({{ $product->id }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remove</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                @if ($cart['products'] == null)
                                    <td colspan="3">
                                        <a href="{{ route('shop.index') }}" class="btn btn-danger float-right"><i class="fa fa-close"></i> Back</a>
                                    </td>
                                @else

                                <td colspan="3">
                                    <div class="btn-group float-right" role="group" aria-label="Basic example">
                                        <a href="{{ route('shop.checkout') }}" class="btn btn-primary float-right"><i class="fa fa-cart-arrow-down"></i> Checkout</a>
                                        <a href="{{ route('shop.index') }}" class="btn btn-danger float-right"><i class="fa fa-close"></i> Back</a>
                                    </div>
                                </td>
                                @endif
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
