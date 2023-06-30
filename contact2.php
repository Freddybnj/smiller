<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/app.css">
    <!-- Contact form CSS -->
    <link rel="stylesheet" href="css/x-cosmetics.css">

    <!-- Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style>
        body {
            background-color: #6a648f;
            background-image: none;
        }

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
}

    </style>
    <!-- Title -->
    <title>Shannon Miller</title>
</head>

<body>

    <body>
        <nav class="navbar navbar-fixed-top" id="mainNavbar">
            <div class="container-fluid">
                <div class="logo"><a href="index.html"><img src="imgs/SMW.png" id="brand-logo"></a></div>

                <ul class="links">
                    <li><a href="stopMotion.html">Stop Motion</a></li>
                    <li <i class="fa-sharp fa-solid fa-circle fa-2xs dots" style="color: #ffffff;"></i></li>
                    <li><a href="liveAction.html">Live Action</a></li>
                    <li <i class="fa-sharp fa-solid fa-circle fa-2xs dots" style="color: #f9fafa;"></i></li>
                    <li><a href="productionDesign.html">Production Design</a></li>
                    <li <i class="fa-sharp fa-solid fa-circle fa-2xs dots" style="color: #f9fafa;"></i></li>
                    <li><a href="puppets.html">Puppets</a></li>
                    <li <i class="fa-sharp fa-solid fa-circle fa-2xs dots" style="color: #f9fafa;"></i></li>
                    <li><a href="propDesign.html">Props</a></li>
                </ul>
                <a href="contact.html" class="action_btn">Contact</a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="dropdown_menu">
                    <li><a href="stopMotion.html">Stop Motion</a></li>
                    <li><a href="liveAction.html">Live Action</a></li>
                    <li><a href="productionDesign.html">Production Design</a></li>
                    <li><a href="puppets.html">Puppets</a></li>
                    <li><a href="propDesign.html">Props</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </div>
            </div>
        </nav>

        <h1 class="contactHeader">CONTACT</h1>

        <div class='container-fluid centered'>
            <div class="row">
                <div class="col-lg-12 col-xl-6 d-flex justify-content-center mb-5">
                    <img src="imgs/contactformportraitcircle.png" height="350px" class="image-fluid">
                </div>

                <div class="col-lg-12 col-xl-6 d-flex justify-content-center">
                    <div class="contact">
                        <form id="cform" method="post" style="width:100%">
                            <label>Name</label>
                            <input type=" text" name="name" required>

                            <label>Email</label>
                            <input type="email" name="email" required>

                            <label>Message</label>
                            <textarea name="message" required></textarea>

                            <div>
                                <!-- (D) CAPTCHA - CHANGE SITE KEY! -->
                                <div class="g-recaptcha" data-sitekey="6Ld-YpEmAAAAAAaUd7lcePu--kZ1o8NbKHZGaSIx"></div>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

        <script>
            const toggleBtn = document.querySelector('.toggle_btn');
            const toggleBtnIcon = document.querySelector('.toggle_btn i');
            const dropDownMenu = document.querySelector('.dropdown_menu');
            toggleBtn.onclick = function () {
                dropDownMenu.classList.toggle('open');
                const isOpen = dropDownMenu.classList.contains('open');
                toggleBtnIcon.classList = isOpen
                    ? 'fa-solid fa-xmark'
                    : 'fa-solid fa-bars'
            }
        </script>

        <script>
            $(function () {
                $(document).scroll(function () {
                    var $nav = $("#mainNavbar");
                    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
                });
            });
        </script>

        <script>
            // let scrollpos = window.scrollY
            // const arrow = document.querySelector("#arrow");

            // const add_class_on_scroll = () => arrow.classList.add("arrowShow");
            const remove_class_on_scroll = () => arrow.classList.remove("arrowhide")

            window.addEventListener('scroll', function () {
                // const add_class_on_scroll = () => arrow.classList.add("arrowHide");
                // const remove_class_on_scroll = () => arrow.classList.remove("arrowHide")
                let scrollpos = window.scrollY;
                const arrow = document.querySelector("#arrow");

                if (scrollpos > 1504) { remove_class_on_scroll() }
                //   else { add_class_on_scroll() }

                console.log(scrollpos)
                console.log(arrow.classList)
            })
        </script>
        <script>
            function scroll() {
                window.scrollTo(0, 0);
            }

        </script>

        <div class="container-fluid footer">
            <p>Copyright © 2023 Shannon Rose Originals - All Rights Reserved.</p>
            <span id="arrow">
                <button class="fa-sharp fa-solid fa-arrow-up-long fa-lg arrow btn bg-transparent arrowSet"
                    onclick="window.scrollTo(0, 0)">
                </button>
            </span>
        </div>
    </body>
</html>