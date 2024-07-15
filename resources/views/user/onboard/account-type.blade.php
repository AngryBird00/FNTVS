@extends('user.onboard.layout.master')

@section('title', 'Open Your Account')

@section('content')

<div class="page__content-inner page__content-inner--padded page__content--full-height">
    <section>
        <div>
            <div class="container">
                <div class="col-12-smo col-6-md col-offset-3-md">
                    <div class="question-framework-radio-list">
                        <form method="POST" action="{{ route('signup.account-type.post') }}" enctype="multipart/form-data">
                            @csrf
                            <h1 class="heading-3"> What account would you like to open?</h1>
                            <p class="body-md mt-50 text-color-dark-70">Start creating an account
                                that meets your goals. You can add another later.</p>
                            <div class="mt-200">
                                <div>
                                    <div class="field__inner">
                                        <div><label class="field__label"></label>
                                            <div class="field__input">
                                                <ul class="bb bt br bl px-150 rounded">
                                                    <li class="px-0 bb"><label data-v-b89a2528=""
                                                            for="general-investing-account">
                                                            <div data-v-b89a2528=""
                                                                class="list-item display-flex p-150 justify-content-space-between align-items-center text-color-dark-100 list-item-control">
                                                                <div
                                                                    class="display-flex align-items-center">
                                                                    <div role="presentation"
                                                                        class="list-item__icon-container mr-100 icon--large">
                                                                    </div>
                                                                    <div>
                                                                        <div
                                                                            class="list-item__heading-container display-flex align-items-center">
                                                                            <p
                                                                                class="list-item__heading mr-50 body-lg font-weight-bold">
                                                                                General investing
                                                                                account</p><span
                                                                                class="list-item__tag"><span
                                                                                    class="tag tag--default tag--xs">
                                                                                    $10 minimum
                                                                                </span></span>
                                                                        </div>
                                                                        <p
                                                                            class="list-item__subheading mt-0 text-color-dark-70 body-md">
                                                                            <span>A flexible
                                                                                investing account
                                                                                created to help you
                                                                                build long-term
                                                                                wealth.</span></p>
                                                                    </div>
                                                                </div>
                                                                <div data-v-b89a2528=""
                                                                    class="radio-checkbox-item-large">
                                                                    <label data-v-b89a2528=""
                                                                        for="general-investing-account"><input
                                                                            data-v-b89a2528=""
                                                                            id="general-investing-account"
                                                                            name="account_type"
                                                                            data-test="general-investing-account"
                                                                            type="radio"
                                                                            value="GENERAL_ACCOUNT"><span
                                                                            data-v-b89a2528=""
                                                                            class="mask"></span></label>
                                                                </div>
                                                            </div>
                                                        </label></li>
                                                    <li class="px-0"><label data-v-b89a2528=""
                                                            for="retirement-account">
                                                            <div data-v-b89a2528=""
                                                                class="list-item display-flex p-150 justify-content-space-between align-items-center text-color-dark-100 list-item-control">
                                                                <div
                                                                    class="display-flex align-items-center">
                                                                    <div role="presentation"
                                                                        class="list-item__icon-container mr-100 icon--large">
                                                                    </div>
                                                                    <div>
                                                                        <div
                                                                            class="list-item__heading-container display-flex align-items-center">
                                                                            <p
                                                                                class="list-item__heading mr-50 body-lg font-weight-bold">
                                                                                Retirement account
                                                                            </p><span
                                                                                class="list-item__tag"><span
                                                                                    class="tag tag--default tag--xs"><!---->
                                                                                    $1,000 minimum
                                                                                </span></span>
                                                                        </div>
                                                                        <p
                                                                            class="list-item__subheading mt-0 text-color-dark-70 body-md">
                                                                            <span>Transfer,
                                                                                rollover, or start a
                                                                                new IRA with tax
                                                                                benefits for your
                                                                                retirement.</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div data-v-b89a2528=""
                                                                    class="radio-checkbox-item-large">
                                                                    <label data-v-b89a2528=""
                                                                        for="retirement-account"><input
                                                                            data-v-b89a2528=""
                                                                            id="retirement-account"
                                                                            name="account_type"
                                                                            data-test="retirement-account"
                                                                            type="radio"
                                                                            value="RETIREMENT_ACCOUNT"><span
                                                                            data-v-b89a2528=""
                                                                            class="mask"></span></label>
                                                                </div>
                                                            </div>
                                                        </label></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group ">
                                <div class="button-group-tertiary-slot"></div><button type="submit"
                                    class="button button-primary disabled"
                                    data-test="question-framework-submit-button"> Continue </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('input[name="account_type"]').change(function() {
        if ($('input[name="account_type"]:checked').length > 0) {
            $('.button-primary').removeClass('disabled');
        }
    });
});
</script>

@endsection
