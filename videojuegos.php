<?php
include 'global/config.php';
include 'global/conexion.php';
?>
<?php 
$tituloPagina = "Video juegos";
$pagina = "videojuegos";
include('inc/header.php'); 
?> 

        <!-- NEWS CARDS -->
        <div class="news-cards">

            <!--Noticia 1-->
            <section>
                <h4>04/03/2021 | 16:40</h4>
                <img src="https://static4.abc.es/media/tecnologia/2021/03/04/switch-ks2B--620x349@abc.jpg" alt="">
                <div id="contenedor-textos">
                    <h2>Nintendo trabaja en una nueva Switch con la pantalla más grande y resolución 4K</h2>
                    <p align="justify">Según Bloomberg, la consola llegará a lo largo de 2021 y los paneles que incorporará serán de tipo OLED</p>
                    <a href="#openModal" class="btn">Leer más</a>
                </div>
            </section>

            <div id="openModal" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <img src="img/logo.png" class="img">
                    <h2>Nintendo trabaja en una nueva Switch con la pantalla más grande y resolución 4K</h2>
                    <img class="img1"
                        src="data:image/jpeg;base64,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"
                        width="30px" height="30px"><span>Nintendo</span></img>
                    <br>
                    <p align="justify">Nintendo está trabajando en el lanzamiento de un nuevo modelo de Switch. Según fuentes consultadas por ' Bloomberg', la compañía de Kioto quiere poner en el mercado antes de que termine 2021 una versión de su consola con pantalla de tipo OLED y mayor tamaño que la actual. En concreto, Samsung sería la compañía encargada de facilitar los paneles que, según se espera, tendrán una diagonal de 7 pulgadas. Algo por encima de las 6.2 que tiene la actual versión híbrida de la máquina y las 5.5 de Lite, el modelo pensado solo para juego portátil.</p>
                    <p align="justify">LTambién se apunta que Nintendo tiene pensado que la nueva Switch ofrezca gráficos en calidad 4K cuando está conectada al televisor. Una novedad que permitiría a la compañía japonesa seguir siendo competitiva en el mercado durante el futuro a medio plazo. Especialmente si tenemos en cuenta las enormes dificultades que están experimentando tanto Sony, con su PlayStation 5, como Microsoft, con sus Xbox Series X y S, para colocar sistemas de nueva generación en el mercado. Un problema que, con el tiempo, terminará desapareciendo.</p>
                    <p align="justify">Sea como fuere, no han sido pocos los analistas que llevan años señalando la posibilidad de que Nintendo lance al mercado una nueva versión de Switch más potente. Algo que desde la empresa siempre se ha negado, aunque cada vez con la boca más pequeña. Y es que la brecha tecnológica que separa Switch de sus competidoras en el mundo del 'hardware', que ya era grande respecto a PlayStation 4 y Xbox One, se ha acentuado mucho más con la llegada de la novena generación de consolas.</p>
                   
                </div>
            </div>
            <!--Noticia 2-->
            <section>
                <h4>04/03/2021 | 16:50</h4>
                <img src="https://static3.abc.es/media/tecnologia/2021/02/23/ps5-2-klNI--620x349@abc.jpg"
                    alt="">
                <div id="contenedor-textos">
                    <h2>Conseguir una PlayStation 5 será más sencillo a partir de la segunda mitad de 2021</h2>
                    <p align="justify">Jim Ryan, director ejecutivo de Sony, se ha vuelto a disculpar por la incapacidad de la tecnológica para cubrir la demanda de consolas de nueva generación </p>
                    <a href="#openModal2" class="btn">Leer más</a>
                </div>
            </section>

            <div id="openModal2" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <img src="img/logo.png" class="img">
                    <h2>Conseguir una PlayStation 5 será más sencillo a partir de la segunda mitad de 2021</h2>
                    <img class="img1"
                        src="https://blog.es.playstation.com/tachyon/sites/14/2020/11/Featured-Image-PS5-preorder-update.jpg?resize=1088,612&crop_strategy=smart"><span>PlayStation</span></img>
                    <br>
                    <p align="justify">
                        Conseguir una consola de nueva generación en estos momentos es, prácticamente, misión imposible. Sin embargo, según vayan pasando los meses, se espera que el número de sistemas disponibles en el mercado vaya aumentando progresivamente. Al menos, eso es lo que apunta el director ejecutivo de Sony, Jim Ryan, que va a ocurrir con PlayStation 5. La flamante consola de la tecnológica japonesa. «El ritmo de mejora en la cadena de suministro aumentará a lo largo del año, por lo que para cuando lleguemos a la segunda mitad, veremos cifras realmente decentes de sistemas», ha expresado el directivo en una reciente entrevista con ' Financial Times'.</p>
                    <p align="justify"> Sony, al igual que Microsoft, se ha disculpado en numerosas ocasiones con los jugadores por su incapacidad para cubrir la tremenda demanda de consolas de nueva generación. Bastante superior, según Ryan, a la que esperaba la tecnológica antes del lanzamiento oficial de PS5 el pasado mes de noviembre. Las dificultades para coseguir los componentes necesarios para la fabricación de sobremesas, los problemas provocados por la pandemia, y el empleo de bots por parte de algunos usuarios para comprar de golpe varias unidades y, después, revenderlas más caras en sitios como eBay, ha dificultado enormemente el salto a la novena generación de consolas para el jugador.</p>
                </div>
            </div>
            <!--Noticia 3-->
            <section>
                <h4>04/03/2021 | 17:37</h4>
                <img src="https://static3.abc.es/media/tecnologia/2021/02/23/ps-vr-k0KB--620x349@abc.jpg"
                    alt="">
                <div id="contenedor-textos">
                    <h2>Sony anuncia el lanzamiento de unas nuevas gafas de realidad virtual para PlayStation 5 </h2>
                    <p align="justify">Según la empresa japonesa el futuro visor «mejorará en todo» al actual PS VR. No llegará a la tiendas durante 2021</p>
                    <a href="#openModal3" class="btn">Leer más</a>
                </div>
            </section>

            <div id="openModal3" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <img src="img/logo.png" class="img">
                    <h2>Sony anuncia el lanzamiento de unas nuevas gafas de realidad virtual para PlayStation 5</h2>
                    <img class="img1"
                        src="https://as.com/meristation/imagenes/2020/08/17/noticias/1597650953_123850_1597651014_noticia_normal.jpg"><span>Sony</span></img>
                    <br>
                    <p align="justify">
                        La siguiente generación de PlayStation VR, el visor de realidad virtual de Sony, está en camino. Aunque no llegará de manera inminente. Así lo ha anunciado recientemente Hideaki Nishino, videpresidente senior de planificación y gestión de plataformas de la tecnológica japonesa, a través de una entrada en el blog oficial de la compañía. En ella se deja ver que la firma está trabajando en un dispositivo que corrige muchos de los puntos flacos de su actual visor, que lleva ocupando los estantes de las tiendas desde hace más de cuatro años.</p>
                    <p align="justify"> «Estamos utilizando lo que hemos aprendido desde el lanzamiento de PS VR en PS4 para desarrollar un sistema de realidad virtual de próxima generación que mejora todo, desde la resolución y el campo de visión hasta el seguimiento y la entrada. Se conectará a PS5 con un solo cable para simplificar la configuración y mejorar la facilidad de uso, al tiempo que permite una experiencia visual de alta fidelidad», ha afirmado Nishino.</p>
                </div>
            </div>
            <!--Noticia 4-->
            <section>
                <h4>04/03/2021 | 17:40</h4>
                <img src="https://static3.abc.es/media/tecnologia/2021/02/11/cyberpunk-kKzG--620x349@abc.jpg">
                <div id="contenedor-textos">
                    <h2>Subastan por millones de dólares los códigos fuente robados de "Cyberpunk 2077" y "The Witcher 3"
                    </h2>
                    <p align="justify">La empresa polaca CD Projekt sufrió un "hackeo" el pasado lunes. Los códigos fuente de sus juegos se están subastando actualmente en la "dark web"</p>
                    <a href="#openModal4" class="btn">Leer más</a>
                </div>
            </section>

            <div id="openModal4" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <img src="img/logo.png" class="img">
                    <h2>Subastan por millones de dólares los códigos fuente robados de "Cyberpunk 2077" y "The Witcher 3"</h2>
                    <img class="img1"
                        src="https://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_TheWitcher3WildHuntCompleteEdition_enGB.jpg"><span>""The Witcher 3"</span></img>
                    <br>
                    <p align="justify">A CD Projekt le crecen los enanos. Un grupo de cibercriminales atacó los sistemas del estudio el pasado lunes y, según informa "The Verge" han comenzado a organizar una subasta de los códigos fuente robados de títulos como "Cyberpunk 2077" y "The Witcher 3" por millones de dólares en un mercado digital clandestino. En concreto, el estudio europeo fue infectado con un virus de tipo "ransomware", capaz de restringir el acceso a dispositivos y extraer información.</p>
                    <p align="justify">Tras el ataque, en el que se vieron afectados los códigos de varios videojuegos, CD Projekt Red afirmó que no tenía intención de satisfacer las demandas de los ciberatacantes. Incluso si eso implicaba que el material robado circulase por la red. «Estamos dando los pasos necesarios para reducir las consecuencias de este ataque, sobre todo por las compañías que podrían estar afectadas por la brecha de seguridad. Todavía estamos investigando el incidente, pero en este momento podemos confirmar -hasta donde sabemos- que los datos comprometidos no incluían datos personales de los jugadores o usuarios de nuestros servicios», afirmó, por entonces, la compañía a través de Twitter.</p>
                </div>
            </div>

            <!--Noticia 5-->
            <section>
                <h4>04/03/2021 | 18:11</h4>
                <img src="https://static3.abc.es/media/tecnologia/2020/09/11/seriesX-comparativa-serieesS-kle--620x349@abc.jpg">
                <div id="contenedor-textos">
                    <h2>Comparativa entre las próximas consolas Xbox Series X y Xbox Series S: ¿Cuál te interesa más?</h2>
                    <p align="justify">La principal diferencia radicará en la ausencia de lector de discos físicos, pero hay otros aspectos a tener en cuenta como el precio</p>
                    <a href="#openModal5" class="btn">Leer más</a>
                </div>
            </section>

            <div id="openModal5" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <img src="img/logo.png" class="img">
                    <h2>Comparativa entre las próximas consolas Xbox Series X y Xbox Series S: ¿Cuál te interesa más?</h2>
                    <img class="img1"
                        src="https://as.com/meristation/imagenes/2020/09/21/noticias/1600682653_522249_1600682863_noticia_normal_recorte1.jpg"><span>Xbox Series X y Xbox Series S</span></img>
                    <br>
                    <p align="justify">Este año se inaugurará la novena generación de consolas de sobremesa. Un momento grandioso en el que la industria del videojuego se permite el lujo de mostrar la evolución de la tecnología. Microsoft y Sony volverán a estar en la primera línea de batalla como en las últimas etapas, con permiso, por supuesto, de Nintendo que tiene una vocación más independiente. De momento, ya se conocen todos los detalles de la familia Xbox. Habrá dos modelos distintos. ¿Cuál puede interesarte más?Ambas plataformas, y a falta de analizarlas en condiciones cuando se produzca el lanzamiento, prometen dar un salto notable en su potencia gráfica. Eso sí, están orientadas a dos públicos distintos. Mientras la Xbox Series X será el caballo de batalla por características, la Xbox Series S se intuye también un interesante producto enteramente pensada para el juego digital. Llegarán el próximo 10 de noviembre.

                </div>
            </div>


            <!--Noticia 6-->
            <section>
                <h4>04/03/2021 | 18:20</h4>
                <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2020/09/age-empires-3-edicion-definitiva-2081991.jpg">
                <div id="contenedor-textos">
                    <h2>«Age of Empires III: Definitive Edition»: más que una adaptación a los nuevos tiempos</h2>
                    <p align="justify">El videojuego presenta jugosos cambios sin perder la esencia del título original. Idóneo para los amantes de la saga y una apuesta segura para los fans de la estrategia</p>
                    <a href="#openModal6" class="btn">Leer más</a>
                </div>
            </section>

            <div id="openModal6" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <img src="img/logo.png" class="img">
                    <h2>«Age of Empires III: Definitive Edition»: más que una adaptación a los nuevos tiempos</h2>
                    <img class="img1"
                        src="https://depor.com/resizer/g3D2jtFOuqsWhQGfNfjRQHuFy74=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/7AP73U32TBHL3FBHDNEIUJPNPI.JPG"><span>Age of empieres III</span></img>
                    <br>
                    <p align="justify">Quince años dan para mucho. Para mejorar texturas, para renovar el acabado visual y (lo más importante) para ofrecer una segunda oportunidad a un clásico que, aunque no pudo superar a su antecesor, vendió la friolera de dos millones de copias en tres veranos. Casi nada… Con «Age of Empires III: Definitive Edition», los estudios Tantalus Media y Forgotten Empires pueden presumir de haber dado un lavado de cara a la saga, pero también de haber implementado cambios que mejoran la experiencia de juego y de haber incluido jugosas novedades capaces de completar un título ya en su momento profundo y extenso.El «Age of Empires III: Definitive Edition» puede lucir con orgullo la etiqueta de «remake». La primera ventaja que ofrece a los fans de la saga (y a aquellos que todavía quisiesen hacerse con el juego de 2005) es la económica. A nivel de contenido, presenta todas las campañas del título original y sus dos expansiones («The WarChiefs» y «The Asian Dynasties») por un precio que ronda los 20 euros. Una cifra irrisoria si consideramos, además, la ingente cantidad de mapas que, ya hace más de una década, incluía un título orientado en esencia a los enfrentamientos en línea y al modo multijugador. </p>

                </div>
            </div>

            <!--Noticia 7-->
            <section>
                <h4>04/03/2021 | 18:34</h4>
                <img src="https://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_StarlinkBattleForAtlas_image1600w.jpg">
                <div id="contenedor-textos">
                    <h2>Una hora con «Starlink: Battle for Atlas», un próximo videojuego que une lo virtual con lo físico</h2>
                    <p align="justify">Es un juego de acción espacial donde a bordo de una nave deberemos ir viajando por el universo visitando planetas y forjando alianzas</p>
                    <a href="#openModal7" class="btn">Leer más</a>
                </div>
            </section>

            <div id="openModal7" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <img src="img/logo.png" class="img">
                    <h2>Una hora con «Starlink: Battle for Atlas», un próximo videojuego que une lo virtual con lo físico</h2>
                    <img class="img1"
                        src="https://static2.abc.es/media/tecnologia/2018/08/27/Starlink-Battle-for-Atlas-ksEF--620x349@abc.jpg"><span>Starlink</span></img>
                    <br>
                    <p align="justify">Conseguir combinar el mundo físico y el de los videojuegos ha sido el sueño de muchos estudios durante décadas. Ahí tenemos el juego español «Invizimals» o incluso Nintendo con sus Amiibos. No es fácil hacer un juego tangible y que tanto la parte digital como la que no lo es sigan siendo igualmente atractivas.</p>
                    <p align="justify">Ubisoft lanzará el próximo 16 de octubre «Starlink: Battle for Atlas», un juego dirigido al público más joven donde de forma opcional podemos usar un soporte físico. El enfoque está claro: es una aventura de acción espacial donde a bordo de una nave deberemos ir viajando por el universo visitando planetas y forjando alianzas con sus habitantes para poder enfrentarnos a la legión olvidada. Una raza que, además de haber secuestrado a nuestro capitán, está obsesionada por reunir todo lo que queda de la tecnología de una antigua civilización.</p>
                    <p align="justify"> Hasta aquí nada nuevo, una historia más o menos conocida. Lo interesante viene al construir la nave. Mediante un accesorio, sobre el mando de la consola podemos acoplar el piloto y la nave que queramos usar en el juego. Cada piloto tiene diferentes facultades, o poderes especiales que aporta al combate, por ejemplo, hacerse invisible en plena batalla, algo muy útil si te ves asediado.</p>
                </div>
            </div>

            <!--Noticia 8-->
            <section>
                <h4>04/03/2021 | 19:17</h4>
                <img src="https://i.pcmag.com/imagery/reviews/03S9ZRW0TQcpCQLxKx4lUVT-35..1598017825.png">
                <div id="contenedor-textos">
                    <h2>PlayerUnknown's Battlegrounds: entre el ocaso del fenómeno y el auge del género</h2>
                    <p align="justify">Cae casi a la mitad la base de jugadores de uno de los títulos con mayor interés de los últimos años que ha arrastrado audiencias multitudinarias para ver cómo un jugador era el único superviviente</p>
                    <a href="#openModal8" class="btn">Leer más</a>
                </div>
            </section>

            <div id="openModal8" class="modalDialog">
                <div>
                    <a href="#close" title="Close" class="close">X</a>
                    <img src="img/logo.png" class="img">
                    <h2>PlayerUnknown's Battlegrounds: entre el ocaso del fenómeno y el auge del género</h2>
                    <img class="img1"
                        src="https://static3.abc.es/media/tecnologia/2018/02/19/PUBG-kJqC--620x349@abc.jpg"><span>PlayerUnknown's Battlegrounds</span></img>
                    <br>
                    <p align="justify">Para los menos allegados al gremio videojueguil, este juego es todo un fenómeno que mueve masas alrededor de sus simples siglas, PUBG. Su atracón de disparos y filosofía basada en la supervivencia le han catapultado hacia el podio de las grandes audiencias. Una videojuego que ha conquistado a «youtubers» y aficionados a retransmitir en «streaming» sus partidas.</p>
                    <p align="justify">Y eso que no existe una versión definitiva ni completa. A pesar de llevar varios años en desarrollo, la acometida del título ha sido espectacular hasta el punto de acumular picos de 70 millones de horas mensuales en un fin de semana. Sus estadísticas de visionado a través de Twitch, la plataforma de retransmisión de partidas más importante, detallan su capacidad de concentración y de generador de comunidades de jugadores.

                        El título es simple en su concepto: gana el último que quede vivo. Pero para ello hay que saltar a un escenario plagado de cien jugadores que van a hacer todo lo que esté en su mano para evitar que acabes vivo. La exigencia y la estrategia, a su vez, representa un paradigma centrado en la narrativa muy abierta. Un patrón basado en la supervivencia le ha otorgado una gran popularidad en un año, 2017, que los llamados « eSports» o deportes electrónicos han mirado con inquietud e interés cómo evolucionaba el fenómeno.</p>
                </div>
            </div>

        </div>

        <?php include('inc/footer.php'); ?>
