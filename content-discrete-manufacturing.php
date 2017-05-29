<?php

global $post;
$hideTitle = false;
$showSiblingsLinks = get_field('page_show_siblings_links', $post->post_parent)
    || get_field('page_show_siblings_links');
?>
<?php get_header(); ?>
    <div class="cards-holder slider-top verticals-slider" >
        <div class="card active card-1" style="display: block; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/discrete-bg.jpg); background-size: cover;">
            <?php  if(pll_current_language('slug') == 'en'){ ?>
                <div class="card-bg-small visible-xs" style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/discrete-mob-en.jpg);" data-initial-width="600" data-initial-height="211">
                    <div style="font-weight: 500;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Why choose proMX</br>for your</br>Discrete Manufacturing</br> Company?</div>
                </div>

                <div class="visible-xs" style="padding:20px;">
                    <p>
			<span style="position:relative;font-weight: 100;font-style: italic;font-size:1.5em;">
                The simultaneous execution and management of multiple processes typical for discrete
                manufacturing often requires extensive time and effort. Specialized software for manufacturing
                and warehouse management based on Microsoft Dynamics CRM makes your resource and project management
                easier and allows you to concentrate solely on manufacturing processes.
            </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/en/actions/request/" class="btn-vertical-mobile" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')">
                        <span>Request our services now!</span></a>
                </div>

                <div class="visible-sm" style="padding:20px;">
                    <span style="font-weight: 500;font-style: italic;font-size:2.5em;color:#791239;top:5%;position:relative;">Why choose proMX for your Discrete Manufacturing Company?</span>
                    <p>
			  <span style="position:relative;font-weight: 100;font-style: italic;font-size:2em;color:#791239;top:20px;">
                The simultaneous execution and management of multiple processes typical for discrete
                manufacturing often requires extensive time and effort. Specialized software for manufacturing
                and warehouse management based on Microsoft Dynamics CRM makes your resource and project management
                easier and allows you to concentrate solely on manufacturing processes.</span>
                    </p>
                    <a  href="<?php echo get_site_url(); ?>/en/actions/request/" style="position:relative;top:30px;" class="pro-btn" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')"><span>Request our services now!</span></a>
                </div>



            <?php } else { ?>
                <div class="card-bg-small visible-xs " style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/discrete-mob-de.jpg);" data-initial-width="600" data-initial-height="211">
					<div style="font-weight: 500;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Warum die proMX für</br>Ihr Unternehmen</br>für Diskrete Fertigung?</div>
                </div>

                <div class="visible-xs" style="padding:20px;">
                    <p>
                <span style="position:relative;font-weight: 100;top:-10px;font-style: italic;font-size:1.5em;">
                    Die gleichzeitige Ausführung unterschiedlicher Prozesse und deren Verwaltung, die für die diskrete
                    Fertigung typisch sind, kosten manchmal viel Zeit und Aufwand. Die von der proMX GmbH implementierte
                    Fachsoftware für den Fertigungsprozess und die Lagerverwaltung basiert ausschließlich auf dem Microsoft Dynamics CRM-System
                    und vereinfacht Ihr Projekt- und Ressourcenmanagement und Sie können sich voll und ganz auf den Fertigungsprozess konzentrieren.
                </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')" class="btn-vertical-mobile">
                        <span style="height: auto;">Fordern Sie jetzt unsere Dienstleistungen an!</span>
                    </a>

                </div>


                <div class="visible-sm" style="padding:20px;">
                    <span class="visible-sm" style="font-weight: 500;font-style: italic;font-size:2.5em;color:#791239;top:5%;position:relative;">Warum die proMX für Ihr Unternehmen für Diskrete Fertigung?</span>
                    <p>
                <span style="position:relative;color:#791239;font-weight: 100;top:20px;font-style: italic;font-size:2em;">
                    Die gleichzeitige Ausführung unterschiedlicher Prozesse und deren Verwaltung, die für die diskrete
                    Fertigung typisch sind, kosten manchmal viel Zeit und Aufwand. Die von der proMX GmbH implementierte
                    Fachsoftware für den Fertigungsprozess und die Lagerverwaltung basiert ausschließlich auf dem Microsoft Dynamics CRM-System
                    und vereinfacht Ihr Projekt- und Ressourcenmanagement und Sie können sich voll und ganz auf den Fertigungsprozess konzentrieren.
                </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" style="position:relative;top:30px;" class="pro-btn" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')"><span>Fordern Sie jetzt unsere Dienstleistungen an!</span></a>

                </div>

            <?php } ?>


            <div class="card-bg visible-md visible-lg" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/discrete-big.jpg);"      data-initial-width="1600" data-initial-height="540">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 card-col">
                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                                                      <img class="verticals-icon" style="float:right;top:50px;position:relative;height:180px" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/services/Discrete.jpg" />

                            <?php } else { ?>
                                <img class="verticals-icon" style="float:right;top:50px;position:relative;height:180px" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/services/Discrete-de.jpg" />
                            <?php } ?>

                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                                <span class="verticals-text visible-md visible-lg" style="position:relative;color:#791239;top:40px;font-weight: 500;font-style: italic;font-size:1.8em;">Why choose proMX for your Discrete Manufacturing Company?</span>

                            <?php } else { ?>
                                <span class="verticals-text visible-md visible-lg" style="position:relative;color:#791239;top:40px;font-weight: 500;font-style: italic;font-size:1.8em;">Warum die proMX für Ihr Unternehmen für Diskrete Fertigung?</span>

                            <?php } ?>

                            <div class="verticals-textholder visible-md visible-lg">
                                <p>
                                    <?php  if(pll_current_language('slug') == 'en'){ ?>
                                    <span class="vertical-slide-text" style="position:relative;color:#791239;font-weight: 100;top:50px;font-style: italic;">
                                        The simultaneous execution and management of multiple processes typical for discrete
                                        manufacturing often requires extensive time and effort. Specialized software for manufacturing
                                        and warehouse management based on Microsoft Dynamics CRM makes your resource and project management
                                        easier and allows you to concentrate solely on manufacturing processes.
                                    </span>
                                    <?php } else { ?>
                                    <span class="vertical-slide-text" style="position:relative;color:#791239;font-weight: 100;top:50px;font-style: italic;">
                                        Die gleichzeitige Ausführung unterschiedlicher Prozesse und deren Verwaltung, die für die diskrete
                                        Fertigung typisch sind, kosten manchmal viel Zeit und Aufwand. Die von der proMX GmbH implementierte
                                        Fachsoftware für den Fertigungsprozess und die Lagerverwaltung basiert ausschließlich auf dem Microsoft Dynamics CRM-System
                                        und vereinfacht Ihr Projekt- und Ressourcenmanagement und Sie können sich voll und ganz auf den Fertigungsprozess konzentrieren.</span>
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
                    <center><h1 class="first-block-header-vertical">What does proMX GmbH offer you for your successful Discrete Manufacturing Business?</h1></center>
                <?php } else { ?>
                    <center><h1 class="first-block-header-vertical">Was bietet Ihnen die proMX GmbH für Ihren erfolgreichen Fertigungsvorgang an?</h1></center>
                <?php } ?>
            </div>


            <div class="row" style="margin-top:30px;">
                <div  class="col-sm-3 col-xs-12 verticals-inner" style="background-color: #6c1234;">
                    <?php  if(pll_current_language('slug') == 'en'){ ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">A wide range of</br>products and solutions</span>
                    <?php } else { ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Breite Produkten- </br>und Lösungspalette </span>
                    <?php } ?>
                    <img style="float:right;margin-right:-15px;margin-top:-15px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/verticals-block-first.png">
                </div>

                <div  class="col-sm-3 col-xs-12 verticals-inner" style="background-color: #6c1234;">
                    <?php  if(pll_current_language('slug') == 'en'){ ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Experience</br>in Discrete Manufacturing</span>
                    <?php } else { ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Langjährige Erfahrung </br>in Diskreter Fertigung</span>
                    <?php } ?>
                    <img style="float:right;margin-right:-15px;margin-top:-15px;height:78px;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals/verticals-block-second.png">
                </div>

                <div  class="col-sm-3 col-xs-12 verticals-inner" style="background-color: #6c1234;">
                    <?php  if(pll_current_language('slug') == 'en'){ ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Client-oriented</br>approach</span>
                    <?php } else { ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Kundenorientierter</br>Ansatz</span>
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
                <center><h1 class="first-block-header-vertical" style="padding-bottom:20px;">These Discrete Manufacturing Companies rely on us:</h1></center>
            <?php } else { ?>
                <center><h1 class="first-block-header-vertical" style="padding-bottom:20px;">Diese Unternehmen für Diskrete Fertigung vertrauen auf uns:</h1></center>
            <?php } ?>
            <?php echo do_shortcode( '[widgetarea name=discrete]' ); ?>
        </div>

    </div>

    <div style="background-color:#ededed;position: relative;bottom:-25px;">
        <div class="container">
            <div class="col-sm-12">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <h1 class="first-block-header-vertical">About the industry:</h1>
                    <p style="text-align: justify; margin-top:-42px;"></br>
                        What is the most distinctive feature of discrete manufacturing? Of course,
                        it is the large number of different processes that may need to be executed
                        simultaneously or successively. The biggest difference between discrete and
                        continuous manufacturing is that continuous, or process manufacturing, is based on mixing
                        components using formulas or receipts (e.g. food industry, pharmacy). Discrete manufacturing,
                        on the other hand, is concerned with the assembly of different pieces, each of which is identified
                        by a part number and is individually counted. Typical examples of end products of discrete manufacturing
                        are automobiles, airplanes, PCs as well as a variety of household items.</p>

                    <p>There are two main forms of discrete manufacturing: production by lot size and make-to-order production,
                       which is characterized by volume and complexity of the production. To regulate all the processes connected with production,
                       paper and pen are no longer sufficient. Every manufacturing manager has to think about how to increase the manufacturing efficiency
                       while ensuring that the quality and production period do not suffer. That is why specialized software is very helpful for every manufacturing enterprise.</p>

                    <p>Manufacturing software can be used at any stage of the production cycle: from production order creation, to production itself and even quality
                       inspection. Just as important is implementation of inventory tracking software, which inventories all parts with their quantity, item and serial numbers.</p>

                    <p>Being an experienced manufacturing consultant in fields such as manufacturing systems and manufacturing management,
                        proMX will effectively help you choose the best software solution for your company, which is developed based
                        on Microsoft Dynamics CRM and its extensions. Our team will implement it, and show you how to use it in the
                        most productive way possible. If you want to know more about collaboration with proMX, you can find feedback
                        and experience reports from our clients <a href="http://promx.net/en/references/">here</a>.</p>

                    <div style="padding-bottom:80px;margin-top:40px;">
                        <strong><p>Feel free to request a business oriented webcast for your company and learn more about</br>the crucial benefits of our products.</p></strong>


                        <a  href="http://promx.net/en/actions/online-demo/" style="position:relative;" class="pro-btn" onclick="_gaq.push(['_trackEvent', 'Webinar-EN', 'Click', 'Webinar'])">
                            <span>Go to the Webcasts</span></a></div>
                <?php } else { ?>
                    <h1 class="first-block-header-vertical">Über die Branche:</h1>
                    <div style="text-align: justify; margin-top:-42px;"></br><p>
                        <p>
                            Was ist das wichtigste Merkmal der diskreten Fertigung? Natürlich, dass viele unterschiedliche
                            Prozesse sowohl gleichzeitig als auch nacheinander ausgeführt werden. Der größte Unterschied zwischen
                            diskreter und kontinuierlicher Fertigung besteht darin, dass die kontinuierliche, prozessorientierte
                            Fertigung auf der Mischung von Komponenten anhand einer vorhandenen Formel oder eines Rezeptes basiert
                            (wie z.B. in der Nahrungsmittelindustrie oder bei der Arzneimittelherstellung). Bei der diskreten Fertigung
                            dagegen geht es um die Zusammensetzung verschiedener Einzelteile, von denen jedes durch eine Artikelnummer
                            gekennzeichnet ist und einzeln gezählt wird. Typische Beispiele für Endprodukte diskreter Fertigung sind Fahrzeuge,
                            Flugzeuge, PCs sowie alle Haushaltswaren.
                        </p>

                        <p>Man unterscheidet zwei Grundformen der diskreten Fertigung: Chargenfertigung und Auftragsproduktion, die sich in
                            Produktionsumfang und -komplexität unterscheiden. Um alle mit der Produktion verbundenen Prozesse zu regeln,
                            reichen natürlich Papier und Stift nicht mehr aus. Jeder Fertigungsleiter muss darüber nachdenken, wie er die
                            Produktionseffizienz steigern kann, ohne dass die Qualität sinkt und sich der Fertigungszeitraum verlängert.
                            Aus diesem Grund ist eine spezielle Software für Fertigungsunternehmen sehr hilfreich. Die Fertigungssoftware
                            kann in jedem Abschnitt des ganzen Produktionszyklus genutzt werden: von der Fertigungsauftragserstellung über
                            die Fertigungsdurchführung bis hin zur Qualitätsprüfung. Genauso wichtig ist die Implementierung einer Lagerverwaltungssoftware,
                            mit der man alle Einzelteile mit Artikel- und Seriennummer erfassen kann.</p>

                        <p>Als erfahrener Produktionsberater in den Bereichen Fertigungssysteme und Produktionssteuerung kann die proMX GmbH Ihnen helfen,
                            die beste, auf Microsoft Dynamics CRM basierende Softwarelösung in Ihrem Unternehmen zu implementieren und produktiv einzusetzen.</p>

                        <p>Wenn Sie mehr über die Zusammenarbeit mit der proMX GmbH erfahren möchten, können Sie <a href="http://promx.net/de/referenzen/">hier</a> Rückmeldungen und Erfahrungsberichte unserer Kunden lesen.</p>
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