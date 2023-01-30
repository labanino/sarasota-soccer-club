<?php
/* Template Name: Homepage */
get_header(); ?>

    <!-- HERO IMAGE -->
    <div class="absolute flex flex-col h-screen 2md:items-start 2md:text-left xs:text-center xs:items-center 2md:w-auto xs:w-screen justify-center text-white sm:px-32 xs:px-0 -mt-28">
        <h1 class="mb-2 font-poppins font-medium mt-20 2md:text-big 2md:leading-big xs:text-3xl xs:leading-body"><?php the_field('hero_h1'); ?></h1>
        <p class="mb-10 font-roboto font-extralight 2md:text-xl xs:text-sm"><?php the_field('hero_text'); ?></p>
        <button type="button" class="bg-lightRed hover:bg-darkRed py-4 w-56 btnCommonElements uppercase">register</button>
    </div>
    <section class="hero relative -mt-28 -z-10">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="h-screen bg-no-repeat bg-[center_top_7rem] bg-cover" style="background-image: url(<?php the_field('hero_image'); ?>);"></div>
    </section>
    <!-- end HERO IMAGE -->

    <!-- HOURS -->
    <section class="hours">
        <div class="grid grid-cols-12">
            <div class="2md:col-span-4 sm:col-span-6 xs:col-span-full border-b-1 border-b border-middleGray flex flex-col sm:items-end xs:items-center justify-center md:py-12 md:pr-10 md:pl-2 sm:pr-10 xs:px-2 xs:py-12 sm:text-right xs:text-center">
                <h2 class="font-extrabold xl:text-3xl xs:text-[1.2rem] uppercase leading-h2 mb-3 text-darkRed"><?php the_field('hours_title'); ?></h2>
                <p class="xl:text-xl xs:text-sm font-extralight uppercase text-darkRed"><?php the_field('hours_text'); ?></p>
            </div>
            <div class="2md:col-span-3 sm:col-span-6 bg-center bg-cover -mt-10 h-55 sm:visible xs:invisible" style="background-image: url(<?php the_field('hours_image_1'); ?>);"></div>
            <div class="md:col-span-5 bg-center bg-cover -mt-10 h-55 2md:visible xs:invisible" style="background-image: url(<?php the_field('hours_image_2'); ?>);"></div>
        </div>
    </section>
    <!-- end HOURS -->

    <!-- ABOUT -->
    <section class="about text-darkRed leading-6 lg:h-[32rem] md:flex">
        <div class="md:flex md:w-1/2">
            <img class="w-auto md:object-right md:h-auto sm:h-64 xs:h-44 xs:w-full object-cover" src="/wp-content/themes/sarasota-soccer-club/images/about.jpg" alt="" />
        </div>
        <div class="md:w-1/2 2md:pr-32 md:flex md:flex-col md:justify-center xs:w-full xs:px-6 xs:py-12">
            <h2 class="font-extrabold xl:text-3xl xs:text-[1.2rem] uppercase leading-h2 mb-3">Soccer to the masses</h2>
            <p class="font-extralight leading-lead md:text-2base xs:text-base">The <strong>Sarasota City Soccer Club</strong> was founded in 2017 as a 501(c)(3) nonprofit corporation, focused on opening up opportunities for soccer lovers of all backgrounds. Kids will be taught the values of <strong>teamwork</strong>, <strong>respect</strong>, potential, and a <strong>healthy life</strong> model while cultivating an appreciation for sports in a fun and <strong>safe environment</strong>. <a href="#"><img class="inline-flex items-baseline" src="/wp-content/themes/sarasota-soccer-club/images/red-arrow.svg" alt="" title="Safe environment"></a></p>
        </div>
    </section>
    <!-- end ABOUT -->

    <!-- SCHOLARSHIPS -->
    <section class="scholarship text-white leading-6 relative">
        <div class="absolute inset-0 bg-lightPurple bg-opacity-95"></div>
        <div class="flex bg-[url('/wp-content/themes/sarasota-soccer-club/images/scholarship-bg.jpg')] bg-no-repeat bg-cover bg-center xs:px-6 xs:py-12 xs:w-full lg:h-[32rem]">
            <div class="2md:w-1/2 z-10 2md:ml-36 flex flex-col justify-center">
                <h2 class="font-extrabold xl:text-3xl xs:text-[1.2rem] uppercase leading-h2 mb-3">Scholarship</h2>
                <span class="font-extralight leading-lead md:text-2base xs:text-base">
                    <p class="mb-3">In order to maximize the positive effect of our initiatives, we award scholarships to those who cannot otherwise afford the registration fee.</p>
                    <p>If you would like to apply for a scholarship, be sure to fill out the <strong>scholarship form</strong> completely by sending us the all-important details of the application. <a href="#"><img class="inline-flex items-baseline" src="/wp-content/themes/sarasota-soccer-club/images/white-arrow.svg" alt="" title="Safe environment"></a></p>
                </span>
            </div>
            <div class="flex 2md:w-1/2 z-10">
                <img class="-mt-48 2md:block xs:hidden" src="/wp-content/themes/sarasota-soccer-club/images/young-player.png" alt="" />
            </div>
        </div>
    </section>
    <!-- end SCHOLARSHIPS -->

    <!-- SPONSORS -->
    <section class="sponsors container mx-auto">
        <div class="flex justify-center items-center 2md:space-x-10 xs:space-x-5 py-7">
            <span class="uppercase text-darkBlue font-poppins font-extrabold md:text-[1.50rem] xs:text-base">
                <a href="#">Be a sponsor today <img class="inline-flex md:hidden xs:items-baseline" src="/wp-content/themes/sarasota-soccer-club/images/dark-blue-arrow.svg" alt="" title="Safe environment"></a>
            </span>
            <span class="md:block xs:hidden"><a href="#"><img src="/wp-content/themes/sarasota-soccer-club/images/AO-Impact-Logo.png" alt="AO Impact" title="AO Impact"></a></span>
            <span class="md:block xs:hidden"><a href="#"><img src="/wp-content/themes/sarasota-soccer-club/images/shamrock.png" alt="The Shamrock" title="The Shamrock"></a></span>
            <span class="md:block xs:hidden"><a href="#"><img src="/wp-content/themes/sarasota-soccer-club/images/digital-marketing-srq.png" alt="Digital Marketing SRQ" title="Digital Marketing SRQ"></a></span>
        </div>
    </section>
    <!-- end SPONSORS -->

    <!-- PICTURES BLOCK -->
    <section class="soccer-pictures grid grid-cols-3">
        <div class="h-[32rem] bg-center bg-cover bg-[url('/wp-content/themes/sarasota-soccer-club/images/soccer1.jpg')]"></div>
        <div class="h-[32rem] bg-center bg-cover bg-[url('/wp-content/themes/sarasota-soccer-club/images/soccer2.jpg')]"></div>
        <div class="h-[32rem] bg-center bg-cover bg-[url('/wp-content/themes/sarasota-soccer-club/images/soccer3.jpg')]"></div>
    </section>
    <!-- end PICTURES BLOCK -->

    <!-- VOLUNTEER -->
    <section class="about text-darkRed leading-6 lg:h-[32rem]">
        <div class="md:flex bg-[url('/wp-content/themes/sarasota-soccer-club/images/volunteer-bg.png')] bg-no-repeat bg-cover bg-center">
            <div class=" md:flex md:w-2/5 md:p-8 xs:p-5">
                <img class="mx-auto" src="/wp-content/themes/sarasota-soccer-club/images/coach.png" alt="" />
            </div>
            <div class="md:w-3/5 2md:pr-32 md:flex xs:flex-col md:justify-center xs:px-6 xs:pt-4 xs:pb-12">
                <h2 class="font-extrabold xl:text-3xl xs:text-[1.2rem] uppercase leading-h2 mb-3">Volunteer</h2>
                <p class="font-extralight leading-lead md:text-2base xs:text-base mb-3"><strong>Sarasota City Soccer Club</strong> offers players between the ages of 5 and 12 the chance to try out our Recreational and Competitive teams.</p>
                <p class="font-extralight leading-lead md:text-2base xs:text-base">We focus on offering a <strong>fun</strong> and <strong>safe learning environment</strong> for all players, their parents, and coaches, so that everyone understands the rules of the game. Contact us to <strong>volunteer</strong>. <a href="#"><img class="inline-flex items-baseline" src="/wp-content/themes/sarasota-soccer-club/images/red-arrow.svg" alt="" title="Volunteer"></a></p>
            </div>
        </div>
    </section>
    <!-- end VOLUNTEER -->

<?php get_footer();