<?php

global $post;
$hideTitle = false;
$showSiblingsLinks = get_field('page_show_siblings_links', $post->post_parent)
    || get_field('page_show_siblings_links');
?>
<?php get_header(); ?>
    <div class="cards-holder slider-top verticals-slider" >
        <div class="card active card-1" style="display: block; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/constr-bg.jpg); background-size: cover;">
            <?php  if(pll_current_language('slug') == 'en'){ ?>
                <div class="card-bg-small visible-xs" style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/constr-mob-en.jpg);" data-initial-width="600" data-initial-height="211">
                     <div style="font-weight: 500;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Why choose proMX for </br>your Construction Company?</div>
                </div>

                <div class="visible-xs" style="padding:20px;">
                    <p>
			<span style="position:relative;font-weight: 100;font-style: italic;font-size:1.5em;">
                proMX provides clients with diverse software solutions for construction planning.
                Because of the complexity of the processes typical in this industry, implementation of appropriate
                software is very useful and effective. With proMX, you will get a customized solution based on Microsoft
                Dynamics CRM that will manage all processes during the construction cycle.
            </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/en/actions/request/" class="btn-vertical-mobile" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')">
                        <span>Request our services now!</span></a>
                </div>

                <div class="visible-sm" style="padding:20px;">
                   <span style="font-weight: 500;font-style: italic;font-size:3em;color:#791239;top:5%;position:relative;">Why choose proMX for your Construction Company?</span>
                    <p>
			<span style="position:relative;font-weight: 100;font-style: italic;font-size:2em;top:20px;color:#791239;">
                proMX provides clients with diverse software solutions for construction planning.
                Because of the complexity of the processes typical in this industry, implementation of appropriate
                software is very useful and effective. With proMX, you will get a customized solution based on Microsoft
                Dynamics CRM that will manage all processes during the construction cycle.</span>
                    </p>
                    <a  href="<?php echo get_site_url(); ?>/en/actions/request/" style="position:relative;top:30px;" class="pro-btn" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')"><span>Request our services now!</span></a>
                </div>



            <?php } else { ?>
                <div class="card-bg-small visible-xs " style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/constr-mob-de.jpg);" data-initial-width="600" data-initial-height="211">
                   <div style="font-weight: 500;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Warum die proMX</br>für Ihr Bauunternehmen?</div>
                </div>

                <div class="visible-xs" style="padding:20px;">
                    <p>
                <span style="position:relative;font-weight: 100;top:-10px;font-style: italic;font-size:1.5em;">
                    Die proMX GmbH bietet ihren Kunden vielfältige Softwarelösungen für die Bauplanung an.
                    Durch die Komplexität der Vorgänge, die für diese Branche charakteristisch sind, ist die Einführung
                    einer geeigneten Software sehr hilfreich und effektiv. Mit der proMX GmbH erhalten Sie eine perfekt angepasste,
                    auf Microsoft Dynamics CRM basierende Lösung, die alle Prozesse während des Bauzyklus verwaltet.
                </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')" class="btn-vertical-mobile">
                        <span style="height: auto;">Fordern Sie jetzt unsere Dienstleistungen an!</span>
                    </a>

                </div>


                <div class="visible-sm" style="padding:20px;">
                   <span class="visible-sm" style="font-weight: 500;font-style: italic;font-size:3em;color:#791239;top:5%;position:relative;">Warum die proMX GmbH Ihr Partner für Ihr Unternehmen ist?</span>
                    <p>
               <span style="position:relative;color:#791239;font-weight: 100;top:20px;font-style: italic;font-size:2em;">
                    Die proMX GmbH bietet ihren Kunden vielfältige Softwarelösungen für die Bauplanung an.
                    Durch die Komplexität der Vorgänge, die für diese Branche charakteristisch sind, ist die Einführung
                    einer geeigneten Software sehr hilfreich und effektiv. Mit der proMX GmbH erhalten Sie eine perfekt angepasste,
                    auf Microsoft Dynamics CRM basierende Lösung, die alle Prozesse während des Bauzyklus verwaltet.
                </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" style="position:relative;top:30px;" class="pro-btn" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')"><span>Fordern Sie jetzt unsere Dienstleistungen an!</span></a>

                </div>

            <?php } ?>


            <div class="card-bg visible-md visible-lg" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/constr-big.jpg);"      data-initial-width="1600" data-initial-height="540">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 card-col">
                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                       <img class="verticals-icon" style="float:right;top:50px;position:relative;height:180px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/services/bau-en.jpg" />
							
                            <?php } else { ?>
                                <img class="verticals-icon" style="float:right;top:50px;position:relative;height:180px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/services/bau-de.jpg" />
                            <?php } ?>

                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                                 <span class="verticals-text visible-md visible-lg" style="position:relative;color:#791239;top:40px;font-weight: 500;font-style: italic;font-size:1.8em;">Why choose proMX for your Construction Company?</span>

                            <?php } else { ?>
                                 <span class="verticals-text visible-md visible-lg" style="position:relative;color:#791239;top:40px;font-weight: 500;font-style: italic;font-size:1.8em;">Warum die proMX GmbH Ihr Partner für Ihr Unternehmen ist?</span>

                            <?php } ?>

                            <div class="verticals-textholder visible-md visible-lg">
                                <p>
                                    <?php  if(pll_current_language('slug') == 'en'){ ?>
										 <span class="vertical-slide-text" style="position:relative;font-weight: 100;top:50px;font-style: italic;color:#791239;">
                                        proMX provides clients with diverse software solutions for construction planning. Because of the complexity of
                                        the processes typical in this industry, implementation of appropriate software is very useful and effective.
                                        With proMX, you will get a customized solution based on Microsoft Dynamics CRM that will manage all processes during the construction cycle.
                                    </span>
                                    <?php } else { ?>
										<span class="vertical-slide-text" style="position:relative;font-weight: 100;top:50px;font-style: italic;color:#791239;">
                                        Die proMX GmbH bietet ihren Kunden vielfältige Softwarelösungen für die Bauplanung an.
                                        Durch die Komplexität der Vorgänge, die für diese Branche charakteristisch sind, ist die Einführung
                                        einer geeigneten Software sehr hilfreich und effektiv. Mit der proMX GmbH erhalten Sie eine perfekt angepasste,
                                        auf Microsoft Dynamics CRM basierende Lösung, die alle Prozesse während des Bauzyklus verwaltet.</span>
                                    <?php } ?>
                                </p>


                                <?php  if(pll_current_language('slug') == 'en'){ ?>
                                    <a   href="<?php echo get_site_url(); ?>/en/actions/request/" style="position:relative;font-size: 1.2em;" class="pro-btn btn-vertical" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')"><span>Request our services now!</span></a>
                                <?php } else { ?>
                                    <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" style="position:relative;font-size: 1.2em;" class="pro-btn btn-vertical" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')"><span>Fordern Sie jetzt unsere Dienstleistungen an!</span></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-12">
            <div style="margin-top:50px;">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <center><h1 class="first-block-header-vertical">What does proMX GmbH offer you for your successful Construction Business?</h1></center>
                <?php } else { ?>
                    <center><h1 class="first-block-header-vertical">Was bietet Ihnen die proMX GmbH für Ihr erfolgreiches Unternehmen an?</h1></center>
                <?php } ?>
            </div>


            <div class="row" style="margin-top:30px;">
                <div  class="col-sm-3 col-xs-12 verticals-inner" style="background-color: #6c1234;">
                    <?php  if(pll_current_language('slug') == 'en'){ ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">A wide range of</br>products and solutions</span>
                    <?php } else { ?>
                        <span style="font-size:17px;color:#ffffff;position:relative;bottom:-15px;">Breite Produkten- </br>und Lösungspalette </span>
                    <?php } ?>
                    <img style="float:right;margin-right:-15px;margin-top:-15px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/verticals-block-first.png">
                </div>

                <div  class="col-sm-3 col-xs-12 verticals-inner" style="background-color: #6c1234;">
                    <?php  if(pll_current_language('slug') == 'en'){ ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Experience</br>in Construction Industry</span>
                    <?php } else { ?>
                        <span style="font-size:17px;color:#ffffff;position:relative;bottom:-15px;">Langjährige Erfahrung </br>in Bauzulieferungsindustrie</span>
                    <?php } ?>
                    <img style="float:right;margin-right:-15px;margin-top:-15px;height:78px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/verticals-block-second.png">
                </div>

                <div  class="col-sm-3 col-xs-12 verticals-inner" style="background-color: #6c1234;">
                    <?php  if(pll_current_language('slug') == 'en'){ ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Client-oriented</br>approach</span>
                    <?php } else { ?>
                        <span style="font-size:17px;color:#ffffff;position:relative;bottom:-15px;">Kundenorientierter</br>Ansatz</span>
                    <?php } ?>
                    <img style="float:right;margin-right:-15px;margin-top:-15px;height:78px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/verticals-block-third.png">
                </div>
            </div>
        </div>
    </div>



    <div style="background-color:#ededed;margin-top:50px;padding-bottom: 30px;">
        <div class="container">
            <div class="col-sm-12">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <center><h1 class="first-block-header-vertical">Use our basis package and implement the Microsoft Dynamics CRM system in your company.</h1></center>
                <?php } else { ?>
                    <center><h1 class="first-block-header-vertical">Nutzen Sie unser Basispaket und führen Sie das Microsoft Dynamics CRM-System in Ihrem Unternehmen ein.</h1></center>
                <?php } ?>
                <center>
                    <div class="row" style="margin-top:80px;margin-bottom:50px;">
                        <div class="col-sm-4">
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/vertical-icon-second.png">
                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                            <div><p style="font-weight:500;margin-top:22px;">CRM customization  workshop</p>
                                Our proMX experts will estimate your company’s needs and prepare a tailored solution based on Microsoft Dynamics CRM.</div>
                        </div>
                        <?php } else { ?>
                        <div><p style="font-weight:500;margin-top:22px;">CRM-Anpassungsworkshop</p>
                            Unsere proMX-Experten bewerten Ihre Unternehmensbedürfnisse und vorbereiten für Sie eine zugeschnittene auf Microsoft Dynamics CRM basierende Lösung.</div>
                    </div>
                    <?php } ?>

                    <div class="col-sm-4 visible-sm visible-md visible-lg">
                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/vertical-first-icon.png">
                        <?php  if(pll_current_language('slug') == 'en'){ ?>
                        <div><p style="font-weight:500;margin-top:20px;">CRM installation</p>
                            We will implement a perfectly customized CRM solution from Microsoft in your company.</div>
                    </div>
                    <?php } else { ?>
                    <div><p style="font-weight:500;margin-top:20px;">CRM-Installation</p>
                        Wir implementieren eine perfekt maßgeschneiderte CRM-Lösung von Microsoft in Ihrem Unternehmen.</div>
            </div>
            <?php } ?>
			
			    <div class="col-sm-4 visible-xs" style="margin-top:35px;">
                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/vertical-first-icon.png">
                        <?php  if(pll_current_language('slug') == 'en'){ ?>
                        <div><p style="font-weight:500;margin-top:20px;">CRM installation</p>
                            We will implement a perfectly customized CRM solution from Microsoft in your company.</div>
                    </div>
                    <?php } else { ?>
                    <div><p style="font-weight:500;margin-top:20px;">CRM-Installation</p>
                        Wir implementieren eine perfekt maßgeschneiderte CRM-Lösung von Microsoft in Ihrem Unternehmen.</div>
            </div>
            <?php } ?>


            <div class="col-sm-4" style="margin-top:35px;">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/vertical-icon-third.png">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                <div><p style="font-weight:500;margin-top:20px;">Training on the Job</p>
                    The proMX-Team will provide your employees with full-fledged support during the whole training phase.</div>
            </div>
            <?php } else { ?>
            <div><p style="font-weight:500;margin-top:20px;">Training on the Job</p>
                Anschließend garantiert das proMX-Team Ihren Mitarbeitern eine vollständige Unterstützung während der ganzen Einarbeitungsphase.</div>
        </div>
        <?php } ?>
    </div></center>

    </div>
<?php  if(pll_current_language('slug') == 'en'){ ?>
    <strong><p>Before requesting our services, please do not hesitate to check<br>the free Demo versions of our products.</p></strong>
    <a  href="http://promx.net/en/actions/online-demo/" style="position:relative;" class="pro-btn" onclick="_gaq.push(['_trackEvent', 'Demo-EN', 'Click', 'Demo'])">
        <span>Go to the Online Demos</span></a>

<?php } else { ?>
    <strong><p>Bevor Sie unsere Dienstleistungen anfordern, zögern Sie bitte nicht, die kostenlosen Demo-Versionen </br>unserer Produkte zu probieren.</p></strong>
    <a  href="http://promx.net/de/aktionen/schnell-check/" style="position:relative;" class="pro-btn" onclick="_gaq.push(['_trackEvent', 'WDemo-DE', 'Click', 'Demo'])">
        <span>Zu den Schnell-Checks</span></a>

<?php } ?>
    </div>
    </div>


    <div class="container" style="margin-bottom:-15px;">
        <div class="col-sm-12">
            <?php  if(pll_current_language('slug') == 'en'){ ?>
                <center><h1 class="first-block-header-vertical" style="padding-bottom:20px;">These Construction Companies rely on us:</h1></center>
            <?php } else { ?>
                <center><h1 class="first-block-header-vertical" style="padding-bottom:20px;">Diese Bau- und  Bauzulieferungs&shy;unternehmen vertrauen auf uns:</h1></center>
            <?php } ?>
            <?php echo do_shortcode( '[widgetarea name=construction-industry]' ); ?>
        </div>

    </div>

    <div style="background-color:#ededed;position: relative;bottom:-25px;">
        <div class="container">
            <div class="col-sm-12">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <h1 class="first-block-header-vertical">About the industry:</h1>
                    <p style="text-align: justify; margin-top:-42px;"></br>
                        It is hard to imagine the number of simultaneous, ongoing processes during any building
                        and construction practice. Only experienced specialists really realize the complexity of projects in this industry..</p>

                    <p>Thus, construction project management software solutions, which are able to organize and manage all the internal
                        and external activities, are usually complex as well. Frequently, for construction, building, and architecture
                        companies with hundreds and thousands of employees, a major problem is to find the proper software solution, to
                        implement one with specific requirements and to have enough resources to spend teaching specialists to use it
                        in efficient way. Even more problematic is to change the software if it does not fit all the requirements.
                        As a result, a company may fall into a trap when it continues to adapt its processes to solve the problems
                        created by a short-term solution, but fails to deal with the original issue.</p>

                    <p>Having a great experience with adapting construction, building or architectural software solutions,
                        developed on the basis of Microsoft Dynamics CRM to the needs of the customers, proMX GmbH is
                        proud of successful implementations and results achieved by our customers. Their feedback and
                        <a href="http://promx.net/en/references/">stories of success</a> are the best evidence of our expertise.</p>

                    <div style="padding-bottom:80px;margin-top:40px;">
                        <strong><p>Feel free to request a business oriented webcast for your company and learn more about</br>the crucial benefits of our products.</p></strong>


                        <a  href="http://promx.net/en/actions/online-demo/" style="position:relative;" class="pro-btn" onclick="_gaq.push(['_trackEvent', 'Webinar-EN', 'Click', 'Webinar'])">
                            <span>Go to the Webcasts</span></a></div>
                <?php } else { ?>
                    <h1 class="first-block-header-vertical">Über die Branche:</h1>
                    <div style="text-align: justify; margin-top:-42px;"></br><p>
                        <p>Man kann sich kaum vorstellen, wie viele Prozesse bei einem Bauvorhaben gleichzeitig ablaufen.
                            Nur spezialisierte Fachkräfte können den Umfang und die Komplexität eines Bauprojektes wirklich beurteilen.
                            Dementsprechend sind auch die meisten Bau-Projektmanagement-Software-Lösungen kompliziert, die alle internen
                            und externen Prozesse organisieren und verwalten. Die großen Bau- und Architekturunternehmen mit zahlreichen
                            Mitarbeitern haben häufig Probleme, eine geeignete Softwarelösung zu finden, die alle spezifischen Anforderungen
                            erfüllt und gleichzeitig über genügend Ressourcen für die effiziente Schulung der Mitarbeiter verfügt.</p>

                        <p>Noch problematischer gestaltet sich ein Wechsel der bestehenden Software, wenn diese nicht die
                            notwendigen Anforderungen erfüllt. Folglich passt das Unternehmen immer wieder Prozesse an,
                            um die Probleme mit der unzureichenden Software in den Griff zu bekommen, löst damit aber nicht
                            das eigentliche Problem, sondern verstrickt sich immer weiter in den unternehmensinternen Problemen,
                            bis es schließlich ohnmächtig den uferlosen Problemen gegenübersteht.</p>

                        <p>Die proMX GmbH verfügt über viel Erfahrung bei der kundenorientierten Anpassung der Bauplanungssoftware,
                            der Hochbau-Software sowie der Software für Architekten, die auf Microsoft Dynamics CRM basieren. Wir sind stolz,
                            dass diese Lösungen erfolgreich implementiert werden konnten und die Kunden damit beste Ergebnisse erzielen.</p>

                        <p>Die zahlreichen positiven Rückmeldungen und <a href="http://promx.net/de/referenzen/">Erfahrungsberichte</a> sind der beste Beweis dafür.</p>
                    </div>

                    <div style="padding-bottom:80px;margin-top:40px;">



                        <strong><p>Vereinbaren Sie ein branchenorientiertes Webinar für Ihr Unternehmen und erfahren</br>Sie mehr über die wichtigsten Vorteile unserer Produkte. </p></strong>
                        <a  href="http://promx.net/de/aktionen/schnell-check/" style="position:relative;important;" class="pro-btn" onclick="_gaq.push(['_trackEvent', 'Webinar-DE', 'Click', 'Webinar'])">
                            <span>Zu den Webinaren</span></a>


                    </div>
                <?php } ?>

            </div>

        </div>
    </div>











    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>





        <?php if (!$hideTitle) { ?>


        <?php }
        ?>

        <?php if (is_search()) { ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        <?php } else { ?>
            <div class="entry-content">


                <?php
                the_content();
                wp_link_pages(array(
                    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', ProRMTheme::TEXTDOMAIN) . '</span>',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
        <?php } ?>

        <?php edit_post_link(__('Edit', ProRMTheme::TEXTDOMAIN), '<p class="edit-link">', '</p>'); ?>
        <?php the_tags('<div class="entry-meta"><span class="tag-links">', '', '</span></div>'); ?>

        <?php if ($showSiblingsLinks) { ?>
            <?php echo ProRMTheme::getPreviousPageLink('<div class="app-side-link app-prev" >%link</div>'); ?>
            <?php echo ProRMTheme::getNextPageLink('<div class="app-side-link app-next" style="bottom: 0px;">%link</div>'); ?>
        <?php } ?>


    </article>
<?php get_footer(); ?>