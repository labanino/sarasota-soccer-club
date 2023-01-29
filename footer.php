<!-- FOOTER -->
<footer class="text-white font-roboto">
    <div class="bg-no-repeat bg-center bg-cover bg-[url('/wp-content/themes/sarasota-soccer-club/images/footer-bg.jpg')] lg:px-24 md:px-8 md:py-20 xs:px-7 xs:py-10">
        <div class="xl:container mx-auto grid grid-cols-1 gap-8 md:grid-cols-4 sm:grid-cols-2">
            <!-- NAVIGATION -->
            <div class="xs:mb-6">
                <h3 class="font-extrabold uppercase xs:mb-2 text-xl">Navigation</h3>
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'footer',
                        'container'       => 'ul',
                        'menu_class'      => 'uppercase',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'depth'           => 0
                    ) );
                ?>
            </div>
            <!-- LOCATION -->
            <div class="xs:mb-6 font-extralight">
                <h3 class="font-extrabold uppercase xs:mb-2 text-xl">Location</h3>
                <p><strong>Robert L. Taylor Community Complex</strong><br>1845 34th St. Sarasota, FL 34234</p>
            </div>
            <!-- CONTACT US -->
            <div class="xs:mb-6 font-extralight">
                <h3 class="font-extrabold  uppercase xs:mb-2 text-xl">Contact Us</h3>
                <p><strong>Soccer Director, Coreay Boyes</strong><br>
                    941.405.3465<br>
                    Or you can <a class="font-normal" href="#">email us</a>.</p>
                <div class="top-social">
                    <ul class="flex items-center space-x-2 mt-5">
                        <li>
                            <!-- facebook svg -->
                            <a href="#" title="Facebook">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M6.43456 3.47362C6.43456 3.36141 6.45014 3.11909 6.48131 2.74819C6.51481 2.37652 6.65507 1.98771 6.90674 1.57941C7.15608 1.17268 7.56048 0.807238 8.12305 0.483875C8.68329 0.162071 9.49286 0 10.5494 0H13.5259V3.24376H11.3466C11.1307 3.24376 10.9297 3.32479 10.7481 3.48452C10.5681 3.64426 10.4754 3.7962 10.4754 3.93723V5.95533H13.5252C13.4932 6.35037 13.4581 6.73451 13.4176 7.10541L13.2969 8.08562C13.2485 8.41678 13.1995 8.72378 13.1511 9.00662H10.4536V18H6.43456V9.00584H4.47412V5.95533H6.43456V3.47362Z"
                                            fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <!-- instagram svg -->
                            <a href="#" title="Instagram">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_83_57)">
                                        <path
                                                d="M12.75 1.5H5.25C3.17893 1.5 1.5 3.17893 1.5 5.25V12.75C1.5 14.8211 3.17893 16.5 5.25 16.5H12.75C14.8211 16.5 16.5 14.8211 16.5 12.75V5.25C16.5 3.17893 14.8211 1.5 12.75 1.5Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        <path
                                                d="M12 8.52748C12.0926 9.15167 11.986 9.78914 11.6953 10.3492C11.4047 10.9093 10.9449 11.3635 10.3812 11.6472C9.8176 11.9309 9.17886 12.0297 8.55586 11.9294C7.93287 11.8292 7.35734 11.535 6.91115 11.0889C6.46496 10.6427 6.17082 10.0671 6.07058 9.44414C5.97033 8.82115 6.06907 8.1824 6.35277 7.61876C6.63646 7.05512 7.09066 6.59529 7.65076 6.30466C8.21086 6.01404 8.84834 5.90742 9.47252 5.99998C10.1092 6.0944 10.6987 6.39108 11.1538 6.84621C11.6089 7.30134 11.9056 7.89079 12 8.52748Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        <path d="M13.125 4.875H13.1308" stroke="white" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_83_57">
                                            <rect width="18" height="18" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <!-- youtube svg -->
                            <a href="#" title="Youtube">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M21.2399 7.5779C21.1575 7.25506 20.9235 7.01131 20.6559 6.93656C20.1825 6.80331 17.875 6.49998 13 6.49998C8.12502 6.49998 5.81969 6.80331 5.34194 6.93656C5.0776 7.01023 4.8436 7.25398 4.76019 7.5779C4.6421 8.03723 4.33335 9.96231 4.33335 13C4.33335 16.0376 4.6421 17.9616 4.76019 18.4231C4.84252 18.7449 5.07652 18.9886 5.34302 19.0623C5.81969 19.1966 8.12502 19.5 13 19.5C17.875 19.5 20.1814 19.1966 20.6581 19.0634C20.9224 18.9897 21.1564 18.746 21.2399 18.4221C21.3579 17.9627 21.6667 16.0333 21.6667 13C21.6667 9.96665 21.3579 8.03831 21.2399 7.5779ZM23.3383 7.03948C23.8334 8.96998 23.8334 13 23.8334 13C23.8334 13 23.8334 17.03 23.3383 18.9605C23.0631 20.0276 22.2582 20.8671 21.2388 21.151C19.3874 21.6666 13 21.6666 13 21.6666C13 21.6666 6.61594 21.6666 4.76127 21.151C3.73752 20.8628 2.93369 20.0243 2.66177 18.9605C2.16669 17.03 2.16669 13 2.16669 13C2.16669 13 2.16669 8.96998 2.66177 7.03948C2.93694 5.9724 3.74185 5.13281 4.76127 4.84898C6.61594 4.33331 13 4.33331 13 4.33331C13 4.33331 19.3874 4.33331 21.2388 4.84898C22.2625 5.13715 23.0664 5.97565 23.3383 7.03948ZM10.8334 16.7916V9.20831L17.3334 13L10.8334 16.7916Z"
                                            fill="white"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- NEWSLETTER -->
            <div class="xs:mb-6 font-extralight">
                <h3 class="font-extrabold uppercase xs:mb-2 text-xl">Newsletter</h3>
                <p class="mb-3">Join Our Mailing List To Hear<br>All S.C. News And Updates</p>
                <form>
                    <div class="mb-4 w-full">
                        <input type="email" id="email"
                               class="px-3 py-[0.4rem] text-darkBlue font-normal border-0 text-base w-full focus:ring-darkBlue focus:border-darkBlue opacity-80"
                               placeholder="Full Name" required>
                    </div>
                    <div class="mb-4 w-full">
                        <input type="password" id="password"
                               class="px-3 py-[0.4rem] text-darkBlue font-normal border-0 text-base w-full focus:ring-darkBlue focus:border-darkBlue opacity-80"
                               placeholder="Email" required>
                    </div>
                    <button type="submit"
                            class="bg-white px-5 py-2 text-base font-medium text-darkRed uppercase hover:opacity-60 transition duration-150 ease-in-out">
                        Join
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="bg-lightRed text-sm px-10 py-5 text-right tracking-wider">
        <p>Web Design and Development by <strong><a href="https://digitalmarketingsrq.com" target="_blank">Digital Marketing SRQ</a></strong> &copy;2023 - All Rights Reserved</p>
    </div>
</footer>
<!-- end FOOTER -->

<?php wp_footer(); ?>
</body>
</html>