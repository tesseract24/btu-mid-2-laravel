@extends('layouts.app')

@section('content')





  <main id="content">
    <div class="home">
      <div class="container" id="container">
        <div class="home_products">
          <div class="row">
            <div class="col-md-9 col-xs-12">
              <div>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="new_prod">
                    <div class="row">

                        @foreach ($products as $product)

                            <div class="col-md-4 col-xs-6">
                                <div class="outer_product animated zoomIn">
                                  <div class="img_block">
                                      <img class="img_block" src="assets/products/{{ $product->image }}">
                                  </div>
                                  <p class="nm">{{ $product->details }}</p>
                                  <p class="desc">{{ $product->name }}</p>
                                  <div class="price_block">
                                      <span>{{ $product->price }} ლ</span>
                                  </div>
                                  <div class="bay_block">
                                  	<form method="POST" action="{{ route('destroy') }}">
										@csrf
										<input type="hidden" name="id" value="{{ $product->id }}">
                                        <button class="btn btn-danger" style="color: black" type="submit">წაშლა</button>
                                  	</form>
                                  </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
