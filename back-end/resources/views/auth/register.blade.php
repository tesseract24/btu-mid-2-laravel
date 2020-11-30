@extends('layouts.app')

@section('content')


    <main id="content">
        <div class="sign_in">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    <div class="col-xs-12">

                        <div class="outer_frm">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name">{{ __('სახელი') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>



                                <div class="form-group">
                                    <label for="surname">{{ __('გვარი') }}</label>
                                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                                        @error('surname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>




                                <div class="form-group">
                                    <label for="pid">{{ __('პირადი ნომერი') }}</label>
                                        <input id="pid" type="number" class="form-control @error('pid') is-invalid @enderror" name="pid" value="{{ old('pid') }}" required autocomplete="pid">

                                        @error('pid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>


                                <div class="form-group">
                                    <label for="adress">{{ __('მისამართი') }}</label>
                                        <input id="adress" type="text" class="form-control @error('name') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress">

                                        @error('adress')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>



                                <div class="form-group">
                                    <label for="telephone">{{ __('ტელეფონი') }}</label>
                                        <input id="telephone" type="number" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                        @error('telephone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>




                                <div class="form-group">
                                    <label for="email">{{ __('ელ-ფოსტა') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('პაროლი') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">{{ __('გაიმეორეთ პაროლი') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <button type="submit" class="btn btn-default main-sumb">
                                    {{ __('შესვლა') }}
                                </button>
                            </form>
                            <div class="out_lnks">
                                <span>დარეგისტრირებული ხართ?</span>
                                <a href="login.html">შესვლა</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
