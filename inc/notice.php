<section class="py-[10px] notice__wrapper  ">
    <div class="container relative">
        <div class="pr-8 text-sm text-white notice__wrapper-content">
            <a href="" class="text-xs text-white transition-all duration-500 hover:underline"> Nepal Trek Bookings Now Open for 2025/26! (Note: Starting September, Lukla flights will depart from Ramechhap.) </a>
        </div>
        <button class="absolute top-0 right-0 notice__wrapper-close">
            <span class="text-2xl text-white icon-cross"></span>
        </button>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeBtn = document.querySelector('.notice__wrapper-close');
        const noticeWrapper = document.querySelector('.notice__wrapper');

        if (closeBtn && noticeWrapper) {
            closeBtn.addEventListener('click', function() {
                noticeWrapper.style.display = 'none';
            });
        }
    });
</script>