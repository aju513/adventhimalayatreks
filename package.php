<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="package-page__nav">
    <div class="container mx-auto">
        <ul class="flex gap-2 w-max">
            <li>
                <a class="flex items-center gap-1 package-page__nav-item" href="#package-overview">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-overview"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title">Overview</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-gallery">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-gallery"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title"> Trip Gallery</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-itinerary">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-itinerary"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title"> Itinerary</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-route">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-route"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title"> Route Map</span>
                </a>
            </li>

            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-cost-details">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-cost-details"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title">Cost Details</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-availability">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-available"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title">Availability</span>
                </a>
            </li>

            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-essentials">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1  icon-equipment-trekking-pole"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title">Equipments</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-essentials">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-additional"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title"> Essentials Information</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-faq">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-faq"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title"> FAQs</span>
                </a>
            </li>
            <li>
                <a class="flex items-center gap-1 package-page__nav-item " href="#package-reviews">
                    <span class="package-page__nav-item-icon">
                        <span class="relative text-xl text-white top-1 icon-nav-review"></span>
                    </span>
                    <span class="text-sm text-white package-page__nav-item-title"> Reviews</span>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="common-box package-page" role="main">
    <div class="package-page__banner">
        <div class="container-fluid">
            <div class="package-page__banner-wrapper">
                <div class="package-page__banner-item banner-half lg">
                    <a data-fancybox="package-banner" href="./images/dynamic/package-banner1.webp">
                        <div class="placeholder__img-wrapper">
                            <div class="w-full placeholder__img">
                                <img
                                    width={1200}
                                    height={900}
                                    class="rounded-[5px]"
                                    src="./images/dynamic/package-banner1.webp"
                                    alt="thumb" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="package-page__banner-item banner-quarter">
                    <a data-fancybox="package-banner" href="./images/dynamic/package-banner2.webp">
                        <div class="placeholder__img-wrapper">
                            <div class="w-full placeholder__img">
                                <img
                                    width={1200}
                                    height={900}
                                    class="rounded-[5px]"
                                    src="./images/dynamic/package-banner2.webp"
                                    alt="thumb" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="package-page__banner-item banner-quarter">
                    <a data-fancybox="package-banner" href="./images/dynamic/package-banner3.webp">
                        <div class="placeholder__img-wrapper">
                            <div class="w-full placeholder__img">
                                <img
                                    width={1200}
                                    height={900}
                                    class="rounded-[5px]"
                                    src="./images/dynamic/package-banner3.webp"
                                    alt="thumb" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="package-page__main-content">
        <div class="container">
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-8">
                    <div class="package__intro">
                        <div class="package__title ">
                            <h1>
                                Everest Base Camp Trek 15 Days
                            </h1>
                        </div>
                        <div class="package__rating flex items-center gap-3 flex-wrap lg:gap-4.5">
                            <a href="">
                                <div class="flex items-center gap-2 package__rating-tripadvisor ">
                                    <span class="icon-dot-rating"></span>
                                    <span class="text-[13px] text-text_color leading-5">44 reviews in <span class="underline">TripAdvisor</span></span>
                                </div>
                            </a>
                            <a href="">
                                <div class="flex items-center gap-2 package__rating-google">
                                    <span class="icon-star-ratings"></span>
                                    <span class="text-[13px] text-text_color leading-5">120 in Google Reviews </span>
                                </div>
                            </a>
                            <a href="">
                                <div class="flex items-center gap-2 package__rating-facebook">
                                    <img
                                        src="/images/svg/trust-star.svg"
                                        width="70"
                                        height="15"
                                        alt="banner" class="rounded-none!" />
                                    <span class="text-[13px] text-text_color leading-5"> TrustPilot Reviews</span>
                                </div>
                            </a>
                        </div>
                        <div class="package__summary common-module">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. cididunt ut labore et dolore magna aliqua. </p>
                        </div>
                        <div class="package__facts">
                            <div class=" text-xl lg:text-2xl font-bold font-signika text-text_color mb-5">At a Glance</div>
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="package__facts-item-icon ">
                                            <img
                                                width={28}
                                                height={28}
                                                src="./images/svg/fact-calendar.svg"
                                                alt="thumb" />
                                        </div>
                                        <div class="package__facts-item-content-wrap">
                                            <div class="package__facts-item-title ">
                                                Duration
                                            </div>
                                            <div class=" package__facts-item-content">
                                                15 Days
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="flex gap-1 item-center">
                                            <div class="package__facts-item-icon ">
                                                <img
                                                    width={28}
                                                    height={28}
                                                    src="./images/svg/fact-grade.svg"
                                                    alt="thumb" />
                                            </div>
                                            <div class="package__facts-item-content-wrap">
                                                <div class="package__facts-item-title ">
                                                    Trip Grade
                                                </div>
                                                <div class=" package__facts-item-content">
                                                    Easy to Moderate
                                                    <div class="relative inline-flex flex-col items-center ml-2 popover-wrap group">
                                                        <span class="text-xl icon-info text-text_color">
                                                        </span>

                                                        <div class="absolute bottom-0 flex-col items-center hidden w-full mb-6 popover-bg sm:w-64 md:w-72">
                                                            <span class="popover-wrap-content custom-shadow relative z-10 mb-0 rounded-[5px] bg-white p-3 text-[13px] leading-4 text-gray-800">
                                                                <p>
                                                                    The moderate grade includes a one-week to fifteen-day itinerary. It can reach up to
                                                                    5000 meter altitude range, but the trails will be moderate (neither easy nor tough).
                                                                    High altitude may affect walking speed and distance. You need to have acclimatization
                                                                    over 3000 meters.
                                                                </p>
                                                            </span>
                                                            <div class="w-3 h-3 -mt-2 rotate-45 bg-white"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="package__facts-item-icon ">
                                            <img
                                                width={28}
                                                height={28}
                                                src="./images/svg/fact-altitude.svg"
                                                alt="thumb" />
                                        </div>
                                        <div class="package__facts-item-content-wrap">
                                            <div class="package__facts-item-title ">
                                                Maximum Altitude
                                            </div>
                                            <div class=" package__facts-item-content">
                                                5643 m.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="package__facts-item-icon ">
                                            <img
                                                width={28}
                                                height={28}
                                                src="./images/svg/fact-group.svg"
                                                alt="thumb" />
                                        </div>
                                        <div class="package__facts-item-content-wrap">
                                            <div class="package__facts-item-title ">
                                                Group Size
                                            </div>
                                            <div class=" package__facts-item-content">
                                                Up to 10 Travelers
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="package__facts-item-icon ">
                                            <img
                                                width={28}
                                                height={28}
                                                src="./images/svg/fact-departure.svg"
                                                alt="thumb" />
                                        </div>
                                        <div class="package__facts-item-content-wrap">
                                            <div class="package__facts-item-title ">
                                                Starts
                                            </div>
                                            <div class=" package__facts-item-content">
                                                Kathmandu, Nepal
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="package__facts-item-icon ">
                                            <img
                                                width={28}
                                                height={28}
                                                src="./images/svg/fact-departure.svg"
                                                alt="thumb" />
                                        </div>
                                        <div class="package__facts-item-content-wrap">
                                            <div class="package__facts-item-title ">
                                                Ends
                                            </div>
                                            <div class=" package__facts-item-content">
                                                Kathmandu, Nepal
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="package__facts-item-icon ">
                                            <img
                                                width={28}
                                                height={28}
                                                src="./images/svg/fact-activities.svg"
                                                alt="thumb" />
                                        </div>
                                        <div class="package__facts-item-content-wrap">
                                            <div class="package__facts-item-title ">
                                                Activities
                                            </div>
                                            <div class=" package__facts-item-content">
                                                Trekking and Hiking
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="package__facts-item-icon ">
                                            <img
                                                width={28}
                                                height={28}
                                                src="./images/svg/fact-best-time.svg"
                                                alt="thumb" />
                                        </div>
                                        <div class="package__facts-item-content-wrap">
                                            <div class="package__facts-item-title ">
                                                Best Time
                                            </div>
                                            <div class=" package__facts-item-content">
                                                Mar-May, Sep-Nov
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 md:col-span-4">
                                    <div class="package__facts-item">
                                        <div class="package__facts-item-icon ">
                                            <img
                                                width={28}
                                                height={28}
                                                src="./images/svg/fact-country.svg"
                                                alt="thumb" />
                                        </div>
                                        <div class="package__facts-item-content-wrap">
                                            <div class="package__facts-item-title ">
                                                Country
                                            </div>
                                            <div class=" package__facts-item-content">
                                                Nepal
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="package__overview common-module scroll-mt-20" id="package-overview">
                        <article>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <h3>
                                About This Trek
                            </h3>
                            <p>Embark on the ultimate adventure with a trek to Mount Everest, the world's highest peak. The Mount Everest trekking route offers unparalleled views of breathtaking landscapes, including towering snow-capped peaks, lush valleys, and rugged terrain. As you journey through the Khumbu region of Nepal, you'll encounter charming Sherpa villages, ancient monasteries, and vibrant local culture. Experience the thrill of ascending to Everest Base Camp, where you'll stand in awe of the iconic summit towering above. Whether you're an experienced mountaineer or a novice adventurer, trekking to Mount Everest promises an unforgettable journey filled with exhilarating challenges and unforgettable memories.</p>
                            <h4>Highlights</h4>
                            <ul>
                                <li>Cras tempor purus id velit consequat, id mattis dui pellentesque.</li>
                                <li>Quisque ac velit at sem scelerisque porta vel quis quam.</li>
                                <li>Praesent sed mauris ac justo euismod facilisis.</li>
                                <li>Vestibulum quis purus vel ligula elementum rutrum.</li>
                            </ul>
                        </article>
                    </div>
                    <div class="package__gallery scroll-mt-20" id="package-gallery">
                        <h2 class="package__section-title">Trip Gallery</h2>
                        <div class="grid grid-cols-12  gap-3.75">
                            <div class="col-span-6 sm:col-span-3">
                                <div class="package__gallery-item">
                                    <a href="./images/dynamic/album.webp"
                                        data-fancybox="package-gallery">
                                        <div class="placeholder__img-wrapper">
                                            <div class="w-full placeholder__img">
                                                <img
                                                    width={600}
                                                    height={450}
                                                    class="rounded-[5px]"
                                                    src="./images/dynamic/album.webp"
                                                    alt="thumb" />
                                            </div>
                                        </div>
                                        <span class="zoom-icon">
                                            <span class="text-2xl text-white icon-magnify-glass"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="package__gallery-item">
                                    <a href="./images/dynamic/album.webp"
                                        data-fancybox="package-gallery">
                                        <div class="placeholder__img-wrapper">
                                            <div class="w-full placeholder__img">
                                                <img
                                                    width={600}
                                                    height={450}
                                                    class="rounded-[5px]"
                                                    src="./images/dynamic/album.webp"
                                                    alt="thumb" />
                                            </div>
                                        </div>
                                        <span class="zoom-icon">
                                            <span class="text-2xl text-white icon-magnify-glass"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="package__gallery-item">
                                    <a href="./images/dynamic/album.webp"
                                        data-fancybox="package-gallery">
                                        <div class="placeholder__img-wrapper">
                                            <div class="w-full placeholder__img">
                                                <img
                                                    width={600}
                                                    height={450}
                                                    class="rounded-[5px]"
                                                    src="./images/dynamic/album.webp"
                                                    alt="thumb" />
                                            </div>
                                        </div>
                                        <span class="zoom-icon">
                                            <span class="text-2xl text-white icon-magnify-glass"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <div class="package__gallery-item">
                                    <a href="./images/dynamic/album.webp"
                                        data-fancybox="package-gallery">
                                        <div class="placeholder__img-wrapper">
                                            <div class="w-full placeholder__img">
                                                <img
                                                    width={600}
                                                    height={450}
                                                    class="rounded-[5px]"
                                                    src="./images/dynamic/album.webp"
                                                    alt="thumb" />
                                            </div>
                                        </div>
                                        <span class="zoom-icon">
                                            <span class="text-2xl text-white icon-magnify-glass"></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="package__video common-module mt-3.75 scroll-mt-20" id="package-video">
                        <a href="https://www.youtube.com/watch?v=a3ICNMQW7Ok"
                            data-fancybox="package-video">
                            <div class="relative">
                                <div class="placeholder__img-wrapper">
                                    <div class="w-full placeholder__img">
                                        <img
                                            src="/images/dynamic/package-video-thumb.webp"
                                            width="1200"
                                            height="675"
                                            alt="banner" />
                                    </div>
                                </div>
                                <span class="play-btn circular-animate">
                                    <span class="text-3xl text-secondary icon-play"></span>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="package__itinerary common-module scroll-mt-20" id="package-itinerary">
                        <div class="flex flex-wrap items-center gap-2 justify-between mb-5">
                            <h2 class="package__section-title mb-0!">Everest Base Camp Trek Itinerary</h2>
                            <button type="button" id="itinerary-toggle-all" class="package__itinerary-toggle-all package__itinerary-actions">
                                Expand All
                            </button>
                        </div>
                        <div class="package__itinerary-note">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                        </div>
                        <div class="package__itinerary-wrap">
                            <div class="package__itinerary-item open">
                                <div class="package__itinerary-item-day">
                                    Day 1
                                </div>
                                <div class="package__itinerary-item-title">
                                    <h3 class="mb-0!"> Arrival in Kathmandu, transfer to the hotel.</h3>
                                    <span class="package__itinerary-toggle">
                                        <span class="package__itinerary-plus icon-plus"></span>
                                        <span class="package__itinerary-minus icon-minus"></span>
                                    </span>
                                </div>
                                <div class="package__itinerary-item-content">
                                    <div class="content-wrap">
                                        <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                                    </div>
                                    <div class="itinerary-meta-facts">
                                        <div class="columns-1 sm:columns-2 lg:columns-3">
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-max-altitude"></span>
                                                <span class="text-sm text-text_color">Max Altitude: 1300m</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-meal"></span>
                                                <span class="text-sm text-text_color">Meals: B/L/D</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-calendar-lines"></span>
                                                <span class="text-sm text-text_color">Duration: 1 day</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-distance"></span>
                                                <span class="text-sm text-text_color">Distance: 2 km</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-accomodation"></span>
                                                <span class="text-sm text-text_color">Accommodation: Hotel</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-bus"></span>
                                                <span class="text-sm text-text_color">Mode of transportation: Bus</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative mt-3 content-main-image-wrapper">
                                        <div class="content-main-image ">
                                            <div class="placeholder__img-wrapper">
                                                <div class="w-full placeholder__img">
                                                    <img
                                                        src="./images/dynamic/article-img.webp"
                                                        width={1200}
                                                        height={675}
                                                        alt="about"></img>
                                                </div>
                                            </div>
                                            <div class="content-main-image-title">
                                                Swoyambunath
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package__itinerary-item ">
                                <div class="package__itinerary-item-day">
                                    Day 12
                                </div>
                                <div class="package__itinerary-item-title">
                                    <h3 class="mb-0!"> Arrival in Kathmandu, transfer to the hotel.</h3>
                                    <span class="package__itinerary-toggle">
                                        <span class="package__itinerary-plus icon-plus"></span>
                                        <span class="package__itinerary-minus icon-minus"></span>
                                    </span>
                                </div>
                                <div class="package__itinerary-item-content">
                                    <div class="content-wrap">
                                        <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                                    </div>
                                    <div class="itinerary-meta-facts">
                                        <div class="columns-1 sm:columns-2 lg:columns-3">
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-max-altitude"></span>
                                                <span class="text-sm text-text_color">Max Altitude: 1300m</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-meal"></span>
                                                <span class="text-sm text-text_color">Meals: B/L/D</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-calendar-lines"></span>
                                                <span class="text-sm text-text_color">Duration: 1 day</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-distance"></span>
                                                <span class="text-sm text-text_color">Distance: 2 km</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-accomodation"></span>
                                                <span class="text-sm text-text_color">Accommodation: Hotel</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-bus"></span>
                                                <span class="text-sm text-text_color">Mode of transportation: Bus</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative mt-3 content-main-image-wrapper">
                                        <div class="content-main-image ">
                                            <div class="placeholder__img-wrapper">
                                                <div class="w-full placeholder__img">
                                                    <img
                                                        src="./images/dynamic/article-img.webp"
                                                        width={1200}
                                                        height={675}
                                                        alt="about"></img>
                                                </div>
                                            </div>
                                            <div class="content-main-image-title">
                                                Swoyambunath
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package__itinerary-item ">
                                <div class="package__itinerary-item-day">
                                    Day 99
                                </div>
                                <div class="package__itinerary-item-title">
                                    <h3 class="mb-0!"> Arrival in Kathmandu, transfer to the hotel.</h3>
                                    <span class="package__itinerary-toggle">
                                        <span class="package__itinerary-plus icon-plus"></span>
                                        <span class="package__itinerary-minus icon-minus"></span>
                                    </span>
                                </div>
                                <div class="package__itinerary-item-content">
                                    <div class="content-wrap">
                                        <p>Welcome to Nepal; the land of vivid colours, cultures and heritages. Also blessed with the awe-inspiring Himalayas, Nepal is among the few countries where such a unique blend of nature and tradition can be found. At this very day, we’ll meet each other in person after your arrival in Kathmandu Airport</p>
                                    </div>
                                    <div class="itinerary-meta-facts">
                                        <div class="columns-1 sm:columns-2 lg:columns-3">
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-max-altitude"></span>
                                                <span class="text-sm text-text_color">Max Altitude: 1300m</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-meal"></span>
                                                <span class="text-sm text-text_color">Meals: B/L/D</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-calendar-lines"></span>
                                                <span class="text-sm text-text_color">Duration: 1 day</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-distance"></span>
                                                <span class="text-sm text-text_color">Distance: 2 km</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-accomodation"></span>
                                                <span class="text-sm text-text_color">Accommodation: Hotel</span>
                                            </div>
                                            <div class="flex items-center gap-2 mb-2 itinerary-meta-facts-item">
                                                <span class="text-2xl text-text_color icon-bus"></span>
                                                <span class="text-sm text-text_color">Mode of transportation: Bus</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative mt-3 content-main-image-wrapper">
                                        <div class="content-main-image ">
                                            <div class="placeholder__img-wrapper">
                                                <div class="w-full placeholder__img">
                                                    <img
                                                        src="./images/dynamic/article-img.webp"
                                                        width={1200}
                                                        height={675}
                                                        alt="about"></img>
                                                </div>
                                            </div>
                                            <div class="content-main-image-title">
                                                Swoyambunath
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="package__customize common-module scroll-mt-20" id="package-customize">
                        <div class="package__customize-wrap">
                            <div class="package__customize-content lg:w-10/12">
                                Are you still confuse from where to start?
                                We have solutions for you.
                            </div>
                            <div class="package__customize-action ">
                                <a href="" class="px-4 py-2 text-sm font-medium transition-all duration-500 bg-white rounded-full hover:text-white hover:bg-secondary max-[425px]:w-full text-center">Download Itinerary</a>
                                <a href="" class="px-4 py-2 text-sm font-medium transition-all duration-500 bg-white rounded-full hover:text-white hover:bg-secondary max-[425px]:w-full text-center">Customize trip</a>
                            </div>
                        </div>
                    </div>
                    <div class="package__route common-module scroll-mt-20" id="package-route">
                        <h2 class="package__section-title">Map And Altitude Chart</h2>
                        <div class="tab-wrap">
                            <div class="flex flex-wrap items-end justify-between mb-5 gap-3">
                                <div class="mb-0 tab-link">
                                    <div class="tab-link__item active" data-tab="route">Route Map</div>
                                    <div class="tab-link__item" data-tab="altitude">Altitude Chart</div>
                                </div>
                                <a href="" class="text-sm font-medium text-text_color underline hover:text-primary">Download Map</a>
                            </div>
                            <div class="tab-content__wrap">
                                <div class="tab-content__wrap-item active" id="route">
                                    <a href="./images/dynamic/route-map.webp"
                                        data-fancybox="package-route">
                                        <img
                                            width="900"
                                            height="1200"
                                            class=" rounded-[5px] "
                                            src="./images/dynamic/route-map.webp"
                                            alt="thumb" />
                                    </a>
                                </div>
                                <div class="tab-content__wrap-item" id="altitude">
                                    <a href="./images/dynamic/altitude.webp"
                                        data-fancybox="package-altitude">
                                        <img
                                            width="1200"
                                            height="650"
                                            class=" rounded-[5px] "
                                            src="./images/dynamic/altitude.webp"
                                            alt="thumb" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="package__cost-details common-module scroll-mt-20" id="package-cost-details">
                        <h2 class="package__section-title">Cost Details</h2>
                        <div class="cost-includes mb-6.25 last:mb-0">
                            <h3 class="cost-includes-title">
                                Includes
                            </h3>
                            <div class="cost-content-wrap ">
                                <ul>
                                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cost-excludes  mb-6.25 last:mb-0">
                            <h3 class="cost-excludes-title">
                                Excludes
                            </h3>
                            <div class="cost-content-wrap">
                                <ul>
                                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                                    <li>Vestibulum eu ex eget ipsum lobortis hendrerit eget nec dolor.</li>
                                    <li>Maecenas vitae arcu vel libero varius mattis non et lectus.</li>
                                    <li>Nunc egestas erat quis condimentum pharetra.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="package__availability common-module scroll-mt-20" id="package-availability">
                        <h2 class="package__section-title">Dates and Availability</h2>
                        <div class="mt-5 tab-wrap">
                            <div class=" tab-link">
                                <div class="tab-link__item active" data-tab="group-departure">Group Departure</div>
                                <div class="tab-link__item" data-tab="private">Private Trip</div>
                            </div>
                            <div class="tab-content__wrap">
                                <div class="tab-content__wrap-item active" id="group-departure">
                                    <div class="package__availability-wrapper">
                                        <div class=" package__availability-filter">
                                            <div class="mb-1 text-lg font-bold package__availability-filter-title text-text_color">Select Departure Dates</div>
                                            <div class="flex flex-wrap items-center gap-2">
                                                <div class="package__availability-filter-item">
                                                    Apr 2025
                                                </div>
                                                <div class="package__availability-filter-item active">
                                                    May 2025
                                                </div>
                                                <div class="package__availability-filter-item">
                                                    Jun 2025
                                                </div>
                                                <div class="package__availability-filter-item">
                                                    Jul 2025
                                                </div>
                                            </div>
                                        </div>

                                        <div class="package__availability-wrap" id="my_departure">
                                            <div class="package__availability-item">
                                                <div class="package__availability-item-start">
                                                    <div class="text-xs text-[#878787]">
                                                        Start Thursday
                                                    </div>
                                                    <div class="text-sm font-bold text-text_color">
                                                        24 September, 2026
                                                    </div>
                                                </div>
                                                <div class="package__availability-item-end">
                                                    <div class="text-xs text-[#878787]">
                                                        End Saturday
                                                    </div>
                                                    <div class="text-sm font-bold text-text_color">
                                                        10 October, 2026
                                                    </div>
                                                </div>
                                                <div class="package__availability-item-status">
                                                    <div class="text-xs text-[#878787]">Status</div>
                                                    <div class="text-sm font-bold text-text_color">Availability</div>
                                                    <div class="text-xs text-[#878787]">
                                                        Guaranteed
                                                    </div>
                                                </div>
                                                <div class="package__availability-item-status">
                                                    <div class="text-xs text-[#878787]">Price</div>
                                                    <div class="-mb-2 text-sm font-bold text-secondary">
                                                        US$ 1799
                                                    </div>
                                                </div>
                                                <div class="md:text-right package__availability-item-link">
                                                    <form action="http://127.0.0.1:8000/trip-booking?trip_id=1" method="POST" accept-charset="utf-8">
                                                        <input type="hidden" name="_token" value="MGubn1oyDiKgIAd7jaejeajZ7Qrg2Msm9NHsG1Q0" autocomplete="off"> <input type="hidden" name="price" value="1799">
                                                        <input type="hidden" name="booktype" value="departure">
                                                        <input type="hidden" name="start_date" value="2026-09-24">
                                                        <button type="submit" name="dbooknow" value="dbooknow" class="inline-block px-3 xl:px-4 py-2 mt-0.5 text-sm font-medium text-white transition-all duration-500 rounded-full bg-primary hover:bg-secondary">
                                                            Book Now
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package__availability-note">
                                        <p><strong>Note to Solo Travelers:</strong></p>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur quasi laudantium, ducimus reiciendis commodi incidunt ex ea voluptate a cupiditate cumque ullam eaque veritatis, perferendis quaerat placeat corrupti labore?
                                        </p>

                                    </div>
                                </div>
                                <div class="tab-content__wrap-item" id="private">
                                    <div class="private-trip-wrapper">
                                        <div class="mb-2 text-lg font-semibold text-text_color">
                                            Select your preffered date
                                        </div>
                                        <input type="text" placeholder="Choose date" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="package__addons common-module scroll-mt-20" id="package-addons">
                        <h2 class="package__section-title">
                            Add-ons
                        </h2>
                        <div class="package__addons-content">
                            <h2>this is title</h2>
                            <p>
                                Standard Hotel on a Twin share basis with breakfast as on
                                the itinerary.Standard Hotel on a Twin share basis with
                                breakfast as on the itinerary.
                            </p>
                            <ul>
                                <li>
                                    Standard tea house on twin share private room on a trek
                                </li>
                                <li>
                                    Full board meals: Breakfast, Lunch, and Dinner on a
                                    hike.
                                </li>
                            </ul>
                        </div>
                        <div class="package__addons-wrapper">
                            <div class="package__addons-list">
                                <div class="package__addons-item">
                                    <div class="package__addons-item-title-wrap">
                                        <div class="package__addons-item-content">
                                            <div class="package__addons-item-title">
                                                Heli Flight from EBC to Kathmandu.
                                            </div>
                                            <div class="text-sm leading-6!">
                                                Embark on the ultimate adventure with a trek to Mount
                                                Everest, the world's highest peak. The Mount Everest
                                                trekking rout.
                                            </div>
                                        </div>

                                        <div class="package__addons-item-price">
                                            <div class="font-bold text-primary">
                                                US$ 1300
                                            </div>
                                            <div class="-mt-1 text-sm text-text_color">per person </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="package__equipment common-module scroll-mt-20" id="package-equipment">
                        <div class="flex flex-wrap items-end gap-2 justify-between mb-5">
                            <h2 class="package__section-title mb-0!">Essential Packing List</h2>
                            <button class="flex items-center justify-center text-text_color transition-all duration-500 hover:text-primary ml-auto">
                                <span class="underline hover:no-underline">Download</span>
                                <span class="pl-1 text-sm leading-5 icon-download"></span>
                            </button>
                        </div>
                        <div class="package__equipment__wrapper">
                            <p>
                                Embark on the ultimate adventure with a trek to Mount
                                Everest, the world's highest peak. The Mount Everest
                                trekking route offers unparalleled views of breathtaking
                                landscapes, including towering snow-capped peaks, lush
                                valleys, and rugged terrain. As you journey through the
                                <Link href=""> Khumbu region of Nepal</Link>, you'll
                                encounter charming Sherpa villages, ancient monasteries, and
                                vibrant local culture. Experience the thrill of ascending to
                                Everest Base Camp, where you'll stand in awe of the iconic
                                summit towering above. Whether you're an experienced
                                mountaineer or a novice adventurer, trekking to Mount
                                Everest promises an unforgettable journey filled with
                                exhilarating challenges and unforgettable memories.
                            </p>
                            <ul>
                                <li>
                                    Cras tempor purus id{' '}
                                    <Link href=""> velit consequat,</Link> id mattis dui
                                    pellentesque.
                                </li>
                                <li>
                                    Quisque ac velit at sem scelerisque porta vel quis quam.
                                </li>
                                <li>Praesent sed mauris ac justo euismod facilisis. </li>
                                <li>Vestibulum quis purus vel ligula elementum rutrum. </li>
                            </ul>
                        </div>
                    </div>
                    <div class="package__essentials common-module scroll-mt-20" id="package-essentials">
                        <h2 class="package__section-title">Essential Information</h2>
                        <div class="useful-info">
                            <p>
                                Embark on the ultimate adventure with a trek to Mount
                                Everest, the world's highest peak. The Mount Everest
                                trekking route offers unparalleled views of breathtaking
                                landscapes, including towering snow-capped peaks, lush
                                valleys, and rugged terrain. As you journey through the
                                <Link href=""> Khumbu region of Nepal</Link>, you'll
                                encounter charming Sherpa villages, ancient monasteries, and
                                vibrant local culture. Experience the thrill of ascending to
                                Everest Base Camp, where you'll stand in awe of the iconic
                                summit towering above. Whether you're an experienced
                                mountaineer or a novice adventurer, trekking to Mount
                                Everest promises an unforgettable journey filled with
                                exhilarating challenges and unforgettable memories.
                            </p>
                            <ul>
                                <li>
                                    Cras tempor purus id{' '}
                                    <Link href=""> velit consequat,</Link> id mattis dui
                                    pellentesque.
                                </li>
                                <li>
                                    Quisque ac velit at sem scelerisque porta vel quis quam.
                                </li>
                                <li>Praesent sed mauris ac justo euismod facilisis. </li>
                                <li>Vestibulum quis purus vel ligula elementum rutrum. </li>
                            </ul>
                        </div>
                    </div>
                    <div class="package__faq common-module scroll-mt-20" id="package-faq">
                        <h2 class="package__section-title">FAQs</h2>
                        <div class="accordion" id="faq-accordion">
                            <div class="accordion__item" data-id="q1">
                                <div class=" font-semibold accordion__item-title text-xl text-text_color font-signika ">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. amet consectetur, adipisicing elit. amet amet
                                </div>
                                <div class="accordion__item-content">
                                    <div class="text-text_color text-[15px]">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__item" data-id="q2">
                                <div class=" font-semibold accordion__item-title text-xl text-text_color font-signika ">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </div>
                                <div class="accordion__item-content">
                                    <div class="text-text_color text-[15px]">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam non impedit cum sed! Ducimus, voluptate tempora! Voluptatum nihil fugit odio. Animi nostrum ipsum ipsa reiciendis voluptatum nihil numquam quae nemo?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class=" package__price-sidebar-main">
                        <div class="package__price-sidebar">
                            <div class="package__price-top">
                                <div class="package__price-top-price">
                                    <div class="flex items-start gap-1.5">
                                        <span class="text-xl leading-5 text-[#fdd284] icon-tag pt-1"></span>
                                        <div class="flex flex-col">
                                            <span class="text-sm font-bold text-text_color">Price from</span>
                                            <div class="flex items-center gap-1.5">
                                                <div class="package__price-final">US$1500</div>
                                                <div class="package__price-initial">US$1600</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package__actions">
                                    <div class="package__actions-item share-wrap " id="shareDropdown">
                                        <button id="sharetoggle" class="w-10 h-10 p-2 bg-[#fff0e6] flex items-center justify-center rounded-full hover:bg-secondary duration-500 transition-all share-trigger-btn">
                                            <span class="text-xl leading-5 text-primary icon-share"> </span>
                                        </button>
                                        <div class=" share-list custom-rounded" id="dropdownMenu">
                                            <button role="button" type="button" aria-label="Share on Facebook" onclick="handleShareClick('facebook');" class="share-list__item share-facebook ">
                                                <span class="icon-facebook"></span>
                                                <span class="ml-2 text-sm">Facebook</span>
                                            </button>

                                            <button role="button" type="button" aria-label="Share on X Corp" onclick="handleShareClick('twitter');" class="share-list__item share-x ">
                                                <span class="icon-x-logo"></span>
                                                <span class="ml-2 text-sm">X Corp</span>
                                            </button>

                                            <button role="button" type="button" aria-label="Share on LinkedIn" onclick="handleShareClick('linkedin');" class="share-list__item share-linkedin ">
                                                <span class="icon-linkedin"></span>
                                                <span class="ml-2 text-sm">Linkedin</span>
                                            </button>

                                            <button role="button" type="button" aria-label="Share on Instagram" onclick="handleShareClick('instagram');" class="share-list__item share-instagram ">
                                                <span class="icon-instagram"></span>
                                                <span class="ml-2 text-sm">Instagram</span>
                                            </button>

                                            <button role="button" type="button" aria-label="Share on WhatsApp" onclick="handleShareClick('whatsapp');" class="share-list__item share-whatsapp ">
                                                <span class="icon-whatsapp-outline"></span>
                                                <span class="ml-2 text-sm">WhatsApp</span>
                                            </button>

                                            <button role="button" type="button" aria-label="Copy Link" onclick="handleShareClick('copy');" class="share-list__item share-copy ">
                                                <span class="icon-link"></span>
                                                <span class="ml-2 text-sm">Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package__price-breakdown">
                                <div class="collapsible__wrap ">
                                    <button class="flex items-center justify-between w-full collapsible">
                                        <span class="text-[15px] font-bold text-text_color">
                                            Group Discount Price
                                        </span>
                                        <span class="mr-1 text-2xl font-bold text-text_color icon">+</span>
                                    </button>
                                    <div class="collapsible-content">
                                        <div class="booking__discount-list">
                                            <ul class="booking__discount-list-group">
                                                <li class="flex justify-between pt-2 pb-0.5 mt-2 border-t  border-[#fdd284]  ">
                                                    <span class="text-sm text-text_color">1 Pax</span>
                                                    <span class="text-sm text-text_color">US$1600</span>
                                                </li>
                                                <li class="flex justify-between pt-2 pb-0.5 mt-2 border-t  border-[#fdd284]   ">
                                                    <span class="text-sm text-text_color">2 - 3 Pax</span>
                                                    <span class="text-sm text-text_color">US$1600</span>
                                                </li>
                                                <li class="flex justify-between pt-2 pb-0.5 mt-2 border-t  border-[#fdd284]  ">
                                                    <span class="text-sm text-text_color">4 - 12 Pax</span>
                                                    <span class="text-sm text-text_color">US$1600</span>
                                                </li>
                                                <li class="flex justify-between pt-2 pb-0.5 mt-2 border-t  border-[#fdd284]  ">
                                                    <span class="text-sm text-text_color">13 - 16 Pax</span>
                                                    <span class="text-sm text-text_color">US$1600</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package__price-links">
                                <button class="w-full py-3 mb-2 text-lg text-white uppercase transition-all duration-500 rounded-md last:mb-0 bg-secondary hover:bg-primary">
                                    Book This Trip
                                </button>
                                <button class="w-full py-3 mb-2 text-lg text-white uppercase transition-all duration-500 rounded-md last:mb-0 bg-secondary hover:bg-primary">
                                    Check Availability
                                </button>
                                <button class="w-full py-3 mb-2 text-lg text-white uppercase transition-all duration-500 rounded-md last:mb-0 bg-secondary hover:bg-primary">
                                    Make an Inquiry
                                </button>
                            </div>
                            <div class="package__price-note">
                                Note: Bonus Activity Included – Limited Time!
                            </div>
                        </div>
                        <div class="package__sidebar-contact">
                            <div class="text-lg font-bold text-secondary ">Need Help?</div>
                            <div class="mt-2 mb-3 text-xs text-text_color leading-5!">Our Packages specialists are here to assist you with booking and customization.</div>
                            <div class="flex gap-3 items-center">
                                <div class="package__price-contact-icon ">
                                    <img
                                        width="55"
                                        height="55"
                                        src="/images/dynamic/reviewer.webp"
                                        alt="logo" />
                                </div>
                                <div class="package__price-contact-content">
                                    <span class="block font-semibold text-base text-[#1a2d45] ">
                                        Babu Gurung
                                    </span>
                                    <a
                                        href="tel:"
                                        class="relative block text-sm font-bold transition-all duration-500 hover:text-primary text-[#1e4673]"><span class="text-sm text-[#47C355] icon-whatsapp-outline"></span>
                                        +977 9851191662
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-0 inner__moments package__moments scroll-wrap common-box">
    <div class="container">
        <div class="inner-section-title ">Video Review</div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-6">
                <div class="moments__list-item">
                    <div class="moments__list-item-image">
                        <div class="placeholder__img-wrapper">
                            <div class="placeholder__img">
                                <img
                                    width={600}
                                    height={350}
                                    src="./images/dynamic/moments-thumb-sm.webp"
                                    alt="image" />
                            </div>
                        </div>
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=a3ICNMQW7Ok"
                                data-fancybox="package-video">
                                <span class="flex items-center justify-center w-20 h-20 rounded-full circular-animate">
                                    <span class="relative z-10 text-3xl icon-play"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="moments__list-item-content">
                        Green Trails, Giving Hearts
                    </div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="moments__list-item">
                    <div class="moments__list-item-image">
                        <div class="placeholder__img-wrapper">
                            <div class="placeholder__img">
                                <img
                                    width={600}
                                    height={350}
                                    src="./images/dynamic/moments-thumb-sm.webp"
                                    alt="image" />
                            </div>
                        </div>
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=a3ICNMQW7Ok"
                                data-fancybox="package-video">
                                <span class="flex items-center justify-center w-20 h-20 rounded-full circular-animate">
                                    <span class="relative z-10 text-3xl icon-play"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="moments__list-item-content">
                        Green Trails, Giving Hearts
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="pt-0 common-box package__testimonials inner__testimonials">
    <div class="container-fluid">
        <div class="container">
            <div class="flex justify-between items-center flex-wrap mb-5 gap-3">
                <div class="inner-section-title mb-0!">What Client Says</div>
                <a href="" class="inline-block px-5 py-2 text-sm font-medium transition-all duration-500 bg-white border rounded-full border-primary hover:bg-secondary hover:border-secondary hover:text-white">
                    Write a Review
                </a>
            </div>
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 md:col-span-6">
                    <div class=" testimonials__item">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="testimonials__item-platforms ">
                                <img
                                    src="/images/svg/circular-google.svg"
                                    width="35"
                                    height="35"
                                    alt="review" />
                            </div>

                            <div class="testimonials__item-rating">
                                <span class="rating-wrap rating-5">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </span>
                            </div>
                        </div>
                        <div class=" testimonials__item-title ">
                            Treks in Mt Everest, Annapurna and Chitwan
                        </div>
                        <div class="testimonials__item-content text-sm text-text_color">
                            I booked for the Mardi Trek and it was amazing. They briefed the itinerary and it was on schedule. I love how this trip was a blend of culture, everything was excellent no complaints. Thanks and cheers :)
                        </div>
                        <div class="flex items-center  gap-5.5  mt-4 testimonials__item-reviewer">
                            <div class="testimonials__item-reviewer-image flex-[0_0_60px]">
                                <div class="bg-dim_bg  w-13.75  h-13.75  flex text-center uppercase items-center text-2xl font-bold text-primary  font-signika  justify-center rounded-full">
                                    a
                                </div>
                            </div>
                            <div class="testimonials__item-reviewer-name">
                                <div class="text-sm font-bold leading-5 text-text_color">
                                    Ramiro Barraza - USA
                                </div>
                                <div class="  text-xs text-[#878787]">San Fansisco . Jan 2026</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <div class=" testimonials__item">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="testimonials__item-platforms ">
                                <img
                                    src="/images/svg/circular-tripadvisor.svg"
                                    width="35"
                                    height="35"
                                    alt="review" />
                            </div>

                            <div class="testimonials__item-rating">
                                <span class="rating-wrap rating-5">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </span>
                            </div>
                        </div>


                        <div class=" testimonials__item-title ">
                            Nepal a wonderful Country
                        </div>
                        <div class="testimonials__item-content text-[13px] leading-5 text-text_color">
                            I booked for the Mardi Trek and it was amazing. They briefed the itinerary and it was on schedule. I love how this trip was a blend of culture, everything was excellent no complaints. Thanks and cheers :)
                        </div>
                        <div class="flex items-center  gap-5.5  mt-4 testimonials__item-reviewer">
                            <div class="testimonials__item-reviewer-image flex-[0_0_60px]">
                                <div class="bg-dim_bg  w-13.75  h-13.75  flex text-center uppercase items-center text-2xl font-bold text-primary  font-signika  justify-center rounded-full">
                                    a
                                </div>
                            </div>
                            <div class="testimonials__item-reviewer-name">
                                <div class="text-sm font-bold leading-5 text-text_color">
                                    Ramiro Barraza - USA
                                </div>
                                <div class="  text-xs text-[#878787]">San Fansisco . Jan 2026</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="inline-block px-5 py-2 mt-5 text-sm font-medium transition-all duration-500 bg-white border rounded-full border-primary hover:bg-secondary hover:border-secondary hover:text-white">
                Load More
            </a>
            <div class="testimonials-platforms">
                <div class=" testimonials-platforms-item">
                    <img
                        src="/images/svg/tripadvisor-biz-logo.svg"
                        width="120"
                        height="30"
                        alt="banner" />
                    <div class="flex items-center gap-1 green-dot-rating">
                        <span class="rating-wrap rating-5">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </span>
                        <span class="text-xs text-secondary">222 reviews</span>
                    </div>
                </div>
                <div class="testimonials-platforms-item ">
                    <img
                        src="/images/svg/google-review.svg"
                        width="160"
                        height="30"
                        alt="banner" />
                    <div class="flex items-center gap-1 ">
                        <span class="rating-wrap rating-5">
                            <span class="text-sm star"></span>
                            <span class="text-sm star"></span>
                            <span class="text-sm star"></span>
                            <span class="text-sm star"></span>
                            <span class="text-sm star"></span>
                        </span>
                        <span class="text-xs text-secondary">222 reviews</span>
                    </div>
                </div>
                <div class="testimonials-platforms-item ">
                    <img
                        src="/images/svg/trustpilot-logo.svg"
                        width="140"
                        height="25"
                        alt="banner" />

                    <div class="flex items-center gap-1 mt-1">
                        <img
                            src="/images/svg/trust-star.svg"
                            width="70"
                            height="15"
                            alt="banner" class="rounded-none" />
                        <span class="text-xs text-secondary">222 reviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="no-nav"></div>
<section class="pb-0 package__similar package-list scroll-wrap common-box">
    <div class="container">
        <h2 class="inner-section-title">
            You May Also Like
        </h2>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-4">
                <div class="package-list__item">
                    <div class="package-list__item-tag">
                        <span class="text-xs icon icon-star">
                        </span>
                        Best seller
                    </div>
                    <div class="package-list__item-wishlist">
                        <span class="text-lg text-primary icon icon-heart-outline">
                        </span>
                    </div>
                    <div class="package-list__item-image">
                        <div class="placeholder__img-wrapper">
                            <div class="placeholder__img">
                                <a href="">
                                    <img
                                        src="/images/dynamic/package-thumb.webp"
                                        alt="gallery" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="package-list__item-content">
                        <h3 class="package-list__item-title">
                            <a href="">
                                Everest Base camp trek
                            </a>
                        </h3>
                        <div class="package-list__item-meta">
                            <div class="package-list__item-duration">
                                <span class="text-base icon icon-calendar">
                                </span>
                                <span class="text-[13px] text-text_color">
                                    Duration: 15 Days
                                </span>
                            </div>
                            <div class="package-list__item-grade">
                                <span class="text-base icon icon-gauge">
                                </span>
                                <span class="text-[13px] text-text_color">
                                    Grade: Challenging
                                </span>
                            </div>
                        </div>
                        <div class="package-list__item-grade">
                            <span class="text-base icon icon-star">
                            </span>
                            <span class="text-[13px] text-text_color">
                                5.0 (1 Reviews)
                            </span>
                        </div>
                        <div class="package-list__item-price">
                            <div class="text-sm text-secondary">Price from</div>
                            <div class="font-semibold text-xl  text-secondary lg:text-[22px]">
                                US$1680
                                <span class="text-lg font-normal text-[#878787] line-through">US$1800</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="package-list__item">
                    <div class="package-list__item-tag">
                        <span class="text-xs icon icon-star">
                        </span>
                        Best seller
                    </div>
                    <div class="package-list__item-wishlist">
                        <span class="text-lg text-primary icon icon-heart-outline">
                        </span>
                    </div>
                    <div class="package-list__item-image">
                        <div class="placeholder__img-wrapper">
                            <div class="placeholder__img">
                                <a href="">
                                    <img
                                        src="/images/dynamic/package-thumb.webp"
                                        alt="gallery" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="package-list__item-content">
                        <h3 class="package-list__item-title">
                            <a href="">
                                Everest Base camp trek
                            </a>
                        </h3>
                        <div class="package-list__item-meta">
                            <div class="package-list__item-duration">
                                <span class="text-base icon icon-calendar">
                                </span>
                                <span class="text-[13px] text-text_color">
                                    Duration: 15 Days
                                </span>
                            </div>
                            <div class="package-list__item-grade">
                                <span class="text-base icon icon-gauge">
                                </span>
                                <span class="text-[13px] text-text_color">
                                    Grade: Challenging
                                </span>
                            </div>
                        </div>
                        <div class="package-list__item-grade">
                            <span class="text-base icon icon-star">
                            </span>
                            <span class="text-[13px] text-text_color">
                                5.0 (1 Reviews)
                            </span>
                        </div>
                        <div class="package-list__item-price">
                            <div class="text-sm text-secondary">Price from</div>
                            <div class="font-semibold text-xl  text-secondary lg:text-[22px]">
                                US$1680
                                <span class="text-lg font-normal text-[#878787] line-through">US$1800</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="package-list__item">
                    <div class="package-list__item-tag">
                        <span class="text-xs icon icon-star">
                        </span>
                        Best seller
                    </div>
                    <div class="package-list__item-wishlist">
                        <span class="text-lg text-primary icon icon-heart-outline">
                        </span>
                    </div>
                    <div class="package-list__item-image">
                        <div class="placeholder__img-wrapper">
                            <div class="placeholder__img">
                                <a href="">
                                    <img
                                        src="/images/dynamic/package-thumb.webp"
                                        alt="gallery" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="package-list__item-content">
                        <h3 class="package-list__item-title">
                            <a href="">
                                Everest Base camp trek
                            </a>
                        </h3>
                        <div class="package-list__item-meta">
                            <div class="package-list__item-duration">
                                <span class="text-base icon icon-calendar">
                                </span>
                                <span class="text-[13px] text-text_color">
                                    Duration: 15 Days
                                </span>
                            </div>
                            <div class="package-list__item-grade">
                                <span class="text-base icon icon-gauge">
                                </span>
                                <span class="text-[13px] text-text_color">
                                    Grade: Challenging
                                </span>
                            </div>
                        </div>
                        <div class="package-list__item-grade">
                            <span class="text-base icon icon-star">
                            </span>
                            <span class="text-[13px] text-text_color">
                                5.0 (1 Reviews)
                            </span>
                        </div>
                        <div class="package-list__item-price">
                            <div class="text-sm text-secondary">Price from</div>
                            <div class="font-semibold text-xl  text-secondary lg:text-[22px]">
                                US$1680
                                <span class="text-lg font-normal text-[#878787] line-through">US$1800</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    //add class in body
    document.body.classList.toggle('no-header-sticky');
    //package nav
    document.addEventListener('DOMContentLoaded', () => {
        const threshold = 200;
        const nav = document.querySelector('.package__nav') || document.querySelector('.package-page__nav');
        if (!nav) return; // stop if nav does not exist

        let lastActiveId = null;

        function handleScroll() {
            const offset = window.scrollY;

            // --- Sticky nav ---
            if (offset > threshold) {
                nav.classList.add('sticky');
            } else {
                nav.classList.remove('sticky');
            }

            // --- Active link detection ---
            const links = document.querySelectorAll('.package-page__nav-item');
            links.forEach(link => {
                const targetId = link.getAttribute('data-target') || link.getAttribute('href')?.replace('#', '');
                const targetElement = targetId ? document.getElementById(targetId) : null;

                if (targetElement) {
                    const sectionOffset = targetElement.offsetTop - threshold;
                    const sectionHeight = targetElement.offsetHeight;

                    if (offset >= sectionOffset && offset < sectionOffset + sectionHeight) {
                        if (lastActiveId !== targetId) {
                            lastActiveId = targetId;
                            links.forEach(l => l.classList.remove('active'));
                            link.classList.add('active');
                            scrollToActiveLink(); // only scroll horizontally
                        }
                    }
                }
            });

            // --- Nav show/hide based on #no-nav ---
            const commonBox = document.getElementById('no-nav');
            if (commonBox) {
                const rect = commonBox.getBoundingClientRect();
                if (rect.top <= 50 || window.scrollY <= 750) {
                    nav.classList.remove('visible');
                    nav.classList.add('hidden');
                } else {
                    nav.classList.add('visible');
                    nav.classList.remove('hidden');
                }
            }
        }

        // --- Scroll nav horizontally to active link ---
        function scrollToActiveLink() {
            const activeLink = document.querySelector('.package-page__nav-item.active');
            if (activeLink && nav) {
                const navRect = nav.getBoundingClientRect();
                const linkRect = activeLink.getBoundingClientRect();

                // Horizontal scroll to center the active link
                const scrollLeft = linkRect.left - navRect.left - (navRect.width / 2) + (linkRect.width / 2);
                nav.scrollBy({
                    left: scrollLeft,
                    behavior: 'smooth'
                });
            }
        }

        // Attach scroll event
        window.addEventListener('scroll', handleScroll);

        // Run once on page load
        handleScroll();
    });
</script>
<script>
    //banner expand
    document.addEventListener("DOMContentLoaded", function() {
        const bannerHalfElement = document.querySelector(".banner-half");
        const quarterElements = document.querySelectorAll(".banner-quarter");

        function shrinkHalf() {
            if (bannerHalfElement) bannerHalfElement.classList.remove("lg");
        }

        function expandHalf() {
            if (bannerHalfElement) bannerHalfElement.classList.add("lg");
        }

        // Set initial state
        if (bannerHalfElement) {
            bannerHalfElement.classList.add("lg");
        }

        // Add hover listeners
        quarterElements.forEach((el) => {
            el.addEventListener("mouseenter", shrinkHalf);
            el.addEventListener("mouseleave", expandHalf);
        });

        // Cleanup on page unload
        window.addEventListener("unload", function() {
            quarterElements.forEach((el) => {
                el.removeEventListener("mouseenter", shrinkHalf);
                el.removeEventListener("mouseleave", expandHalf);
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const accordions = document.querySelectorAll(".accordion"); // select all accordions
        const speed = 1; // match SCSS $speed
        accordions.forEach((accordion) => {
            const items = accordion.querySelectorAll(".accordion__item");
            items.forEach((item) => {
                const header = item.querySelector(".accordion__item-title");
                const body = item.querySelector(".accordion__item-content");
                header.addEventListener("click", () => {
                    const isOpen = item.classList.contains("open");

                    items.forEach((other) => {
                        if (other !== item) collapse(other);
                    });

                    if (isOpen) {
                        collapse(item);
                    } else {
                        expand(item);
                    }
                });
                body.style.height = "0px";
            });

            function expand(item) {
                const body = item.querySelector(".accordion__item-content");
                item.classList.add("open");
                item.querySelector(".accordion__item-title").classList.add("active");

                body.style.height = body.scrollHeight + "px";
                setTimeout(() => {
                    body.style.height = "auto";
                }, speed);
            }

            function collapse(item) {
                const body = item.querySelector(".accordion__item-content");
                item.classList.remove("open");
                item.querySelector(".accordion__item-title").classList.remove("active");

                body.style.height = body.scrollHeight + "px"; // set current height
                setTimeout(() => {
                    body.style.height = "0px";
                }, 10);
            }
        });
    });
</script>
<script>
    //share
    const shareToggle = document.getElementById('sharetoggle');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const shareDropdown = document.getElementById('shareDropdown');

    shareToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownMenu.classList.toggle('show');
    });

    document.addEventListener('click', (event) => {
        if (!shareDropdown.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('.collapsible');
        const content = document.querySelector('.collapsible-content');
        const icon = toggleButton.querySelector('.icon');

        if (!toggleButton || !content || !icon) return;

        function openCollapsible() {
            toggleButton.classList.add('active');
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.textContent = '-';
        }

        function closeCollapsible() {
            toggleButton.classList.remove('active');
            content.style.maxHeight = null;
            icon.textContent = '+';
        }

        function handleToggle() {
            const isActive = toggleButton.classList.toggle('active');
            if (isActive) {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.textContent = '-';
            } else {
                content.style.maxHeight = null;
                icon.textContent = '+';
            }
        }

        toggleButton.addEventListener('click', handleToggle);

        function handleScroll() {
            if (window.innerWidth < 1024) return; // disable auto-close below 1024
            if (window.scrollY > 800) {
                closeCollapsible();
            } else {
                openCollapsible();
            }
        }

        window.addEventListener('scroll', handleScroll);

        function initCollapsible() {
            if (window.innerWidth < 1024) {
                // default open below 1024
                toggleButton.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                // default open above 1024
                openCollapsible();
            }
        }

        initCollapsible();

        window.addEventListener('resize', initCollapsible);
    });
</script>
<script>
    //relocate price box
    document.addEventListener("DOMContentLoaded", function() {
        const facts = document.querySelector(".package__facts");
        const sidebar = document.querySelector(".package__price-sidebar-main");

        if (!facts || !sidebar) return;

        function moveSidebar() {
            if (window.innerWidth < 1024) {
                // Move sidebar after facts
                if (sidebar.parentNode !== facts.parentNode || sidebar.nextElementSibling !== facts.nextElementSibling) {
                    facts.insertAdjacentElement("afterend", sidebar);
                }
            } else {
                // Optionally, move sidebar back to original position if needed
                // You should save its original parent and sibling
            }
        }

        // Run on load
        moveSidebar();

        // Run on window resize
        window.addEventListener("resize", moveSidebar);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const popoverWraps = document.querySelectorAll(".popover-wrap");
        const isTouchDevice = "ontouchstart" in window || navigator.maxTouchPoints > 0;

        if (isTouchDevice) {
            // Mobile: open/close on click
            popoverWraps.forEach((wrap) => {
                const trigger = wrap.querySelector(".i-icon");
                const popover = wrap.querySelector(".popover-bg");
                if (!trigger || !popover) return;

                const togglePopover = (e) => {
                    e.stopPropagation();
                    document.querySelectorAll(".popover-bg").forEach((el) => {
                        if (el !== popover) el.classList.add("hidden");
                    });
                    popover.classList.toggle("hidden");
                };

                const closePopover = (e) => {
                    if (!wrap.contains(e.target)) {
                        popover.classList.add("hidden");
                    }
                };

                trigger.addEventListener("click", togglePopover);
                document.addEventListener("click", closePopover);
            });
        } else {
            // Desktop: show on hover
            popoverWraps.forEach((wrap) => {
                const popover = wrap.querySelector(".popover-bg");
                if (!popover) return;

                wrap.addEventListener("mouseenter", () => {
                    popover.classList.remove("hidden");
                    popover.classList.add("flex");
                });
                wrap.addEventListener("mouseleave", () => {
                    popover.classList.remove("flex");
                    popover.classList.add("hidden");
                });
            });
        }
    });
</script>
<script>
    const tabs = document.querySelectorAll('.tab-link__item');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const targetId = tab.dataset.tab;
            document.querySelectorAll('.tab-link__item').forEach(item => {
                item.classList.remove('active');
            });
            document.querySelectorAll('.tab-content__wrap-item').forEach(item => {
                item.classList.remove('active');
            });
            tab.classList.add('active');
            document.getElementById(targetId).classList.add('active');
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const itineraryWraps = document.querySelectorAll(".package__itinerary-wrap");
        const speed = 300;

        itineraryWraps.forEach((wrap) => {
            const items = wrap.querySelectorAll(".package__itinerary-item");

            items.forEach((item) => {
                const header = item.querySelector(".package__itinerary-item-title");
                const body = item.querySelector(".package__itinerary-item-content");

                if (!header || !body) return;

                // Respect initial open state
                if (item.classList.contains("open")) {
                    body.style.height = "auto";
                } else {
                    body.style.height = "0px";
                }

                header.addEventListener("click", () => {
                    const isOpen = item.classList.contains("open");

                    items.forEach((otherItem) => {
                        if (otherItem !== item) {
                            collapse(otherItem);
                        }
                    });

                    if (isOpen) {
                        collapse(item);
                    } else {
                        expand(item);
                    }
                });
            });

            function expand(item) {
                const body = item.querySelector(".package__itinerary-item-content");

                item.classList.add("open");

                body.style.height = body.scrollHeight + "px";

                setTimeout(() => {
                    if (item.classList.contains("open")) {
                        body.style.height = "auto";
                    }
                }, speed);
            }

            function collapse(item) {
                const body = item.querySelector(".package__itinerary-item-content");

                if (!body || !item.classList.contains("open")) return;

                body.style.height = body.scrollHeight + "px";

                requestAnimationFrame(() => {
                    item.classList.remove("open");
                    body.style.height = "0px";
                });
            }
        });
    });
</script>
<?php include('./inc/footer.php') ?>
