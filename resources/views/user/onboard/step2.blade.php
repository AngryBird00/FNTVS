@extends('user.onboard.layout.master')

@section('title', 'Choose Password')

@section('content')

<div class="page__content-inner page__content-inner--padded page__content--full-height">
    <section class="grid container">
        <div class="col-12 col-6-md col-offset-3-md">
            <div>
                <div>
                    <form id="passwordForm" action="{{ route('signup.step2.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 data-test="password-heading" class="heading-3">Create a password</h1>
                        <p class="text-color-dark-70 mt-50 mb-200"> Set a secure password to create your account and save your responses. </p>
                        <div data-v-05de996f="" class="user-creation-form">
                            <div data-v-05de996f="">
                                <div data-v-4651af50="" data-v-05de996f="" class="field__inner mb-100 hide-default-errors" data-test="password-input-field">
                                    <div>
                                        <label class="field__label">Password</label>
                                        <div class="field__input">
                                            <div data-v-4651af50="" class="display-flex align-items-center position-relative">
                                                <input id="password" data-v-4651af50="" aria-label="Password" data-test="password" name="password" autocomplete="new-password" type="password" class="input" required>
                                                <svg id="passwordToggle" data-v-4651af50="" version="1.1" viewBox="0 0 24 24" class="password-icon position-absolute text-color-dark-50 svg-icon svg-fill" data-test="password-mask-toggle" style="width: 23px; height: 23px; cursor: pointer;">
                                                    <defs>
                                                        <path pid="0" d="M11 .5C6 .5 1.73 3.61 0 8c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5C20.27 3.61 16 .5 11 .5zM11 13c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8C9.34 5 8 6.34 8 8s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" id="svgicon_view_a"></path>
                                                    </defs>
                                                    <g transform="translate(1 4)" fill="none" fill-rule="evenodd">
                                                        <mask id="svgicon_view_b" fill="#fff">
                                                            <use xlink:href="#svgicon_view_a"></use>
                                                        </mask>
                                                        <use fill="#000" fill-rule="nonzero" xlink:href="#svgicon_view_a"></use>
                                                        <path pid="1" fill="currentColor" mask="url(#svgicon_view_b)" d="M-1-4h24v24H-1z"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <span class="input-error">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </span>
                                            <ul id="passwordCriteria" class="mt-50">
                                                <li><span id="charCount" class="indicator display-flex align-items-center"><span class="show-for-sr"> Minimum of 8 characters is invalid</span><svg version="1.1" viewBox="0 0 16 16" class="svg-icon svg-fill" style="width: 16px; height: 16px;"><circle cx="8" cy="8" r="7" stroke="#909294" stroke-width="2"></circle></svg><span> &nbsp; Minimum of 8 characters </span></span></li>
                                                <li><span id="hasLetter" class="indicator display-flex align-items-center"><span class="show-for-sr"> At least one letter is invalid</span><svg version="1.1" viewBox="0 0 16 16" class="svg-icon svg-fill" style="width: 16px; height: 16px;"><circle cx="8" cy="8" r="7" stroke="#909294" stroke-width="2"></circle></svg><span> &nbsp; At least one letter </span></span></li>
                                                <li><span id="hasNumber" class="indicator display-flex align-items-center"><span class="show-for-sr"> At least one number is invalid</span><svg version="1.1" viewBox="0 0 16 16" class="svg-icon svg-fill" style="width: 16px; height: 16px;"><circle cx="8" cy="8" r="7" stroke="#909294" stroke-width="2"></circle></svg><span> &nbsp; At least one number </span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span data-v-05de996f="" class="muted zeta display-block"><span data-v-05de996f=""> By continuing you indicate you have reviewed and agree to the <a data-v-05de996f="" href="https://d10cq78zmnjvsx.cloudfront.net/website-documents/1fcd9282-5163-4d33-a812-d6edd2b04186/ - Terms of Service.pdf" target="_blank" class="text-color-current-color text-decoration-underline">Terms of Service</a></span><span data-v-05de996f=""> and <a data-v-05de996f="" href="https://d10cq78zmnjvsx.cloudfront.net/website-documents/c1684daf-4519-40be-9c59-7a2c87bbfb4f/ Privacy Policy (March 2024 Final).pdf" target="_blank" class="text-color-current-color text-decoration-underline">Privacy Policy</a></span>. </span>
                            <div data-v-05de996f="">
                                <div data-v-05de996f="" class="button-group">
                                    <div class="button-group-tertiary-slot"></div><button data-v-05de996f="" type="submit" class="button button-primary" data-test="account-creation-submit" id="submitBtn" disabled> Continue </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    function validatePassword() {
        var password = $('#password').val();
        var charCount = password.length >= 8;
        var hasLetter = /[a-zA-Z]/.test(password);
        var hasNumber = /\d/.test(password);

        $('#charCount svg').html(charCount ? '<polyline points="4,8 8,12 12,4" stroke="#28a745" stroke-width="2" fill="none"/>' : '<circle cx="8" cy="8" r="7" stroke="#909294" stroke-width="2"></circle>');
        $('#hasLetter svg').html(hasLetter ? '<polyline points="4,8 8,12 12,4" stroke="#28a745" stroke-width="2" fill="none"/>' : '<circle cx="8" cy="8" r="7" stroke="#909294" stroke-width="2"></circle>');
        $('#hasNumber svg').html(hasNumber ? '<polyline points="4,8 8,12 12,4" stroke="#28a745" stroke-width="2" fill="none"/>' : '<circle cx="8" cy="8" r="7" stroke="#909294" stroke-width="2"></circle>');

        $('#submitBtn').prop('disabled', !(charCount && hasLetter && hasNumber));
    }

    $('#password').on('input', validatePassword);

    $('#passwordToggle').on('click', function() {
        var passwordField = $('#password');
        var type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);
        $(this).toggleClass('text-color-dark-50 text-color-primary');
    });
});
</script>

@endsection
