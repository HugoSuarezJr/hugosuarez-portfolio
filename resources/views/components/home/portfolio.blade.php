<section id="projects" x-data="{
    selectedTab: 'all',
    activeClasses: 'bg-primary text-white',
    inactiveClasses: 'text-body-color hover:bg-primary hover:text-white'
}" class="pt-20 lg:pt-12 lg:pb-[90px] dark:bg-slate-800 scroll-mt-14">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-gray-300 mb-4">
                        My Recent Projects
                    </h2>
                    <p class="text-base text-body-color">
                        You learn a lot while building projects. Have an idea? Build it!
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <ul class="flex flex-wrap justify-center mb-12 space-x-1">
                    <li class="mb-1">
                        <button x-on:click="selectedTab = 'all'"
                            :class="selectedTab == 'all' ? activeClasses : inactiveClasses"
                            class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                            All Projects
                        </button>
                    </li>
                    @if (!empty($tabs))
                        @foreach ($tabs as $tab)
                            <button x-on:click="selectedTab = '{{ $tab }}'"
                                :class="selectedTab === '{{ $tab }}' ? activeClasses : inactiveClasses"
                                class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition">
                                {{ $tab }}
                            </button>
                        @endforeach
                    @endif

                </ul>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach ($items as $item)
                <x-portfolio-item :title="$item['title']" :categories="$item['category']" :image="$item['image']"
                    :github="$item['github']"></x-portfolio-item>
            @endforeach
        </div>
    </div>
</section>
