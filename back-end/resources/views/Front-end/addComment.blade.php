@extends('layouts.app')

@section('content')



<!-- MODAL END -->
<main id="content">
        <div class="sign_in">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="pg_title">{{ __('კომეტარის დამატება') }}</h3>
                    </div>
                    <div class="col-xs-12">
                        <div class="outer_frm">

                            <form class="clearfix" method="POST" action="/insertcomment">
                                @csrf

                                <div class="form-group">
                                    <label>{{ __('სახელი და გვარი') }}</label>
                                    <input placeholder="სახელი და გვარი" type="text" class="form-control" name="fullname" required  >
                                </div>

                                <div class="form-group">
                                    <label>{{ __('კომენტარი') }}</label>
                                    <input placeholder="კომენტარი" type="text" class="form-control" name="comment" required  >
                                </div>

                                <button type="submit" name="submit" value="add" class="btn btn-default main-sumb">{{ __('კომენტარის დამატება') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
