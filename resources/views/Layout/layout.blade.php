<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadiman</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/fav.ico') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/output-tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/output-scss.css') }}">
</head>

<body>

    <!-- HEADER -->
     <!-- HEADER -->
    <header id="header" class="header relative z-[2]">
        <div class="top_nav h-11 bg-dark text-white">
            <div class="container h-full">
                <div class="top_nav_inner flex items-center justify-between h-full">
                    <ul class="top_nav_info flex items-center gap-6">
                        <li class="info_item inline-flex items-center gap-2 max-md:hidden">
                            <span class="ph ph-map-pin"></span>
                            <span class="caption1">268 St, East Chicago, IN 46312, US</span>
                        </li>
                        <li class="info_item inline-flex items-center gap-2 max-[400px]:hidden">
                            <span class="ph ph-alarm"></span>
                            <span class="caption1">8:00am : 10:00pm Mon-Sun</span>
                        </li>
                    </ul>
                    <ul class="top_nav_social flex items-center">
                        <li class="social_item">
                            <a href="https://www.facebook.com/"
                                class="social_link flex items-center justify-center w-9 h-9" target="_blank">
                                <span class="ph ph-facebook-logo text-xl"></span>
                                <span class="blind">link facebook</span>
                            </a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.x.com/" class="social_link flex items-center justify-center w-9 h-9"
                                target="_blank">
                                <span class="ph ph-x-logo text-xl"></span>
                                <span class="blind">link x</span>
                            </a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.instagram.com/"
                                class="social_link flex items-center justify-center w-9 h-9" target="_blank">
                                <span class="ph ph-instagram-logo text-xl"></span>
                                <span class="blind">link instagram</span>
                            </a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.skype.com/"
                                class="social_link flex items-center justify-center w-9 h-9" target="_blank">
                                <span class="ph ph-skype-logo text-xl"></span>
                                <span class="blind">link skype</span>
                            </a>
                        </li>
                        <li class="social_item">
                            <a href="https://www.telegram.com/"
                                class="social_link flex items-center justify-center w-9 h-9" target="_blank">
                                <span class="ph ph-telegram-logo text-xl"></span>
                                <span class="blind">link telegram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_main sm:h-25 h-20 bg-white">
            <div class="container flex items-center justify-between h-full">
                <h1>
                    <a href="index.html" class="logo flex items-center gap-3">
                        <img src="./assets/images/logo_orange.png" class="flex-shrink-0 w-10" alt="logo">
                        <strong class="heading4">Hadiman</strong>
                    </a>
                </h1>
                <ul class="header_info flex items-center xl:gap-15 gap-5">
                    <li>
                        <a href="tel:+1555678888" class="flex items-center gap-3 group">
                            <span
                                class="flex items-center justify-center sm:w-14 w-12 sm:h-14 h-12 border-2 border-orange duration-400 group-hover:bg-orange group-hover:text-white">
                                <span class="ph ph-phone-call sm:text-3xl text-2xl"></span>
                            </span>
                            <div class="max-lg:hidden">
                                <span class="text-variant1">Call Us Now:</span>
                                <strong class="heading6 block mt-0.5">1-555-678-888</strong>
                            </div>
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <a href="mailto:hi.avitex@gmail.com" class="flex items-center gap-3 group">
                            <span
                                class="flex items-center justify-center sm:w-14 w-12 sm:h-14 h-12 border-2 border-orange duration-400 group-hover:bg-orange group-hover:text-white">
                                <span class="ph ph-envelope sm:text-3xl text-2xl"></span>
                            </span>
                            <div class="max-lg:hidden">
                                <span class="text-variant1">Email Address</span>
                                <strong class="heading6 block mt-0.5">hi.avitex@gmail.com</strong>
                            </div>
                        </a>
                    </li>
                    <li class="max-sm:hidden">
                        <a href="book-appointment.html" class="btn">Request an estimate</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu_main h-15 border-t border-outline">
            <div class="container flex items-center justify-between h-full bg-white">
                <button class="menu_icons_btn js_btn_open_popup lg:hidden" data-popup="popup_menu_mobile">
                    <span class="ph ph-list text-2xl"></span>
                    <span class="blind">button menu mobile</span>
                </button>
                <ul class="menu flex items-center gap-10 h-full max-lg:hidden">
                    <li class="menu_item h-full relative">
                        <a href="#!" class="menu_link inline-flex items-center gap-1 h-full active">
                            <span class="has_line txt-button">Home</span>
                            <span class="ph-bold ph-caret-down mt-0.5 text-xs"></span>
                        </a>
                        <ul
                            class="menu_sub invisible absolute top-full -left-6 min-w-[13.75rem] p-3 border-t border-outline bg-white translate-y-5 opacity-0 pointer-events-none shadow duration-400">
                            <li class="menu_sub_item">
                                <a href="index.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300 active">Homepage
                                    01</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="home2.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Homepage
                                    02</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="home3.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Homepage
                                    03</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="home4.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Homepage
                                    04</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="rtl.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Homepage
                                    RTL</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu_item h-full relative">
                        <a href="#!" class="menu_link inline-flex items-center gap-1 h-full">
                            <span class="has_line txt-button">Services</span>
                            <span class="ph-bold ph-caret-down mt-0.5 text-xs"></span>
                        </a>
                        <div
                            class="menu_sub menu_sub_mega invisible fixed top-[12.75rem] right-0 left-0 translate-y-5 opacity-0 pointer-events-none duration-400">
                            <div class="container">
                                <ul
                                    class="services_list grid grid-cols-3 gap-4 w-full p-8 border-t border-outline bg-white">
                                    <li class="services_item">
                                        <a href="services-detail.html"
                                            class="services_link flex gap-5 py-4 px-5 border border-outline hover:bg-orange hover:bg-opacity-10 hover:border-orange duration-300 group">
                                            <span class="services_icon icon-wrench-house flex-shrink-0 text-5xl duration-300 group-hover:text-orange"></span>
                                            <div class="services_info">
                                                <strong
                                                    class="services_tit heading6 group-hover:text-orange duration-300">Renovation
                                                    Services</strong>
                                                <p
                                                    class="services_desc mt-1 caption1 text-variant1 text-ellipsis line-clamp-2">
                                                    Transform your home with our professional renovation services. Whether
                                                    it’s a kitchen remodel, a bathroom upgrade, or a complete home makeover,
                                                    our team brings your vision to life with precision and care.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services_item">
                                        <a href="services-detail.html"
                                            class="services_link flex gap-5 py-4 px-5 border border-outline hover:bg-orange hover:bg-opacity-10 hover:border-orange duration-300 group">
                                            <span class="services_icon icon-electrical flex-shrink-0 text-5xl duration-300 group-hover:text-orange"></span>
                                            <div class="services_info">
                                                <strong
                                                    class="services_tit heading6 group-hover:text-orange duration-300">Electrical
                                                    Services</strong>
                                                <p
                                                    class="services_desc mt-1 caption1 text-variant1 text-ellipsis line-clamp-2">
                                                    Our licensed electricians provide safe, reliable electrical services,
                                                    including installations, repairs, upgrades, and inspections to ensure
                                                    your home’s electrical systems are efficient and up-to-code.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services_item">
                                        <a href="services-detail.html"
                                            class="services_link flex gap-5 py-4 px-5 border border-outline hover:bg-orange hover:bg-opacity-10 hover:border-orange duration-300 group">
                                            <span class="services_icon icon-pipe flex-shrink-0 text-5xl duration-300 group-hover:text-orange"></span>
                                            <div class="services_info">
                                                <strong
                                                    class="services_tit heading6 group-hover:text-orange duration-300">Plumbing
                                                    Services</strong>
                                                <p
                                                    class="services_desc mt-1 caption1 text-variant1 text-ellipsis line-clamp-2">
                                                    From fixing leaks to installing new fixtures, our experienced plumbers
                                                    handle all types of plumbing projects, ensuring dependable solutions for
                                                    both minor repairs and major installations.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services_item">
                                        <a href="services-detail.html"
                                            class="services_link flex gap-5 py-4 px-5 border border-outline hover:bg-orange hover:bg-opacity-10 hover:border-orange duration-300 group">
                                            <span class="services_icon icon-air flex-shrink-0 text-5xl duration-300 group-hover:text-orange"></span>
                                            <div class="services_info">
                                                <strong
                                                    class="services_tit heading6 group-hover:text-orange duration-300">HVAC
                                                    Services</strong>
                                                <p
                                                    class="services_desc mt-1 caption1 text-variant1 text-ellipsis line-clamp-2">
                                                    Stay comfortable year-round with our HVAC installation, repair, and
                                                    maintenance. We provide energy-efficient solutions tailored to your
                                                    home’s needs, keeping your family comfortable in every season.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services_item">
                                        <a href="services-detail.html"
                                            class="services_link flex gap-5 py-4 px-5 border border-outline hover:bg-orange hover:bg-opacity-10 hover:border-orange duration-300 group">
                                            <span class="services_icon icon-paint flex-shrink-0 text-5xl duration-300 group-hover:text-orange"></span>
                                            <div class="services_info">
                                                <strong
                                                    class="services_tit heading6 group-hover:text-orange duration-300">Painting
                                                    and Drywall</strong>
                                                <p
                                                    class="services_desc mt-1 caption1 text-variant1 text-ellipsis line-clamp-2">
                                                    Refresh your home with our professional painting and drywall services,
                                                    delivering high-quality finishes that enhance your space’s aesthetic
                                                    appeal and durability.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="services_item">
                                        <a href="services-detail.html"
                                            class="services_link flex gap-5 py-4 px-5 border border-outline hover:bg-orange hover:bg-opacity-10 hover:border-orange duration-300 group">
                                            <span class="services_icon icon-roof flex-shrink-0 text-5xl duration-300 group-hover:text-orange"></span>
                                            <div class="services_info">
                                                <strong
                                                    class="services_tit heading6 group-hover:text-orange duration-300">Roofing
                                                    Services</strong>
                                                <p
                                                    class="services_desc mt-1 caption1 text-variant1 text-ellipsis line-clamp-2">
                                                    Enhance your home’s protection and curb appeal with our expert roofing
                                                    services, including new installations, repairs, and inspections to
                                                    ensure long-lasting protection and beauty for your property.</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item h-full relative">
                        <a href="#!" class="menu_link inline-flex items-center gap-1 h-full">
                            <span class="has_line txt-button">Blog</span>
                            <span class="ph-bold ph-caret-down mt-0.5 text-xs"></span>
                        </a>
                        <ul
                            class="menu_sub invisible absolute top-full -left-6 min-w-[13.75rem] p-3 border-t border-outline bg-white translate-y-5 opacity-0 pointer-events-none shadow duration-400">
                            <li class="menu_sub_item">
                                <a href="blog-default.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Blog
                                    Default</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="blog-list.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Blog
                                    List</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="blog-grid.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Blog
                                    Grid</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="blog-detail1.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Blog
                                    Details 1</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="blog-detail2.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Blog
                                    Details 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu_item h-full relative">
                        <a href="#!" class="menu_link inline-flex items-center gap-1 h-full">
                            <span class="has_line txt-button">Shop</span>
                            <span class="ph-bold ph-caret-down mt-0.5 text-xs"></span>
                        </a>
                        <ul
                            class="menu_sub invisible absolute top-full -left-6 min-w-[13.75rem] p-3 border-t border-outline bg-white translate-y-5 opacity-0 pointer-events-none shadow duration-400">
                            <li class="menu_sub_item">
                                <a href="our-products.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Our
                                    Products</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="product-detail.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Product
                                    Details</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="cart.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Shopping
                                    Cart</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="checkout.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Check
                                    Out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu_item h-full relative">
                        <a href="#!" class="menu_link inline-flex items-center gap-1 h-full">
                            <span class="has_line txt-button">Pages</span>
                            <span class="ph-bold ph-caret-down mt-0.5 text-xs"></span>
                        </a>
                        <ul
                            class="menu_sub invisible absolute top-full -left-6 min-w-[13.75rem] p-3 border-t border-outline bg-white translate-y-5 opacity-0 pointer-events-none shadow duration-400">
                            <li class="menu_sub_item">
                                <a href="about-us.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">About
                                    Us</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="our-services.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Our Services</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="our-projects1.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Our
                                    Projects 1</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="our-projects2.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Our
                                    Projects 2</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="projects-detail.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Projects
                                    Detail</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="our-pricing.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Our
                                    Pricing</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="our-testimonials.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Our
                                    Testimonials</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="book-appointment.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Book
                                    Appointment</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="404.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">404
                                    Page</a>
                            </li>
                            <li class="menu_sub_item">
                                <a href="faqs.html"
                                    class="menu_sub_link block px-3 py-[0.875rem] txt-button hover:bg-orange hover:bg-opacity-10 hover:text-orange duration-300">Faqs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu_item h-full relative">
                        <a href="contact.html" class="menu_link inline-flex items-center gap-1 h-full">
                            <span class="has_line txt-button">Contact</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu_icons">
                    <li class="menu_icons_item inline-block align-middle max-lg:hidden">
                        <button class="menu_icons_btn js_btn_open_popup" data-popup="popup_search">
                            <span class="ph ph-magnifying-glass text-2xl"></span>
                            <span class="blind">button search</span>
                        </button>
                    </li>
                    <li class="menu_icons_item inline-block align-middle relative ml-5">
                        <button class="menu_icons_btn js_btn_open_popup" data-popup="popup_wishlist">
                            <span class="ph ph-heart text-2xl"></span>
                            <span class="blind">button wishlist</span>
                        </button>
                        <span class="wishlist_quantity flex items-center justify-center absolute -top-1.5 -right-1.5 w-4 h-4 rounded-full bg-black text-[10px] text-white pointer-events-none">2</span>
                    </li>
                    <li class="menu_icons_item inline-block align-middle relative ml-5">
                        <button class="menu_icons_btn js_btn_open_popup" data-popup="popup_cart">
                            <span class="ph ph-shopping-bag-open text-2xl"></span>
                            <span class="blind">button cart</span>
                        </button>
                        <span class="cart_quantity flex items-center justify-center absolute -top-1.5 -right-1.5 w-4 h-4 rounded-full bg-black text-[10px] text-white pointer-events-none">2</span>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- PAGE CONTENT -->
@yield('Content')

    <!-- FOOTER -->
    <footer class="footer sm:pt-20 pt-12 bg-dark text-white">

        <div class="container">
            <h3 class="text-white text-2xl">
                Footer Here
            </h3>
        </div>

    </footer>

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/phosphor-icons.js') }}"></script>
    <script src="{{ asset('assets/js/scrollSmooth.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/countUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
