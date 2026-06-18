@extends("Layout.layout")
@section("Content")

  <section class="section slider sm:h-[47.5rem] h-[34rem] relative">
        <button
            class="btn_prev flex items-center justify-center absolute top-1/2 min-[1600px]:left-10 left-[16px] z-[2] -translate-y-1/2 w-13 h-[4.75rem] bg-white min-[1600px]:bg-opacity-10 bg-opacity-30 text-white duration-300 lg:hover:bg-opacity-80 lg:hover:text-black">
            <span class="ph ph-caret-left text-xl"></span>
            <span class="blind">button prev</span>
        </button>
        <div class="slider_swiper swiper w-full h-full">
            <ul class="swiper-wrapper">
                <li class="swiper-slide flex items-center justify-center relative">
                    <div class="slider_bg absolute top-0 left-0 w-full h-full pointer-events-none">
                        <img src="./assets/images/slider/slider1_1.jpg" alt="Fast & Professional Home Repairs"
                            class="h-full object-cover">
                    </div>
                    <div class="container relative max-sm:-mt-10">
                        <h2 class="section_tit lg:w-2/3 text-white heading1">Fast & Professional Home Repairs</h2>
                        <p class="section_desc mt-4 text-white body2" style="--i: 1">Our expert handyman team is here to help with any
                            project, big or small.</p>
                        <ul class="slider_btn_group flex flex-wrap gap-4 mt-9">
                            <li class="slider_btn_item" style="--i: 2">
                                <a href="our-services.html" class="slider_btn btn btn_icon">
                                    <span>Book a Service</span>
                                    <span class="ph ph-arrow-up-right text-2xl"></span>
                                </a>
                            </li>
                            <li class="slider_btn_item" style="--i: 3">
                                <a href="contact.html" class="slider_btn btn btn_icon bg-white">
                                    <span>Get A quote</span>
                                    <span class="ph ph-arrow-up-right text-2xl"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="swiper-slide flex items-center justify-center relative">
                    <div class="slider_bg absolute top-0 left-0 w-full h-full pointer-events-none">
                        <img src="./assets/images/slider/slider1_2.jpg" alt="Expert Renovation & Improvement Services"
                            class="h-full object-cover">
                    </div>
                    <div class="container relative max-sm:-mt-10">
                        <h2 class="section_tit lg:w-2/3 text-white heading1">Expert Renovation & Improvement Services</h2>
                        <p class="section_desc mt-4 text-white body2" style="--i: 1">Skilled handymen delivering quality craftsmanship
                            for all your home upgrades.</p>
                        <ul class="slider_btn_group flex flex-wrap gap-4 mt-9">
                            <li class="slider_btn_item" style="--i: 2">
                                <a href="our-services.html" class="slider_btn btn btn_icon">
                                    <span>Book a Service</span>
                                    <span class="ph ph-arrow-up-right text-2xl"></span>
                                </a>
                            </li>
                            <li class="slider_btn_item" style="--i: 3">
                                <a href="contact.html" class="slider_btn btn btn_icon bg-white">
                                    <span>Get A quote</span>
                                    <span class="ph ph-arrow-up-right text-2xl"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="swiper-slide flex items-center justify-center relative">
                    <div class="slider_bg absolute top-0 left-0 w-full h-full pointer-events-none">
                        <img src="./assets/images/slider/slider1_3.jpg" alt="Comprehensive Maintenance Services"
                            class="h-full object-cover">
                    </div>
                    <div class="container relative max-sm:-mt-10">
                        <h2 class="section_tit lg:w-2/3 text-white heading1">Comprehensive Maintenance Services</h2>
                        <p class="section_desc mt-4 text-white body2" style="--i: 1">From electrical fixes to plumbing repairs, we
                            handle all your home’s needs efficiently and affordably.</p>
                        <ul class="slider_btn_group flex flex-wrap gap-4 mt-9">
                            <li class="slider_btn_item" style="--i: 2">
                                <a href="our-services.html" class="slider_btn btn btn_icon">
                                    <span>Book a Service</span>
                                    <span class="ph ph-arrow-up-right text-2xl"></span>
                                </a>
                            </li>
                            <li class="slider_btn_item" style="--i: 3">
                                <a href="contact.html" class="slider_btn btn btn_icon bg-white">
                                    <span>Get A quote</span>
                                    <span class="ph ph-arrow-up-right text-2xl"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="swiper-pagination pagination-white"></div>
        </div>
        <button
            class="btn_next flex items-center justify-center absolute top-1/2 min-[1600px]:right-10 right-[16px] z-[2] -translate-y-1/2 w-13 h-[4.75rem] bg-white min-[1600px]:bg-opacity-10 bg-opacity-30 text-white duration-300 lg:hover:bg-opacity-80 lg:hover:text-black">
            <span class="ph ph-caret-right text-xl"></span>
            <span class="blind">button next</span>
        </button>
    </section>
    <!-- CTA -->
    <section class="section cta py-10 bg-dark">
        <div class="container">
            <h2 class="blind text-xs">CTA</h2>
            <form class="cta_form flex gap-5">
                <div class="cta_form_ipt grid xl:grid-cols-3 sm:grid-cols-2 gap-5 w-full">
                    <div class="cta_form_group animate" style="--i: 1">
                        <input type="text" class="cta_form_control w-full h-14 px-4 bg-white" placeholder="Your Name"
                            required>
                    </div>
                    <div class="cta_form_group animate" style="--i: 2">
                        <input type="text" class="cta_form_control w-full h-14 px-4 bg-white" placeholder="Phone Number"
                            required>
                    </div>
                    <div class="cta_form_group animate" style="--i: 3">
                        <input type="text" class="cta_form_control w-full h-14 px-4 bg-white" placeholder="Message"
                            required>
                    </div>
                    <div class="cta_form_group animate xl:hidden" style="--i: 4">
                        <button type="submit" class="cta_btn btn w-full">Make An Appointment</button>
                    </div>
                </div>
                <button type="submit" class="cta_btn btn flex-shrink-0 hover:bg-white max-xl:hidden animate" style="--i: 5">Make An
                    Appointment</button>
            </form>
        </div>
    </section>
    <!-- ABOUT -->
    <section class="section about sm:py-25 py-15">
        <div class="container flex max-lg:flex-col items-center xl:gap-20 gap-10">
            <div class="about_img flex-shrink-0 lg:w-[48%] sm:w-2/3 w-full animate animate_right">
                <img src="./assets/images/components/about1.jpg"
                    alt="Reliable Home Repairs And Renovations">
            </div>
            <div class="about_content">
                <span class="section_tag tag animate">about us</span>
                <h3 class="section_tit mt-4 heading3 animate">Reliable Home Repairs And Renovations</h3>
                <p class="section_desc lg:mt-5 mt-3 body2 text-variant1 animate">Expert services you can trust for every repair and
                    renovation project, ensuring lasting results, exceptional quality, and peace of mind for you and
                    your home, every time we visit, no matter the size or complexity of the job.</p>
                <ul class="about_benefit flex max-sm:flex-col gap-7.5 gap-y-5 mt-10">
                    <li class="animate" style="--i: 1">
                        <span class="ph ph-trophy text-6xl"></span>
                        <strong class="block mt-5 heading6">Experienced, Skilled Team</strong>
                        <p class="mt-3 text-variant1">Our experienced team provides expert solutions tailored to your
                            renovation.</p>
                    </li>
                    <li class="animate" style="--i: 2">
                        <span class="ph ph-headset text-6xl"></span>
                        <strong class="block mt-5 heading6">Support 24/7</strong>
                        <p class="mt-3 text-variant1">Emergency services are available 24/7 to quickly respond when
                            urgent repairs arise.</p>
                    </li>
                </ul>
                <ul class="about_btn flex flex-wrap gap-8 gap-y-6 mt-10">
                    <li class="animate" style="--i: 1">
                        <a href="about-us.html" class="btn">About Us</a>
                    </li>
                    <li class="animate" style="--i: 2">
                        <a href="tel:+1555678888" class="flex items-center gap-3 group">
                            <span
                                class="flex items-center justify-center w-14 h-14 border-2 border-orange duration-400 group-hover:bg-orange group-hover:text-white">
                                <span class="ph ph-phone-call text-3xl"></span>
                            </span>
                            <div>
                                <span class="text-variant1">Call Us Now:</span>
                                <strong class="heading6 block mt-0.5">1-555-678-888</strong>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- SERVICES -->
    <section class="section services sm:py-25 py-15 bg-surface">
        <div class="container flex flex-col items-center">
            <span class="section_tag tag animate">What We Do?</span>
            <h3 class="section_title heading3 mt-4 text-center animate">Our Service That We Offer</h3>
            <p class="section_desc lg:mt-5 mt-3 body2 text-variant1 text-center animate">We pride ourselves on delivering consistent,
                high-quality services that you can depend on. Whether it’s a small fix or a large-scale renovation</p>
            <ul class="services_list grid xl:grid-cols-3 md:grid-cols-2 lg:gap-7.5 gap-6 lg:mt-12 mt-9">
                <li class="services_item animate" style="--i: 1">
                    <a href="services-detail.html" class="services_link flex h-full bg-white group">
                        <span
                            class="services_icon flex items-center justify-center flex-shrink-0 w-[5.75rem] h-[5.75rem] border-r-[0.75rem] border-b-[0.75rem] border-surface bg-white duration-500 group-hover:bg-black group-hover:text-white">
                            <span class="icon-wrench-house text-5xl"></span>
                        </span>
                        <div class="services_info p-7">
                            <strong class="services_name heading5">Renovation Services</strong>
                            <p class="services_desc mt-4 text-variant1">Transform your home with our professional
                                renovation services. Whether it’s a kitchen remodel, bathroom upgrade, or a complete
                                home makeover, we bring creativity and expertise to every project.</p>
                            <span class="flex items-center gap-2 mt-4 duration-300 group-hover:text-orange">
                                <span class="border-b-2 underline-offset-2 txt-button">Learn More</span>
                                <span class="ph-bold ph-arrow-up-right text-2xl"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="services_item animate" style="--i: 2">
                    <a href="services-detail.html" class="services_link flex h-full bg-white group">
                        <span
                            class="services_icon flex items-center justify-center flex-shrink-0 w-[5.75rem] h-[5.75rem] border-r-[0.75rem] border-b-[0.75rem] border-surface bg-white duration-500 group-hover:bg-black group-hover:text-white">
                            <span class="icon-electrical text-5xl"></span>
                        </span>
                        <div class="services_info p-7">
                            <strong class="services_name heading5">Electrical Services</strong>
                            <p class="services_desc mt-4 text-variant1">Our licensed electricians provide safe, reliable
                                electrical services, including installations, repairs, upgrades, and full system
                                troubleshooting to ensure your home’s electrical safety.</p>
                            <span class="flex items-center gap-2 mt-4 duration-300 group-hover:text-orange">
                                <span class="border-b-2 underline-offset-2 txt-button">Learn More</span>
                                <span class="ph-bold ph-arrow-up-right text-2xl"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="services_item animate" style="--i: 3">
                    <a href="services-detail.html" class="services_link flex h-full bg-white group">
                        <span
                            class="services_icon flex items-center justify-center flex-shrink-0 w-[5.75rem] h-[5.75rem] border-r-[0.75rem] border-b-[0.75rem] border-surface bg-white duration-500 group-hover:bg-black group-hover:text-white">
                            <span class="icon-pipe text-5xl"></span>
                        </span>
                        <div class="services_info p-7">
                            <strong class="services_name heading5">Plumbing Services</strong>
                            <p class="services_desc mt-4 text-variant1">From fixing leaks to installing new fixtures,
                                our experienced plumbers handle all types of plumbing repairs and installations. We
                                ensure efficient and long-lasting solutions for your home.</p>
                            <span class="flex items-center gap-2 mt-4 duration-300 group-hover:text-orange">
                                <span class="border-b-2 underline-offset-2 txt-button">Learn More</span>
                                <span class="ph-bold ph-arrow-up-right text-2xl"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="services_item animate" style="--i: 4">
                    <a href="services-detail.html" class="services_link flex h-full bg-white group">
                        <span
                            class="services_icon flex items-center justify-center flex-shrink-0 w-[5.75rem] h-[5.75rem] border-r-[0.75rem] border-b-[0.75rem] border-surface bg-white duration-500 group-hover:bg-black group-hover:text-white">
                            <span class="icon-air text-5xl"></span>
                        </span>
                        <div class="services_info p-7">
                            <strong class="services_name heading5">HVAC Services</strong>
                            <p class="services_desc mt-4 text-variant1">Stay comfortable year-round with our HVAC
                                installation, repair, and maintenance. We provide energy-efficient solutions to keep
                                your home cool in summer, warm in winter.</p>
                            <span class="flex items-center gap-2 mt-4 duration-300 group-hover:text-orange">
                                <span class="border-b-2 underline-offset-2 txt-button">Learn More</span>
                                <span class="ph-bold ph-arrow-up-right text-2xl"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="services_item animate" style="--i: 5">
                    <a href="services-detail.html" class="services_link flex h-full bg-white group">
                        <span
                            class="services_icon flex items-center justify-center flex-shrink-0 w-[5.75rem] h-[5.75rem] border-r-[0.75rem] border-b-[0.75rem] border-surface bg-white duration-500 group-hover:bg-black group-hover:text-white">
                            <span class="icon-paint text-5xl"></span>
                        </span>
                        <div class="services_info p-7">
                            <strong class="services_name heading5">Painting and Drywall</strong>
                            <p class="services_desc mt-4 text-variant1">Refresh your home with our professional painting
                                and drywall services, delivering high-quality finishes for both interiors and exteriors,
                                tailored to your design preferences and style.</p>
                            <span class="flex items-center gap-2 mt-4 duration-300 group-hover:text-orange">
                                <span class="border-b-2 underline-offset-2 txt-button">Learn More</span>
                                <span class="ph-bold ph-arrow-up-right text-2xl"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="services_item animate" style="--i: 6">
                    <a href="services-detail.html" class="services_link flex h-full bg-white group">
                        <span
                            class="services_icon flex items-center justify-center flex-shrink-0 w-[5.75rem] h-[5.75rem] border-r-[0.75rem] border-b-[0.75rem] border-surface bg-white duration-500 group-hover:bg-black group-hover:text-white">
                            <span class="icon-roof text-5xl"></span>
                        </span>
                        <div class="services_info p-7">
                            <strong class="services_name heading5">Roofing Services</strong>
                            <p class="services_desc mt-4 text-variant1">Enhance your home’s protection and curb appeal
                                with our expert roofing services, including new installations, leak repairs,
                                replacements, and inspections to keep your roof in top condition.</p>
                            <span class="flex items-center gap-2 mt-4 duration-300 group-hover:text-orange">
                                <span class="border-b-2 underline-offset-2 txt-button">Learn More</span>
                                <span class="ph-bold ph-arrow-up-right text-2xl"></span>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- PROCESS -->
    <section class="section process style-one sm:py-25 py-15">
        <div class="container flex max-lg:flex-col lg:items-center xl:gap-20 gap-10 relative">
            <div class="process_bg absolute top-0 left-32 h-full pointer-events-none max-lg:hidden">
                <img src="./assets/images/components/bg_process1.png" alt="bg_process1" class="h-full">
            </div>
            <div class="flex-shrink-0 lg:w-5/12">
                <div class="process_img flex items-center justify-center relative animate">
                    <button
                        class="btn_play js_btn_open_popup inline-flex items-center justify-center absolute w-18 h-18 rounded-full bg-white duration-400 hover:bg-orange hover:text-white" data-popup="popup_video">
                        <span class="ph-fill ph-play text-3xl"></span>
                        <span class="blind">button play video</span>
                    </button>
                    <img src="./assets/images/components/process1.jpg" alt="How We Work?">
                </div>
                <span class="section_tag tag block w-fit mt-10 animate">Our Process</span>
                <h3 class="section_title heading3 mt-4 animate">How We Work?</h3>
                <p class="section_desc lg:mt-5 mt-3 body2 text-variant1 animate">A streamlined process designed to bring you the
                    highest quality renovation, from start to finish.</p>
                <div class="btn_area animate">
                    <a href="contact.html" class="btn lg:mt-8 mt-6">Contact Us</a>
                </div>
            </div>
            <ul class="process_list flex flex-col gap-12 relative lg:w-1/2">
                <li class="process_line">
                    <span class="process_line_progress"></span>
                </li>
                <li class="process_item flex gap-7 group animate">
                    <span
                        class="process_icon flex flex-shrink-0 items-center justify-center relative sm:w-25 w-20 sm:h-25 h-20 border border-outline rounded-full bg-white duration-400 group-hover:bg-black group-hover:text-white">
                        <span class="icon-consultation sm:text-5xl text-4xl"></span>
                        <span
                            class="process_ordinal flex items-center justify-center absolute sm:top-0 -top-2 sm:right-0 -right-2 w-[26px] h-[26px] border-[3px] border-white rounded-full bg-orange text-white txt-button">1</span>
                    </span>
                    <div class="process_info pb-12 border-b border-outline">
                        <strong class="heading5">Consultation & Planning</strong>
                        <p class="mt-3 text-variant1">We discuss your needs and budget, creating a detailed plan to
                            ensure everything is ready before starting.</p>
                    </div>
                </li>
                <li class="process_item flex gap-7 group animate">
                    <span
                        class="process_icon flex flex-shrink-0 items-center justify-center relative sm:w-25 w-20 sm:h-25 h-20 border border-outline rounded-full bg-white duration-400 group-hover:bg-black group-hover:text-white">
                        <span class="icon-design sm:text-5xl text-4xl"></span>
                        <span
                            class="process_ordinal flex items-center justify-center absolute sm:top-0 -top-2 sm:right-0 -right-2 w-[26px] h-[26px] border-[3px] border-white rounded-full bg-orange text-white txt-button">2</span>
                    </span>
                    <div class="process_info pb-12 border-b border-outline">
                        <strong class="heading5">Design & Approval</strong>
                        <p class="mt-3 text-variant1">We create a custom design based on your ideas, reviewing it
                            together to make sure it meets your expectations.</p>
                    </div>
                </li>
                <li class="process_item flex gap-7 group animate">
                    <span
                        class="process_icon flex flex-shrink-0 items-center justify-center relative sm:w-25 w-20 sm:h-25 h-20 border border-outline rounded-full bg-white duration-400 group-hover:bg-black group-hover:text-white">
                        <span class="icon-wrench sm:text-5xl text-4xl"></span>
                        <span
                            class="process_ordinal flex items-center justify-center absolute sm:top-0 -top-2 sm:right-0 -right-2 w-[26px] h-[26px] border-[3px] border-white rounded-full bg-orange text-white txt-button">3</span>
                    </span>
                    <div class="process_info pb-12 border-b border-outline">
                        <strong class="heading5">Construction & Execution</strong>
                        <p class="mt-3 text-variant1">Our team begins the renovation, managing each phase carefully &
                            keeping you updated throughout the process.</p>
                    </div>
                </li>
                <li class="process_item flex gap-7 group animate">
                    <span
                        class="process_icon flex flex-shrink-0 items-center justify-center relative sm:w-25 w-20 sm:h-25 h-20 border border-outline rounded-full bg-white duration-400 group-hover:bg-black group-hover:text-white">
                        <span class="icon-inspection sm:text-5xl text-4xl"></span>
                        <span
                            class="process_ordinal flex items-center justify-center absolute sm:top-0 -top-2 sm:right-0 -right-2 w-[26px] h-[26px] border-[3px] border-white rounded-full bg-orange text-white txt-button">4</span>
                    </span>
                    <div class="process_info">
                        <strong class="heading5">Inspection & Handover</strong>
                        <p class="mt-3 text-variant1">After completion, we inspect the work, and once you approve, we
                            hand over your beautifully renovated space.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- COUNTER -->
    <section class="section counter">
        <div class="counter_list sm:pt-25 pt-15 sm:pb-[23rem] pb-60 bg-dark">
            <ul class="container flex max-xl:flex-wrap items-center justify-between gap-y-10">
                <li class="counter_item flex flex-col items-center gap-4 max-xl:w-1/2 max-sm:w-full text-white animate" style="--i: 1">
                    <h2 class="heading1"><span id="counter_number1" class="counter_number">20</span>k+</h2>
                    <strong class="heading6">Services Completed</strong>
                </li>
                <li class="line max-xl:hidden flex-shrink-0 w-px h-32 bg-white bg-opacity-20"></li>
                <li class="counter_item flex flex-col items-center gap-4 max-xl:w-1/2 max-sm:w-full text-white animate" style="--i: 2">
                    <h2 class="heading1"><span id="counter_number2" class="counter_number">4.8</span>/5</h2>
                    <strong class="heading6">By 1,200 customers</strong>
                </li>
                <li class="line max-xl:hidden flex-shrink-0 w-px h-32 bg-white bg-opacity-20"></li>
                <li class="counter_item flex flex-col items-center gap-4 max-xl:w-1/2 max-sm:w-full text-white animate" style="--i: 3">
                    <h2 class="heading1"><span id="counter_number3" class="counter_number">10</span>k+</h2>
                    <strong class="heading6">Satisfied Customers</strong>
                </li>
                <li class="line max-xl:hidden flex-shrink-0 w-px h-32 bg-white bg-opacity-20"></li>
                <li class="counter_item flex flex-col items-center gap-4 max-xl:w-1/2 max-sm:w-full text-white animate" style="--i: 4">
                    <h2 class="heading1"><span id="counter_number4" class="counter_number">10</span>+</h2>
                    <strong class="heading6">Years Of Experience</strong>
                </li>
            </ul>
        </div>
        <div class="counter_banner sm:-mt-72 -mt-44">
            <div class="container">
                <div class="flex max-md:flex-col items-center md:justify-end relative bg-white">
                    <div
                        class="bg_img flex-shrink-0 md:absolute top-0 left-0 md:w-1/2 w-full md:h-full max-md:relative">
                        <img src="./assets/images/components/counter1.jpg" class="h-full object-cover animate animate_left"
                            alt="Book Our Expert Handyman Today!">
                        <div class="banner_area animate animate_right" style="--i: 1">
                            <a href="tel:+1555678888"
                                class="banner_link flex items-center gap-4 absolute right-0 bottom-0 p-5 bg-dark text-white duration-400 group hover:bg-orange">
                                <span
                                    class="icon inline-flex items-center justify-center sm:w-20 w-15 sm:h-20 h-15 rounded-full bg-orange duration-400 group-hover:bg-white group-hover:text-orange">
                                    <span class="ph-fill ph-phone-call sm:text-5xl text-3xl"></span>
                                </span>
                                <span>
                                    <span class="body2">Call Us Now:</span>
                                    <strong class="block heading4 mt-1 max-md:text-2xl">1-555-678-888</strong>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="counter_content flex flex-col justify-center md:w-1/2 h-full xl:p-20 md:p-9 max-md:p-8 border border-outline">
                        <span class="section_tag tag w-fit animate">Get A Quote</span>
                        <h3 class="section_tit mt-4 heading3 animate">Book Our Expert Handyman Today!</h3>
                        <p class="section_desc lg:mt-5 mt-3 body2 text-variant1 animate">From plumbing to electrical and HVAC, our
                            skilled experts are ready to handle all your home repair & maintenance needs. Schedule your
                            service today!</p>
                        <div class="btn_area animate">
                            <a href="contact.html" class="btn w-fit lg:mt-8 mt-6">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHY CHOOSE US -->
    <section class="section choose_us sm:pt-25 pt-15">
        <div class="container flex max-xl:flex-col gap-y-10">
            <div class="choose_us_content w-full xl:pr-20">
                <span class="section_tag tag animate">WHY CHOOSE US</span>
                <h3 class="section_tit mt-4 heading3 animate">Expert HVAC Solutions You Can Rely On for Year-Round Comfort</h3>
                <p class="section_desc lg:mt-5 mt-3 body2 text-variant1 animate">Our skilled team provides top-notch air conditioning
                    services, from installation to repair and maintenance, ensuring your system runs efficiently for
                    year-round comfort.</p>
                <div class="btn_area animate">
                    <a href="about-us.html" class="btn w-fit lg:mt-8 mt-6">about us</a>
                </div>
            </div>
            <div class="choose_us_list flex-shrink-0 xl:w-1/2 w-full">
                <div class="choose_us_swiper swiper w-full h-full">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <div class="choose_us_item p-8 border border-outline animate" style="--i: 1">
                                <span class="icon-pencil text-6xl"></span>
                                <strong class="block mt-6 heading5">Customized Solutions</strong>
                                <p class="mt-3 text-variant1">We tailor our air conditioning services to fit your specific needs and
                                    preferences, ensuring optimal performance and comfort in your home for years to come.</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="choose_us_item p-8 border border-outline animate" style="--i: 2">
                                <span class="icon-timer text-6xl"></span>
                                <strong class="block mt-6 heading5">Timely Response</strong>
                                <p class="mt-3 text-variant1">Our team is committed to prompt service, guaranteeing quick responses
                                    to your air conditioning issues, minimizing downtime, and restoring your comfort efficiently.
                                </p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="choose_us_item p-8 border border-outline animate" style="--i: 3">
                                <span class="icon-reward text-6xl"></span>
                                <strong class="block mt-6 heading5">Quality Products</strong>
                                <p class="mt-3 text-variant1">We use only high-quality, reliable products and equipment to ensure
                                    that your air conditioning system operates efficiently and lasts longer.</p>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="choose_us_item p-8 border border-outline animate" style="--i: 4">
                                <span class="icon-hand-coin text-6xl"></span>
                                <strong class="block mt-6 heading5">Transparent Pricing</strong>
                                <p class="mt-3 text-variant1">We provide straightforward, upfront pricing with no hidden fees, so
                                    you can make informed decisions about your air conditioning services.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER -->
    <section class="section banner sm:py-16 py-10">
        <h3 class="blind">Banner</h3>
        <div class="banner_swiper swiper-container flex items-center whitespace-nowrap">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <strong class="heading2 lg:px-15 sm:px-10 px-5">Leak Detection</strong>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/logo_orange.png" class="max-w-8" alt="logo_orange">
                </div>
                <div class="swiper-slide">
                    <strong class="heading2 lg:px-15 sm:px-10 px-5">Drain Cleaning</strong>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/logo_orange.png" class="max-w-8" alt="logo_orange">
                </div>
                <div class="swiper-slide">
                    <strong class="heading2 lg:px-15 sm:px-10 px-5">Pipe Installation</strong>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/logo_orange.png" class="max-w-8" alt="logo_orange">
                </div>
                <div class="swiper-slide">
                    <strong class="heading2 lg:px-15 sm:px-10 px-5">Heater Installation</strong>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/logo_orange.png" class="max-w-8" alt="logo_orange">
                </div>
                <div class="swiper-slide">
                    <strong class="heading2 lg:px-15 sm:px-10 px-5">Leak Detection</strong>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/logo_orange.png" class="max-w-8" alt="logo_orange">
                </div>
                <div class="swiper-slide">
                    <strong class="heading2 lg:px-15 sm:px-10 px-5">Drain Cleaning</strong>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/logo_orange.png" class="max-w-8" alt="logo_orange">
                </div>
                <div class="swiper-slide">
                    <strong class="heading2 lg:px-15 sm:px-10 px-5">Pipe Installation</strong>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/logo_orange.png" class="max-w-8" alt="logo_orange">
                </div>
                <div class="swiper-slide">
                    <strong class="heading2 lg:px-15 sm:px-10 px-5">Heater Installation</strong>
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/logo_orange.png" class="max-w-8" alt="logo_orange">
                </div>
            </div>
        </div>
    </section>



<!-- OUR PROJECTS -->
<section class="section projects sm:py-25 py-15 bg-dark">
    <div class="container flex flex-col items-center">
        <span class="section_tag tag bg-white animate">Our Projects</span>
        <h3 class="section_tit mt-4 heading3 text-white animate">Amazing Work Results</h3>
        <p class="section_desc lg:mt-5 mt-3 body2 text-white text-center animate">
            We pride ourselves on delivering consistent, high-quality services that you can depend on. <br class="max-md:hidden">
            Whether it’s a small fix or a large-scale renovation
        </p>
        <ul class="projects_list grid sm:grid-cols-2 gap-5 lg:mt-12 mt-9">
            <li class="projects_item animate" style="--i: 1">
                <img src="{{ asset('assets/images/projects/1-1.jpg') }}" alt="projects 1">
                <figure class="projects_figure">
                    <button class="comparison_btn"></button>
                    <div class="projects_divisor"></div>
                </figure>
                <input class="comparison_ipt" type="range" min="0" max="100" value="50">
            </li>
            <li class="projects_item animate" style="--i: 2">
                <img src="{{ asset('assets/images/projects/1-2.jpg') }}" alt="projects 2">
                <figure class="projects_figure">
                    <button class="comparison_btn"></button>
                    <div class="projects_divisor"></div>
                </figure>
                <input class="comparison_ipt" type="range" min="0" max="100" value="50">
            </li>
            <li class="projects_item animate" style="--i: 3">
                <img src="{{ asset('assets/images/projects/3-1.jpg') }}" alt="projects 3">
                <figure class="projects_figure">
                    <button class="comparison_btn"></button>
                    <div class="projects_divisor"></div>
                </figure>
                <input class="comparison_ipt" type="range" min="0" max="100" value="50">
            </li>
            <li class="projects_item animate" style="--i: 4">
                <img src="{{ asset('assets/images/projects/4-1.jpg') }}" alt="projects 4">
                <figure class="projects_figure">
                    <button class="comparison_btn"></button>
                    <div class="projects_divisor"></div>
                </figure>
                <input class="comparison_ipt" type="range" min="0" max="100" value="50">
            </li>
        </ul>
        <a href="our-projects1.html" class="inline-flex items-center gap-2 lg:mt-12 mt-9 mx-auto text-white animate" style="--i: 5">
            <span class="has_line line_white animate_width txt-button">View All Projects</span>
            <span class="ph-bold ph-arrow-up-right text-2xl"></span>
        </a>
    </div>
</section>






    <!-- TESTIMONIALS -->
    <section class="section testimonials style-filter sm:py-25 py-15">
        <div class="container flex max-lg:flex-col items-center gap-y-8">
            <ul class="testimonials_thumb flex-shrink-0 relative lg:w-5/12 sm:w-2/3 w-full aspect-square animate animate_right">
                <li class="testimonials_img invisible overflow-hidden absolute top-0 left-0 w-full h-full opacity-0 duration-500"
                    data-testimonials="1">
                    <img src="./assets/images/testimonial/1.jpg" class="h-full object-cover" alt="testimonial 1">
                </li>
                <li class="testimonials_img invisible overflow-hidden absolute top-0 left-0 w-full h-full opacity-0 duration-500"
                    data-testimonials="2">
                    <img src="./assets/images/testimonial/2.jpg" class="h-full object-cover" alt="testimonial 2">
                </li>
                <li class="testimonials_img invisible overflow-hidden absolute top-0 left-0 w-full h-full opacity-0 duration-500"
                    data-testimonials="3">
                    <img src="./assets/images/testimonial/3.jpg" class="h-full object-cover" alt="testimonial 3">
                </li>
            </ul>
            <div class="testimonials_content flex flex-col justify-center overflow-hidden w-full xl:pl-30 lg:pl-14 animate animate_left">
                <span class="section_tag tag w-fit">Testimonials</span>
                <h3 class="section_tit mt-4 heading3">What our clients say?</h3>
                <p class="section_desc lg:mt-5 mt-3 body2 text-variant1">Hear from our satisfied clients who trust us for
                    top-quality service.</p>
                <div class="testimonials_swiper swiper w-full lg:mt-12 mt-9">
                    <ul class="swiper-wrapper">
                        <li class="testimonials_item swiper-slide" data-testimonials="1">
                            <ul class="rating flex">
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl text-variant2"></li>
                            </ul>
                            <p class="testimonials_desc mt-6 text-2xl line-clamp-4">“Excellent electrical work done at
                                our home. The technicians were thorough, punctual, and left the place spotless. The
                                team’s attention to detail was truly impressive. The
                                plumbers arrived on time, diagnosed the issue quickly”</p>
                            <div class="flex flex-wrap items-end justify-between gap-5 mt-4">
                                <div class="testimonials_author">
                                    <strong class="testimonials_name heading6">Guy Hawkins</strong>
                                    <span class="testimonials_address text-variant1 block mt-1">New York, NY.</span>
                                </div>
                                <a href="our-testimonials.html"
                                    class="inline-flex items-center gap-2 duration-300 hover:text-orange">
                                    <span class="border-b-2 underline-offset-2 txt-button">Read More Stories</span>
                                    <span class="ph-bold ph-arrow-right text-xl"></span>
                                </a>
                            </div>
                        </li>
                        <li class="testimonials_item swiper-slide" data-testimonials="2">
                            <ul class="rating flex">
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl text-variant2"></li>
                            </ul>
                            <p class="testimonials_desc mt-6 text-2xl line-clamp-4">“Outstanding plumbing service! The
                                plumbers arrived on time, diagnosed the issue quickly, and provided a clear explanation
                                of the work needed. The entire experience was professional and hassle-free, and our
                                plumbing has been perfect ever since.”</p>
                            <div class="flex flex-wrap items-end justify-between gap-5 mt-4">
                                <div class="testimonials_author">
                                    <strong class="testimonials_name heading6">Leonardo Capio</strong>
                                    <span class="testimonials_address text-variant1 block mt-1">Madrid, Spain</span>
                                </div>
                                <a href="our-testimonials.html"
                                    class="inline-flex items-center gap-2 duration-300 hover:text-orange">
                                    <span class="border-b-2 underline-offset-2 txt-button">Read More Stories</span>
                                    <span class="ph-bold ph-arrow-right text-xl"></span>
                                </a>
                            </div>
                        </li>
                        <li class="testimonials_item swiper-slide" data-testimonials="3">
                            <ul class="rating flex">
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl"></li>
                                <li class="ph-fill ph-star text-2xl text-variant2"></li>
                            </ul>
                            <p class="testimonials_desc mt-6 text-2xl line-clamp-4">“The HVAC repair team did an amazing
                                job! They were efficient, courteous, and ensured everything was working perfectly before
                                leaving. It’s refreshing to see such dedication to quality and customer satisfaction.”
                            </p>
                            <div class="flex flex-wrap items-end justify-between gap-5 mt-4">
                                <div class="testimonials_author">
                                    <strong class="testimonials_name heading6">Peter Parker</strong>
                                    <span class="testimonials_address text-variant1 block mt-1">California, USA</span>
                                </div>
                                <a href="our-testimonials.html"
                                    class="inline-flex items-center gap-2 duration-300 hover:text-orange">
                                    <span class="border-b-2 underline-offset-2 txt-button">Read More Stories</span>
                                    <span class="ph-bold ph-arrow-right text-xl"></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="swiper-pagination relative mt-6 text-left"></div>
            </div>
        </div>
    </section>
    <!-- PRICING PLAN -->
    <section class="section pricing sm:py-25 py-15 bg-surface">
        <div class="container flex flex-col items-center">
            <span class="section_tag tag animate">Pricing Plan</span>
            <h3 class="section_tit mt-4 heading3 text-center animate">Choose the Right Plan for Your Home</h3>
            <p class="section_desc lg:mt-5 mt-3 body2 text-variant1 text-center animate">Affordable pricing plans tailored to your home
                repair needs, from quick fixes to large-scale renovations.</p>
            <ul class="pricing_list grid xl:grid-cols-3 gap-7.5 w-full lg:mt-12 mt-9">
                <li class="pricing_item animate" style="--i: 1">
                    <div class="relative w-full p-6 border-2 border-white bg-white duration-300 shadow-sm hover:border-orange">
                        <strong class="pricing_type heading5">Basic Plan</strong>
                        <h3 class="flex items-end mt-4">
                            <span class="heading3">$25.00</span>
                            <span class="text-variant1 font-normal">/ per session</span>
                        </h3>
                        <p class="pricing_desc mt-4 text-variant1">Perfect for small fixes around the house, offering
                            reliable solutions to keep your home in shape.</p>
                        <ul class="feature_list flex flex-col gap-3 mt-6 p-6 bg-orange bg-opacity-5">
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Minor Repairs & Adjustments</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Standard Documentation</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Basic Floor Plan Design (if needed)</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Consistent Brand Standards</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Quality Check on Completed Work</span>
                            </li>
                        </ul>
                        <a href="our-pricing.html" class="btn bg-black w-full text-center mt-6">Get This Package</a>
                    </div>
                </li>
                <li class="pricing_item animate" style="--i: 2">
                    <div class="relative w-full p-6 border-2 border-orange bg-white duration-300 shadow-sm">
                        <span class="tag tag_fill absolute top-0 right-0">Popular</span>
                        <strong class="pricing_type heading5">Standard Plan</strong>
                        <h3 class="flex items-end mt-4">
                            <span class="heading3">$50.00</span>
                            <span class="text-variant1 font-normal">/ per session</span>
                        </h3>
                        <p class="pricing_desc mt-4 text-variant1">Ideal for mid-sized projects requiring a higher level of
                            service and maintenance.</p>
                        <ul class="feature_list flex flex-col gap-3 mt-6 p-6 bg-orange bg-opacity-5">
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Repairs, Installations & Maintenance</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Complete Documentation & Reports</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Enhanced Floor Plan Design</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Consistent Brand Presentation</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Priority Customer Support</span>
                            </li>
                        </ul>
                        <a href="our-pricing.html" class="btn w-full text-center mt-6">Get This Package</a>
                    </div>
                </li>
                <li class="pricing_item animate" style="--i: 3">
                    <div class="relative w-full p-6 border-2 border-white bg-white duration-300 shadow-sm hover:border-orange">
                        <strong class="pricing_type heading5">Premium Plan</strong>
                        <h3 class="flex items-end mt-4">
                            <span class="heading3">$65.00</span>
                            <span class="text-variant1 font-normal">/ per session</span>
                        </h3>
                        <p class="pricing_desc mt-4 text-variant1">Best for large-scale projects or homeowners seeking
                            top-tier service and full support.</p>
                        <ul class="feature_list flex flex-col gap-3 mt-6 p-6 bg-orange bg-opacity-5">
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Full Home Renovations Installations</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Detailed Documentation & Custom Reports</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Customized Floor Plan Design</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">Brand Consistency Across All Services</span>
                            </li>
                            <li class="feature_item flex gap-2">
                                <span class="ph ph-check flex-shrink-0 text-2xl text-orange"></span>
                                <span class="pricing_feature">24/7 Dedicated Customer Support</span>
                            </li>
                        </ul>
                        <a href="our-pricing.html" class="btn bg-black w-full text-center mt-6">Get This Package</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- OUR TEAMS -->
    <section class="section team sm:py-25 py-15 bg-dark">
        <div class="container">
            <div class="heading flex max-lg:flex-col justify-center gap-y-5">
                <div class="lg:w-1/2 animate animate_right">
                    <span class="section_tag tag bg-white">Our teams</span>
                    <h3 class="section_tit mt-4 heading3 text-white">Meet the Our Experts</h3>
                </div>
                <div class="lg:w-1/2 animate animate_left">
                    <p class="section_desc body2 text-white">Our team of skilled professionals brings years of
                        experience, ensuring top-quality service and attention to detail in every task.</p>
                    <a href="our-services.html"
                        class="inline-flex items-center gap-2 mt-3 mx-auto text-white">
                        <span class="has_line line_white animate_width txt-button">View All Services</span>
                        <span class="ph-bold ph-arrow-up-right text-2xl"></span>
                    </a>
                </div>
            </div>
            <div class="team_swiper swiper">
                <ul class="team_list swiper-wrapper lg:mt-12 mt-9">
                    <li class="swiper-slide">
                        <div class="team_item flex max-xs:flex-col gap-7 gap-y-5 p-6 bg-white group animate" style="--i: 1">
                            <div class="team_img flex-shrink-0 overflow-hidden xs:w-[45%]">
                                <img src="./assets/images/team/team1.jpg" class="duration-400 group-hover:scale-110" alt="John Michaels">
                            </div>
                            <div class="team_info flex flex-col justify-between gap-4">
                                <div>
                                    <strong class="team_name line-clamp-2 heading5">John Michaels</strong>
                                    <span class="team_position mt-3 text-variant1 line-clamp-2">Senior Project Manager</span>
                                </div>
                                <ul class="team_socials flex flex-wrap gap-2">
                                    <li>
                                        <a href="https://www.facebook.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-facebook-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-x-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-linkedin-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-instagram-logo text-2xl"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="team_item flex max-xs:flex-col gap-7 gap-y-5 p-6 bg-white group animate" style="--i: 2">
                            <div class="team_img flex-shrink-0 overflow-hidden xs:w-[45%]">
                                <img src="./assets/images/team/team2.jpg" class="duration-400 group-hover:scale-110" alt="Samuel Thompson">
                            </div>
                            <div class="team_info flex flex-col justify-between gap-4">
                                <div>
                                    <strong class="team_name line-clamp-2 heading5">Samuel Thompson</strong>
                                    <span class="team_position mt-3 text-variant1 line-clamp-2">Lead HVAC Technician</span>
                                </div>
                                <ul class="team_socials flex flex-wrap gap-2">
                                    <li>
                                        <a href="https://www.facebook.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-facebook-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-x-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-linkedin-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-instagram-logo text-2xl"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="team_item flex max-xs:flex-col gap-7 gap-y-5 p-6 bg-white group animate" style="--i: 3">
                            <div class="team_img flex-shrink-0 overflow-hidden xs:w-[45%]">
                                <img src="./assets/images/team/team3.jpg" class="duration-400 group-hover:scale-110" alt="Emily Carter">
                            </div>
                            <div class="team_info flex flex-col justify-between gap-4">
                                <div>
                                    <strong class="team_name line-clamp-2 heading5">Emily Carter</strong>
                                    <span class="team_position mt-3 text-variant1 line-clamp-2">Customer Support Manager</span>
                                </div>
                                <ul class="team_socials flex flex-wrap gap-2">
                                    <li>
                                        <a href="https://www.facebook.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-facebook-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-x-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-linkedin-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-instagram-logo text-2xl"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="team_item flex max-xs:flex-col gap-7 gap-y-5 p-6 bg-white group animate" style="--i: 4">
                            <div class="team_img flex-shrink-0 overflow-hidden xs:w-[45%]">
                                <img src="./assets/images/team/team4.jpg" class="duration-400 group-hover:scale-110" alt="Mark Robinson">
                            </div>
                            <div class="team_info flex flex-col justify-between gap-4">
                                <div>
                                    <strong class="team_name line-clamp-2 heading5">Mark Robinson</strong>
                                    <span class="team_position mt-3 text-variant1 line-clamp-2">Plumbing Services
                                        Specialist</span>
                                </div>
                                <ul class="team_socials flex flex-wrap gap-2">
                                    <li>
                                        <a href="https://www.facebook.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-facebook-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-x-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-linkedin-logo text-2xl"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/"
                                            class="inline-flex items-center justify-center w-11 h-11 border border-outline bg-white duration-400 hover:bg-orange hover:text-white"
                                            target="_blank">
                                            <span class="ph ph-instagram-logo text-2xl"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- LASTEST NEWS -->
    <section class="section blog sm:py-25 py-15">
        <div class="container flex flex-col items-center">
            <span class="section_tag tag animate">Latest News</span>
            <h3 class="section_tit mt-4 heading3 text-center animate">Home Repair Tips & Expert Advice</h3>
            <p class="section_desc lg:mt-5 mt-3 body2 text-variant1 text-center animate">Discover articles with DIY tips, expert
                insights, and advice to help you easily maintain and improve your home.</p>
            <ul class="blog_list grid lg:grid-cols-3 gap-7.5 w-full lg:mt-12 mt-9">
                <li class="blog_item flex flex-col gap-6 animate" style="--i: 1">
                    <a href="blog-detail1.html" class="blog_thumb block overflow-hidden group">
                        <img src="./assets/images/blog/blog1-1.jpg" class="duration-400 group-hover:scale-110" alt="Top 5 Essential Home Maintenance Tips for Every Season">
                    </a>
                    <div class="blog_info">
                        <div class="flex items-center gap-3 txt-label text-variant1">
                            <span class="blog_date">October 22, 2024</span>
                            <span class="flex-shrink-0 w-px h-3 bg-outline"></span>
                            <a href="blog-default.html"
                                class="blog_cate duration-300 hover:underline hover:text-black">Maintenance</a>
                        </div>
                        <a href="blog-detail1.html"
                            class="blog_tit mt-3 line-clamp-3 heading5 duration-300 hover:text-orange">Top 5
                            Essential Home Maintenance Tips for Every Season</a>
                    </div>
                </li>
                <li class="blog_item flex flex-col gap-6 animate" style="--i: 2">
                    <a href="blog-detail1.html" class="blog_thumb block overflow-hidden group">
                        <img src="./assets/images/blog/blog1-2.jpg" class="duration-400 group-hover:scale-110" alt="How to Detect and Fix Leaks Before They Cause Damage">
                    </a>
                    <div class="blog_info">
                        <div class="flex items-center gap-3 txt-label text-variant1">
                            <span class="blog_date">October 24, 2024</span>
                            <span class="flex-shrink-0 w-px h-3 bg-outline"></span>
                            <a href="blog-default.html"
                                class="blog_cate duration-300 hover:underline hover:text-black">Plumbing</a>
                        </div>
                        <a href="blog-detail1.html"
                            class="blog_tit mt-3 line-clamp-3 heading5 duration-300 hover:text-orange">How to
                            Detect and Fix Leaks Before They Cause Damage</a>
                    </div>
                </li>
                <li class="blog_item flex flex-col gap-6 animate" style="--i: 3">
                    <a href="blog-detail1.html" class="blog_thumb block overflow-hidden group">
                        <img src="./assets/images/blog/blog1-3.jpg" class="duration-400 group-hover:scale-110" alt="5 Signs It’s Time to Service Your Air Conditioning System">
                    </a>
                    <div class="blog_info">
                        <div class="flex items-center gap-3 txt-label text-variant1">
                            <span class="blog_date">October 26, 2024</span>
                            <span class="flex-shrink-0 w-px h-3 bg-outline"></span>
                            <a href="blog-default.html"
                                class="blog_cate duration-300 hover:underline hover:text-black">HVAC</a>
                        </div>
                        <a href="blog-detail1.html"
                            class="blog_tit mt-3 line-clamp-3 heading5 duration-300 hover:text-orange">5 Signs
                            It’s Time to Service Your Air Conditioning System</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- BRAND -->
    <section class="section brand sm:pb-25 pb-15">
        <div class="container">
            <div class="brand_inner sm:py-15 py-12 lg:px-20 px-10 bg-surface">
                <h6 class="heading6 text-center animate">Trusted by homeowners and businesses alike for expert handyman
                    solutions.</h6>
                <div class="brand_swiper swiper mt-10 animate">
                    <ul class="swiper-wrapper">
                        <li class="brand_item swiper-slide flex items-center justify-center">
                            <img src="./assets/images/brand/1.png" alt="maxus">
                        </li>
                        <li class="brand_item swiper-slide flex items-center justify-center">
                            <img src="./assets/images/brand/2.png" alt="gemstoned">
                        </li>
                        <li class="brand_item swiper-slide flex items-center justify-center">
                            <img src="./assets/images/brand/3.png" alt="venmo">
                        </li>
                        <li class="brand_item swiper-slide flex items-center justify-center">
                            <img src="./assets/images/brand/4.png" alt="revlon">
                        </li>
                        <li class="brand_item swiper-slide flex items-center justify-center">
                            <img src="./assets/images/brand/5.png" alt="customfit">
                        </li>
                        <li class="brand_item swiper-slide flex items-center justify-center">
                            <img src="./assets/images/brand/6.png" alt="vagoda">
                        </li>
                        <li class="brand_item swiper-slide flex items-center justify-center">
                            <img src="./assets/images/brand/3.png" alt="venmo">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




@endsection
