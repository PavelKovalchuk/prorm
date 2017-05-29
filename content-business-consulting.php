<?php

global $post;
$hideTitle = false;
$showSiblingsLinks = get_field('page_show_siblings_links', $post->post_parent)
    || get_field('page_show_siblings_links');
?>
<?php get_header(); ?>
<div class="cards-holder slider-top verticals-slider" >
    <div class="card active card-1" style="display: block; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/business-bg.jpg); background-size: cover;">
<?php  if(pll_current_language('slug') == 'en'){ ?>
        <div class="card-bg-small visible-xs" style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/bus-mob-en.jpg);" data-initial-width="600" data-initial-height="211">
		<div style="font-weight: 500;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Why choose proMX</br>for your Business</br>Consulting Company?</div>
		</div>

         <div class="visible-xs" style="padding:20px;">
		    <p>
			<span style="position:relative;font-weight: 100;font-style: italic;font-size:1.5em;">
                Consulting companies, which advise clients on company management, often
                have complications with resource planning, project and customer relationship
                management themselves. proMX specializes in assisting consulting companies to quickly
                and effectively solve problems related to all aspects of management, thereby using the
                approach based on the Microsoft Dynamics CRM system.
            </span>
			</p>

			<a  href="<?php echo get_site_url(); ?>/en/actions/request/" class="btn-vertical-mobile" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')">
			<span>Request our services now!</span></a>
         </div>

         <div class="visible-sm" style="padding:20px;">
			<span style="font-weight: 500;font-style: italic;font-size:2.5em;color:#791239;top:5%;position:relative;">Why choose proMX for your Business Consulting Company?</span>
			 <p>
			 <span style="position:relative;font-weight: 100;font-style: italic;font-size:2em;color:#791239;top:20px;">
                Consulting companies, which advise clients on company management, often
                have complications with resource planning, project and customer relationship
                management themselves. proMX specializes in assisting consulting companies to
                quickly and effectively solve problems related to all aspects of management,
                thereby using the approach based on the Microsoft Dynamics CRM system. </span>
			 </p>
			 <a  href="<?php echo get_site_url(); ?>/en/actions/request/" style="position:relative;top:30px;" class="pro-btn" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')"><span>Request our services now!</span></a>
			 </div>



         <?php } else { ?>
            <div class="card-bg-small visible-xs " style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/bus-mob-de.jpg);" data-initial-width="600" data-initial-height="211">
				<div style="font-weight: 500;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Warum die proMX </br>für Ihr</br> Business-Consulting-</br>Unternehmen?</div>
             </div>

            <div class="visible-xs" style="padding:20px;">
                <p>
                <span style="position:relative;font-weight: 100;top:-10px;font-style: italic;font-size:1.5em;">
                    Beratungshäuser, die ihre Kunden zur Unternehmensführung beraten, haben oft selbst
                    Schwierigkeiten mit der Ressourcen-Planung, dem Projekt- und Kundenbeziehungsmanagement.
                    Die proMX GmbH bietet den Beratungsunternehmen eine auf Microsoft Dynamics CRM basierende Lösung an,
                    mit deren Hilfe alle mit der Verwaltung verbundenen Probleme schnell und wirksam gelöst werden.
                </span>
                </p>

                <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')" class="btn-vertical-mobile">
                    <span style="height: auto;">Fordern Sie jetzt unsere Dienstleistungen an!</span>
                </a>

            </div>


            <div class="visible-sm" style="padding:20px;">
		        <span class="visible-sm" style="font-weight: 500;font-style: italic;font-size:2.5em;color:#791239;top:5%;position:relative;">Warum die proMX für Ihr Business-Consulting-Unternehmen?</span>
                <p>
                 <span style="position:relative;color:#791239;font-weight: 100;top:20px;font-style: italic;font-size:2em;">
                    Beratungshäuser, die ihre Kunden zur Unternehmensführung beraten, haben oft selbst Schwierigkeiten mit
                    der Ressourcen-Planung, dem Projekt- und Kundenbeziehungsmanagement. Die proMX GmbH bietet den Beratungsunternehmen
                    eine auf Microsoft Dynamics CRM basierende Lösung an, mit deren Hilfe alle mit der Verwaltung verbundenen Probleme schnell und wirksam gelöst werden.
                </span>
                </p>

                <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" style="position:relative;top:30px;" class="pro-btn" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')"><span>Fordern Sie jetzt unsere Dienstleistungen an!</span></a>

            </div>

         <?php } ?>


        <div class="card-bg visible-md visible-lg" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/business-big.jpg);"      data-initial-width="1600" data-initial-height="540">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 card-col">
					 <?php  if(pll_current_language('slug') == 'en'){ ?>
									<img class="verticals-icon" style="float:right;top:50px;position:relative;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/services/bus-en.jpg" />

                                <?php } else { ?>
                                    <img class="verticals-icon" style="float:right;top:50px;position:relative;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/services/bus-de.jpg" />
                                <?php } ?>

                                <?php  if(pll_current_language('slug') == 'en'){ ?>
                                       <span class="verticals-text visible-md visible-lg" style="position:relative;color:#791239;top:40px;font-weight: 500;font-style: italic;font-size:1.8em;">Why choose proMX for your Business Consulting Company?</span>

                                <?php } else { ?>
                                    <span class="verticals-text visible-md visible-lg" style="position:relative;color:#791239;font-weight: 500;top:40px;font-style: italic;font-size:1.8em;">Warum die proMX für Ihr Business-Consulting-Unternehmen?</span>

                                <?php } ?>

                     <div class="verticals-textholder visible-md visible-lg">
                            <p>
                                <?php  if(pll_current_language('slug') == 'en'){ ?>
									<span class="vertical-slide-text"  style="position:relative;color:#791239;font-weight: 100;top:50px;font-style: italic;">
                                        Consulting companies, which advise clients on company management,
                                        often have complications with resource planning, project and customer
                                        relationship management themselves. proMX specializes in assisting consulting
                                        companies to quickly and effectively solve problems related to all aspects of management,
                                        thereby using the approach based on the Microsoft Dynamics CRM system.
                                    </span>
                                <?php } else { ?>
                                    <span class="vertical-slide-text"  style="position:relative;color:#791239;font-weight: 100;top:50px;font-style: italic;">
                                        Beratungshäuser, die ihre Kunden zur Unternehmensführung beraten, haben oft selbst
                                        Schwierigkeiten mit der Ressourcen-Planung, dem Projekt- und Kundenbeziehungsmanagement.
                                        Die proMX GmbH bietet den Beratungsunternehmen eine auf Microsoft Dynamics CRM basierende Lösung an,
                                        mit deren Hilfe alle mit der Verwaltung verbundenen Probleme schnell und wirksam gelöst werden. </span>
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
                    <center><h1 class="first-block-header-vertical">What does proMX GmbH offer you for your successful Business Consulting?</h1></center>
                <?php } else { ?>
                    <center><h1 class="first-block-header-vertical">Was bietet Ihnen die proMX GmbH für Ihre erfolgreiche Unternehmens&shy;beratung an?</h1></center>
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
                <span style="color:#ffffff;position:relative;bottom:-15px;">Experience</br>in Business Consulting</span>
        <?php } else { ?>
                <span style="color:#ffffff;position:relative;bottom:-15px;">Langjährige Erfahrung </br>in Unternehmensberatung</span>
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
                <center><h1 class="first-block-header-vertical" style="padding-bottom:20px;">These Business Consulting Companies rely on us:</h1></center>
            <?php } else { ?>
                <center><h1 class="first-block-header-vertical" style="padding-bottom:20px;">Diese Business-Consulting-Unternehmen vertrauen auf uns:</h1></center>
            <?php } ?>
                <?php echo do_shortcode( '[widgetarea name=business-consulting]' ); ?>
        </div>

    </div>

    <div style="background-color:#ededed;position: relative;bottom:-25px;">
        <div class="container">
            <div class="col-sm-12">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <h1 class="first-block-header-vertical">About the industry:</h1>
                    <p style="text-align: justify; margin-top:-42px;"></br>
                    Business management consultants ascertain their customers problems
                    concerning future strategy and seek the most productive directions
                    for their business development. They help companies find their own way to success.
                    The experts in this industry often give advice about the implementation of hardware and software,
                    which is designed to solve the main multi-project and multi-resource problems of customers, as well as to
                    organize their customer relationship management.</p>

                    <p>Furthermore, business management consultancy companies usually have their
                    own complex internal structure and must confront the corresponding problems.
                    The scope of internal projects can be huge and unorganized despite the high level of employees’
                    competence. As a result, the KPI decreases and the quality of service worsens.</p>

                    <p>proMX provides its customers with business and project management consulting
                    services making their way to success faster and with more confidence. The complex
                    solutions based on Microsoft technologies as well as a great choice of add-ons, plugins and
                    extensions for Microsoft Dynamics CRM, NAV (Navision), SharePoint Server, and others can be specifically
                    adapted to the needs of unique specialization of any consultancy company. The process of implementation is
                    always well planned and is fully supported by the proMX-team that organizes the trainings and seminars for a company’s employees.</p>

                    <p>Among our most dedicated customers are top project management consulting firms. These firms use our specially designed business solutions and interested in you learning about their success. Please, learn about their success stories <a href="http://promx.net/en/references/">here</a>.</p>

                    <div style="padding-bottom:80px;margin-top:40px;">
                        <strong><p>Feel free to request a business oriented webcast for your company and learn more about</br>the crucial benefits of our products.</p></strong>


                        <a  href="http://promx.net/en/actions/online-demo/" style="position:relative;" class="pro-btn" onclick="_gaq.push(['_trackEvent', 'Webinar-EN', 'Click', 'Webinar'])">
                            <span>Go to the Webcasts</span></a></div>
                <?php } else { ?>
                    <h1 class="first-block-header-vertical">Über die Branche:</h1>
                        <div style="text-align: justify; margin-top:-42px;"></br><p>
                            <p>Unternehmensberater wissen in der Regel mehr über die Probleme ihrer Kunden
                                bezüglich zukünftiger Strategien sowie über die produktivsten Richtungen in der
                                Entwicklung des Unternehmens als die Kunden selbst. Sie kennen die Probleme ihrer
                                Kunden und helfen ihnen, ihren eigenen Weg zum Erfolg zu finden. Die Experten beraten über die
                                Implementierung der geeigneten Hard- und Software, die speziell dafür entwickelt wurde, um Multi-Projekt- und
                                Multi-Ressourcenprobleme zu lösen sowie das Customer-Relationship-Management der Kunden zu organisieren.</p>

                            <p>Beratungsunternehmen haben, ähnlich wie ihre Kunden, eine komplexe interne Struktur und stehen
                                vor vergleichbaren Problemen wie ihre Kunden. Trotz der hohen Kompetenz der Mitarbeiter können
                                interne Projekte manchmal einen sehr großen Umfang annehmen und nicht ausreichend koordiniert sein.
                                Als Folge sinkt die Leistungskennzahl und die Dienstleistungsqualität verschlechtert sich.</p>

                            <p>Beratungsunternehmen haben, ähnlich wie ihre Kunden, eine komplexe interne Struktur und stehen vor
                                vergleichbaren Problemen wie ihre Kunden. Trotz der hohen Kompetenz der Mitarbeiter können interne Projekte manchmal
                                einen sehr großen Umfang annehmen und nicht ausreichend koordiniert sein. Als Folge sinkt die Leistungskennzahl und die
                                Dienstleistungsqualität verschlechtert sich.</p>

                            <p>Zu unseren zufriedenen Kunden gehören Top-Projektmanagement-Beratungsunternehmen, die maßgeschneiderte Business-Lösungen nutzen und gerne ihre Erfolgsgeschichten mit Ihnen teilen. <a href="http://promx.net/de/referenzen/">Hier</a> finden Sie die Erfahrungsberichte.</p>
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