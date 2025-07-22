<?php 
	headerTienda($data);
	$arrSlider = $data['slider'];
	$arrBanner = $data['banner'];
	$arrProductos = $data['productos'];

	$contentPage = "";
	if(!empty($data['page'])){
		$contentPage = $data['page']['contenido'];
	}
	 
 ?>


    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="<?= media() ?>/tienda/images/s11.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <!-- <span><strong>TIENDA</strong> ONLINE SAAS</span> -->
                                <span>TIENDA ONLINE SAAS</span>
                            </h1>
                            <p class="animated2">Convierte ideas en resultados con nuestra plataforma SaaS</p>	
                           <a class="animated3 slider btn btn-primary btn-min-block" href="cotizar" target="_blank">Cotizar</a>

                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="<?= media() ?>/tienda/images/s22.jpg" alt="slider">
                    
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                    		  <span>TIENDA ONLINE SAAS</span>
                    	    </h1>
                            <p class="animated2">Impulsa tu negocio con tecnología simple, poderosa y al alcance de un clic</p>
                            <a class="animated3 slider btn btn-primary btn-min-block" href="cotizar" target="_blank">Cotizar</a>

                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="<?= media() ?>/tienda/images/s33.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                                <span>TIENDA ONLINE SAAS</span>
                            </h1>
                            <p class="animated1">Tu crecimiento empieza aquí: soluciones SaaS que trabajan por ti, 24/7</p>	
                             <a class="animated3 slider btn btn-primary btn-min-block" href="cotizar" target="_blank">Cotizar</a>

                                
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->


	 
    <!-- Start About Us Section -->
    <section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Sobre Nosotros</h3>
                            <p>"Transforma tus sueños en realidad"</p>
                        </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-4">
				    <div class="welcome-section text-center">
				        <img src="<?= media() ?>/tienda/images/about-01.jpg" class="img-responsive" alt="..">
				        <h4>FILOSOFÍA DE TRABAJO</h4>
				        <div class="border"></div>
				        <p style="text-align: justify;">Creemos en la tecnología como un motor de crecimiento accesible para todos. Nuestra filosofía se basa en ofrecer soluciones simples, escalables y enfocadas en resultados reales. Diseñamos productos intuitivos que eliminan la complejidad, permitiendo a emprendedores y empresas centrarse en lo que realmente importa: crecer. Nos comprometemos con cada cliente, acompañándolos con transparencia, soporte constante y una mentalidad orientada a la mejora continua. Tu éxito es también el nuestro.</p>
				    </div>
				</div>

                
                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="<?= media() ?>/tienda/images/about-02.jpg" class="img-responsive" alt="..">
                        <h4>MISIÓN Y VISIÓN</h4>
                        <div class="border"></div>
                        <p style="text-align: justify;">Nuestra misión es ofrecer soluciones SaaS simples, accesibles y eficientes que ayuden a emprendedores y empresas a digitalizar, automatizar y escalar sus operaciones, mejorando su productividad y facilitando su crecimiento. Nuestra visión es convertirnos en la plataforma SaaS de referencia en Latinoamérica, reconocida por su innovación, confiabilidad y compromiso con el éxito de cada cliente, impulsando la transformación digital de miles de negocios en todo el mundo.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="<?= media() ?>/tienda/images/about-03.jpg" class="img-responsive" alt="..">
                        <h4>Valores y Reglas de Trabajo</h4>
                        <div class="border"></div>
                        <p style="text-align: justify;">Nos guiamos por valores que definen cada decisión y acción: innovación constante, porque creemos en mejorar siempre; orientación al cliente, porque su éxito es nuestra prioridad; simplicidad, porque lo complejo debe volverse fácil; responsabilidad, porque cumplimos lo que prometemos; y colaboración, porque los mejores resultados nacen del trabajo en equipo. Bajo estos principios, nuestras reglas de trabajo son claras: escuchar activamente a nuestros usuarios, entregar soluciones funcionales y estables, actuar con transparencia, adaptarnos con rapidez a los cambios del entorno y trabajar siempre con ética, respeto y compromiso.</p>
                    </div>
                </div>
                
            </div><!-- /.row -->            
            
        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -->


    <!-- Start About Us Section 2 -->
    <div class="about-us-section-2">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="skill-shortcode">
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p class="coltexmiguel">Implementación Exitosa en Clientes Internacionales</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="100">
                                    <span class="progress-bar-span" >100%</span>
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p class="coltexmiguel">Adaptación Multilingüe y Moneda Local</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="95">
                                    <span class="progress-bar-span" >95%</span>
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p class="coltexmiguel">Estrategias de Marketing y Soporte Regional</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="80">
                                    <span class="progress-bar-span" >80%</span>
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p class="coltexmiguel">Infraestructura Escalable y Global</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="100">
                                    <span class="progress-bar-span" >100%</span>
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>  
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="skill">
                            <p class="coltexmiguel">Integración con Pasarelas de Pago Locales y Legislación Fiscal</p>          
                            <div class="progress">         
                                <div class="progress-bar" role="progressbar"  data-percentage="70">
                                    <span class="progress-bar-span" >70%</span>
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>  
                        </div>
                                                            
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div id="carousel-example-generic" class="carousel slide about-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?= media() ?>/tienda/images/porcentaje/p1.jpg" alt="">
                            </div>
                            <!-- <div class="item">
                                <img src="<?php //echo media(); ?>/tienda/images/porcentaje/p2.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php //echo media(); ?>/tienda/images/porcentaje/p3.jpeg" alt="">
                            </div> -->
    

                        </div>
  
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Start About Us Section 2 -->


    


    <!-- Start Feature Section -->
        <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Nuestro Servicios</h3>
                            <p>De la planificación a la implementación: éxito garantizado</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-calendar-alt"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">IMPLEMENTACIÓN EXITOSA EN CLIENTES INTERNACIONALES</h4>
                                    <p class="coltejustificado">Nuestro sistema SaaS ha sido implementado con éxito en diversos países, adaptándose a distintos mercados, idiomas y normativas locales.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-paint-brush"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">ADAPTACIÓN MULTILINGÜE Y MONEDA LOCAL</h4>
                                    <p class="coltejustificado">Nuestra plataforma está diseñada para operar en múltiples idiomas y manejar diferentes monedas locales, permitiendo a tus clientes comprar con comodidad y confianza desde cualquier parte del mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-handshake"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">ESTRATEGIAS DE MARKETING Y SOPORTE REGIONAL</h4>
                                    <p class="coltejustificado">Ofrecemos herramientas y asesoría en estrategias de marketing adaptadas a cada región, junto con un soporte técnico localizado que entiende las necesidades específicas de tu mercado.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-bullhorn"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">INFRAESTRUCTURA ESCALABLE Y GLOBAL</h4>
                                    <p class="coltejustificado">Nuestra solución SaaS se apoya en una infraestructura en la nube robusta y distribuida globalmente, lo que permite un rendimiento óptimo, alta disponibilidad y escalabilidad según el crecimiento de tu negocio.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-utensils"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">INTEGRACIÓN CON PASARELAS DE PAGO LOCALES Y LEGISLACIÓN FISCAL</h4>
                                    <p class="coltejustificado">Nuestra plataforma se integra fácilmente con pasarelas de pago locales, facilitando transacciones seguras y confiables. Además, cumplimos con las normativas fiscales de cada país, incluyendo impuestos como el IVA o IGV, garantizando operaciones legales y sin complicaciones para tu negocio internacional.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-magic"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">ENTRETENIMIENTO Y ACTIVIDADES</h4>
                                    <p class="coltejustificado">Planificamos y coordinamos actividades, espectáculos, y entretenimiento en general, creando momentos emocionantes y memorables que mantendrán a tus asistentes comprometidos y entretenidos.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    
                </div><!-- /.row -->
            
            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->
    
    
    
    <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-gift"></i>
                        <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                        <h5>Eventos Organizados</h5>                               
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="7394" data-speed="5000"></div>
                        <h5>Proyectos Completados</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-clock"></i>
                        <div class="timer" id="item3" data-to="25" data-speed="5000"></div>
                        <h5>Años de Experiencia</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-smile"></i>
                        <div class="timer" id="item4" data-to="8423" data-speed="5000"></div>
                        <h5>Clientes Satisfechos</h5>                               
                      </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Section -->



    <!-- Start Team Member Section -->
    <section id="team" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Nuestro equipo</h3>
                            <p>Nuestro equipo, tu confianza; nuestra garantía, tu experiencia inolvidable</p>
                        </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div id="team-section">
                   
                                <div class="our-team">

							<div class="team-member">
							    <img src="<?= media() ?>/tienda/images/team/member_1.jpg" class="img-responsive" alt="">
							    <div class="team-details">
							        <h4>Wilfredo Vasquez</h4>
							        <p>Director y Fundador</p>
							        <ul class="social-icons">
							            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
							            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
							            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
							            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
							        </ul>
							    </div>
							</div>

							<div class="team-member">
							    <img src="<?= media() ?>/tienda/images/team/member_2.jpg" class="img-responsive" alt="">
							    <div class="team-details">
							        <h4>Ana Villalobos</h4>
							        <p>Gerente General</p>
							         <ul class="social-icons">
							            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
							            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
							            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
							            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
							        </ul>
							    </div>
							</div>

							<div class="team-member">
							    <img src="<?= media() ?>/tienda/images/team/member_3.jpg" class="img-responsive" alt="">
							    <div class="team-details">
							        <h4>María García</h4>
							        <p>Coordinadora de Eventos</p>
							         <ul class="social-icons">
							            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
							            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
							            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
							            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
							        </ul>
							    </div>
							</div>

							<div class="team-member">
							    <img src="<?= media() ?>/tienda/images/team/member_4.jpg" class="img-responsive" alt="">
							    <div class="team-details">
							        <h4>Pablo Rodríguez</h4>
							        <p>Especialista en Marketing</p>
							         <ul class="social-icons">
							            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
							            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
							            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
							            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
							        </ul>
							    </div>
							</div>


                                </div>
                    </div>
                </div>
            </div>
                
        </div>
    </section>
    <!-- End Team Member Section -->



    <!-- Start Pricing Table Section -->
    <div id="pricing" class="pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Productos más Vendidos</h3>
                     <br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="pricingf">
                <section class="bg0 p-t-23 p-b-140">
                    <div class="container">
                       
                        <div class="row isotope-grid">
                            <?php 
                                for ($p = 0; $p < count($arrProductos); $p++) {
                                    $rutaProducto = $arrProductos[$p]['ruta']; 
                                    $portada = count($arrProductos[$p]['images']) > 0 
                                        ? $arrProductos[$p]['images'][0]['url_image'] 
                                        : media() . '/images/uploads/product.png';
                            ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
                                            <a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                                Ver producto
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l">
                                                <a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    <?= $arrProductos[$p]['nombre'] ?>
                                                </a>
                                                <span class="stext-105 cl3">
                                                    <?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?>
                                                </span>
                                            </div>
                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#" id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
 
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

    <!-- End Pricing Table Section -->
    

    <!-- Clients Aside -->
    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Nuestro Honorable Socio</h3>
                        <p>Nuestros socios confían en nosotros para transformar sus ideas en eventos inolvidables, gracias a nuestra experiencia y compromiso con la excelencia.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients">
                    
                    <div class="col-md-12">
                        <img src="<?= media() ?>/tienda/images/logos/l1.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?= media() ?>/tienda/images/logos/l2.png" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?= media() ?>/tienda/images/logos/l3.png" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?= media() ?>/tienda/images/logos/l4.png" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?= media() ?>/tienda/images/logos/l5.jpg" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?= media() ?>/tienda/images/logos/l7.png" class="img-responsive" alt="...">
                    </div>
                    
                    <div class="col-md-12">
                        <img src="<?= media() ?>/tienda/images/logos/l8.png" class="img-responsive" alt="...">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    
    

    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contactar con nosotros</h3>
                        <p class="white-text">Si tiene dudas o consultas, no dude en contactarnos por este medio.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Digite su nombre." id="name" required data-validation-required-message="Digite su nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Tu correo " id="email" required data-validation-required-message="Digite su correo">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Tu numero de telefono" id="phone" required data-validation-required-message="Digite su numero">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder=" Mensaje" id="message" required data-validation-required-message="Mensaje a comunicar"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Datos de Contacto</h4>
                        <ul>
                            <li><strong>Email:</strong> customer_service@tiendasaas.com</li>
                            <li><strong>Telefono :</strong> +51 056344554</li>
                            <li><strong>Celular :</strong> 987654321</li>
                            <li><strong>Web :</strong> www.tiendasaas.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Horas Laborales</h4>
                        <ul>
                            <li><strong>Lunes a Viernes :</strong> 9:00 a.m. a 6:00 p.m.</li>
                            <li><strong>Sábado :</strong> 9:00 a.m. a 1:30 p.m.</li>
                            <li><strong>Domingo  :</strong> Cerrado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<?php 
	footerTienda($data);
 ?>

