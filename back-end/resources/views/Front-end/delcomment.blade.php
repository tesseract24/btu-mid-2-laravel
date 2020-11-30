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
                <div class="home_news">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="title">
                        <a style="padding: 20" href="">კომენტარის წაშლა</a>
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
                          <form method="POST" action="{{ route('destroycomment') }}">
                              @csrf
                              <input type="hidden" name="id" value="{{ $comment->id }}">
                              <button class="btn btn-danger" style="color: black" type="submit">წაშლა</button>
                          </form>
                        </div>
                      @endforeach
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
