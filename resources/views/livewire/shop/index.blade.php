<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group">
                <input wire:model="search" type="text" class="form-control" placeholder="Search Product">
            </div>
        </div>
    </div>
    <div class="row">

        <div class="row row-cols-1 row-cols-md-3">
        @foreach ($products as $product)
        <div class="col mb-4">
            <div class="card h-100 border-dark" style="box-shadow: 10px 10px 10px rgb(128, 128, 128);">
                <br>
            <center style="background-color: red">
                <img src="{{ $product->image ? asset('/storage/' . $product->image) : 'https://media.istockphoto.com/vectors/image-unavailable-icon-vector-id1022028010?k=20&m=1022028010&s=612x612&w=0&h=Q-itsi4QP5ISEKGI3dxuyrERXTPO58lSBQIiZ_zHhs0=' }}" style="width: 150px" class="card-img-top img-fluid" alt="...">
            </center>
            <br>
                <div class="card-header">
                    <h5 class="card-title">
                        <strong>{{ $product->title }}</strong>
                    </h5>
                </div>
                <div class="card-body">
                  <p class="card-text">{{ $product->description }}</p>
                </div>

                <div class="card-footer border-dark" style="background-color: #3c3c3c;">
                    <div class="btn-group float-right" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-light">Rp {{ number_format($product->price,2,",",".") }}</button>
                      <button wire:click="addToCart({{ $product->id }})" type="button" class="btn btn-success"><i class="fa fa-cart-plus"></i> Add to cart</button>
                      </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>

    </div>

    {{ $products->links() }}
</div>
