@extends('master')
@section('contents')
<!-- Home Section -->
<section data-scroll-index="0" class="home-section">
    <div class="container">
        <div class="row min-vh-100 align-items-center gy-5">
            <div class="col-lg-7 pe-lg-5">
                <div class="home-intro">
                    <h6>INTRODUCTION</h6>
                    <h2>I'm Pramod a Senior<span class="text-theme">Software Developer</span></h2>
                    <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p>
                    <div class="hs-exp">
                        <div class="exp-box">
                            <h5>5+</h5>
                            <span>YEARS<br /> OF EXPERIENCE</span>
                        </div>
                        <div class="exp-box">
                            <h5>100+</h5>
                            <span>PROJECTS<br /> COMPLETED</span>
                        </div>
                    </div>
                    <div class="btn-bar">
                        <a class="link-effect" href="{{ asset('') }}assets/img/pramod-sharma.pdf" download>Browse Resume <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="home-image">
                    <img src="{{ asset('') }}assets/img/p.jpeg" title="" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Home Section -->
<!-- About Section -->
<section data-scroll-index="1" class="section about-section border-top-g">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-5 col-xl-4 mx-auto sticky-md-top">
                <div class="about-img-box">
                    <div class="about-img">
                        <img src="{{ asset('') }}assets/img/p.jpeg" title="" alt="">
                    </div>
                    <div class="nav social-icons justify-content-center">
                        <a href="https://www.linkedin.com/in/pramod-sharma2696/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/pramodsharma2696/"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 pt-5 pt-lg-0">
                <div class="about-text">
                    <div class="about-row">
                        <h3>Biography</h3>
                        <p>I am a mumbai based Sr. software developer with a focus on web design, development. I have a diverse range of experience having worked across various projects..</p>
                    </div>
                    <div class="about-row">
                        <h3>Education</h3>
                        <div class="row g-4">
                            <div class="col-6">
                                <h5>Master Degree in Information Technology</h5>
                                <p>University of mumbai</p>
                                <small>2024</small>
                            </div>
                            <div class="col-6">
                                <h5>Bachelor Degree in Information Technology</h5>
                                <p>Thakur college of science and commerce, Mumbai.</p>
                                <small>2018</small>
                            </div>

                        </div>
                    </div>
                    <div class="about-row">
                        <h3>Experience</h3>
                        <div class="row g-4">
                            <div class="col-6">
                                <h5>Sr. Software Developer</h5>
                                <p>Mindpool Technologies Pvt Ltd, Pune</p>
                                <small>Nov 2021 — Present</small>
                            </div>
                            <div class="col-6">
                                <h5>Web Developer</h5>
                                <p>Labtron Equipment ltd, Mumbai</p>
                                <small>Feb 2019 — Nov 2021</small>
                            </div>

                        </div>
                    </div>
                    <div class="about-row">
    <div class="row g-4">
        <!-- Competences Section -->
        <div class="col-12">
            <h3>Competences</h3>
            <div class="row">
                <div class="col-md-4">
                    <ul style="list-style-type: none; padding: 0;">
                        <li style="border-bottom: 2px solid white; padding-bottom: 5px;"><strong>→ Backend:</strong>
                            <ul>
                                <li>PHP (9/10)</li>
                                <li>Python (5/10)</li>
                                <li>Node.js (7/10)</li>
                            </ul>
                        </li>
                        <li style="border-bottom: 2px solid white; padding-bottom: 5px;"><strong>→ Frontend:</strong>
                            <ul>
                                <li>JavaScript (6/10)</li>
                                <li>HTML (9/10)</li>
                                <li>CSS (4/10)</li>
                            </ul>
                        </li>
                        <li style="border-bottom: 2px solid white; padding-bottom: 5px;"><strong>→ Databases:</strong>
                            <ul>
                                <li>MySQL (9/10)</li>
                                <li>MongoDB (6/10)</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul style="list-style-type: none; padding: 0;">
                        <li style="border-bottom: 2px solid white; padding-bottom: 5px;"><strong>→ Frameworks & Libraries:</strong>
                            <ul>
                                <li>Laravel (9/10)</li>
                                <li>CodeIgniter3 (9/10)</li>
                                <li>Vue.js (6/10)</li>
                                <li>Next.js (7/10)</li>
                                <li>Express.js (7/10)</li>
                                <li>jQuery (6/10)</li>
                                <li>Bootstrap (8/10)</li>
                            </ul>
                        </li>
                        <li style="border-bottom: 2px solid white; padding-bottom: 5px;"><strong>→ Version Control & CI/CD:</strong>
                            <ul>
                                <li>Git (5/10)</li>
                                <li>Bitbucket (5/10)</li>
                            </ul>
                        </li>
                        <li style="border-bottom: 2px solid white; padding-bottom: 5px;"><strong>→ APIs & Protocols:</strong>
                            <ul>
                                <li>RESTful APIs (9/10)</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul style="list-style-type: none; padding: 0;">
                        <li style="border-bottom: 2px solid white; padding-bottom: 5px;"><strong>→ Tools:</strong>
                            <ul>
                                <li>Figma (4/10)</li>
                                <li>AWS (5/10)</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


                </div>
            </div>
        </div>
</section>
<!-- End About Section -->
<!-- Services Section -->
<section data-scroll-index="2" class="section services-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Serverices</span></h6>
                <h3>Services provide for you</h3>
                <p>My services focus on delivering high-quality results, from web development to API integration, ensuring your success in the digital world.</p>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-01 media">
                    <div class="icon"><i class="bi bi-phone"></i></div>
                    <div class="feature-content col">
                        <h5>Web Design</h5>
                        <p>Creating visually appealing, user-friendly designs tailored for a seamless user experience across all devices. We focus on modern aesthetics, intuitive navigation, and responsive layouts.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-01 media">
                    <div class="icon"><i class="bi bi-laptop"></i></div>
                    <div class="feature-content col">
                        <h5>Web Development</h5>
                        <p>Developing custom websites and web applications using the latest technologies. From frontend to backend, we ensure high performance, security, and scalability to meet business needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-01 media">
                    <div class="icon"><i class="bi bi-triangle"></i></div>
                    <div class="feature-content col">
                        <h5>API Development & Integration</h5>
                        <p>Building and integrating secure, efficient APIs to enhance functionality and streamline processes. We specialize in third-party API integrations for seamless data flow and connectivity.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-01 media">
                    <div class="icon"><i class="bi bi-columns"></i></div>
                    <div class="feature-content col">
                        <h5>CMS and Blog Development</h5>
                        <p>Providing customized content management systems (CMS) and blog solutions for easy content updates and management. Our CMS solutions offer flexibility and are tailored to your specific needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-01 media">
                    <div class="icon"><i class="bi bi-distribute-vertical"></i></div>
                    <div class="feature-content col">
                        <h5>Web Hosting & Maintenance</h5>
                        <p>Offering reliable web hosting services and ongoing maintenance to ensure your website runs smoothly. We handle regular updates, security patches, and monitoring to keep your site secure and up-to-date.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-01 media">
                    <div class="icon"><i class="bi bi-globe2"></i></div>
                    <div class="feature-content col">
                        <h5>Performance Optimization</h5>
                        <p>Enhancing website performance by optimizing load times, minimizing resource usage, and improving user experience. We focus on speed, SEO, and overall functionality to boost engagement and conversion rates.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Services Section -->
<!-- Work Section -->
<section data-scroll-index="3" class="section work-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Portfolio</span></h6>
                <h3>My Latest Projects</h3>
                <p>Explore some of my most recent work, where creativity meets technical expertise.</p>

            </div>
            <div class="row gy-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="project-box">
                        <!-- <img src="path-to-image/syntexfx.png" alt="SyntexFX Project" class="img-fluid"> -->
                        <div class="project-content">
                            <h5>Arbitrage Prime Limited</h5>
                            <p>A cutting-edge online trading platform designed for both retail and institutional clients. Developed using Laravel,Javascript and MySQL to deliver a secure and seamless trading experience.</p>
                            <a href="https://arbitrageprime.com/" target="_blank" class="btn btn-primary projects">View Project <i class="bi bi-arrow-up-right"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="project-box">
                        <!-- <img src="path-to-image/fireflyy.png" alt="Fireflyy Project" class="img-fluid"> -->
                        <div class="project-content">
                            <h5>Fireflyy App</h5>
                            <p>A mobile-first web application aimed at simplifying task management for small teams. Built using PHP, Laravel, and Vue.js with real-time features and a modern UI.</p>
                            <a href="https://fireflyy.app/" target="_blank" class="btn btn-primary projects">View Project <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="project-box">
                        <!-- <img src="path-to-image/cityelectric.png" alt="City Electric Project" class="img-fluid"> -->
                        <div class="project-content">
                            <h5>City Electric</h5>
                            <p>An e-commerce platform for electric products, featuring a robust product catalog and payment integration. Developed using Laravel, Javascript and integrated with third-party payment gateways.</p>
                            <a href="https://www.cityelectric.in" target="_blank" class="btn btn-primary projects">View Project <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="owl-carousel lightbox-gallery" data-items="3" data-nav-dots="true" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xx-items="1" data-space="30" data-autoplay="true">
            <div class="work-box mb-4">
                <div class="work-img">
                    <a class="gallery-link" href="assets/img/work-1.jpg">
                        <img src="{{ asset('') }}assets/img/work-1.jpg" title="" alt="">
                    </a>
                </div>
                <div class="work-info">
                    <div class="meta">
                        <span class="text-theme">Web Design</span>
                    </div>
                    <h5>Website Design for Marketing Agency Startup</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mattis faucibus odio feugiat arcu scelerisque drogon sit amenot.</p>
                    <div class="btn-bar">
                        <a class="link-effect gallery-link" href="assets/img/work-1.jpg">View Project <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="work-box mb-4">
                <div class="work-img">
                    <a class="gallery-link" href="assets/img/work-2.jpg">
                        <img src="{{ asset('') }}assets/img/work-2.jpg" title="" alt="">
                    </a>
                </div>
                <div class="work-info">
                    <div class="meta">
                        <span class="text-theme">Web Design</span>
                    </div>
                    <h5>Website Design for Marketing Agency Startup</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mattis faucibus odio feugiat arcu scelerisque drogon sit amenot.</p>
                    <div class="btn-bar">
                        <a class="link-effect gallery-link" href="assets/img/work-2.jpg">View Project <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="work-box mb-4">
                <div class="work-img">
                    <a class="gallery-link" href="assets/img/work-4.jpg">
                        <img src="{{ asset('') }}assets/img/work-4.jpg" title="" alt="">
                    </a>
                </div>
                <div class="work-info">
                    <div class="meta">
                        <span class="text-theme">Web Design</span>
                    </div>
                    <h5>Website Design for Marketing Agency Startup</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mattis faucibus odio feugiat arcu scelerisque drogon sit amenot.</p>
                    <div class="btn-bar">
                        <a class="link-effect gallery-link" href="assets/img/work-4.jpg">View Project <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="work-box mb-4">
                <div class="work-img">
                    <a class="gallery-link" href="assets/img/work-3.jpg">
                        <img src="{{ asset('') }}assets/img/work-3.jpg" title="" alt="">
                    </a>
                </div>
                <div class="work-info">
                    <div class="meta">
                        <span class="text-theme">Web Design</span>
                    </div>
                    <h5>Website Design for Marketing Agency Startup</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mattis faucibus odio feugiat arcu scelerisque drogon sit amenot.</p>
                    <div class="btn-bar">
                        <a class="link-effect gallery-link" href="assets/img/work-3.jpg">View Project <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Work Section -->
<!-- core Section -->
<section class="section core-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Core Values</span></h6>
                <h3>Core values that drive my work</h3>
                <p>These principles guide my approach to delivering exceptional results for every project.</p>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-02">
                    <div class="icon"><i class="bi bi-app-indicator text-theme"></i></div>
                    <div class="feature-content col">
                        <h5>Hard Work</h5>
                        <p>I believe in putting consistent effort into achieving the best possible outcomes for my clients.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-02">
                    <div class="icon"><i class="bi bi-binoculars text-theme"></i></div>
                    <div class="feature-content col">
                        <h5>Transparency</h5>
                        <p>Open communication and honesty are essential to building lasting client relationships.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-02">
                    <div class="icon"><i class="bi bi-disc text-theme"></i></div>
                    <div class="feature-content col">
                        <h5>Innovation</h5>
                        <p>I strive to stay ahead of industry trends and continuously improve my services.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-02">
                    <div class="icon"><i class="bi bi-sort-up text-theme"></i></div>
                    <div class="feature-content col">
                        <h5>Growth</h5>
                        <p>I focus on both personal and professional development to enhance my skill set and results.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-02">
                    <div class="icon"><i class="bi bi-people text-theme"></i></div>
                    <div class="feature-content col">
                        <h5>Teamwork</h5>
                        <p>Collaboration with others is key to bringing diverse perspectives and achieving success.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-02">
                    <div class="icon"><i class="bi bi-shuffle text-theme"></i></div>
                    <div class="feature-content col">
                        <h5>Excellence</h5>
                        <p>Striving for excellence in every project, ensuring high standards and top-notch quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End core Section -->
<!-- testimonial Section -->
<section class="section testimonial-section border-top-g d-none">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Testimonial</span></h6>
                <h3>Our Clients Feedback.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="owl-carousel lightbox-gallery" data-items="2" data-nav-dots="true" data-md-items="2" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="30" data-autoplay="true">
            <div class="feature-box-03">
                <div class="feature-img">
                    <img src="{{ asset('') }}assets/img/team-1.jpg" title="" alt="">
                </div>
                <div class="feature-content">
                    <div class="icons">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <h6>Jennifer Lutheran</h6>
                    <span>CEO at pxdraft</span>
                </div>
            </div>
            <div class="feature-box-03">
                <div class="feature-img">
                    <img src="{{ asset('') }}assets/img/team-1.jpg" title="" alt="">
                </div>
                <div class="feature-content">
                    <div class="icons">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <h6>Jennifer Lutheran</h6>
                    <span>CEO at pxdraft</span>
                </div>
            </div>
            <div class="feature-box-03">
                <div class="feature-img">
                    <img src="{{ asset('') }}assets/img/team-1.jpg" title="" alt="">
                </div>
                <div class="feature-content">
                    <div class="icons">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <h6>Jennifer Lutheran</h6>
                    <span>CEO at pxdraft</span>
                </div>
            </div>
            <div class="feature-box-03">
                <div class="feature-img">
                    <img src="{{ asset('') }}assets/img/team-1.jpg" title="" alt="">
                </div>
                <div class="feature-content">
                    <div class="icons">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <h6>Jennifer Lutheran</h6>
                    <span>CEO at pxdraft</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Section -->
<!-- Contact Section -->
<section data-scroll-index="4" class="section contactus-section border-top-g">
    <div class="container">
        <div class="row justify-content-center section-heading">
            <div class="col-lg-6 text-center">
                <h6><span class="text-theme">Contact</span></h6>
                <h3>Get in touch</h3>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <form id="contact-form" method="POST">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input name="Subject" id="subject" placeholder="Subject *" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Your message *" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send">
                                    <button class="link-effect" type="button" value="Send" onclick="send_mail()"> send message <i class="bi bi-arrow-up-right"></i></button>
                                    <span id="suce_message" class="text-success" style="display: none">Message Sent Successfully</span>
                                    <span id="err_message" class="text-danger" style="display: none">Message Sending Failed</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row gy-4 text-center justify-content-center contact-info">
            <div class="col-md-4">
                <div class="contact-name">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5>Visit My Place</h5>
                    <p>Borivali, Mumbai - 400103</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-name">
                    <div class="icon">

                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5>Mail</h5>
                    <p>pramodsharma2696@gmail.com<br>Mon to Fri (10 am – 8 pm)</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-name">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h5>Phone</h5>
                    <p>Phone: +91 8104555452</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
@endsection