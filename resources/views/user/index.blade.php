<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Meta setup -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="decription" content="">
    <meta name="designer" content="">

<!-- Title -->
<title>FOREX PARTNER</title>

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('userview/assets/images/favicon.ico') }}">

<!-- Glightbox Plugin css -->
<link href="{{ asset('userview/assets/libs/glightbox/css/glightbox.min.css') }}" rel="stylesheet" type="text/css">

<!-- Style css -->
<link href="{{ asset('userview/src/output.css') }}" rel="stylesheet" type="text/css">

<!-- Icons css -->
<link href="{{ asset('userview/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

<!-- Animation on Scroll css -->
<link href="{{ asset('userview/assets/libs/aos/aos.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="bg-[#000]">
 

    <!-- Navbar Start -->
     @include('user/navbar')

    <!-- Navbar End -->

    <!-- Start -->
<section id="home" class="relative pt-[74px] overflow-hidden">
    <div class="container-fluid lg:px-10 md:px-3 relative overflow-hidden">
        <div class="md:rounded-lg herobg md:pt-[200px] pt-[100px]">
            <div class="container relative">
                
                <!-- Decorative Icon -->
                <div class="absolute -top-12">
                    <i data-lucide="badge"
                       class="animate-[spin_10s_linear_infinite] h-12 w-12 fill-primary opacity-30 text-transparent"></i>
                </div>

                <!-- Hero Grid -->
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-8 heroGrid md:min-h-[400px] min-h-[200px]">
                    
                    <!-- Left Content -->
                    <div class="md:col-span-7" data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000">
                        <div class="md:me-6">
                            
                            <!-- Badge -->
                            <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-sm font-medium bg-[#122F30] text-[#3AEDBA] mb-6">
                                <span class="w-2 h-2 inline-block bg-primary rounded-full"></span>
                                <span class="text-white">453</span> NFTs ready for minting on XRPL
                            </span>

                            <!-- Title -->
                            <h4 class="font-semibold text-4xl lg:text-6xl capitalize text-white mb-4">
                                <span class="heroTitleGradient">Trade Smarter.</span> Grow Faster.
                            </h4>

                            <!-- Description -->
                            <p class="text-lg max-w-xl text-default-200 mb-6">
                                We are a huge marketplace dedicated to connecting great artists of all NFT with their fans and unique token collectors!
                            </p>

                            <!-- CTA Button -->
                            <div>
                                <a href="{{ url('dashboard') }}"
                                   class="inline-flex items-center justify-center gap-2 font-semibold py-2 px-6 rounded-lg bg-[#46D865] hover:bg-[#18F130] transition-all duration-300 me-2 mt-2">
                                    Rewards
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Left Content -->

                    <!-- Right Content (Image) -->
                    <div class="md:col-span-5 hero_thumb" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1000">
                        <img class="w-full md:scale-[1.4]"
                             src="{{ asset('userview/assets/images/nft/art/nft26.png') }}"
                             alt="NFT Artwork">
                    </div>
                    <!-- End Right Content -->

                </div><!-- end grid -->
            </div><!-- end container -->
        </div>
    </div>
</section>

    <!-- End -->

    <!-- Start -->
<section id="collection" class="py-24">
    <div class="container relative">
        
        <!-- Section Header -->
        <div class="flex flex-wrap items-center justify-between mb-10">
            <div>
                <h2 class="text-4xl font-medium capitalize text-white mb-2">Collection</h2>
                <p class="text-sm text-default-200 font-medium max-w-[445px]">
                    Start working with Tailwind CSS. It allows you to compose complex designs by combining and customizing utility classes.
                </p>
            </div>
            <a href="#"
               class="inline-flex items-center justify-center gap-2 border border-white/10 text-sm text-primary py-1.5 px-4 rounded-full hover:bg-primary-hover hover:text-black transition-all duration-300">
                See More <i data-lucide="move-right" class="h-5 w-5"></i>
            </a>
        </div>
        <!-- End Header -->

        <!-- NFT Grid -->
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 mt-8">
            
            @php
                $nfts = [
                    'art/16.gif',
                    'art/17.gif',
                    'art/18.gif',
                    'art/19.gif',
                    'art/20.gif',
                    'art/21.gif',
                    'art/22.gif',
                    'art/23.gif',
                ];
            @endphp

            @foreach ($nfts as $index => $nft)
                <!-- NFT Card -->
                <div class="group relative overflow-hidden backdrop-blur-3xl bg-default-950/40 rounded-lg duration-500 ease-in-out"
                     data-aos="zoom-in" data-aos-duration="800">

                    <div class="p-3">
                        <!-- NFT Image -->
                        <div class="relative">
                            <img src="{{ asset('userview/assets/images/nft/' . $nft) }}" alt="NFT {{ $index + 1 }}" class="rounded-md">

                            <!-- Hover Action -->
                            <div class="absolute top-1/2 -translate-y-1/2 inset-x-0 text-center opacity-0 group-hover:opacity-100 scale-0 group-hover:scale-100 duration-500 ease-in-out">
                                <a href="#"
                                   class="py-1.5 px-6 inline-flex items-center gap-2 font-semibold tracking-wide text-base border-0 bg-primary text-black rounded-full hover:bg-[#18F130] transition duration-500">
                                    Place Bid <i data-lucide="navigation" class="h-4 w-4"></i>
                                </a>
                            </div>

                            <!-- Auction Badge -->
                            <div class="absolute top-0 start-0 p-2 transition-all duration-700">
                                <div class="inline-flex justify-center w-full">
                                    <div class="bg-gradient-to-r from-rose-500 to-blue-600 py-1 px-2.5 rounded-full">
                                        <p id="auction-item-{{ $index + 1 }}" class="text-white font-bold text-sm"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bid Info -->
                        <div class="pt-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="block font-semibold text-default-100">Current Bid</span>
                                    <span class="block font-semibold text-primary flex gap-1">
                                        <img src="{{ asset('userview/assets/images/icon/sol-icon.svg') }}" alt="Solana">
                                        20.5 SOL
                                    </span>
                                </div>
                                <div class="text-end">
                                    <span class="block font-semibold text-default-100">Last Bid</span>
                                    <span class="block font-semibold text-primary flex gap-1">
                                        <img src="{{ asset('userview/assets/images/icon/sol-icon.svg') }}" alt="Solana">
                                        20.5 SOL
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End NFT Card -->
            @endforeach

        </div>
        <!-- End Grid -->

    </div>
</section>

    <!-- End -->

    <!-- Start -->
    <section id="abousUs" class="pb-24" data-aos="zoom-out" data-aos-duration="800">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between mb-10">
                <div class="w-full max-w-[990px] mx-auto">
                    <h2 class="text-4xl font-medium capitalize text-white mb-2 text-center">About Us</h2>
                    <div class="grid grid-cols-2">
                        <p class="text-sm text-default-200 font-medium">We are a global trading platform built to empower individuals and businesses with cutting-edge forex and digital asset solutions. Our mission is simple: to provide traders with a reliable, secure, and efficient environment to maximize their financial growth.</p>
                        <p class="text-sm text-default-200 font-medium">With real-time execution, low fees, and advanced analytics, we ensure every trade gives you a competitive edge.</p>
                    </div>
                </div>
            </div><!-- end flex -->

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-0 rounded-xl overflow-hidden">
                <a href="assets/images/nft/art/21.gif" class="glightbox overflow-hidden">
                    <img src="assets/images/nft/art/21.gif" class="w-full rounded-lg md:rounded-none object-cover hover:scale-110 transition-all duration-1000" alt="">
                </a><!-- end grid -->
                <a href="assets/images/nft/art/4.png" class="glightbox overflow-hidden">
                    <img src="assets/images/nft/art/4.png" class="w-full rounded-lg md:rounded-none object-cover hover:scale-110 transition-all duration-1000" alt="">
                </a><!-- end grid -->
                <a href="assets/images/nft/art/5.png" class="glightbox overflow-hidden">
                    <img src="assets/images/nft/art/5.png" class="w-full rounded-lg md:rounded-none object-cover hover:scale-110 transition-all duration-1000" alt="">
                </a><!-- end grid -->
                <a href="assets/images/nft/art/18.gif" class="glightbox overflow-hidden">
                    <img src="assets/images/nft/art/18.gif" class="w-full rounded-lg md:rounded-none object-cover hover:scale-110 transition-all duration-1000" alt="">
                </a><!-- end grid -->
                <a href="assets/images/nft/art/14.png" class="glightbox overflow-hidden">
                    <img src="assets/images/nft/art/14.png" class="w-full rounded-lg md:rounded-none object-cover hover:scale-110 transition-all duration-1000" alt="">
                </a><!-- end grid -->
                <a href="assets/images/nft/art/22.png" class="glightbox overflow-hidden">
                    <img src="assets/images/nft/art/22.png" class="w-full rounded-lg md:rounded-none object-cover hover:scale-110 transition-all duration-1000" alt="">
                </a><!-- end grid -->
                <a href="assets/images/nft/art/24.gif" class="glightbox overflow-hidden">
                    <img src="assets/images/nft/art/24.gif" class="w-full rounded-lg md:rounded-none object-cover hover:scale-110 transition-all duration-1000" alt="">
                </a><!-- end grid -->
                <a href="assets/images/nft/art/19.gif" class="glightbox overflow-hidden">
                    <img src="assets/images/nft/art/19.gif" class="w-full rounded-lg md:rounded-none object-cover hover:scale-110 transition-all duration-1000" alt="">
                </a><!-- end grid -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <!-- End -->

    <!-- Start -->
<section id="faq" class="pb-24">
    <div class="container">
        
        <!-- Section Header -->
        <div class="flex flex-wrap items-center justify-between mb-10">
            <div>
                <h2 class="text-4xl font-medium capitalize text-white mb-2">FAQs</h2>
                <p class="text-sm text-default-200 font-medium">
                    Start working with Tailwind CSS. It allows you to compose complex designs 
                    <br class="hidden md:block"> 
                    by combining and customizing utility classes.
                </p>
            </div>
        </div>

        <!-- FAQ Grid -->
        <div class="grid lg:grid-cols-2 gap-6">
            
            @php
                $faqsLeft = [
                    ['question' => 'Will you support my language?', 'answer' => 'You can upload any files from your computer or use Youtube links. Keep in mind that our content repurposing works best with longer videos.', 'open' => true],
                    ['question' => 'Do you also provide subtitles?', 'answer' => 'Yes, subtitles can be generated automatically or uploaded manually for better accuracy.', 'open' => false],
                    ['question' => 'How do I get started?', 'answer' => 'Simply sign up, upload your video, and start customizing your content with our tools.', 'open' => false],
                ];

                $faqsRight = [
                    ['question' => 'Do you have any samples?', 'answer' => 'Yes, we provide demo videos so you can see how the platform works before getting started.', 'open' => false],
                    ['question' => 'Can I get custom templates?', 'answer' => 'Absolutely! You can create and save custom templates tailored to your workflow.', 'open' => false],
                    ['question' => 'What types of videos can I upload?', 'answer' => 'You can upload any video files (MP4, MOV, AVI, etc.) or use Youtube links. Our AI works best with longer videos.', 'open' => true],
                ];
            @endphp

            <!-- Left Column -->
            <div class="hs-accordion-group space-y-4" data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000">
                @foreach ($faqsLeft as $i => $faq)
                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden {{ $faq['open'] ? 'active' : '' }}" id="faq-left-{{ $i }}">
                        <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                                aria-controls="faq-left-content-{{ $i }}">
                            <h5 class="text-base font-semibold flex">
                                <i data-lucide="help-circle" class="h-5 w-5 stroke-white me-3"></i>
                                {{ $faq['question'] }}
                            </h5>
                            <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-left-content-{{ $i }}" class="hs-accordion-content {{ $faq['open'] ? '' : 'hidden' }} w-full overflow-hidden transition-[height] duration-300">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Right Column -->
            <div class="hs-accordion-group space-y-4" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1000">
                @foreach ($faqsRight as $i => $faq)
                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden {{ $faq['open'] ? 'active' : '' }}" id="faq-right-{{ $i }}">
                        <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                                aria-controls="faq-right-content-{{ $i }}">
                            <h5 class="text-base font-semibold flex">
                                <i data-lucide="help-circle" class="h-5 w-5 stroke-white me-3"></i>
                                {{ $faq['question'] }}
                            </h5>
                            <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-right-content-{{ $i }}" class="hs-accordion-content {{ $faq['open'] ? '' : 'hidden' }} w-full overflow-hidden transition-[height] duration-300">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <!-- End FAQ Grid -->
    </div>
</section>

    <!-- End -->

    <!-- Footer section start -->
      @include('user/footer')
    <!-- Footer section End -->

    <!-- Back To Top Start -->
    <button id="back-to-top" onclick="topFunction()" class="fixed text-xl rounded-full z-10 bottom-5 end-5 h-8 w-8 text-center bg-white backdrop-blur-3xl text-default-950 flex justify-center items-center transition-all duration-500 hover:bg-primary hover:text-white hover:rounded-lg">
        <i data-lucide="chevron-up" class="h-4 w-4"></i>
    </button>
    <!-- Back To Top End -->

     @include('user/jss')


</body>

</html>