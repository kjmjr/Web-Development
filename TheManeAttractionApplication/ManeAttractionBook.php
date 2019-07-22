<!DOCTYPE html>

<!-- Kevin McAdoo 
     Purpose: Beauty salon website
	 Date: 7-17-2018 -->

	 <!-- this code is used for older browsers to interpret as a comment -->
<!-- [if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
	 
	 
<html lang = "en">

    <head>
	
     <!-- meta tag used for the user -->
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 

	 <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	 
	 <!-- Meta tags which are important to use-->
	<meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="John Doe">
	<meta name="generator" content="FrontPage 4.0">

	 <title> The Mane Attraction </title> 

	  <meta name="description" content="This website represents the  beauty salon of the Mane Attraction!
	  Where you will be helped satisfied and helped guaranteed" /> 
	  	
	 <!-- link to the css style sheet for ManeAttractionBook-->
	 <link href = "css/ManeAttractionBook.css" type= "text/css" rel= "stylesheet" />
	 
	 <!-- link for an image in the title tab -->
    <link rel="icon" type="images/png" href="images/maneAttractionLogo.jpg" />

    <link id=" pagestyle" rel="stylesheet" type="text/css" href= "css/bookStyle.css"/>

    <script src="JS/book.js" type ="text/javascript"> </script>
	 
    </head>


    <body>

        <div id="top">


            <header class="attraction"> THE MANE ATTRACTION </header>
            <h2 class="attraction_subtitle"> Hair Salon </h2>


            <nav>
                <!-- followed by an unordered list with links to specific parts of the page in the website-->
                <ul>
                    <li>
                        <a href="index.html"> Main </a>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index.html#contact_us_div">Contact us </a></li>
                            <li><a href="index.html#locate_us_div">  Locate us</a></li>
                            <li><a href="index.html#find_our_hours_div">  Find our hours</a></li>
                            <li><a href="index.html#rate_us_div"> Rate us </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="ManeAttractionAbout.html"> About </a>
                        <ul>
                            <li><a href="ManeAttractionAbout.html"> About </a></li>
                            <li><a href="ManeAttractionAbout.html#Sheila"> Get to know Sheila </a></li>
                            <li><a href="ManeAttractionAbout.html#Paula"> Get to know Paula </a></li>
                            <li><a href="ManeAttractionAbout.html#Sharell"> Get to know Sharell</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="ManeAttractionProducts.html"> Products and Services </a>
                        <ul>
                            <li><a href="ManeAttractionProducts.html"> Products and Services</a></li>
                            <li><a href="ManeAttractionProducts.html#products"> Learn products </a></li>
                            <li><a href="ManeAttractionProducts.html#services"> Learn styles </a></li>
                        </ul>
                    </li>
                    <li>
                        <a> Book Online </a>
                        <ul>
                            <li><a href="#book_with"> Book with us! </a></li>
                        </ul>

                    </li>
                </ul>
            </nav>
        </div>

        <section class="Book-Now-Section">
            <div id="book_with"></div>
            <h2 class="book"> Book with us Today or Call to make an Appointment</h2>

            <section class="book-form">

                <form id="bookForm" name="contactForm" method="post" action="form_process.php">

                    <fieldset class="label">
                        <label for="name" class="title"> First Name: </label>
                        <input placeholder="Your first name" type="text" tabindex="1" id="firstName_id" name="first_name"
                        autofocus />
                        <span class="error" name="name_error"></span>
                    </fieldset>

                    <fieldset class="label">
                        <label for="name" class="title"> Last Name: </label>
                        <input placeholder="Your last name" type="text" tabindex="1" id="lastName_id" name="last_name"
                        autofocus />
                        <span class="error" name="name_error"></span>
                    </fieldset>


                    <fieldset class="label">
                        <label for="number" class="title"> Number: </label>
                        <input placeholder="Your Phone Number" type="text" tabindex="3" id="number_id" name="number" />
                        <span class="error" name="number_error"></span>
                    </fieldset>

                    <fieldset class="label">
                        <label for="stylist" class="title"> Preferred Stylist: </label>
                        <input placeholder="Not necessarily required" type="text" tabindex="1" id="stylist_id" name="stylist" />
                        <span class="error" name="stylist_error"></span>
                    </fieldset>

                    <fieldset class="submit">
                        <button name="submit" type="submit" value="Send" class="submitButton">
                            Submit
                        </button>
                    </fieldset>

                    <div class="success" name="success"></div>
                </form>



            </section>

        </section><!-- end of section-->


        <footer class="footer-section">
        <hr />
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.971552642912!2d-79.39859618510026!3d36.09418148010019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88532b274677b063%3A0x334b2cef0e578c5!2s2272+N+Church+St%2C+Burlington%2C+NC+27217!5e0!3m2!1sen!2sus!4v1532831654243"
        style="border:0" allowfullscreen></iframe>

        <div id="contact_us_div"></div>
        <div id="locate_us_div"></div>
        <div class="part_footer_section">
        <h3 class="footer_subtitles"> Contact us: </h3>
        <address>
        <p> Email: themaneattractionburlington@gmail.com</p>
        <p> Address: 2272 N. Church Street, Burlington, North Carolina 27217</p>
        </address>

        <p>Call us to book an appointment: (336) 270-5736 </p>

        <h3 class="footer_subtitles"> Follow us: </h3>

        <p class=" follow_us">Instagram: maneattractionburlington </p>

        <p class=" follow_us">Facebook: The mane attraction </p>

        <div class="icons">

        <img src="images/Facebook.png" alt="facebook" class="social-media f" />

        <iframe class="share_button" src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.the-maneattraction.com%2F&layout=button&size=small&mobile_iframe=true&width=59&height=20&appId"
        scrolling="no"
        frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

        <img src="images/Instagram.png" alt="instagram" class="social-media i" />


        </div>


        </div>

        <hr />

        <small>
            ©The Mane Attraction Editor: Kevin McAdoo <a class="outer-links" href="https://www.godaddy.com/offers/domains/godaddy-b?isc=gofdy154&utm_source=gemini&utm_medium=cpc&utm_campaign=en-us_corp_sem_base_brand_core&utm_term=godaddy&mkwid=bunqNl4G_pcrid_34209848708_pkw_godaddy_pmt_e_pdv_c">
                ©GoDaddy
            </a>
            <a class="outer-links" href="https://www.bluehost.com/">©bluehost</a>

            External Resources: <a href="https://pixabay.com/" class="links">Pixabay</a>
            , <a href="https://wix.com/" class="links">WIX</a> , and
            <a href="https://www.vandelaydesign.com/free-social-media-icons/" class="links">VANDELAY DESIGN</a>.
            <a href="https://developers.facebook.com/docs/plugins/share-button/" class="links"> ©FacebookShareButton</a>

        </small>


        </footer>




    </body>
 </html>