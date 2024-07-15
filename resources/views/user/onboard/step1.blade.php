@extends('user.onboard.layout.master')

@section('title', 'Open Your Account')

@section('content')

 <div class="page__content-inner page__content-inner--padded page__content--full-height">
    <section class="grid container">
        <div class="col-12 col-6-md col-offset-3-md">
            <div>
                <div>
                    <form method="POST" action="{{ route('signup.step1.post') }}" enctype="multipart/form-data">
                        @csrf
                        <h1 class="heading-3">What is your email address?</h1>
                        <p class="text-color-dark-70 mt-50 mb-200"> Tell us a bit about yourself --
                            we'll create your account and suggest the strategy that best fits your
                            goals. </p><label for="email" class="field__label"><span
                                id="emaillabel">Email address</span></label>
                        <form name="leadCapture" class="lead-capture position-relative mt-25">
                            <div class="lead-capture__fieldset">
                                <div class="field__inner mb-200 overflow-hidden-lg"
                                    aria-labelledby="email">
                                    <div><label class="field__label"><span class="show-for-sr">Email
                                                address</span></label>
                                        <div class="field__input">
                                            <input id="email"
                                                placeholder="example@.com" name="email"
                                                type="email" class="input" required>
                                            <span class="input-error">
                                                 @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="email-submit__button--container text-align-right-lg mt-25-lg width-100">
                                    <button type="submit"
                                        class="button lead-capture__button button-primary"
                                        data-test="lead-capture-submit"> Continue </button></div>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
