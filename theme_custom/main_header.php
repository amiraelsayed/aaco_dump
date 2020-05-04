<?php
/**
 * Created by PhpStorm.
 * User: shadystores
 * Date: 1/30/2020
 * Time: 1:48 AM
 */

?>
<link href="theme_custom/assets/main.css"  rel="stylesheet">

<header id="page-header" class="clearfix">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="logo-header">
                    <a class="logo" href="http://elearning.aaco.org" title="Home">
                        <img src="//elearning.aaco.org/pluginfile.php/1/theme_lambda/logo/1574799813/AACO_Logo.png"
                             class="img-responsive" alt="logo"/> </a>
                </div>
            </div>
            <div class="span10 login-header">
                <div class="pull-right">
                    <div class="pull-behind-right">
                        <a class="menu_i" href="http://elearning.aaco.org/"> Home </a>
                        <p class="meni_i_border">|</p>
                        <a class="menu_i"
                           href="http://rtc.aaco.org/aaco/ACCOMenuDetailes.aspx?ID=2e9d4dd2-f649-43bc-a1ba-c4cd9f5c5476">
                            About us </a>
                        <p class="meni_i_border">|</p>
                        <a class="menu_i" href="http://rtc.aaco.org/aaco/ContactUs.aspx"> Contact us </a>
                        <p class="meni_i_border">|</p>
                        <!-- language -->
                        <div class="change_lang">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/index.php?lang=fr">
                                        <img src="/theme/lambda/menu_images/lang_fr.png" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="/index.php?lang=ar">
                                        <img src="/theme/lambda/menu_images/lang_ar.png" alt=""/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    profileblock   <div class="profileblock">
                        <label id="user"><i class="fa fa-user"></i></label>
                        <div class="forgotpass">
                            <a target="_self" href="http://elearning.aaco.org/login/index.php">Login </a>
                        </div>
                    </div>
                    <div style="z-index:-1;">
                        <form id="search" action="http://elearning.aaco.org/course/search.php" method="POST"
                              onclick="searchCourses();">
                            <div class="nav-divider-left"></div>
                            <input id="coursesearchbox" type="text"
                                   onFocus="if(this.value =='Search courses') this.value=''"
                                   onBlur="if(this.value=='' || this.value=='all'||this.value=='Search courses' || this.value=='ALL'||this.value=='All'||this.value=='aLL'||this.value=='ALl'||this.value=='AlL'||this.value=='aLl'||this.value=='alL') this.value='-&nbsp'"
                                   value="Search courses" name="search">
                            <input type="submit" id="myBtn" value="">
                        </form>
                    </div>
                </div>
                <header role="banner" class="navbar">
                    <nav role="navigation" class="navbar-inner">
                        <div class="container-fluid">
                            <a class="brand" href="http://elearning.aaco.org">AACO</a>
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li><a title="Home" class="menu_link resp_menu" href="http://elearning.aaco.org/">Home</a>
                                    </li>
                                    <li><a title="About us" class="menu_link resp_menu"
                                           href="http://rtc.aaco.org/aaco/ACCOMenuDetailes.aspx?ID=2e9d4dd2-f649-43bc-a1ba-c4cd9f5c5476">About
                                            us</a></li>

                                    <li class="dropdown"><a href="https://aaco.org/aaco-community"
                                                            class="dropdown-toggle menu_link" data-toggle="dropdown"
                                                            title="AACO Community">AACO Community<b
                                                    class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menuu">
                                            <div class="dropdown_image">
                                                <img src="/theme/lambda/menu_images/17Menu image.jpg"
                                                     class="img-responsive">
                                            </div>
                                            <ul class="dd_menu">
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Member Airlines"
                                                                            href="https://aaco.org/aaco-community/member-airlines">Member
                                                        Airlines</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Partner Airlines"
                                                                            href="https://aaco.org/aaco-community/partner-airlines">Partner
                                                        Airlines</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Industry Partners"
                                                                            href="https://aaco.org/aaco-community/industry-partners">Industry
                                                        Partners</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title=" Join AACO Community"
                                                                            href="https://aaco.org/aaco-community/join-aaco-community">
                                                        Join AACO Community</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="https://aaco.org/market-insights"
                                                            class="dropdown-toggle menu_link" data-toggle="dropdown"
                                                            title="Market Insights">Market Insights<b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menuu">
                                            <div class="dropdown_image">
                                                <img src="/theme/lambda/menu_images/18Menu image.jpg"
                                                     class="img-responsive">
                                            </div>
                                            <ul class="dd_menu">
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Data &amp; Statistics"
                                                                            href="https://aaco.org/market-insights/data-n-statistics1">Data
                                                        &amp; Statistics</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Destinations Map"
                                                                            href="http://aaco.fltmaps.com/en">Destinations
                                                        Map</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Flight Schedules"
                                                                            href="https://aaco.org/market-insights/flight-schedules">Flight
                                                        Schedules</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title=" FlightAware"
                                                                            href="https://aaco.org/market-insights/testing-map">
                                                        FlightAware</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="https://aaco.org/policy"
                                                            class="dropdown-toggle menu_link" data-toggle="dropdown"
                                                            title="Policy">Policy<b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menuu">
                                            <div class="dropdown_image">
                                                <img src="/theme/lambda/menu_images/19Menu image.jpg"
                                                     class="img-responsive">
                                            </div>
                                            <ul class="dd_menu">
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="EU External Aviation Policy"
                                                                            href="https://aaco.org/policy/eu-external-aviation-policy">EU
                                                        External Aviation Policy</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Fair Competition"
                                                                            href="https://aaco.org/policy/fair-competition">Fair
                                                        Competition</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Infrastructure"
                                                                            href="https://aaco.org/policy/infrastructure">Infrastructure</a>
                                                </li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Liberalization"
                                                                            href="https://aaco.org/policy/liberalization">Liberalization</a>
                                                </li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Passenger Rights"
                                                                            href="https://aaco.org/policy/passenger-rights">Passenger
                                                        Rights</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title=" Safety"
                                                                            href="https://aaco.org/policy/safety">
                                                        Safety</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Security"
                                                                            href="https://aaco.org/policy/security">Security</a>
                                                </li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Taxation"
                                                                            href="https://aaco.org/policy/taxation">Taxation</a>
                                                </li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Unruly Passengers"
                                                                            href="https://aaco.org/policy/unruly-passengers">Unruly
                                                        Passengers</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="https://aaco.org/LandingFull.aspx?pageid=20"
                                                            class="dropdown-toggle menu_link" data-toggle="dropdown"
                                                            title="Joint Work">Joint Work<b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menuu">
                                            <div class="dropdown_image">
                                                <img src="/theme/lambda/menu_images/20Menu image.jpg"
                                                     class="img-responsive">
                                            </div>
                                            <ul class="dd_menu">
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Aeropolitical"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab0">Aeropolitical</a>
                                                </li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Aviation Security"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab1">Aviation
                                                        Security</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Distribution Agreement with Amadeus"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab2">Distribution
                                                        Agreement with Amadeus</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Engineering &amp; Maintenance"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab3">Engineering
                                                        &amp; Maintenance</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Emergency Response Planning"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab4">Emergency
                                                        Response Planning</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Environment"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab5">Environment</a>
                                                </li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Fuel"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab6">Fuel</a>
                                                </li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Ground Handing"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab7">Ground
                                                        Handing</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Regional Training Center"
                                                                            href="https://aaco.org/LandingFull.aspx?pageid=20#tab8">Regional
                                                        Training Center</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a title="Training" class="menu_link"
                                           href="http://rtc.aaco.org/aaco/training.aspx">Training</a></li>
                                    <li class="dropdown"><a href="https://aaco.org/media-center"
                                                            class="dropdown-toggle menu_link" data-toggle="dropdown"
                                                            title="Media Center">Media Center<b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menuu2">
                                            <div class="dropdown_image">
                                                <img src="/theme/lambda/menu_images/22Menu image.jpg"
                                                     class="img-responsive">
                                            </div>
                                            <ul class="dd_menu">
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="What’s New"
                                                                            href="https://aaco.org/Sub.aspx?pageid=1394">What’s
                                                        New</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Press Releases"
                                                                            href="https://aaco.org/media-center/press-releases">Press
                                                        Releases</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Publications"
                                                                            href="https://aaco.org/media-center/publications">Publications</a>
                                                </li>
                                                <li class="dd_menu_item"><a class="dd_menu_link"
                                                                            title="Speeches &amp; Presentations"
                                                                            href="https://aaco.org/media-center/speeches-and-presentations">Speeches
                                                        &amp; Presentations</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Photo Gallery"
                                                                            href="https://aaco.org/media-center/photo-gallery">Photo
                                                        Gallery</a></li>
                                                <li class="dd_menu_item"><a class="dd_menu_link" title="Video Gallery"
                                                                            href="https://aaco.org/media-center/video-gallery">Video
                                                        Gallery</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a title="Events" href="https://aaco.org/events" class="menu_link">Events</a>
                                    </li>

                                    <li><a title="Contact Us" class="menu_link resp_menu"
                                           href="http://rtc.aaco.org/aaco/ContactUs.aspx">Contact Us</a></li>
                                    <li></li>

                                    <li style="border-right:none !important;"></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
        </div>
    </div>
</header>
