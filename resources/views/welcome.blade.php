<x-guest-layout>
    <div class="bg-white">
        <header class="relative pb-24 bg-sky-800 sm:pb-32">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover object-bottom saturate-0 opacity-20"
                    src="https://images.unsplash.com/photo-1458170143129-546a3530d995?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2954&q=80"
                    alt="">
                <div class="absolute inset-0 bg-gradient-to-l from-teal-500 to-cyan-600 mix-blend-multiply"
                    aria-hidden="true"></div>
            </div>
            <div class="relative z-10">
                <nav class="relative max-w-7xl mx-auto flex items-center justify-between pt-6 pb-2 px-4 sm:px-6 lg:px-8"
                    aria-label="Global">
                    <div class="flex items-center justify-between w-full lg:w-auto">
                        <a href="#">
                            <span class="sr-only">teamlove</span>
                            <!-- <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt=""> -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-50" fill="none"
                                viewBox="0 0 24 24" stroke="currentcolor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <a href="#"
                                class="ml-1 text-base font-medium text-white hover:text-cyan-100 hover:text-cyan-100">teamlove

                            </a>
                        </a>
                        <div class="-mr-2 flex items-center lg:hidden">
                            <button type="button"
                                class="bg-sky-800 bg-opacity-0 rounded-md p-2 inline-flex items-center justify-center text-cyan-100 hover:bg-opacity-100 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                                aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden space-x-10 lg:flex lg:ml-10">
                        <a href="#" class="text-base font-medium text-white hover:text-cyan-100">For Teams</a>

                        <a href="#" class="text-base font-medium text-white hover:text-cyan-100">For Enterprise</a>

                        <a href="#" class="text-base font-medium text-white hover:text-cyan-100">Pricing</a>

                        <a href="#" class="text-base font-medium text-white hover:text-cyan-100">About</a>
                    </div>
                    @if (Route::has('login'))
                        <div class="hidden lg:flex lg:items-center lg:space-x-3">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="py-2 px-6 bg-white bg-opacity-10 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-20">
                                    Log in
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="py-2 px-6 bg-white bg-opacity-10 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-20">
                                    Log in
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="py-2 px-6 bg-white bg-opacity-10 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-20">
                                        Sign up
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif


                    {{-- @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif --}}
                </nav>

                <!--
                  Mobile menu, show/hide based on menu open state.
          
                  Entering: "duration-150 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                  Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top lg:hidden">
                    <div class="rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/workflow-mark.svg?color=emerald&shade=400"
                                    alt="">
                            </div>
                            <div class="-mr-2">
                                <button type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-cool-gray-400 hover:bg-cool-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="pt-5 pb-6">
                            <div class="px-2 space-y-1">
                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-cool-gray-900 hover:bg-cool-gray-50">Changelog</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-cool-gray-900 hover:bg-cool-gray-50">About</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-cool-gray-900 hover:bg-cool-gray-50">Partners</a>

                                <a href="#"
                                    class="block px-3 py-2 rounded-md text-base font-medium text-cool-gray-900 hover:bg-cool-gray-50">News</a>
                            </div>
                            <div class="mt-6 px-5">
                                <a href="#"
                                    class="block text-center w-full py-2 px-4 border border-transparent rounded-md shadow bg-emerald-400 text-white font-medium hover:bg-emerald-500">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mt-24 max-w-md mx-auto px-4 sm:max-w-3xl sm:mt-32 sm:px-6 lg:max-w-7xl lg:px-8">
                <h1
                    class="pb-2 text-4xl font-extrabold tracking-tight text-teal-50 bg-gradient-to-l from-emerald-400 to-cyan-300 bg-clip-text text-transparent sm:text-5xl lg:text-5xl">
                    Get teams working to their full potential.</h1>
                <p class="mt-3 text-2xl text-cyan-100 max-w-3xl">As an enterprise team effectiveness solution, we
                    believe that all it takes is a guiding hand to make teams great through feedback and hard work.</p>
                <p class="mt-3 text-2xl text-cyan-100 max-w-3xl">We are dedicated to enabling teams to perform better,
                    be more productive and have more fun.</p>
            </div>
        </header>

        <main>









            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="py-12 sm:py-16 lg:py-20 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-emerald-400 font-semibold tracking-wide uppercase">Reasons for
                            Teamlove
                        </h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-cool-gray-900 sm:text-4xl">
                            Is your business ready for peak performance?
                        </p>
                        <p class="mt-4 max-w-2xl text-xl text-cool-gray-500 lg:mx-auto">
                            At teamlove we apply the science of human systems to improve a company’s most vital asset:
                            the team. Our mission is to help companies <br> build, enhance and scale their teams.
                        </p>
                        </p>
                    </div>

                    <div class="mt-10">
                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-emerald-400 to-emerald-400 text-white">
                                        <!-- Heroicon name: outline/globe-alt -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-cool-gray-900">Getting things
                                        done</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-cool-gray-500">
                                    Get into action with teamlove. We support teams in the process of setting
                                    sustainable goals and making them a reality by providing clear and effective
                                    guidelines. <span class="text-emerald-400">» Learn more</span>
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-emerald-400 to-emerald-400 text-white">
                                        <!-- Heroicon name: outline/scale -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-cool-gray-900">We make
                                        teambuilding exciting</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-cool-gray-500">
                                    We pick up energy for everyone involved with an efficient yet playful concept, so
                                    that they are invested in the topics and are committed to the process. <span
                                        class="text-emerald-400">» Learn more</span>
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-emerald-400 to-emerald-400 text-white">
                                        <!-- Heroicon name: outline/lightning-bolt -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-cool-gray-900">In the right place
                                        at the right time</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-cool-gray-500">
                                    Many work-related issues can be solved best in a team. However, whenever
                                    organization-wide action is required, teams can use our tool to submit inquiries
                                    that end up with exactly the right person. <span class="text-emerald-400">» Learn
                                        more</span>
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br from-emerald-400 to-emerald-400 text-white">
                                        <!-- Heroicon name: outline/annotation -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-cool-gray-900">Adapting to a
                                        team's abilitiy</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-cool-gray-500">
                                    Our tool enables most teams to reach their full potential themselves. However, some
                                    teams might need help with their feedback culture or support with certain topics
                                    which they can get on demand. <span class="text-emerald-400">» Learn more</span>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>



            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="relative bg-cool-gray-50 overflow-hidden pt-12 sm:pt-16 lg:pt-20">
                <div class="mx-auto max-w-md px-4 text-center sm:px-6 sm:max-w-3xl lg:px-8 lg:max-w-7xl">
                    <div>
                        <h2 class="text-base font-semibold tracking-wider text-emerald-400 uppercase">digital
                            teambuilding
                        </h2>
                        <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                            This is Teamlove.
                        </p>
                        <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                            We have created a tool that helps teams give and get feedback efficiently to solve problems
                            and implement solutions, so they can work better together.
                        </p>
                    </div>
                    <div class="mt-12 -mb-10 sm:-mb-24 lg:-mb-72">
                        <img class="rounded-lg shadow-xl ring-1 ring-black ring-opacity-5"
                            rc="https://tailwindui.com/img/component-images/emerald-project-app-screenshot.jpg"
                            src="https://iwop.eu/files/demo/team-screenshot5.jpg" alt="">
                    </div>
                </div>
            </div>


            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-gradient-to-r from-emerald-400 to-cyan-600 relative">

                <div class="absolute inset-0">
                    <img class="w-full h-full object-cover saturate-0 opacity-0"
                        src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2874&q=80"
                        alt="">
                    <div class="absolute inset-0 bg-gradient-to-l from-teal-500 to-cyan-700 mix-blend-multiply opacity-0"
                        aria-hidden="true"></div>
                </div>

                <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                    <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                        <path class="text-cyan-700 text-opacity-5" fill="currentColor"
                            d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                        <path class="text-cyan-800 text-opacity-5" fill="currentColor"
                            d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                    </svg>
                </div>

                <div class="relative max-w-2xl mx-auto text-center py-16 px-4 sm:py-40 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        <span class="block">Boost your productivity.</span>
                        <span class="block">Start using Teamlove today.</span>
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-cyan-100"> We're delivering a solution that will transform
                        the
                        way people work.</p>
                    <a href="#"
                        class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-cyan-800 bg-white hover:bg-cyan-50 sm:w-auto">
                        Sign up for free
                    </a>
                </div>
            </div>



            <!-- alternative colors ->
          <div class="bg-gradient-to-l from-sky-800 to-cyan-700 relative">
          
               <div class="absolute inset-0">
                <img class="w-full h-full object-cover saturate-0 opacity-0" src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2874&q=80" alt="">
                <div class="absolute inset-0 bg-gradient-to-l from-teal-500 to-cyan-700 mix-blend-multiply opacity-0" aria-hidden="true"></div>
              </div> 
          
                    <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                      <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                        <path class="text-cyan-600 text-opacity-10" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                        <path class="text-sky-700 text-opacity-20" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                      </svg>
                    </div>
          
            <div class="relative max-w-2xl mx-auto text-center py-16 px-4 sm:py-40 sm:px-6 lg:px-8">
              <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Boost your productivity.</span>
                <span class="block">Start using Teamlove today.</span>
              </h2>
              <p class="mt-4 text-lg leading-6 text-cyan-100"> We're delivering a solution that will transform the way people work.</p>
              <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-emerald-50 bg-emerald-400 hover:bg-emerald-500 sm:w-auto">
                Sign up for free
              </a>
            </div>
          </div>
          <!-- End alternative colors-->




            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="relative bg-white pt-16 pb-32 overflow-hidden">
                <div class="relative">
                    <div
                        class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                        <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                            <div>
                                <div>
                                    <span class="h-12 w-12 rounded-md flex items-center justify-center bg-emerald-400">
                                        <!-- Heroicon name: outline/inbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-6">
                                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                        Playful Feedback
                                    </h2>
                                    <p class="mt-4 text-lg text-gray-500">
                                        Our innovative and playful interface allows team members to intuitively browse
                                        and select topics. For every card that is flagged with a need for improvement we
                                        collect statements on the underlying issues as well as suggestions to fix them.
                                    </p>
                                    <div class="mt-6">
                                        <a href="#"
                                            class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-emerald-400 hover:bg-emerald-500">
                                            Get started today
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mt-12 sm:mt-16 lg:mt-0">
                            <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                                <video autoplay loop muted
                                    class="w-full ml-8 scale-110 rounded-xl ring-1 ring-black ring-opacity-0 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none">
                                    <source src="https://www.iwop.eu/files/demo/cardanimation.mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-24">
                    <div
                        class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                        <div
                            class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                            <div>
                                <div>
                                    <span class="h-12 w-12 rounded-md flex items-center justify-center bg-emerald-400">
                                        <!-- Heroicon name: outline/sparkles -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-6">
                                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                        Work on relevant issues
                                    </h2>
                                    <p class="mt-4 text-lg text-gray-500">
                                        Each topic is selected in a two-step process, first by the indiviudal team
                                        member, then narrowed down to the five most important ones. This way teams can
                                        focus their energy on what really matters and the reports to the organisation
                                        are also streamlined and focused.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                            <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                                <img class="w-full mr-8 rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                                    src="https://www.iwop.eu/files/demo/team-screenshot-issues2.jpg"
                                    alt="Customer profile user interface">
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <div class="py-32 bg-cool-gray-50 overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 space-y-8 sm:px-6 lg:px-8">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none">
                        <h2 class="text-base text-emerald-400 font-semibold tracking-wide uppercase">Supercharge your
                            organization</h2>
                        <p
                            class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-cool-gray-900 sm:text-4xl">
                            Do you have the tools to create an engaged team?</p>
                    </div>
                    <div class="relative z-10 text-base max-w-prose mx-auto lg:max-w-5xl lg:mx-0 lg:pr-72">
                        <p class="text-lg text-cool-gray-500">[Draft] We believe that measuring and enhancing employee
                            satisfaction is one of the most important things you can do to help improve the way your
                            company works. With this app, you can easily survey all of your employees quickly and
                            efficiently. And since your workers are giving feedback to their coworkers rather than a
                            faceless HR department, they’ll be more likely to speak honestly about their experiences.
                            It’s an efficient, useful tool that can serve as a valuable part of your organization’s
                            culture.
                        </p>
                    </div>
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-start">
                        <div class="relative z-10">
                            <div class="prose text-cool-gray-500 mx-auto lg:max-w-none">

                                <h3>Why you should choose Teamlove</h3>
                                <p class="text-lg">I was helping with an employee survey that various teams were
                                    using. It was expensive, hard to use without specialized software, and the end
                                    product was inflexible. We talked with team leaders about what worked and what
                                    didn't. They were frustrated but felt they had no alternative tool for collecting
                                    feedback.</p>
                                <p class="text-lg">The employee survey can be a useful tool for many businesses.
                                    From gauging employee satisfaction and performance to improving the quality of work
                                    life for co-workers, the survey can address a wide range of objectives. However, it
                                    does have drawbacks that are often overlooked in favor of their easily recognizable
                                    advantages. One of the most significant downsides is that, in most cases, surveys
                                    are inflexible. They're rigid tools that don't always address specific issues when
                                    problems arise. Moreover, they're expensive tools to use when you consider labor
                                    costs associated with developing and administering them. That's where teamlove comes
                                    in. Teamlove allows you to learn about your teams through fostering participation in
                                    conversations about topics of interest to your employees.</p>
                                <p class="text-lg">Finding the right employee survey solution for you company is
                                    probably the most important decision you will make in your HR career. Teamlove is a
                                    new tool that might be the answer for your company. Read on for all the facts about
                                    teamlove and how we tackle common problems and pain points with feedback tools. Or,
                                    even better, just try it out for free so cou can compare it to your existing
                                    solutions.</p>

                            </div>
                            <div class="mt-10 flex text-base max-w-prose mx-auto lg:max-w-none">
                                <div class="rounded-md shadow">
                                    <a href="#"
                                        class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-emerald-400 hover:bg-emerald-500">
                                        Contact sales
                                    </a>
                                </div>
                                <div class="rounded-md shadow ml-4">
                                    <a href="#"
                                        class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-emerald-400 bg-white hover:bg-gray-50">
                                        Learn more
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="mt-12 relative text-base max-w-prose mx-auto lg:mt-0 lg:max-w-none">
                            <svg class="absolute top-0 right-0 -mt-20 -mr-20 lg:top-auto lg:right-auto lg:bottom-1/2 lg:left-1/2 lg:mt-0 lg:mr-0 xl:top-0 xl:right-0 xl:-mt-20 xl:-mr-20"
                                width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                                <defs>
                                    <pattern id="bedc54bc-7371-44a2-a2bc-dc68d819ae60" x="0" y="0" width="20"
                                        height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                            fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="384" fill="url(#bedc54bc-7371-44a2-a2bc-dc68d819ae60)" />
                            </svg>
                            <blockquote class="relative lg:ml-9 lg:mt-9 bg-white rounded-lg shadow-lg">
                                <div class="rounded-t-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
                                    <div class="relative text-lg text-gray-700 font-medium mt-8">
                                        <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gray-200"
                                            fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path
                                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="relative">For over a decade we've been working to help
                                            businesses like yours work better together. We're your company's trusted
                                            partner to help you achieve success in an increasingly competitive
                                            environment.</p>
                                    </div>
                                </div>
                                <cite
                                    class="relative flex items-center sm:items-start bg-emerald-400 rounded-b-lg not-italic py-5 px-6 sm:py-5 sm:pl-12 sm:pr-10 sm:mt-10">
                                    <div
                                        class="relative rounded-full border-2 border-white sm:absolute sm:top-0 sm:transform sm:-translate-y-1/2">
                                        <img class="w-12 h-12 sm:w-24 sm:h-24 rounded-full bg-emerald-300"
                                            src="https://iwop.eu/files/demo/klanke.jpg" alt="">
                                    </div>
                                    <span
                                        class="relative ml-8 text-emerald-200 font-semibold leading-6 sm:ml-32 sm:pl-1">
                                        <p class="text-white font-semibold sm:inline">Christopher Klanke<br></p>
                                        <p class="sm:inline">Customer Manager at Teamlove</p>
                                    </span>
                                </cite>
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>



            <div class="relative bg-white">
                <div class="lg:absolute lg:inset-0">
                    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <img class="h-56 w-full object-cover lg:absolute lg:h-full"
                            src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=5760&q=80"
                            alt="">
                    </div>
                </div>
                <div
                    class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
                    <div class="lg:col-start-1 pr-10 xl:pr-20">
                        <div class="text-base max-w-prose mx-auto lg:max-w-none">
                            <h2 class="text-base text-emerald-400 font-semibold tracking-wide uppercase">What makes us
                                unique</h2>
                            <h3
                                class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                Getting things done</h3>
                            <p class="mt-t text-lg pt-8 text-gray-500">Die größte Hürde von Feedbackprozessen ist es,
                                erkannte Probleme nicht nur in Maßnahmen zu überführen sondern diese auch erfolgreich
                                umzusetzen. Um den nachhaltigen Erfolg sicherzustellen setzen wir auf eine Reihe von
                                innovativen Gestaltungsentscheidungen.
                            </p>
                            <div class="mt-5 prose prose-emerald text-gray-500">

                                <h3>Der Aktionsworkshop als Handlungsmotivation</h3>
                                <p class="text-lg">Die kritischte Phase eines Feedbackprozesses beginnt nach der
                                    Maßnahmenableitung, aber genau hier fehlt es oft an Struktur. Durch den fest in
                                    unseren Prozess integrierten Aktionsworkshop stellen wir in Kombination mit dem
                                    übersichtlichen Maßnahmenboard die Umsetzung sicher.</p>

                                <h3>Integration aller Prozessphasen auf Themenkarten</h3>
                                <p class="text-lg">Feedback, Maßnahmenableitung und Umsetzung - statt
                                    verschiedener Tools sind alle Prozessschritte auf einer Themenkarte integriert.
                                    Durch die Reduzierung von Medienbrüchen und den jederzeit Verfügbaren vollständigen
                                    Themenkontext kann sich das Team voll auf die Erarbeitung und Umsetzung von
                                    Maßnahmen konzentrieren.</p>

                                <h3>Die richtige Dosis Feedback</h3>
                                <p class="text-lg">Feedback alle ein bis zwei Jahre überfordert und ist nicht
                                    nachhaltig. Feedback jede Woche oder jeden Monat stumpft ab und bietet keine
                                    Gesprächs- und Handlungsanlässe. Wir setzen daher auf einen dreimonatigen Prozess
                                    und erreichen so die optimale Kombination aus Kontinuität und Triebkraft.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="relative bg-white">
                <div class="lg:absolute lg:inset-0">
                    <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
                        <img class="h-56 w-full object-cover lg:absolute lg:h-full"
                            src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3997&q=80"
                            alt="">
                    </div>
                </div>
                <div
                    class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
                    <div class="lg:col-start-2 lg:pl-8">
                        <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">
                            <h2 class="text-base text-emerald-400 font-semibold tracking-wide uppercase">What makes us
                                unique</h2>
                            <h3
                                class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                We make teambuilding exciting</h3>
                            <p class="mt-8 text-lg text-gray-500">Die Beschäftigung mit den eigenen Prozessen, Stärken
                                und Schwächen stellt stellt für viele Arbeitnehmer:innen zunächst eine fragwürdige
                                Mehrbelastung dar, denn es braucht Arbeit und Kontinuität um die gewünschten Ergebnisse
                                zu erzielen. Dann aber führt Selbstreflektion zu deutlich gesteigerter Produktivität und
                                Zufriedenheit. Wir helfen den Einstieg in den Reflektionsprozess durch eine Reihe von
                                innovativen Maßnahmen zu vereinfachen.
                            </p>
                            <div class="mt-5 prose prose-emerald text-gray-500">

                                <h3>In Themen investieren</h3>
                                <p class="text-lg">In klassischen Feedbackprozessen gehen Themen leicht in der
                                    Masse unter. Nach der Bewertung von 40, 60 oder mehr Themen ist jedes nur noch eine
                                    Nummer mit Bewertungskennzahl. Unser Feedbackprozess fragt daher gezielt nur nach 5
                                    positiven und verbesserungswürdigen Themen. Zusätzlich sollen Begründungen und
                                    Verbesserungsvorschläge für kritisch eingeschätzte Themen formuliert werden. Zu
                                    Beginn des Reflektionsworkshops haben daher alle Mitarbeitenden bereits
                                    Themengebiete über die sich nachgedacht haben, zu denen sie etwas zu sagen hatten
                                    und in die sie investiert sind.</p>

                                <h3>Kraft (und Zeit) sparen mit einem guten Prozess</h3>
                                <p class="text-lg">Wir halten es für wichtig, dass ein Feedbackprozess klare und
                                    schnell sichtbare Erfolge produziert. Wir haben daher ein Konzept für einen
                                    Reflektionsworkshop entwickelt, welches in 2 bis 2½ Stunden eine gut strukturierte
                                    Erarbeitung von Problemlösungen ermöglicht. Die Teams werden so angeleitet, dass
                                    alle Maßnahmen realistisch umsetzbar sind und mögliche Schwierigkeiten frühzeitig
                                    erkannt und ausgeräumt werden.</p>

                                <h3>Positiver und spielerischer Mindset</h3>
                                <p class="text-lg">Bei Feeback werden ernste Themen angesprochen. Umso wichtiger
                                    sind gute Eisbrecher und ein spielerischer Charakter des gesamten Prozesses. In
                                    unserem Tool vermittelt ein digitales Spielkartenset einen haptischen und leichen
                                    Kontext. Durch die Zelebrierung von positiven Ergebnissen mit einem Augenzwinkern
                                    und digitalen Effekten erleichtern wir den Einstieg in den Reflektionsworkshop und
                                    schaffen das richtige emotionale Mindset.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="relative bg-white">
                <div class="lg:absolute lg:inset-0">
                    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <img class="h-56 w-full object-cover object-right lg:absolute lg:h-full"
                            src="https://images.unsplash.com/photo-1558403194-611308249627?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3600&q=80"
                            alt="">
                    </div>
                </div>
                <div
                    class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
                    <div class="lg:col-start-1 pr-10 xl:pr-20">
                        <div class="text-base max-w-prose mx-auto lg:max-w-none">
                            <h2 class="text-base text-emerald-400 font-semibold tracking-wide uppercase">What makes us
                                unique</h2>
                            <h3
                                class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                In the right place at the right time</h3>
                            <p class="mt-t text-lg pt-8 text-gray-500">Bei einer klassischen Mitarbeiterbefragung
                                werden durch zahlreiche Steakholder noch zahlreichere Themen eingebracht, diese haben
                                jedoch meist keinen klaren Plan, wie mit den Ergebnissen weitergearbeitet werden soll
                                und wer für die Umsetzung von verbesserungsmaßnahmen verantwortlich ist. Mit unserem
                                Tool verhindern wir ein diffuses “Ownership” für ein Thema und stellen sicher, dass
                                Probleme an der richtigen Stelle bearbeitet werden.
                            </p>
                            <div class="mt-5 prose prose-emerald text-gray-500">

                                <h3>Die meisten Lösungen können im Team erarbeitet werden</h3>
                                <p class="text-lg">Mit dem hohen Teambezug unseres Tools setzen wir auf eine
                                    dezentrale Bearbeitung von Themen, die fast immer am erfolgversprechendsten ist. Im
                                    Team können Entscheidungen schnell und unbürokratisch getroffen und auch umgesetzt
                                    werden. Durch die hohe Interaktionsdichte im Arbeitsalltag können
                                    Verbesserungsprozess außerdem iterativ und nachhaltig gestaltet werden.</p>

                                <h3>Themen richtig platzieren</h3>
                                <p class="text-lg">Obwohl auch organisationsbezogene Themen durch Teams
                                    gestaltbar sind, gibt es es immer wieder Bereiche, in denen erst Unternehmensweites
                                    Handeln eine spürbare Verbesserung bringt. Für alle klar organisationsbezogenen
                                    Themen haben wir daher Prozess implementiert, mit dem die Probleme direkt an die
                                    verantwortlichen Personen gemeldet und in der entsprechenden Fachabteilung
                                    bearbeitet werden können. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="relative bg-white">
                <div class="lg:absolute lg:inset-0">
                    <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
                        <img class="h-56 w-full object-cover lg:absolute lg:h-full"
                            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=5970&q=80"
                            alt="">
                    </div>
                </div>
                <div
                    class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
                    <div class="lg:col-start-2 lg:pl-8">
                        <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0">
                            <h2 class="text-base text-emerald-400 font-semibold tracking-wide uppercase">What makes us
                                unique</h2>
                            <h3
                                class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                Adapting to a team's abilitiy</h3>
                            <p class="mt-8 text-lg text-gray-500">Teamlove wurde entwickelt, um Teams ein Instrument an
                                die Hand zu geben, mit dem sie sich selbstständig entwickeln können. Dennoch ist es
                                wichtig zu berücksichtigen, dass Teams in sich in ihren Fähigkeiten unterscheiden und
                                ein unterschiedliches Maß an unterstützung benötigen. Aus diesem Grund haben wir zwei
                                Mechanismen implementiert, die Teams gezielte Unterstützung im Prozess bieten.
                            </p>
                            <div class="mt-5 prose prose-emerald text-gray-500">

                                <h3>Change readiness assessment</h3>
                                <p class="text-lg">Zu Beginn eines Feedback-Zyklus messen wir die
                                    Veränderungsbereitschaft und die Handlungskompetenz der Teammitglieder und des Teams
                                    als ganzem. Teams die einen kritischen Wert unseres Readiness-Indizes nicht
                                    überschreiten werden angehalten, zunächst an ihrer Feedback-Bereitschaft und ihrer
                                    Kommunikationskompetenz zu arbeiten.</p>

                                <h3>Coaching on demand</h3>
                                <p class="text-lg">Neben der Prozessebene haben Teams auch die Möglichkeit, für
                                    einzelen Themen erfahrene Coaches zu buchen, um gezielt unterstützung zu erhalten.
                                    At teamlove, our philosophy is that we design our tool with the purpose of
                                    uncovering untapped potential in teams by providing them with the necessary skills
                                    to optimize their own performance. Although this may seem obvious to most, using
                                    teamlove it often becomes apparent that a team can fix most of their pain points
                                    themselves. We aim to assist teams in becoming more effective both as an individual
                                    entity, and within a larger organization. Therefore, our focus is not so much on the
                                    outcome but rather the process by which people collaborate to meet business goals.
                                    As a coach, our role is to facilitate communication between individuals so they are
                                    empowered by being able to trust each other, share their doubts openly and have
                                    total commitment to common goals.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <!-- Side-by-side grid -->
            <div class="bg-cool-gray-100 bg-gradient-to-b from-cool-gray-50 to-white">
                <div class="max-w-md mx-auto py-24 px-4 sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="divide-y divide-cool-gray-200">
                        <section class="lg:grid lg:grid-cols-3 lg:gap-8" aria-labelledby="contact-heading">
                            <h2 id="contact-heading" class="text-2xl font-extrabold text-cool-gray-900 sm:text-3xl">
                                Get in touch
                            </h2>
                            <div
                                class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
                                <div>
                                    <h3 class="text-lg font-medium text-cool-gray-900">
                                        Support
                                    </h3>
                                    <dl class="mt-2 text-base text-cool-gray-500">
                                        <div>
                                            <dt class="sr-only">
                                                Email
                                            </dt>
                                            <dd>
                                                support@teamlove.app
                                            </dd>
                                        </div>
                                        <div class="mt-1">
                                            <dt class="sr-only">
                                                Phone number
                                            </dt>
                                            <dd>
                                                +49 (0)541 343710-123
                                            </dd>
                                        </div>
                                    </dl>
                                </div>

                                <div>
                                    <h3 class="text-lg font-medium text-cool-gray-900">
                                        Press
                                    </h3>
                                    <dl class="mt-2 text-base text-cool-gray-500">
                                        <div>
                                            <dt class="sr-only">
                                                Email
                                            </dt>
                                            <dd>
                                                pr@teamlove.app
                                            </dd>
                                        </div>
                                        <div class="mt-1">
                                            <dt class="sr-only">
                                                Phone number
                                            </dt>
                                            <dd>
                                                +49 (0)541 343710-125
                                            </dd>
                                        </div>
                                    </dl>
                                </div>

                                <div>
                                    <h3 class="text-lg font-medium text-cool-gray-900">
                                        Join our team
                                    </h3>
                                    <dl class="mt-2 text-base text-cool-gray-500">
                                        <div>
                                            <dt class="sr-only">
                                                Email
                                            </dt>
                                            <dd>
                                                career@teamlove.app
                                            </dd>
                                        </div>
                                        <div class="mt-1">
                                            <dt class="sr-only">
                                                Phone number
                                            </dt>
                                            <dd>
                                                +49 (0)541 343710-127
                                            </dd>
                                        </div>
                                    </dl>
                                </div>

                                <div>
                                    <h3 class="text-lg font-medium text-cool-gray-900">
                                        Collaborate
                                    </h3>
                                    <dl class="mt-2 text-base text-cool-gray-500">
                                        <div>
                                            <dt class="sr-only">
                                                Email
                                            </dt>
                                            <dd>
                                                partner@teamlove.app
                                            </dd>
                                        </div>
                                        <div class="mt-1">
                                            <dt class="sr-only">
                                                Phone number
                                            </dt>
                                            <dd>
                                                +49 (0)541 343710-123
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </section>
                        <section class="mt-16 pt-8 lg:grid lg:grid-cols-1 lg:gap-8 text-cool-gray-500"
                            aria-labelledby="location-heading">
                            Please don't hesitate to contact us with any questions you might have. We are glad to help!
                        </section>
                    </div>
                </div>
            </div>
            <!-- FAQ -->
            <div class="bg-cool-gray-50">
                <div class="max-w-md mx-auto py-24 px-4 sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                        <div>
                            <h2 class="text-3xl font-extrabold text-cool-gray-900">
                                Frequently asked questions
                            </h2>
                            <p class="mt-4 text-lg text-cool-gray-500">Can’t find the answer you’re looking for? Reach
                                out to our <a href="#"
                                    class="font-medium text-emerald-400 hover:text-emerald-500">customer
                                    support</a> team.</p>
                        </div>
                        <div class="mt-12 lg:mt-0 lg:col-span-2">
                            <dl class="space-y-12">
                                <div>
                                    <dt class="text-lg font-medium text-cool-gray-900">
                                        Is teamlove really free for teams?
                                    </dt>
                                    <dd class="mt-2 text-base text-cool-gray-500">
                                        Yes! We are committed to keep teamlove free for teams. We know how difficult it
                                        is to get budgets approved for work-related tools and apps and want to give
                                        everyone the opportuniy to start using teamlove easily. In fact, teamlove is
                                        free for up to 50 people so samll organizations that usually do not have a
                                        significant HR budget can equally profit from team development.
                                    </dd>
                                </div>

                                <div>
                                    <dt class="text-lg font-medium text-cool-gray-900">
                                        How often shoud I use teamlove?
                                    </dt>
                                    <dd class="mt-2 text-base text-cool-gray-500">
                                        Teamlove is designed for three month cycles. You will use teamlove a lot at the
                                        start of a cycle and also to document your process and conduct an progressreport
                                        workshop in between.
                                    </dd>
                                </div>

                                <div>
                                    <dt class="text-lg font-medium text-cool-gray-900">
                                        What kind of data can HR see from our team?
                                    </dt>
                                    <dd class="mt-2 text-base text-cool-gray-500">
                                        Teamlove is designed with anonymity in mind so you can focus on your team's
                                        development. We do share your team results with HR but not any individual topic
                                        ratings or comments. Those are really ment to move you and your teammates
                                        forward.
                                    </dd>
                                </div>

                                <div>
                                    <dt class="text-lg font-medium text-cool-gray-900">
                                        How can I test teamlove?
                                    </dt>
                                    <dd class="mt-2 text-base text-cool-gray-500">
                                        Just open an account and give it a spin. It's free without any restrictions for
                                        individual teams. For organisations it is free for the first 50 employees.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="relative">
                <div class="absolute left-0 right-0 h-1/2 bg-cool-gray-50" aria-hidden="true"></div>
                <div class="relative max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                    <div
                        class="py-10 px-6 bg-gradient-to-l from-sky-800 to-cyan-700 rounded-3xl sm:py-16 sm:px-12 lg:py-20 lg:px-20 lg:flex lg:items-center">
                        <div class="lg:w-0 lg:flex-1">
                            <h2 class="text-3xl font-extrabold tracking-tight text-white">
                                Sign up for our newsletter
                            </h2>
                            <p class="mt-4 max-w-3xl text-lg text-cyan-100">
                                Teamlove is launching soon. Subscibe to our newsletter to be among the first to know
                                when we go live.
                            </p>
                        </div>
                        <div class="mt-12 sm:w-full sm:max-w-md lg:mt-0 lg:ml-8 lg:flex-1">
                            <form class="sm:flex">
                                <label for="email-address" class="sr-only">Email address</label>
                                <input id="email-address" name="email-address" type="email" autocomplete="email"
                                    required
                                    class="w-full border-white px-5 py-3 placeholder-cool-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-cyan-700 focus:ring-white rounded-md"
                                    placeholder="Enter your email">
                                <button type="submit"
                                    class="mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-emerald-400 hover:bg-emerald-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-cyan-700 focus:ring-emerald-400 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">
                                    Notify me
                                </button>
                            </form>
                            <p class="mt-3 text-sm text-cyan-100">
                                We care about the protection of your data. Read our
                                <a href="#" class="text-white font-medium underline">
                                    Privacy Policy.
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-white" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="max-w-md mx-auto py-12 px-4 sm:max-w-3xl sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-8 xl:col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-emerald-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentcolor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <p class="text-cool-gray-500 text-base">
                            Helping teams to reach their full potential.
                        </p>
                        <div class="flex space-x-6">
                            <a href="#" class="text-cool-gray-400 hover:text-cool-gray-500">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <a href="#" class="text-cool-gray-400 hover:text-cool-gray-500">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <a href="#" class="text-cool-gray-400 hover:text-cool-gray-500">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>

                            <a href="#" class="text-cool-gray-400 hover:text-cool-gray-500">
                                <span class="sr-only">GitHub</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <a href="#" class="text-cool-gray-400 hover:text-cool-gray-500">
                                <span class="sr-only">Dribbble</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-cool-gray-700 tracking-wider uppercase">
                                    For teams
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Marketing
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Analytics
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Commerce
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Insights
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-cool-gray-700 tracking-wider uppercase">
                                    Enterprice
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            About
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Features
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Cases
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Details
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-cool-gray-700 tracking-wider uppercase">
                                    More
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Pricing
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            About
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Guides
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Status
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-cool-gray-700 tracking-wider uppercase">
                                    Legal
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Contact
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Privacy
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-base text-cool-gray-500 hover:text-cool-gray-900">
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 border-t border-cool-gray-200 pt-8">
                    <p class="text-base text-cool-gray-400 xl:text-center">
                        &copy; teamlove by IWOP GmbH. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</x-guest-layout>
