@extends('layouts.app')
@section('title', '商品列表')

@section('content')
  <div class="row">
    <div class="col-lg-10 offset-lg-1">
      <div class="card">
        <div class="card-body">
          <div class="row products-list">
            @foreach($products as $product)
              <div class="col-3 product-item">
                <div class="product-content">
                  <div class="top">
                    <div class="img"><img src="{{ $product->image_url }}" alt=""></div>
                    <div class="price"><b>￥</b>{{ $product->price }}</div>
                    <div class="title">{{ $product->title }}</div>
                  </div>
                  <div class="bottom">
                    <div class="sold_count">销量 <span>{{ $product->sold_count }}笔</span></div>
                    <div class="review_count">评价 <span>{{ $product->review_count }}</span></div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="float-right">{{ $products->render() }}</div>
        </div>
      </div>
    </div>
  </div>
@endsection
