<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:-mx-4">
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('/img/me1.png') }}" alt="aboutmeimage1" class="rounded-2xl w-full" loading="lazy"/>
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="{{ url('/img/me3.png') }}" alt="aboutmeimage3" class="rounded-2xl w-full" loading="lazy"/>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img src="{{ url('/img/me2.png') }}" alt="aboutmeimage2" class="rounded-2xl w-full" loading="lazy">
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        <div class="flex">
                            <a class="group text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500" href="https://www.jw.org/en/library/bible/nwt/books/proverbs/12/#v20012027" target="_blank">
                                "Diligence is a man's precious treasure"
                                <div class="bg-amber-500 h-[2px] w-0 group-hover:w-full transition-all duration-500"></div>
                            </a>
                        </div>
                        <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
                            About Me
                        </h2>
                        <p class="text-base dark:text-gray-400 mb-8">
                            I have worked as a professional Software Developer for almost 5 years.<br />
                            During my career I have learned and worked with multiple technologies and have
                            come to love the software world by seeing the endless possibilities it has.<br />
                        </p>
                        <p class="text-base dark:text-gray-400 mb-8">
                            Collaborating in a team and working with others is something I enjoy and thrive on.<br />
                            The main focus of technologies I have worked with for projects and different companies are
                            <span class="text-amber-500 font-bold">Laravel, PHP, Javascript, Vue, React, MySQL, and much
                                more...</span><br />
                        </p>
                        <p class="text-base dark:text-gray-400 mb-8">
                            I love to travel, make music, play sports, enjoy time with my family (especially my niece and
                            nephew),
                            and serve my God as one of <a href="https://www.jw.org/en/#article" target="_blank" class="hover:underline">Jehovah's Witnesses</a>.
                        </p>
                        <x-button-link href="https://github.com/hugosuarezjr" target="_blank">
                            View my Github
                        </x-button-link>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
