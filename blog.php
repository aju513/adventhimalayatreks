<?php include('./inc/common-header.php'); ?>
<?php include('./inc/header.php') ?>
<?php include('./inc/breadcrumbs.php') ?>
<section class="common-box blog-page" role="main">
    <div class="container">
        <div class="page-title">
            <h1>
                Blog
            </h1>
        </div>
        <div class="blog-page__description ">
            <div class="w-full lg:w-4/5">
                <p class="text-text_color text-[15px]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
    <div class="mt-10 blog-page__featured bg-dim_bg common-box">
        <div class="container">
            <div class="grid grid-cols-12 gap-5">
                <div class="hidden lg:col-span-4 lg:block">
                    <div class="mt-8 blog-page__featured-image lg:mt-0">
                        <div class="placeholder__img-wrapper">
                            <div class="placeholder__img">
                                <img
                                    src="/images/dynamic/blog-thumb.webp"
                                    width="600"
                                    height="450"
                                    alt="banner" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8 xl:col-span-6 xl:pr-7">
                    <div class="blog-page__featured-content">
                        <div class="inline-block px-4 py-2 mb-3 text-xs uppercase blog-page__featured-tag text-text_color bg-primary/30 rounded-[5px]">
                            Featured Post
                        </div>
                        <a
                            href=""
                            class="block mb-5 text-xl  font-extrabold leading-6 transition-all duration-500 blog-page__featured-title   font-signika   text-text_color hover:text-primary sm:mb-5 md:text-[22px] md:leading-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        </a>
                        <div class="flex flex-wrap gap-3 mb-4 blog-page__featured-info item-center sm:mb-1 sm:gap-5">
                            <div class="flex items-center gap-2 font-semibold lg:mb-4">
                                <span class="text-xl icon-calendar-month"></span>
                                <span class="text-sm font-normal text-text_color">December 12, 2024</span>
                            </div>
                            <div class="flex items-center gap-2 font-semibold lg:mb-4">
                                <span class="text-2xl icon-user-outline"></span>
                                <span class="text-sm font-normal text-text_color">Admin</span>
                            </div>
                            <div class="flex items-center gap-2 font-semibold lg:mb-4">
                                <span class="text-xl icon-chat-outline"></span>
                                <span class="text-sm font-normal text-text_color">Nepal</span>
                            </div>
                        </div>
                        <div class="text-[15px] text-text_color">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </div>
                        <a href="" class="inline-flex items-center gap-2 mt-5 arrow-move-effect">
                            <span class="font-medium underline font-sm text-xm text-text_color">Read More</span>
                            <span class="pt-1 text-xs text-text_color icon-slanted-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-0 blog-list-wrapper blog-list common-box">
        <div class="container">
            <h2 class="inner-section-title">
                Latest Blog
            </h2>
            <div class="mb-5 blog-list__sort">
                <div class="flex flex-col justify-between gap-x-5 gap-y-3 sm:flex-row">
                    <div class="relative blog-list__sort-category">
                        <select class="custom-rounded border border-primary border-opacity-20 w-full cursor-pointer appearance-none px-[25px] py-[15px] leading-6 text-text_color sm:w-[270px]">
                            <option selected>All Topics</option>
                            <option>Cultural Tours</option>
                            <option>Tours</option>
                            <option>Golfing</option>
                            <option>Jungle Safari</option>
                            <option>Bunjee Jump</option>
                            <option>Canoying</option>
                        </select>
                    </div>

                    <div class="relative blog-list__sort-search">
                        <input
                            type="text"
                            placeholder="Search the blog"
                            class="border border-primary border-opacity-20 custom-rounded w-full  pl-[22px] pr-[50px] py-[15px] text-[15px] leading-6 text-text_color placeholder:text-text_color md:w-[350px]" />

                        <div class="absolute right-4 top-4">
                            <span class="text-2xl icon-search"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                    <div class="blog-list__item">
                        <div class="blog-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="placeholder__img">
                                    <a href="">
                                        <img
                                            width={600}
                                            height={600}
                                            src="./images/dynamic/blog-thumb.webp"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-list__item-content">
                            <div class="blog-list__item-meta">
                                <div class="blog-list__item-date">
                                    Jan 2026
                                </div>
                                <div class="blog-list__item-author">
                                    By Admin
                                </div>
                            </div>
                            <h3 class="blog-list__item-title">
                                <a href="">
                                    What it’s really like to stand on the roof of the world
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                    <div class="blog-list__item">
                        <div class="blog-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="placeholder__img">
                                    <a href="">
                                        <img
                                            width={600}
                                            height={600}
                                            src="./images/dynamic/blog-thumb.webp"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-list__item-content">
                            <div class="blog-list__item-meta">
                                <div class="blog-list__item-date">
                                    Jan 2026
                                </div>
                                <div class="blog-list__item-author">
                                    By Admin
                                </div>
                            </div>
                            <h3 class="blog-list__item-title">
                                <a href="">
                                    What it’s really like to stand on the roof of the world
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                    <div class="blog-list__item">
                        <div class="blog-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="placeholder__img">
                                    <a href="">
                                        <img
                                            width={600}
                                            height={600}
                                            src="./images/dynamic/blog-thumb.webp"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-list__item-content">
                            <div class="blog-list__item-meta">
                                <div class="blog-list__item-date">
                                    Jan 2026
                                </div>
                                <div class="blog-list__item-author">
                                    By Admin
                                </div>
                            </div>
                            <h3 class="blog-list__item-title">
                                <a href="">
                                    What it’s really like to stand on the roof of the world
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                    <div class="blog-list__item">
                        <div class="blog-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="placeholder__img">
                                    <a href="">
                                        <img
                                            width={600}
                                            height={600}
                                            src="./images/dynamic/blog-thumb.webp"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-list__item-content">
                            <div class="blog-list__item-meta">
                                <div class="blog-list__item-date">
                                    Jan 2026
                                </div>
                                <div class="blog-list__item-author">
                                    By Admin
                                </div>
                            </div>
                            <h3 class="blog-list__item-title">
                                <a href="">
                                    What it’s really like to stand on the roof of the world
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                    <div class="blog-list__item">
                        <div class="blog-list__item-image">
                            <div class="placeholder__img-wrapper">
                                <div class="placeholder__img">
                                    <a href="">
                                        <img
                                            width={600}
                                            height={600}
                                            src="./images/dynamic/blog-thumb.webp"
                                            alt="image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-list__item-content">
                            <div class="blog-list__item-meta">
                                <div class="blog-list__item-date">
                                    Jan 2026
                                </div>
                                <div class="blog-list__item-author">
                                    By Admin
                                </div>
                            </div>
                            <h3 class="blog-list__item-title">
                                <a href="">
                                    What it’s really like to stand on the roof of the world
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./inc/footer.php') ?>
