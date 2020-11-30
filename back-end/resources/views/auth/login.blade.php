@extends('layouts.app')

@section('content')



<!-- MODAL END -->
<main id="content">
        <div class="sign_in">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="pg_title">{{ __('შესვლა') }}</h3>
                    </div>
                    <div class="col-xs-12">
                        <div class="outer_frm">

                            <form class="clearfix" method="POST" action="{{ route('login') }}" >
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input placeholder="ელ. ფოსტა" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('პაროლი') }}</label>
                                    <input placeholder="პაროლი" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-default main-sumb">{{ __('შესვლა') }}</button>
                                @if (Route::has('password.request'))
                                    <a class="forget_pas" href="{{ route('password.request') }}">
                                        {{ __('პაროლის აღდგენა') }}
                                    </a>
                                @endif
                            </form>
                            <div class="out_lnks">
                                <span>არ გაქვთ ანგარიში?</span>
                                <a href="{{ route('register') }}">რეგისტრაცია</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
