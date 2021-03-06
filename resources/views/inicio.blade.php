<!DOCTYPE html>
<html>
<title>Inicio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Karma", sans-serif
    }

    .w3-bar-block .w3-bar-item {
        padding: 20px
    }

    img {
        transition: transform .2s;
    }

    img:hover {
        transform: scale(1.2);
    }
</style>
<script>
    window.onload = function () {
        let images = document.getElementsByTagName('img');
        for (let i = 0; i < images.length; i++) {
            images[i].onclick = function (){
                window.location.href = "{{route('tienda_emprendedor')}}";
            };
        }
    };
</script>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" cd
     style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
       class="w3-bar-item w3-button">Cerrar Menú</a>
    <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Mi tienda</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Mis pedidos</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
    <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
        <div class="w3-right w3-padding-16"><h6><a href="login">Iniciar sesión</a></h6></div>
        <div class="w3-right w3-padding-16"><h6><a href="https://www.instagram.com/emprendean/">Instagram&nbsp;&nbsp;&nbsp;</a>
            </h6></div>
        <a href="javascript:void(0)" class="fa fa-instagram"></a>
        <div class="w3-center w3-padding-16">EmprendEan</div>
    </div>
</div>

<!-- !PAGE CONTENT! -->
<div id="page" class="w3-main w3-content w3-padding" style="max-width:120   0px;margin-top:100px">

    <video width="100%" controls>
        <source src="{{asset('/storage/Video - tercer entregable(1).mp4')}}" type="video/mp4">

        Your browser does not support HTML video.
    </video>
    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <div class="w3-quarter">
            <img src="https://www.w3schools.com/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
            <h3>The Perfect Sandwich, A Real NYC Classic</h3>
            <h6>$5.900</h6>
            <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <div>
                <img
                    src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png-300x176.jpg"
                    alt="Sandwich" style="width:30%">
                <h5 style="display: inline-block">Empresario_1</h5>
            </div>
        </div>
        <div class="w3-quarter">
            <img src="https://www.w3schools.com/w3images/steak.jpg" alt="Steak" style="width:100%">
            <h3>Let Me Tell You About This Steak</h3>
            <h6>$5.900</h6>
            <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <div>
                <img
                    src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png-300x176.jpg"
                    alt="Sandwich" style="width:30%">
                <h5 style="display: inline-block">Empresario_1</h5>
            </div>
        </div>
        <div class="w3-quarter">
            <img src="https://www.w3schools.com/w3images/cherries.jpg" alt="Cherries" style="width:100%">
            <h3>Cherries, interrupted</h3>
            <h6>$5.900</h6>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <div>
                <img
                    src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png-300x176.jpg"
                    alt="Sandwich" style="width:30%">
                <h5 style="display: inline-block">Empresario_1</h5>
            </div>
        </div>
        <div class="w3-quarter">
            <img src="https://www.w3schools.com/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
            <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
            <h6>$5.900</h6>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <div>
                <img
                    src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png-300x176.jpg"
                    alt="Sandwich" style="width:30%">
                <h5 style="display: inline-block">Empresario_1</h5>
            </div>
        </div>
    </div>

    <!-- Second Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-quarter">
            <img src="https://www.w3schools.com/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
            <h3>All I Need Is a Popsicle</h3>
            <h6>$5.900</h6>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <div>
                <img
                    src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png-300x176.jpg"
                    alt="Sandwich" style="width:30%">
                <h5 style="display: inline-block">Empresario_1</h5>
            </div>
        </div>
        <div class="w3-quarter">
            <img src="https://www.w3schools.com/w3images/salmon.jpg" alt="Salmon" style="width:100%">
            <h3>Salmon For Your Skin</h3>
            <h6>$5.900</h6>
            <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <div>
                <img
                    src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png-300x176.jpg"
                    alt="Sandwich" style="width:30%">
                <h5 style="display: inline-block">Empresario_1</h5>
            </div>
        </div>
        <div class="w3-quarter">
            <img src="https://www.w3schools.com/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
            <h3>The Perfect Sandwich, A Real Classic</h3>
            <h6>$5.900</h6>
            <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <div>
                <img
                    src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png-300x176.jpg"
                    alt="Sandwich" style="width:30%">
                <h5 style="display: inline-block">Empresario_1</h5>
            </div>
        </div>
        <div class="w3-quarter">
            <img src="https://www.w3schools.com/w3images/croissant.jpg" alt="Croissant" style="width:100%">
            <h3>Le French</h3>
            <h6>$5.900</h6>
            <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <div>
                <img
                    src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png-300x176.jpg"
                    alt="Sandwich" style="width:30%">
                <h5 style="display: inline-block">Empresario_1</h5>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
            <a href="#" class="w3-bar-item w3-black w3-button">1</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer class="w3-row-padding w3-padding-32">
        <div class="w3-third">
            <h3>Compra aquí</h3>
            <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                congue gravida diam non fringilla.</p>
        </div>

        <div class="w3-third">
            <h3>BLOG DE POSTS</h3>
            <ul class="w3-ul w3-hoverable">
                <li class="w3-padding-16">
                    <img src="https://www.w3schools.com/w3images/workshop.jpg" class="w3-left w3-margin-right"
                         style="width:50px">
                    <span class="w3-large">Lorem</span><br>
                    <span>Sed mattis nunc</span>
                </li>
                <li class="w3-padding-16">
                    <img src="https://www.w3schools.com/w3images/gondol.jpg" class="w3-left w3-margin-right"
                         style="width:50px">
                    <span class="w3-large">Ipsum</span><br>
                    <span>Praes tinci sed</span>
                </li>
            </ul>
        </div>

        <div class="w3-third w3-serif">
            <h3>Etiquetas populares</h3>
            <p>
                <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
                <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span
                    class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
            </p>
        </div>
    </footer>

    <!-- End page content -->
</div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>

</body>
</html>
