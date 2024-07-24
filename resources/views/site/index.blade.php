@include("/site/include/header")

@if(session('success'))
<div class="success" id="fade">
    {{session('success')}}
</div>
@endif
<div class="container-xxl bg-primary hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Unlock Your Potential with Amo Forex Trading Academy
                </h1>
                <p class="text-white pb-3 animated slideInDown">Join a community of motivated traders and gain the
                    knowledge needed to thrive in the forex markets. Let Amo Forex Trading Academy be your guide to
                    achieving your financial goals.</p>
                <!-- <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 58px;">
                                <button type="button" class="btn btn-primary rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">Free Trail</button>
                            </div> -->
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid rounded animated zoomIn" src="/assets/img/hero.jpg" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

<!-- Calendly badge widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<script type="text/javascript">
window.onload = function() {
    Calendly.initBadgeWidget({
        url: 'https://calendly.com/smart1qadir/30min',
        text: 'Schedule time with me',
        color: '#0069ff',
        textColor: '#ffffff',
        branding: undefined,
    });
}
</script>
<!-- Calendly badge widget end -->

<!-- About Start -->
<div class="container-xxl py-6" id="about">
    <div class="container">
        <div class="row g-5 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Learn to Trade <br> Boost your Career</h1>
                <p class="mb-4">Our comprehensive courses and expert insights are designed to elevate your forex trading
                    skills and advance your career. Master market strategies, gain practical experience, and build
                    confidence in your trading abilities. Invest in your future and boost your career with us today!</p>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-4">
                        <h5>Over 20 Trading Courses</h5>
                        <p class="mb-0">Choose your favorite from our collection of bestselling and 5 star rated
                            courses.</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="ms-4">
                        <h5>Your goals, our topics</h5>
                        <p class="mb-0">Our resources are crafted to help you navigate the market effectively and
                            achieve trading success. Start your journey with us today!</p>
                    </div>
                </div>
                <a href="#Courses" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Explore Courses</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="/assets/img/about.jpg">
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Overview Start -->
<div class="container-xxl bg-light my-6 py-5" id="overview">
    <div class="container">
        <div class="row g-5 py-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="/assets/img/overview-1.jpg">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">01</h1>
                    <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                    <h5 class="mb-0">DEMAND AND SUPPLY</h5>
                </div>These courses are designed to equip traders with a structured approach to analyzing price
                movements through the lens of supply and demand, helping them make informed trading decisions in the
                forex market. The emphasis is often on practical application, providing traders with the tools and
                knowledge to become more confident and successful in their trading endeavors.</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Understanding Supply and Demand Zones</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Trading Strategies Based on Supply and Demand</p>
                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Market Dynamics and Price Action</p>
            </div>
        </div>
        <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">02</h1>
                    <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                    <h5 class="mb-0">SMART MONEY CONCEPT</h5>
                </div>
                <p class="mb-4">In our Smart Money Concept course, you'll delve into the strategies used by
                    institutional investors and large financial entities to gain an edge in the markets. You'll learn
                    how to analyze trading volume, interpret price movements at critical support and resistance levels,
                    and track institutional positions using tools like Commitment of Traders (COT) reports. By
                    understanding how Smart Money operates, you'll gain valuable insights into market dynamics and
                    uncover potential trading opportunities that align with these influential market participants. This
                    course is designed to equip you with the knowledge and skills to navigate the complexities of the
                    market more effectively and make informed trading decisions based on Smart Money behavior.</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Identifying Institutional Trading Patterns</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Analyzing Commitment of Traders (COT) Reports</p>
                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Volume Analysis and Price Action
                    Insights</p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="/assets/img/smc.gif">
            </div>
        </div>
        <div class="row g-5 py-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="/assets/img/overview-3.jpg">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <h1 class="mb-0">03</h1>
                    <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                    <h5 class="mb-0">New and hidden Invalidation</h5>
                </div>
                <p class="mb-4">In our "New and Hidden Invalidation" course, you will learn how to refine your trading
                    strategy by effectively managing and adjusting invalidation points. We’ll focus on identifying new
                    price levels or market events that could invalidate your trade setups, teaching you techniques to
                    set and adapt these points as market conditions evolve. You’ll also discover the importance of
                    recognizing subtle signals and indicators that may invalidate your trades, with strategies to
                    uncover these hidden factors and enhance your decision-making process. Throughout the course, you’ll
                    gain insights into adapting your trading plans to changing market dynamics, ensuring you stay agile
                    and responsive. <br>Key topics covered include</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Setting and adjusting new invalidation points</p>
                <p><i class="fa fa-check-circle text-primary me-3"></i>Recognizing and managing hidden invalidation
                    signals</p>
                <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>Adapting trading strategies to
                    evolving market conditionsMore effective & poerwfull</p>
            </div>
        </div>
    </div>
</div>
<!-- Overview End -->


<!-- Advanced Feature Start -->
<div class="container-xxl py-6" id="Courses">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Advanced Courses</h1>
            <p class="mb-5">Our expert-led sessions are designed for traders looking to achieve higher levels of success
                and precision. Take the next step in your trading career with our advanced training.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Market maker method</h5>
                    <p class="m-0">This approach reveals the strategies and techniques used by market makers, enhancing
                        your ability to predict market movements and optimize trading results.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">ICT inner course of Traders</h5>
                    <p class="m-0">Master insider techniques and detailed market analysis to elevate your trading skills
                        and performance.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Falcon Strategy</h5>
                    <p class="m-0">This advanced strategy integrates precision analysis and dynamic trading techniques
                        to boost your forex trading success.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Forex Smart Strategy Method</h5>
                    <p class="m-0">Elevate your forex trading with our Smart Strategy Method, combining advanced
                        analysis and proven techniques for enhanced skills and results.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Advanced Feature End -->


<!-- Process Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="/assets/img/process.jpg">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="mb-4">Three Simple Steps To Start Learning With Us</h1>
                <p class="mb-4">Begin your Forex journey with ease. Explore our expert-led courses, and gain the skills
                    to trade confidently. Start your learning adventure with us today!</p>
                <ul class="process mb-0">
                    <li>
                        <span><i class="fa fa-cog"></i></span>
                        <div>
                            <h5>Book a meeting</h5>
                            <p>Book a meeting with our expert advisors to discuss your trading goals and find the best
                                learning path for you. Start your journey with personalized guidance and support.</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-address-card"></i></span>
                        <div>
                            <h5>Make Payments</h5>
                            <p>Make payments tailored to your learning requirements. Choose from our flexible payment
                                options to access the courses and resources that fit your needs and budget.</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-check"></i></span>
                        <div>
                            <h5>Enjoy Your Learning</h5>
                            <p>Enjoy your learning experience with our comprehensive courses and expert support. Gain
                                the knowledge and confidence to succeed in Forex trading, all at your own pace.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Process End -->


<!-- Pricing Start -->
<div class="container-xxl py-6" id="pricing">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Pricing Plan</h1>
            <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et
                lorem et sit, sed stet no labore lorem sit clita duo justo</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="price-item rounded overflow-hidden">
                    <div class="bg-dark p-4">
                        <h4 class="text-white mt-2">Standard</h4>
                        <div class="text-white">
                            <span class="align-top fs-4 fw-bold">$</span>
                            <h1 class="d-inline display-6 text-primary mb-0"> 29.99</h1>
                            <span class="align-baseline">/ Month</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item rounded overflow-hidden">
                    <div class="bg-primary p-4">
                        <h4 class="text-white mt-2">Professional</h4>
                        <div class="text-white">
                            <span class="align-top fs-4 fw-bold">$</span>
                            <h1 class="d-inline display-6 text-dark mb-0"> 49.99</h1>
                            <span class="align-baseline">/ Month</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i
                                class="fa fa-times text-danger pt-1"></i></div>
                        <a href="" class="btn btn-primary rounded-pill py-2 px-4 mt-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="price-item rounded overflow-hidden">
                    <div class="bg-dark p-4">
                        <h4 class="text-white mt-2">Ultimate</h4>
                        <div class="text-white">
                            <span class="align-top fs-4 fw-bold">$</span>
                            <h1 class="d-inline display-6 text-primary mb-0"> 79.99</h1>
                            <span class="align-baseline">/ Month</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i
                                class="fa fa-check text-success pt-1"></i></div>
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing End -->


<!-- Testimonial Start -->
<div class="container-xxl py-6" id="testimonial">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">What Our Clients Say</h1>
            <p class="mb-5">Discover why our clients love us. Read their success stories and experiences with our Forex
                trading academy.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Joining this academy was
                    the best decision for my trading career. The courses are top-notch!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="/assets/img/testimonial-1.jpg"
                        style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">Sarah L</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>The personalized guidance
                    and support have made a huge difference. Highly recommend!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="/assets/img/testimonial-2.jpg"
                        style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">James K</h5>
                        <span>Trader</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>From beginner to confident
                    trader, this academy has been a game-changer for me</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="/assets/img/testimonial-3.jpg"
                        style="width: 65px; height: 65px;">
                    <div class="ps-4">
                        <h5 class="mb-1">Priya K</h5>
                        <span>Trader</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Contact Start -->
<div class="container-xxl py-6" id="contact">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-3">Get In Touch</h1>
                <p class="mb-4">For anything get in touch with us using the contacs or email below</p>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-2">Call Us</p>
                        <h5 class="mb-0">+255 768 628 979</h5>
                        <h5 class="mb-0">+255 765 813 534</h5>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-2">Mail Us</p>
                        <h5 class="mb-0">info@amoforex.com</h5>
                    </div>
                </div>
                <div class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-2">Our Office</p>
                        <h5 class="mb-0">16 Ndovu, Kariakoo, Dar Es Saalam</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form method="post" action="/send_message">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Your Name" value={{old("name")}}>
                                <label for="name">Your Name</label>
                                @error("name")
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="Your Email" value={{old("email")}}>
                                <label for="email">Your Email</label>
                                @error("email")
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    id="subject" name="subject" placeholder="Subject" value={{old("subject")}}>
                                <label for="subject">Subject</label>
                                @error("subject")
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('message') is-invalid @enderror"
                                    placeholder="Leave a message here" name="message" id="message"
                                    style="height: 150px">{{old("message")}}</textarea>
                                <label for="message">Message</label>
                                @error("message")
                                <span class="invalid-feedback" role="alert">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<div class="chat-button">
    <a href="https://wa.me/message/FFMLAFL2GAQIC1" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://t.me/qadirdigital" target="_blank" class="telegram">
        <i class="fab fa-telegram-plane"></i>
    </a>
</div>


@include("/site/include/footer")