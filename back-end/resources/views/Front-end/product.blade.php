@extends('layouts.app')

@section('content')



  <main id="content">
    <div class="product_inner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <a href="{{ route('index') }}" class="back_but">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="" x="0px" y="0px" width="12px" height="12px" viewBox="0 0 284.935 284.936" style="enable-background:new 0 0 284.935 284.936;" xml:space="preserve">
                <g>
                  <path d="M110.488,142.468L222.694,30.264c1.902-1.903,2.854-4.093,2.854-6.567c0-2.474-0.951-4.664-2.854-6.563L208.417,2.857   C206.513,0.955,204.324,0,201.856,0c-2.475,0-4.664,0.955-6.567,2.857L62.24,135.9c-1.903,1.903-2.852,4.093-2.852,6.567   c0,2.475,0.949,4.664,2.852,6.567l133.042,133.043c1.906,1.906,4.097,2.857,6.571,2.857c2.471,0,4.66-0.951,6.563-2.857   l14.277-14.267c1.902-1.903,2.851-4.094,2.851-6.57c0-2.472-0.948-4.661-2.851-6.564L110.488,142.468z" fill="#b7b7b7"/>
                </g>
              </svg>
              <span>უკან დაბრუნება</span>
            </a>
            <h3 class="pg_title">{{ $product->name }}</h3>
          </div>

                    
          
          <div class="col-xs-12">
            <div class="outer_product_inner">
                                            
              <a href="" data-fancybox="915">
                <div class="img_out">
                    <img class="img_out" src="assets/products/{{ $product->image }}">
                </div>
              </a>
              <div style="display:none">
                
                </div>

                  <div class="txt_block">
                    <p class="prod_name">{{ $product->name }}</p>
                    <div class="typ_block">                                        
                        <p><span>{{ $product->details }}</span></p>
                    </div>
                    <div class="price_block">
                        <span>{{ $product->price }} ლ</span>                      
                    </div>
                    
                    <div class="bay_block">
                        <button class="cart_prod add-to-cart" data-id="915" data-action="add">
                          <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 27.207 23.068" style="enable-background:new 0 0 27.207 23.068; width: 25px; height: 25px;" xml:space="preserve">
                          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:white;" d="M5.45,8.842c0.333,0,0.665,0,0.997,0
                          c1.882-2.402,3.716-4.745,5.551-7.086c0.313-0.4,0.596-0.83,0.954-1.186c0.786-0.782,1.495-0.783,2.082,0.14
                          c1.78,2.802,4.562,4.656,6.633,7.173c0.449,0.546,0.978,0.683,1.628,0.649c0.958-0.05,1.921-0.134,2.874-0.079
                          c0.365,0.021,0.802,0.318,1.021,0.623c0.096,0.133-0.253,0.615-0.438,0.914c-0.288,0.467-0.749,0.873-0.893,1.375
                          c-0.866,3.029-1.686,6.073-2.461,9.127c-0.145,0.573-0.021,1.214-0.021,1.909c-1.087,0.663-2.321,0.655-3.547,0.655
                          c-3.765,0.002-7.531-0.058-11.295,0.004c-2.233,0.037-2.499,0.007-3.187-2.115c-0.955-2.943-1.806-5.92-2.698-8.884
                          c-0.265-0.88-0.433-1.709-1.752-1.588C0.105,10.546-0.179,9.82,0.111,8.842C1.948,8.842,3.708,8.842,5.45,8.842 M13.92,2.063
                          c-0.183,0.242-0.35,0.425-0.455,0.637c-0.021,0.042,0.265,0.308,0.291,0.291c0.201-0.133,0.384-0.301,0.538-0.487
                          C14.311,2.483,14.108,2.281,13.92,2.063z M15.45,3.745c-1.227,0.165-2.171,0.292-3.548,0.476c-0.925,1.173-2.125,2.692-3.324,4.212
                          c0.085,0.128,0.17,0.256,0.255,0.384c3.606-0.116,7.212-0.232,10.819-0.348c0.053-0.127,0.106-0.255,0.16-0.382
                          C18.282,6.564,16.753,5.042,15.45,3.745z M3.911,10.331c-0.025,0.325-0.087,0.501-0.043,0.645c0.897,2.96,1.78,5.924,2.725,8.869
                          c0.334,1.04,1.018,1.579,2.26,1.578c3.537-0.002,7.073,0.164,10.611,0.221c0.65,0.01,1.303-0.18,1.987-0.283
                          c1.056-3.905,2.045-7.564,3.108-11.494C17.495,10.026,10.711,10.178,3.911,10.331z M19.647,18.654c0-2.033-0.021-3.975,0.026-5.916
                          c0.006-0.257,0.361-0.505,0.597-0.812c0.765,0.3,0.826,0.909,0.829,1.503c0.007,1.341-0.029,2.683-0.042,4.024
                          C21.051,18.153,20.825,18.644,19.647,18.654z M15.952,17.237c-0.13-1.395-0.22-2.794-0.301-4.192
                          c-0.015-0.263,0.011-0.606,0.165-0.781c0.198-0.225,0.566-0.461,0.823-0.425c0.236,0.033,0.533,0.39,0.606,0.659
                          c0.115,0.423,0.063,0.89,0.084,1.338c0.064,1.333,0.13,2.667,0.203,4.17C16.302,18.521,16.062,18.425,15.952,17.237z M12.869,18.922
                          c-0.167,0.035-0.638-0.477-0.646-0.75c-0.048-1.741-0.044-3.487,0.028-5.227c0.025-0.593,0.206-1.252,1.419-1.262
                          c0,0.734-0.022,1.395,0.005,2.054c0.049,1.227,0.128,2.453,0.191,3.679c0.014,0.278,0.127,0.65-0.007,0.817
                          C13.61,18.541,13.237,18.846,12.869,18.922z M8.371,19c-0.086-2.048-0.21-4.1-0.226-6.153c-0.003-0.383,0.425-0.77,0.847-1.48
                          c0.288,0.727,0.506,1.051,0.536,1.393c0.152,1.731,0.284,3.464,0.365,5.199C9.94,18.95,9.89,18.952,8.371,19z"/>
                        </svg>
                        <span>დამატება</span>
                      </button>
                    </div>
                    </div>
              </div>
            </div>
          </div>
          <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#new_prod" aria-controls="new_prod" role="tab" data-toggle="tab">აღწერა</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="new_prod">
                {{ $product->description }}
              </div>
            </div>
          </div>
          <div class="like_prod">
            <div class="row">
                  <div class="col-xs-12">
                    <div class="title">
                      მსგავსი პროდუქცია
                    </div>
                  </div>
                @foreach ($mightAlsoLike as $product)

                    <div class="col-xs-3">
                        <a href="antosi-dzaghli-deserti-jerkey-strips-wild-200-gr-8714414009277.html" class="outer_product">
                            <img class="img_block" src="assets/products/{{ $product->image }}">
                            <p class="nm">{{ $product->details }}</p>
                            <p class="desc">{{ $product->name }}</p>
                            <div class="price_block"><span>{{ $product->price }} ლ</span></div>
                            <div class="bay_block">
                            <button class="cart_prod add-to-cart" data-id="936" style="color: white">
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
  </main>

  <!-- .container -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
  <script src="../../assets/site/js/jquery/jquery.min.js"></script>
  <script src="../../assets/site/js/custom/ion.rangeSlider.min.js"></script>
  <script src="../../assets/site/js/custom/customSlider.js"></script>
  <script src="../../assets/site/js/jquery/ui/jquery-ui.min.js"></script>
  <script src="../../assets/site/js/custom/select.js"></script>



@endsection