@extends('layouts.app')
@section('mainstyle')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cart_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cart_responsive.css') }}">


@endsection
@section('content')
<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                        @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            {{session()->get('success_message')}}
                        </div>
                         @endif
                   
                         @if(Cart::count() > 0)
                         <h2>{{Cart::count()}} items in shopping cart</h2>
                <div class="cart_title">Shopping Cart</div>
                 
                @foreach(Cart::content() as $item)
                    
                    <div class="cart_items">
                        <ul class="cart_list">
                            <li class="cart_item clearfix">
                                <div class="cart_item_image"><img src="images/shopping_cart.jpg" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Name</div>
                                    <div class="cart_item_text">{{$item->model->name}}</div>
                                    </div>
                                  
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Quantity</div>
                                        <div class="cart_item_text">1</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">Price</div>
                                    <div class="cart_item_text">{{$item->model->price}}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title"></div>
                                        <div class="cart_item_text"><button class="btn btn-success">Remove</button></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    @endforeach
                    <!-- Order Total -->
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Order Total:</div>
                            <div class="order_total_amount">N</div>
                        </div>
                    </div>

                    <div class="cart_buttons">
                        <button type="button" class="button cart_button_clear">Add to Cart</button>
                        <button type="button" class="button cart_button_checkout">Add to Cart</button>
                    </div>
                </div>

                @else
                        <h3>No item in Cart</h3>

                @endif
            </div>
        </div>
    </div>
</div>

@endsection