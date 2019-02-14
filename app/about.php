<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Blog App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            type="text/css"
            media="screen"
            href="styles/styles.css"
        />
    </head>
    <body>
        <div class="navbar-dark bg-dark">
            <nav class="navbar navbar-expand-lg container">
                <a class="navbar-brand text-uppercase" href="index.php"
                    >Blog App</a
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse justify-content-end"
                    id="navbarNavDropdown"
                >
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php"
                                >Home <span class="sr-only">(current)</span></a
                            >
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php"
                                ><em class="fa fa-user"></em> Login</a
                            >
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- /. End of Nav -->

        <section class="py-5">
            <div class="container">
                <h1 class="text-dark">About</h1>
                <hr class="mb-5" />
                <p><img src="images/slides/slide2.jpg" alt="" /></p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Modi deserunt nostrum ex totam, id nisi optio quaerat
                    laborum reprehenderit quasi ea aspernatur repellendus vel
                    ratione eum delectus! A, repellendus blanditiis. Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Qui beatae
                    natus saepe similique velit accusamus unde eius doloribus,
                    sed voluptate excepturi, accusantium dolorum quaerat commodi
                    molestias obcaecati est. Laboriosam, ipsum. Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Neque porro,
                    dignissimos assumenda veniam doloribus accusantium? Est
                    accusantium alias magni quibusdam inventore quod labore.
                    Laboriosam, voluptas asperiores et cum dolore labore.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Modi deserunt nostrum ex totam, id nisi optio quaerat
                    laborum reprehenderit quasi ea aspernatur repellendus vel
                    ratione eum delectus! A, repellendus blanditiis.
                </p>
            </div>
        </section>
        <footer class="footer bg-dark py-4">
            <div class="container text-center text-light">
                &copy; 2019 All rights Reserved.
            </div>
        </footer>
        <script src="scripts/app.js"></script>
    </body>
</html>