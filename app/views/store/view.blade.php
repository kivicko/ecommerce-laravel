@extends('layouts.main')

@section('content')

	<div id="product-image">
		{{ HTML::image($product->image, $product->title) }}
    </div><!-- end product-image -->
    <div id="product-details">
        <h1>{{ $product->title }}</h1>
        <p>{{ $product->description }}</p>

        <hr />

        {{ Form::open(array('url'=>'store/addtocart')) }}

            {{ Form::hidden('id', $product->id) }}
            @if($product->availability == "1")
            {{ Form::label('quantity', 'Qty') }}
            {{ Form::text('quantity', 1, array('maxlength'=>2)) }}
                <button type="submit" class="secondary-cart-btn">
                    {{ HTML::image('img/white-cart.gif', 'Add to Cart') }}
                     ADD TO CART
                </button>
            @endif
        {{ Form::close() }}
    </div><!-- end product-details -->
    <div id="product-info">
        <p class="price">{{ $product->price }}</p>
        <p>
        	<h5>Availability:
             	<span class="{{ Availability::displayClass($product->availability) }}">
             		{{ Availability::display($product->availability) }}
             	</span>
         	</h5>
        </p>
        <p>Product Code: <span>{{ $product->id }}</span></p>
    </div><!-- end product-info -->	

@stop