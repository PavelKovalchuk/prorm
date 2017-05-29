<?php

global $post;
$hideTitle = false;
$showSiblingsLinks = get_field('page_show_siblings_links', $post->post_parent)
    || get_field('page_show_siblings_links');
?>
<?php get_header(); ?>
    <div class="cards-holder slider-top verticals-slider" >
        <div class="card active card-1" style="display: block; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/soft-bg.jpg); background-size: cover;">
            <?php  if(pll_current_language('slug') == 'en'){ ?>
                <div class="card-bg-small visible-xs" style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/soft-mob-en.jpg);" data-initial-width="600" data-initial-height="211">
                    <div style="font-weight: 500;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Why choose proMX </br>for your Software Company?</div>
                </div>

                <div class="visible-xs" style="padding:20px;">
                    <p>
			<span style="position:relative;font-weight: 100;font-style: italic;font-size:1.5em;">
                proMX provides consultancy services to software development companies.
                It is not uncommon for a company to be so focused on software development
                and realize that they do not have enough time to solve questions of project
                and resource management. We help such companies by implementing the Microsoft Dynamics CRM solution in their business.
            </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/en/actions/request/" class="btn-vertical-mobile" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')">
                        <span>Request our services now!</span></a>
                </div>

                <div class="visible-sm" style="padding:20px;">
                    <span style="font-weight: 500;font-style: italic;font-size:2.5em;color:#791239;top:5%;position:relative;">Why choose proMX for your Software Company?</span>
                    <p>
                     <span style="position:relative;font-weight: 100;font-style: italic;font-size:2em;color:#791239;;top:20px;">
                        proMX provides consultancy services to software development companies.
                         It is not uncommon for a company to be so focused on software development and realize
                         that they do not have enough time to solve questions of project and resource management.
                         We help such companies by implementing the Microsoft Dynamics CRM solution in their business.
                     </span>
                    </p>
                    <a  href="<?php echo get_site_url(); ?>/en/actions/request/" style="position:relative;top:30px;" class="pro-btn" onclick="ga('Request- Click-EN', 'Click', 'Request-Click-EN')"><span>Request our services now!</span></a>
                </div>



            <?php } else { ?>
                <div class="card-bg-small visible-xs " style="height: 211px; background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/soft-mob-de.jpg);" data-initial-width="600" data-initial-height="211">
                    <div style="font-weight: 500;font-style: italic;font-size:1.8em;color:#791239;top:5%;position:relative;margin-left: 5%;">Warum die proMX für Ihr Softwareunternehmen?</div>
                </div>

                <div class="visible-xs" style="padding:20px;">
                    <p>
                         <span style="position:relative;font-weight: 100;top:-10px;font-style: italic;font-size:1.5em;">
                            Die proMX GmbH bietet Beratungsdienstleistungen für Softwareentwicklungshäuser, die auf Softwareentwicklung
                            und -anpassung spezialisiert sind und nicht genügend Zeit für ein effektives Projekt- und Ressourcenmanagement haben.
                            Alle von uns umgesetzten CRM-Lösungen werden auf Basis von Microsoft Dynamics CRM vorbereitet.
                        </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')" class="btn-vertical-mobile">
                        <span style="height: auto;">Fordern Sie jetzt unsere Dienstleistungen an!</span>
                    </a>

                </div>


                <div class="visible-sm" style="padding:20px;">
                   <span class="visible-sm" style="font-weight: 500;font-style: italic;font-size:2.5em;color:#791239;top:5%;position:relative;">Warum die proMX für Ihr IT-Beratungsunternehmen?</span>
                    <p>
                       <span style="position:relative;color:#791239;font-weight: 100;top:20px;font-style: italic;font-size:2em;">
                            Die proMX GmbH bietet Beratungsdienstleistungen für Softwareentwicklungshäuser, die auf Softwareentwicklung
                            und -anpassung spezialisiert sind und nicht genügend Zeit für ein effektives Projekt- und Ressourcenmanagement haben.
                            Alle von uns umgesetzten CRM-Lösungen werden auf Basis von Microsoft Dynamics CRM vorbereitet.
                        </span>
                    </p>

                    <a  href="<?php echo get_site_url(); ?>/de/aktionen/anfrage/" style="position:relative;top:30px;" class="pro-btn" onclick="ga('Request- Click-DE', 'Click', 'Request-Click-DE')"><span>Fordern Sie jetzt unsere Dienstleistungen an!</span></a>

                </div>

            <?php } ?>


            <div class="card-bg visible-md visible-lg" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/verticals-slider/soft-big.jpg);"      data-initial-width="1600" data-initial-height="540">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 card-col">
                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                                             <img class="verticals-icon" style="float:right;top:50px;position:relative;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/services/soft-en.jpg" />

                            <?php } else { ?>
                                <img class="verticals-icon" style="float:right;top:50px;position:relative;" src="<?php echo get_site_url(); ?>/wp-content/themes/prorm/images/services/soft-de.jpg" />
                            <?php } ?>

                            <?php  if(pll_current_language('slug') == 'en'){ ?>
                                 <span class="verticals-text visible-md visible-lg" style="position:relative;color:#791239;top:40px;font-weight: 500;font-style: italic;font-size:1.8em;">Why choose proMX for your Software Company?</span>

                            <?php } else { ?>
                                 <span class="verticals-text visible-md visible-lg" style="position:relative;color:#791239;top:40px;font-weight: 500;font-style: italic;font-size:1.8em;">Warum die proMX für Ihr Softwareunternehmen?</span>

                            <?php } ?>

                            <div class="verticals-textholder visible-md visible-lg">
                                <p>
                                    <?php  if(pll_current_language('slug') == 'en'){ ?>
									<span class="vertical-slide-text" style="position:relative;color:#791239;font-weight: 100;top:50px;font-style: italic;">
                                        proMX provides consultancy services to software development companies.
                                        It is not uncommon for a company to be so focused on software development and realize
                                        that they do not have enough time to solve questions of project and resource management.
                                        We help such companies by implementing the Microsoft Dynamics CRM solution in their business.
                                    </span>
                                    <?php } else { ?>
									<span class="vertical-slide-text" style="position:relative;color:#791239;font-weight: 100;top:50px;font-style: italic;">
                                        Die proMX GmbH bietet Beratungsdienstleistungen für Softwareentwicklungshäuser,
                                        die auf Softwareentwicklung und -anpassung spezialisiert sind und nicht genügend Zeit
                                        für ein effektives Projekt- und Ressourcenmanagement haben. Alle von uns umgesetzten CRM-Lösungen werden
                                        auf Basis von Microsoft Dynamics CRM vorbereitet.
                                        </span>
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

                        <center><h1 class="first-block-header-vertical">What does proMX GmbH offer you for your successful Software development?</h1></center>

                <?php } else { ?>
                    <center><h1 class="first-block-header-vertical">Was bietet Ihnen die proMX GmbH für Ihre erfolgreiche Softwareentwicklung an?</h1></center>
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
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Experience</br>in Software Industry</span>
                    <?php } else { ?>
                        <span style="color:#ffffff;position:relative;bottom:-15px;">Langjährige Erfahrung </br>in Software-Industrie</span>
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
                    <center><h1 style="margin-top:0px;padding-top:30px;font-size:2em;">Use our basis package and implement the Microsoft Dynamics CRM system in your company.</h1></center>
                <?php } else { ?>
                    <center><h1 style="margin-top:0px;padding-top:30px;font-size:2em;">Nutzen Sie unser Basispaket und führen Sie das Microsoft Dynamics CRM-System in Ihrem Unternehmen ein.</h1></center>
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
                    The proMX-Team provides your employees with full-fledged support during the whole training phase. </div>
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
                <center><h1 class="first-block-header-vertical" style="padding-bottom:20px;">These Software Companies rely on us:</h1></center>
            <?php } else { ?>
                <center><h1 class="first-block-header-vertical" style="padding-bottom:20px;">Diese Softwareunternehmen vertrauen auf uns:</h1></center>
            <?php } ?>
            <?php echo do_shortcode( '[widgetarea name=software-industry]' ); ?>
        </div>

    </div>

    <div style="background-color:#ededed;position: relative;bottom:-25px;">
        <div class="container">
            <div class="col-sm-12">
                <?php  if(pll_current_language('slug') == 'en'){ ?>
                    <h1 class="first-block-header-vertical">About the industry:</h1>
                    <p style="text-align: justify; margin-top:-42px;"></br>
                        Though the software development industry is relatively young,
                        it is already one of the most popular and profitable industries in the world.
                        Over the past decade, the software industry has become a major member of the labor market.
                        When thinking about starting a business, one realizes that it is almost impossible to fail when
                        choosing software development as an industry of focus. Since, on average, every person has a PC or
                        laptop and a smartphone, both of which have an operating system, it becomes clear that the software
                        industry is as widely spread as the automotive or household sectors.</p>

                    <p>The more experienced the software development company is, the often more project
                        managers will choose its solutions for their business. But how can a dedicated beginner,
                        with his young team of specialists developing their own product, surpass the well-known competitors?
                        It is natural that one will need some advice from experts regarding the complete software development process, specifically,
                        organization, optimization and project management in software development.</p>

                    <p>proMX GmbH, which is currently developing its own project management software, is
                        also successfully dealing with the consulting of the management of software projects for
                        both growing and large, established software companies. On the basis of Microsoft Dynamics
                        CRM and all of its available extensions, we will create the perfect software development process model
                        and implement it in your company. Learn more about our working methods and the positive results of cooperation
                        with proMX from our clients. They are ready to share their <a href="http://promx.net/en/references/">stories of success</a> with you.</p>



                    <div style="padding-bottom:80px;margin-top:40px;">
                        <strong><p>Feel free to request a business oriented webcast for your company and learn more about</br>the crucial benefits of our products.</p></strong>


                        <a  href="http://promx.net/en/actions/online-demo/" style="position:relative;" class="pro-btn" onclick="_gaq.push(['_trackEvent', 'Webinar-EN', 'Click', 'Webinar'])">
                            <span>Go to the Webcasts</span></a></div>
                <?php } else { ?>
                    <h1 class="first-block-header-vertical">Über die Branche:</h1>
                    <div style="text-align: justify; margin-top:-42px;"></br><p>
                        <p>Obwohl die Softwareentwicklungsindustrie relativ jung ist, ist sie bereits eine der
                           populärsten und profitabelsten Branchen weltweit. In den letzten zehn Jahren ist die Softwareindustrie
                           zu einem bedeutenden Arbeitgeber geworden. Da im Durschnitt jeder Mensch über einen PC oder ein Laptop und ein
                           Smartphone verfügt, die jeweils mit einem bestimmten Betriebssystem laufen, ist es nicht verwunderlich, dass die
                           Softwareindustrie bereits genauso etabliert ist wie die Automobil- oder Elektrogerätindustrie.</p>

                        <p>Je erfahrener ein Softwareentwicklungsunternehmen ist, umso mehr Unternehmer
                           werden dessen Lösung für die Arbeit in ihrem eigenen Unternehmen bevorzugen.
                           Wie aber kann sich ein engagierter Einsteiger mit einem jungen Expertenteam, das sich entschieden hat,
                           ein eigenes Produkt zu entwickeln, gegen namhafte Konkurrenten durchsetzen? Die Antwort ist einfach: Indem er sich
                           Rat von erfahrenen Experten zum ganzen Softwareentwicklungsprozess, seiner Organisation und Optimierung sowie zum
                            Projektmanagement bei der Softwareentwicklung einholt.</p>

                        <p>Die proMX GmbH, die mittlerweile ihre eigene Projektmanagementsoftware entwickelt, berät sowohl aufstrebende
                            als auch etablierte Softwarehäuser beim Managen von Software-Projekten. Basierend auf Microsoft Dynamics CRM
                            und vorhandenen Erweiterungen erstellen wir für Sie ein perfektes Vorgehensmodell zur Softwareentwicklung und
                            implementieren es in Ihrem Unternehmen.</p>

                        <p>Erfahren Sie mehr über unsere Arbeitsweise und über die positiven Resultate der Zusammenarbeit mit der proMX GmbH von unseren Kunden, die <a href="http://promx.net/de/referenzen/">hier</a> von ihren Erfolgen berichten.</p>
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