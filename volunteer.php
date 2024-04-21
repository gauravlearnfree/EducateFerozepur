<?php
include_once('head.php');
include_once('header.php');
?>

<main>

    <!-- Make an impact. Save lives. -->
    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                </div>

                <div class="col-lg-5 col-12">
                    <a href="#" class="me-4">Make a donation</a>

                    <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Volunteering Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Volunteering Opportunities</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Onsite Volunteering</h5>
                            <ul>
                                <li>Teaching</li>
                                <li>Support Activities</li>
                                <li>Art and Crafts</li>
                                <li>Sports Coaching</li>
                                <li>Health and Hygiene Workshops</li>
                            </ul>
                            <p class="card-text">Join us on-site to directly engage with the children through teaching or supporting various activities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Remote Volunteering</h5>
                            <ul>
                                <li>Legal and Accounting</li>
                                <li>Mentoring</li>
                                <li>Marketing and Fundraising</li>
                                <li>Content Creation</li>
                                <li>Graphic Design</li>
                            </ul>
                            <p class="card-text">Make a difference from anywhere in the world by volunteering remotely in areas such as legal assistance, mentoring, or marketing and fundraising efforts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteering form  -->
    <section class="volunteer-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="text-white mb-4">Volunteer</h2>

                    <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                        <h3 class="mb-4">Become a volunteer today</h3>

                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="Jack Doe" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Subject" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="input-group input-group-file">
                                    <input type="file" class="form-control" id="inputGroupFile02">

                                    <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                    <i class="bi-cloud-arrow-up ms-auto"></i>
                                </div>
                            </div>
                        </div>

                        <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                        <button type="submit" class="form-control">Submit</button>
                    </form>
                </div>

                <div class="col-lg-6 col-12">
                    <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg" class="volunteer-image img-fluid" alt="">

                    <div class="custom-block-body text-center">
                        <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                        <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm
                            tokito Professional charity theme based</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Volunteer profile  -->
    <section class="about-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-5 col-12">
                    <img src="images/portrait-volunteer-who-organized-donations-charity.jpg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>

                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0">Sandy Chan</h2>

                        <p class="text-muted mb-lg-4 mb-md-4">Founding Partner</p>

                        <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                            charity theme based</p>

                        <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>
<?php
include_once('footer.php');
include_once('script.php');
?>