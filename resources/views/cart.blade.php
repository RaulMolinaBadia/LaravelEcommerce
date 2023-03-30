@include('layouts.navbar')
<link rel="stylesheet" href="{{ asset('./css/cart.css') }}">
<link rel="stylesheet" href="{{ asset('./css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('./css/buttons.css') }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>


<main class="cart-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <h3 class="page-title">Carts</h3>
                <div class="cart-items">
                    <div class="table-header">
                        <div class="item-image">Image</div>
                        <div class="item-name">Name</div>
                        <div class="item-quantity">Quantity</div>
                        <div class="item-price">Price</div>
                        <div class="item-remove">Remove</div>
                    </div>
                    @foreach ($cartItems as $item)
                        <div class="cart-item">
                            <div class="item-image">
                                <a href="#">
                                    <img src="{{ $item->attributes->image }}" alt="{{ $item->name }}">
                                </a>
                            </div>
                            <div class="item-name">
                                <a href="#">
                                    <p>{{ $item->name }}</p>
                                </a>
                            </div>
                            <div class="item-quantity">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="text" value="{{ $item->quantity }}" name="quantity" class="input">
                                    <button class="btn">Update</button>
                                </form>
                            </div>
                            <div class="item-price">
                                <span class="price">{{ $item->price }}</span>
                            </div>
                            <div class="item-remove">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                    <button class="remove-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-circle-x" width="44" height="44"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="M10 10l4 4m0 -4l-4 4" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <div class="cart-total">
                        Total: <span class="total-price">${{ Cart::getTotal() }}</span>
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <a href="/stripe/{{ Cart::getTotal() }}">Pagar</a>
                        </form>
                    </div>
                    <div class="cart-actions">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="btn">Clear Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
