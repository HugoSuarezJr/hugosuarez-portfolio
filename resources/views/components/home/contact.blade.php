<section id="contact" class="bg-white dark:bg-primary py-20 lg:py-[120px] overflow-hidden relative z-10">
    <div class="container">
        <div class="flex flex-wrap lg:justify-between -mx-4">
            <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
                <div class="max-w-[570px] mb-12 lg:mb-0">
                    <h2
                        class="text-dark dark:text-gray-100 mb-6 uppercase font-bold text-[32px] sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                        FOR BUSINESS ENQUIRIES
                    </h2>
                    <p class="text-base text-body-color dark:text-gray-200 leading-relaxed mb-9">
                        If you are looking for someone with my experience and skill set, please feel free to contact me.
                    </p>
                    <div class="flex mb-8 max-w-[370px] w-full">
                        <div
                            class="bg-primary bg-opacity-5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px] dark:text-gray-300">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 4.7998H3.99998C2.29998 4.7998 0.849976 6.1998 0.849976 7.9498V24.1498C0.849976 25.8498 2.24998 27.2998 3.99998 27.2998H28C29.7 27.2998 31.15 25.8998 31.15 24.1498V7.8998C31.15 6.1998 29.7 4.7998 28 4.7998ZM28 7.0498C28.05 7.0498 28.1 7.0498 28.15 7.0498L16 14.8498L3.84998 7.0498C3.89998 7.0498 3.94998 7.0498 3.99998 7.0498H28ZM28 24.9498H3.99998C3.49998 24.9498 3.09998 24.5498 3.09998 24.0498V9.2498L14.8 16.7498C15.15 16.9998 15.55 17.0998 15.95 17.0998C16.35 17.0998 16.75 16.9998 17.1 16.7498L28.8 9.2498V24.0998C28.9 24.5998 28.5 24.9498 28 24.9498Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-dark dark:text-gray-200">
                                Email Address
                            </h4>
                            <a class="text-base text-body-color dark:text-gray-300 hover:underline"
                                href="mailto:husuarezjr@gmail.com">
                                husuarezjr@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="bg-white dark:bg-slate-900 relative rounded-lg p-8 sm:p-12 shadow-lg">
                    <form action="/contact/submit" method="POST" x-data="{
                        formData: {
                            name: '',
                            email: '',
                            message: '',
                        },
                        errors: {},
                        successMessage: '',

                        submitForm(event) {
                            this.successMessage = '';
                            this.errors = {};
                                fetch(`/contact/submit`, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'X-CSRF-TOKEN': document.querySelector(`meta[name='csrf-token']`).getAttribute('content')
                                    },
                                    body: JSON.stringify(this.formData)
                                })
                                .then(response => {
                                    if(response.status === 200){
                                        return response.json();
                                    }
                                    throw response;
                                })
                                .then(result => {
                                    this.formData = {
                                        name: '',
                                        email: '',
                                        message: ''
                                    };
                                    this.successMessage = 'Sent! Thank you. I will get back to you shortly.';
                                })
                                .catch(async (response) => {
                                    const res = await response.json();
                                    if (response.status === 422) {
                                        this.errors = res.errors;
                                    }
                                    console.log(res);
                                })
                        }

                    }" x-on:submit.prevent="submitForm">
                        <template x-if="successMessage">
                            <div x-text="successMessage" class="py-4 px-6 bg-green-600 text-gray-100 mb-4 rounded"></div>
                        </template>
                        @csrf
                        <div class="mb-6">
                            <x-forms.input placeholder="Your Name" name="name" ::class="errors.name ? 'border-red-500 focus:border-red-500' : '' "
                                x-model="formData.name"></x-forms.input>
                            <template x-if="errors.name">
                                <div x-text="errors.name[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div class="mb-6">
                            <x-forms.input type="email" placeholder="Your Email" name="email" ::class="errors.email ? 'border-red-500 focus:border-red-500' : '' "
                                x-model="formData.email"></x-forms.input>
                            <template x-if="errors.email">
                                <div x-text="errors.email[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div class="mb-6">
                            <x-forms.textarea placeholder="Your Message" name="message" rows="6" ::class="errors.message ? 'border-red-500 focus:border-red-500' : '' "
                                x-model="formData.message"></x-forms.textarea>
                            <template x-if="errors.message">
                                <div x-text="errors.message[0]" class="text-red-500"></div>
                            </template>
                        </div>
                        <div>
                            <x-button class="w-full">
                                Send Message
                            </x-button>
                        </div>
                    </form>
                    <div>
                        <span class="absolute -top-10 -right-9 z-[-1]">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                                    fill="#3056D3" />
                            </svg>
                        </span>
                        <x-contact-dots-top></x-contact-dots-top>
                        <x-contact-dots-bottom></x-contact-dots-bottom>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
