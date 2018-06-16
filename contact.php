<?php require_once("layouts/header.php")?>
<main>
    <div class="container-fluid">
        <div class="contact-herosection">
            <div class="dark-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="restaurant-title text-center">
                            <p>Contact us</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--        <//Hero Section>-->
    <section class="contact-backroundsection">
        <div class="container">
            <div class="section-bg">
                <div class="inner-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-area">
                                <img src="images/contactUs.PNG" alt="Contact us picture" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <p class="display-4"><b>Risotteria Melotti NYC</b> East Village</p>
                                <p class="text text-danger">FIND US</p>
                                <p>309 E 5th Street <br> btw 1st-2nd Av - 10003 <br> MANHATTAN - NEW YORK</p>
                                <br>
                                <p class="text text-danger">CALL US <br>
                                    <a href="tel:+016467558939" target="_blank">+016467558939</a>
                                </p>
                                <br>
                                <p>WRITE US <br><a href="mailto:mailto:nyc@risotteriamelotti.com" target="_blank">nyc@risotteriamelotti.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="email-us">
                <div class="inner-section">
                 <div class="row">
                        <div class="col-md-6">
                           <div class="message-section">
                                <h1 class="text text-danger text-center font-weight-bold">EMAIL US FOR MORE INFORMATION</h1>
                           </div>
                     </div>
                    <div class="col-md-6">
                        <div class="form-area">
                            <form method="POST" id="contactForm">
                                <div class="form-group">
                                    <label for="nameandSurename">Name and Surname</label>
                                    <input type="text" class="form-control" name="userName" id="userName" required>
                                  <p class="form-text userNameMessage text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                    <p class="form-text userEmailMessage text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="request"><i>WRITE YOUR REQUEST HERE</i></label>
                                   <textarea name="request" id="request" cols="30" rows="5" class="form-control" required></textarea>
                                   <p class="form-text textAreaMessage <text-danger></text-danger>"></p>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-outline-primary ml-auto" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
        </div>
        
<!--        Opening hours data-->
        <div class="container">
                <div class="opening-times text-center">
                    <div class="inner-section">
                        <div class="row">
                            <div class="col-md-4">
                                <h1 class="text text-danger">Follow us!</h1>
                                <p><strong>STAY IN CONTACT WITH US</strong></p>
                                <p><strong>AND SHARE OUR PASSION.</strong></p>
                                <div class="social-media-area px-5">
                                    <div class="d-flex flex-row  text-center">
                                        <div class="p-2"><a href="https://www.facebook.com/RisotteriaMelottiNYC" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                                        <div class="p-2"><a href="https://twitter.com/RisotteriaM_NYC" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                                        <div class="p-2"><a href="https://www.instagram.com/risotteriamelottinyc/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                                    </div>

                                </div>
                                <div class="btn-area py-2 px-2">
                                    <a href="javascript:void(0);" class="btn">Newsletter</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h1 class="text text-danger">Opening times</h1>
                                <p><b>Monday - Friday</b><br/>
                                    <span>12:00 PM - 10:30 PM</span>
                                </p>
                                <p><b>Saturday - Sunday</b><br/>
                                    <span>11:30 AM - 11:30 PM</span>
                                </p>
                                <p>Phone : <a href="tel:+016467558939">+016467558939</a></p>
                                <div class="d-flex flex-row px-5">
                                    <div class="p-2">
                                        <a href="https://www.tripadvisor.it/Restaurant_Review-g60763-d5497083-Reviews-Risotteria_Melotti_NYC-New_York_City_New_York.html" target="_blank"><img src="images/tripAdvisor.PNG" alt="Trip advisor" class="img-fluid"></a>
                                    </div>
                                    <div class="p-2">
                                    <a href="https://www.ubereats.com/en-US/new-york/" target="_blank"><img src="images/uber.PNG" alt="Uber eats" class="img-fluid"></a>    
                                    </div>
                                    <div class="p-2">
                                    <a href="https://www.yelp.com/biz/risotteria-melotti-nyc-new-york-3" target="_blank"><img src="images/yelp.PNG" alt="Yelp" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=309%20E%205th%20St%20New%20York%2C%20NY%2010003%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">webdesign: pureblack.de</a></div><style>.mapouter{text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--<//Opening details>-->
            
    </section>

</main>
<?php require_once("layouts/footer.php")?>