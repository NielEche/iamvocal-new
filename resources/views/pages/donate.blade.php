@extends('layouts.app')

@section('title')
Reframe
@endsection

@section('content')
@php( $donations = \App\Models\Donations::all() )

<section id="donations" style="padding-top: 208px;" class="section section--singular parallax2 bg-blue ">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="team-members">
                    <div class="row ">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                            <h1 style="margin-bottom:0px;" class="text-white">Donate To Us Today !!</h1>
                            <p class="text-white">Let’s help make our communities better by improving the quality of
                                lives and providing basic needs for the less privileged and the forgotten in our
                                society. Join others and make a commitment today.</p>
                        </div>
                       {{--  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <p class="d-flex justify-content-center pt-5">
                                <button type="submit" class="btn text-white bg-blue btn-submit"
                                    style="border-radius: 0px !important;">Donate</button>
                            </p>

                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@if ($donations->count())
@foreach ($donations->take(1) as $item)
@if ($item->caption != null)
<section class="section bg-black ">
    <div class="container bg-black pt-5 pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-black">
                <div class="p-5 text-white text-center">
                    <h4>MAKE DONATIONS</h4>
                </div>
            </div>

            <!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bg-black">
                    <div class="p-5 text-white">
                        <h5>About TEDxPortHarcourt Salon </h5>
                        <p>TEDxPortHarcourt introduces the Salon: amonthly speaker
                            series which brings some of the city’s most inspired thinkers to share perspectives
                            and spark conversation. A unique mixture of talks,workshops and interactive
                            experiences. </p>
                        <p>Salon events will bring our community ofinnovators and instigators together in informal evening forums to learn andengage on provocative themes each...</p>
                        <button class="btn border border-white text-white p-2 fw-12">Read More</button>
                    </div>
                </div>-->
        </div>
    </div>

    <section class="timeline">
        <ol>
            @foreach($donations as $key => $data)
            <li>
                <div>
                    <time>N{{$data->amount }}</time>
                    <strong>{{$data->header }}</strong> -
                    <strong>{{ \Carbon\Carbon::parse($data->date)->format('M d Y')}}</strong> 
                    {!! $data->caption !!}
                   <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8"
                   class="form-horizontal" role="form">
                   <input type="hidden" name="email" value="iamvocalng@gmail.com">
                   {{-- required --}}
                   <input type="hidden" name="orderID" value="{{ $data->id }}21">
                   <input type="hidden" name="amount" value="{{ $data->amount*100 }}"> {{-- required in kobo --}}
                   <input type="hidden" name="quantity" value="1">
                   <input type="hidden" name="currency" value="NGN">
                   <input type="hidden" name="metadata"
                       value="{{ json_encode($array = ['key_name' => 'value',]) }}">
                   {{-- For other necessary things you want to add to your payload. it is optional though --}}
                   <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                   {{-- required --}}

                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                        <p class="">
                            <button class="btn text-white bg-blue btn-submit"
                                style="border-radius: 0px !important;" type="submit" value="Pay Now!">
                                <i class="fa fa-plus-circle fa-lg"></i> Donate Now!
                            </button>
                        </p>
                   </form>
                </div>
            </li>
            @endforeach

            <li></li>
        </ol>

        <div class="arrows">
            <button class=" btn arrow arrow__prev disabled" disabled>
                <svg xmlns="http://www.w3.org/2000/svg" style="fill: #fff;" width="30" height="30" viewBox="0 0 24 24">
                    <path
                        d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12-5.373-12-12-12-12 5.373-12 12zm7.58 0l5.988-5.995 1.414 1.416-4.574 4.579 4.574 4.59-1.414 1.416-5.988-6.006z" />
                </svg>
            </button>
            <button class="btn arrow arrow__next">
                <svg xmlns="http://www.w3.org/2000/svg" style="fill: #fff;" width="30" height="30" viewBox="0 0 24 24">
                    <path
                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.218 19l-1.782-1.75 5.25-5.25-5.25-5.25 1.782-1.75 6.968 7-6.968 7z" />
                </svg>
            </button>
        </div>
    </section>
</section>
@else
<div></div>
@endif
@endforeach
@endif


<script>
    (function () {

        // VARIABLES
        const timeline = document.querySelector(".timeline ol"),
            elH = document.querySelectorAll(".timeline li > div"),
            arrows = document.querySelectorAll(".timeline .arrows .arrow"),
            arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
            arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
            firstItem = document.querySelector(".timeline li:first-child"),
            lastItem = document.querySelector(".timeline li:last-child"),
            xScrolling = 280,
            disabledClass = "disabled";

        // START
        window.addEventListener("load", init);

        function init() {
            setEqualHeights(elH);
            animateTl(xScrolling, arrows, timeline);
            setSwipeFn(timeline, arrowPrev, arrowNext);
            setKeyboardFn(arrowPrev, arrowNext);
        }

        // SET EQUAL HEIGHTS
        function setEqualHeights(el) {
            let counter = 0;
            for (let i = 0; i < el.length; i++) {
                const singleHeight = el[i].offsetHeight;

                if (counter < singleHeight) {
                    counter = singleHeight;
                }
            }

            for (let i = 0; i < el.length; i++) {
                el[i].style.height = `${counter}px`;
            }
        }

        // CHECK IF AN ELEMENT IS IN VIEWPORT
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // SET STATE OF PREV/NEXT ARROWS
        function setBtnState(el, flag = true) {
            if (flag) {
                el.classList.add(disabledClass);
            } else {
                if (el.classList.contains(disabledClass)) {
                    el.classList.remove(disabledClass);
                }
                el.disabled = false;
            }
        }

        // ANIMATE TIMELINE
        function animateTl(scrolling, el, tl) {
            let counter = 0;
            for (let i = 0; i < el.length; i++) {
                el[i].addEventListener("click", function () {
                    if (!arrowPrev.disabled) {
                        arrowPrev.disabled = true;
                    }
                    if (!arrowNext.disabled) {
                        arrowNext.disabled = true;
                    }
                    const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
                    if (counter === 0) {
                        tl.style.transform = `translateX(-${scrolling}px)`;
                    } else {
                        const tlStyle = getComputedStyle(tl);
                        // add more browser prefixes if needed here
                        const tlTransform = tlStyle.getPropertyValue("-webkit-transform") ||
                            tlStyle.getPropertyValue("transform");
                        const values = parseInt(tlTransform.split(",")[4]) + parseInt(
                            `${sign}${scrolling}`);
                        tl.style.transform = `translateX(${values}px)`;
                    }

                    setTimeout(() => {
                        isElementInViewport(firstItem) ? setBtnState(arrowPrev) :
                            setBtnState(arrowPrev, false);
                        isElementInViewport(lastItem) ? setBtnState(arrowNext) :
                            setBtnState(arrowNext, false);
                    }, 1100);

                    counter++;
                });
            }
        }

        // ADD SWIPE SUPPORT FOR TOUCH DEVICES
        function setSwipeFn(tl, prev, next) {
            const hammer = new Hammer(tl);
            hammer.on("swipeleft", () => next.click());
            hammer.on("swiperight", () => prev.click());
        }

        // ADD BASIC KEYBOARD FUNCTIONALITY
        function setKeyboardFn(prev, next) {
            document.addEventListener("keydown", (e) => {
                if ((e.which === 37) || (e.which === 39)) {
                    const timelineOfTop = timeline.offsetTop;
                    const y = window.pageYOffset;
                    if (timelineOfTop !== y) {
                        window.scrollTo(0, timelineOfTop);
                    }
                    if (e.which === 37) {
                        prev.click();
                    } else if (e.which === 39) {
                        next.click();
                    }
                }
            });
        }

    })();

</script>

@endsection
@section('footer')
@include('partials.footer')
@endsection
