@extends('layouts.app')

@section('content')



<!-- MODAL END -->
<main id="content">
        <div class="sign_in">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="pg_title">{{ __('პროდუქტის დამატება') }}</h3>
                    </div>
                    <div class="col-xs-12">
                        <div class="outer_frm">

                            <form class="clearfix" method="POST" action="/insert" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>{{ __('ატვირთეთ სურათი') }}</label>
                                    <input placeholder="სურათი" type="file" class="form-control" name="file" required  autofocus>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('სახელი') }}</label>
                                    <input placeholder="სახელი" type="text" class="form-control" name="name" required  autofocus>
                                </div>


                                <div class="form-group">
                                    <label>{{ __('სლაგი') }}</label>
                                    <input placeholder="სლაგი" type="text" class="form-control" name="slug" required  autofocus>
                                </div>


                                <div class="form-group">
                                    <label>{{ __('დეტალები') }}</label>
                                    <input placeholder="დეტალები" type="text" class="form-control" name="details" required  autofocus>
                                </div>


                                <div class="form-group">
                                    <label>{{ __('ფასი') }}</label>
                                    <input placeholder="ფასი" type="number" class="form-control" name="price" required  autofocus>
                                </div>


                                <div class="form-group">
                                    <label>{{ __('აღწერა') }}</label>
                                    <input placeholder="აღწერა" type="text" class="form-control" name="description" required  autofocus>
                                </div>


                                <button type="submit" name="submit" value="add" class="btn btn-default main-sumb">{{ __('პროდუქტის დამატება') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
