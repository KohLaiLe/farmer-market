@extends('layout.template')

@section('products')
<div class="product-container2">
    <div class="product-title">
        <h1>Our Products</h1>
        <p>Best value for your health and happiness</p>
    </div>
    <div class="product-section">
        <div class="product-card">
            <img src="{{ url('/assets/organic1.png') }}" alt="">
            <h4>Fertilizer Grade S</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sunt laboriosam earum natus deleniti ipsa, maiores quo tempore hic, ea debitis accusantium libero eum optio.</p>
            <h3>$12,99 USD</h3>
        </div>
        <div class="product-card">
            <img src="{{ url('/assets/organic2.png') }}" alt="">
            <h4>Fertilizer Grade A</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic necessitatibus beatae illo et, aperiam tenetur? Libero dolorem vitae natus. Id deserunt vitae itaque fugiat deleniti.</p>
            <h3>$7,99 USD</h3>
        </div>
        <div class="product-card">
            @php ($price = 5.99)   
            @if(($price > 0) && ($price < 7.00))
            <p class="alert">&#9733 Best Prices</p>
            @endif
            <img src="{{ url('/assets/organic3.png') }}" alt="">
            <h4>Fertilizer Grade B</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti recusandae perferendis, accusamus alias odio facilis explicabo quo. Pariatur quaerat earum rerum</p>
            <h3>${{ $price }} USD</h3>
        </div>
        <div class="product-card">
            <img src="{{ url('/assets/pestiside.png') }}" alt="">
            <h4>Pestiside Grade S</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sunt laboriosam earum natus deleniti ipsa, maiores quo tempore hic, ea debitis accusantium libero eum optio.</p>
            <h3>$15,50 USD</h3>
        </div>
        <div class="product-card">
            <img src="{{ url('/assets/pestiside2.png') }}" alt="">
            <h4>Pestiside Grade A</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic necessitatibus beatae illo et, aperiam tenetur? Libero dolorem vitae natus. Id deserunt vitae itaque fugiat deleniti.</p>
            <h3>$10,55 USD</h3>
        </div>
        <div class="product-card">
            @php ($price = 6.99)   
            @if(($price > 0) && ($price < 7.00))
            <p class="alert">&#9733 Best Prices</p>
            @endif
            <img src="{{ url('/assets/pestiside3.png') }}" alt="">
            <h4>Pestiside Grade B</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti recusandae perferendis, accusamus alias odio facilis explicabo quo. Pariatur quaerat earum rerum</p>
            <h3>${{ $price }} USD</h3>
        </div>
    </div>
</div> 
@endsection

