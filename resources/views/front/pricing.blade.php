@extends('layouts.front', [
    'title' => __('front.menu.pricing'),
    'active' => 'pricing'
])
@section('content')

    <header class="masthead reduced-masthead" id="pricing-head">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5">{{ __('front.pricing.title') }}</h1>
                        <p class="mb-5">{{ __('front.pricing.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="features" id="pricing">
        <div class="container">
            <div class="section-body">
{{--                <h1>{{ __('front.pricing.index.title') }}</h1>--}}
{{--                <p class="text-muted">{{ __('front.index.description') }}</p>--}}

                <div class="row pricing">
                    <div class="col-lg-4 ">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <div class="card-image" style="background-image: url(/images/tiers/kobold.png);"></div>
                                <h5 class="card-title text-muted text-uppercase text-center">Kobold</h5>
                                <h6 class="card-price text-center">{{ __('front.pricing.tier.free') }}</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.pricing.benefits.unlimited') }}
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.pricing.benefits.core') }}
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.pricing.benefits.updates') }}
                                    </li>

                                    <li class="text-muted">
                                        <span class="fa-li"><i class="fas fa-times"></i></span> {{ __('front.pricing.benefits.higher_uploads') }}
                                    </li>
                                    <li class="text-muted">
                                        <span class="fa-li"><i class="fas fa-times"></i></span> {{ __('front.pricing.benefits.boosters') }}
                                    </li>
                                </ul>

                                <a href="{{ route('register') }}" class="btn btn-block btn-primary text-uppercase">
                                    {{ __('front.second_block.call_to_action') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <div class="card-image" style="background-image: url(/images/tiers/owlbear.png);"></div>
                                <h5 class="card-title text-muted text-uppercase text-center">Owlbear</h5>
                                <h6 class="card-price text-center">$5<span class="period">/{{ __('front.pricing.tier.month') }}</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <a href="{{ route('front.features', ['#boost']) }}" target="_blank">
                                            <strong>3 {{ __('front.pricing.benefits.boosters') }}</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.pricing.benefits.higher_uploads') }} (8mb)
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.features.patreon.monthly_vote') }}
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.features.patreon.discord') }}
                                    </li>

                                    <li class="text-muted">
                                        <span class="fa-li"><i class="fas fa-times"></i></span> {{ __('front.features.patreon.curation') }}
                                    </li>
                                    <li class="text-muted">
                                        <span class="fa-li"><i class="fas fa-times"></i></span> {{ __('front.features.patreon.impact') }}
                                    </li>
                                </ul>

                                <a href="{{ config('patreon.url') }}" target="_blank" rel="nofollow" class="btn btn-block btn-primary text-uppercase">
                                    {{ __('front.pricing.actions.support') }}
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 ">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <div class="card-image" style="background-image: url(/images/tiers/elemental.png);"></div>
                                <h5 class="card-title text-muted text-uppercase text-center">Elementals</h5>
                                <h6 class="card-price text-center">$25<span class="period">/{{ __('front.pricing.tier.month') }}</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span>
                                        <a href="{{ route('front.features', ['#boost']) }}" target="_blank">
                                            <strong>10 {{ __('front.pricing.benefits.boosters') }}</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.pricing.benefits.higher_uploads') }} (25mb)
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.features.patreon.monthly_vote') }}
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.features.patreon.discord') }}
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.features.patreon.curation') }}
                                    </li>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> {{ __('front.features.patreon.impact') }}
                                    </li>
                                </ul>

                                <a href="{{ config('patreon.url') }}" target="_blank" rel="nofollow" class="btn btn-block btn-primary text-uppercase">
                                    {{ __('front.pricing.actions.support') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('front.features') }}" class="lead">
                    {{ __('front.pricing.actions.more') }} <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection