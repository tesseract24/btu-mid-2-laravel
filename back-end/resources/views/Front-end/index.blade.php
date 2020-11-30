@extends('layouts.app')

@section('content')





  <main id="content">
    <div class="home">
      <div class="container" id="container">
        <div class="home_products">
          <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
              <div class="home_cat">
                <h3>კატეგორია</h3>
                <ul>
                                                            <li>
                        <a href="#"><span class="cat_in"> ძაღლი </span><span class="fa fa-angle-right" aria-hidden="true"></span></a>
                      </li>
                                          <li>
                        <a href="#"><span class="cat_in"> კატა </span><span class="fa fa-angle-right" aria-hidden="true"></span></a>
                      </li>
                                          <li>
                        <a href="#"><span class="cat_in"> მღრღნელები </span><span class="fa fa-angle-right" aria-hidden="true"></span></a>
                      </li>
                                          <li>
                        <a href="#"><span class="cat_in"> ფრინველები </span><span class="fa fa-angle-right" aria-hidden="true"></span></a>
                      </li>
                                          <li>
                        <a href="#"><span class="cat_in"> რეპტილიები </span><span class="fa fa-angle-right" aria-hidden="true"></span></a>
                      </li>
                                                      </ul>
              </div>
              <div class="outer_fb_pg" style="margin-bottom:40px">
                <div class="fb-page" data-width="420" data-href="https://www.facebook.com/zoomart.ge" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/zoomart.ge" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/zoomart.ge">Zoomart - ზოომარტი</a></blockquote></div>
              </div>
            </div>
            <div class="col-md-9 col-xs-12">
              <div>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#" aria-controls="new_prod" role="tab" data-toggle="tab">ახალი</a></li>
                  <li role="presentation"><a href="{{ route('index') }}" aria-controls="sale_prod" role="tab" data-toggle="tab">აქცია</a></li>
                  <li role="presentation"><a href="{{ route('index') }}" aria-controls="popular_prod" role="tab" data-toggle="tab">პოპულარული</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="new_prod">
                    <div class="row">
                        @foreach ($products as $product)

                            <div class="col-md-4 col-xs-6">
                                <a href="{{ route('show', $product->slug )}}"  class="outer_product animated zoomIn">
                                  <div class="img_block">
                                      <img class="img_block" src="assets/products/{{ $product->image }}">
                                  </div>
                                  <p class="nm">{{ $product->details }}</p>
                                  <p class="desc">{{ $product->name }}</p>
                                  <div class="price_block">
                                      <span>{{ $product->price }} ლ</span>
                                  </div>
                                  <div class="bay_block">
                                      <button style="color: white;" class="cart_prod add-to-cart" data-id="981" style="text-align: center;">
                                        მეტის ნახვა
                                      </button>
                                  </div>
                                </a>
                            </div>


                        @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




          <div class="home_news">
            <div class="row">
              <div class="col-xs-12">
                <div class="title">
                  <a href="{{ url('/addcomment') }}" style="padding: 20" href="">კომენტარის დამატება</a>
                </div>
              </div>


                @foreach ($comments as $comment)
                  <div class="col-xs-6">
                    <div class="news_outer">
                      <div class="img_block">
                        <div class="img_in" style="background-image: url(http://zoomart.ge/!img/DSC01368.JPG?type=article"></div>
                      </div>
                      <div class="txt_block">
                        <div class="news_title">
                          <p>{{ $comment->fullname }}</p>
                        </div>
                        <p style="margin-top: 12px;" class="news_info">{{ $comment->comment }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach




              </div>
          </div>




      </div>
    </div>
  </main>


@endsection
