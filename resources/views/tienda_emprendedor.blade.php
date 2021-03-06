<!DOCTYPE html>
<html lang="en">
<head><title>Emprendedor 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif
        }

        .mySlides {
            display: none
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
           href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                class="fa fa-bars"></i></a>
        <a href="{{route('inicio')}}" class="w3-bar-item w3-button w3-padding-large">INICIO</a>
            <button class="w3-padding-large w3-button" title="More">MÁS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <!--<a href="#" class="w3-bar-item w3-button">Merchandise</a>
                <a href="#" class="w3-bar-item w3-button">Extras</a>
                <a href="#" class="w3-bar-item w3-button">Media</a>-->
            </div>
        </div>
        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i
                class="fa fa-search"></i></a>
    </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Automatic Slideshow Images -->
    <!--<div class="mySlides w3-display-container w3-center" style="display: block;">
        <img src="https://tab.net.co/wp-content/uploads/2017/08/Rodrigo-Davila-EAN-media-0996.png" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Los Angeles</h3>
            <p><b>We had the best time playing at Venice Beach!</b></p>
        </div>
    </div>-->
    <div class="mySlides w3-display-container w3-center" style="display: none;">
        <img src="https://i.blogs.es/948245/mousse_yogur/1366_2000.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3></h3>
            <p><b></b></p>
        </div>
    </div>
    <!--<div class="mySlides w3-display-container w3-center" style="display: none;">
        <img src="https://www.w3schools.com/w3images/chicago.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Chicago</h3>
            <p><b>Thank you, Chicago - A night we won't forget.</b></p>
        </div>
    </div>-->

    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <h2 class="w3-wide">Emprendimiento EANista</h2>
        <p class="w3-opacity"><i>Nuestra marca</i></p>
        <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="w3-row w3-padding-32">
            <div class="w3-third">
                <p>Calidad</p>
                <img
                    src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/receta-palomitas-con-chocolate-blanco-oreo.jpg"
                    class="w3-round w3-margin-bottom"
                    alt="Random Name" style="width:60%">
            </div>
            <div class="w3-third">
                <p>Buen sabor</p>
                <img
                    src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/receta-palomitas-con-chocolate-blanco-oreo.jpg"
                    class="w3-round w3-margin-bottom"
                    alt="Random Name" style="width:60%">
            </div>
            <div class="w3-third">
                <p>Precio justo</p>
                <img
                    src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/receta-palomitas-con-chocolate-blanco-oreo.jpg"
                    class="w3-round" alt="Random Name"
                    style="width:60%">
            </div>
        </div>
    </div>

    <!-- The Tour Section -->
    <div class="w3-black" id="tour">
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
            <h2 class="w3-wide w3-center">Nuestros productos</h2>
            <p class="w3-opacity w3-center"><i>Haga su pedido ahora</i></p><br>

            <ul class="w3-ul w3-border w3-white w3-text-grey">
                <!--
                <span class="w3-tag w3-red w3-margin-left">Sold out</span>

                -->
                <li class="w3-padding">Horario mañana: <span class="w3-badge w3-right w3-margin-right">9 - 1 pm</span>
                </li>
                <li class="w3-padding">Horario tarde: <span class="w3-badge w3-right w3-margin-right">2 - 6 pm</span>
                </li>
            </ul>

            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                <div class="w3-third w3-margin-bottom">
                    <img
                        src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/receta-palomitas-con-chocolate-blanco-caseras.jpg"
                        alt="New York" style="width:100%"
                        class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Producto_1</b></p>
                        <p class="w3-opacity">$&nbsp;5.900</p>
                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                                onclick="document.getElementById('ticketModal').style.display='block'">Comprar
                        </button>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img
                        src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/receta-palomitas-con-chocolate-blanco-caseras.jpg"
                        alt="Paris" style="width:100%"
                        class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Producto_2</b></p>
                        <p class="w3-opacity">$&nbsp;5.900</p>
                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                                onclick="document.getElementById('ticketModal').style.display='block'">Comprar
                        </button>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img
                        src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/receta-palomitas-con-chocolate-blanco-caseras.jpg"
                        alt="San Francisco" style="width:100%"
                        class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Producto_3</b></p>
                        <p class="w3-opacity">$&nbsp;5.900</p>
                        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                        <button class="w3-button w3-black w3-margin-bottom"
                                onclick="document.getElementById('ticketModal').style.display='block'">Comprar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal video-modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style="display: none;" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="images/20.jpg" alt=" " class="img-responsive">
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>a good look women's shirt</h4>
                            <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star-.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="images/star.png" alt=" " class="img-responsive">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$320</span> <i class="item_price">$250</i></p>
                                <p><a class="item_add" href="#">Add to cart</a></p>
                            </div>
                            <h5>Color</h5>
                            <div class="color-quality">
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Ticket Modal -->
    <div id="ticketModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
                <span onclick="document.getElementById('ticketModal').style.display='none'"
                      class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Asistente de compras</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Institución</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Universidad" value="Universidad EAN">
                <p><label><i class="fa fa-user"></i> Información de envío</label></p>
                <input class="w3-input w3-border" type="text" placeholder="" value="Salón 516 - Ed. Nogal">
                <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">Comprar <i
                        class="fa fa-check"></i></button>
                <button class="w3-button w3-red w3-section"
                        onclick="document.getElementById('ticketModal').style.display='none'">Cancelar <i
                        class="fa fa-remove"></i></button>
                <p class="w3-right"><a href="#" class="w3-text-blue">Ayuda</a></p>
            </div>
        </div>
    </div>


    <!-- The Contact Section -->
    <!--
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
        <h2 class="w3-wide w3-center">CONTACT</h2>
        <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
                <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
            </div>
            <div class="w3-col m6">
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required="" name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required="" name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required="" name="Message">
                    <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
                </form>
            </div>
        </div>
    </div>
-->
    <!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!--<p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>-->
</footer>

<script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


</body>
</html>
