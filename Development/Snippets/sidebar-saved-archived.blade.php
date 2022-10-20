    {{-- About --}}
    <sidebar-card section="About" :selected="false">
        <template slot="header" class="">
            About {{ config('csp-site.name') }} @svg('info-circle', 'text-brand-300')
        </template>
        <div class="aside-content">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 xl:col-span-2 sm:col-span-1">
                    <ul class="">
                        <li><a href="{{ route('about') }}">About <b>{{ config("csp.site.name") }}</b></a></li>
                        <li><a href="{{ route('bio') }}">About <b>Curt Sheller</b></a></li>
                        <li><a href="{{ route('booking') }}">Booking <b>Curt</b> for Performance, Workshops, Appearances</a></li>
                        <li><a href="{{ route('comments') }}">Site, Books, Lesson and General Comments</a></li>
                        <li><a href="{{ route('study') }}"><b>Three (3) Ways to Study with Curt</b></a></li>
                        <li><a href="{{ route('different') }}">What's Different About <b>{{ config("csp.site.name") }}</b></a></li>

                    </ul>
                </div>
                <div class="col-span-2 xl:col-span-2 sm:col-span-1">
                    <ul class="-mt-6 xl:-mt-4 sm:mt-1">
                        <li><a href="{{ route('interviews') }}">Interviews &amp; Reviews</b></a></li>
                        <li><a href="{{ route('comments') }}">Comments</a></li>
                        <li><a href="{{ route('credits') }}">Credits</a></li>
                        <li><a href="{{ route('shopping') }}">Secure Shopping</a></li>
                        <li><a href="{{ route('shipping') }}">Shipping?</a></li>
                        <li><a href="{{ route('policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('refund') }}">Return and Refund Policy</a></li>
                        <li><a href="{{ route('contact') }}"><b>Contact Curt</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </sidebar-card>

                        <li><a href="{{ route('contact') }}">@svg('envelope') Contact Curt</b></a></li>



@if($lesson->has_video)
    <x-card class="px-2 mt-1 mb-1">
        <div class="bg-brand-500 flex font-display justify-between overflow-hidden px-3 py-2 rounded-lg text-white leading-snug">
            <span><strong>Visual Learner?</strong> <br class="block md:hidden"> Start with a video.</span>
            <a href="{{ route('videos.code', $lesson->code) }}" class="-mx-3 -my-2 bg-orange-600 hover:text-orange-200 pl-4 px-3 py-2 text-white flex items-center">
                <span class="hidden sm:inline -mt-1px mr-1 w-5">
                    @svg('film')
                </span>
                <span class="font-bold">Watch Now</span>
            </a>
        </div>
    </x-card>
@endif
