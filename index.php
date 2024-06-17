<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on board</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php include '_navbar.php' ?>
        <div class="container">
            <h1>Welcome on board!</h1>
            <img src="/assets/images/avatar.png" alt="">
        </div>
    </header>
    <main>

        <section class="container">
            <h2 id="articles">Recent articles</h2>
            <div class="articles">
                <article>
                    <img src="/assets/images/responsive.png" alt="Responsive">
                    <h3>Responsive</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/scalable.png" alt="Scalable">
                    <h3>Scalable</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/inclusive.png" alt="Inclusive">
                    <h3>Inclusive</h3>
                    <a href="#">Read</a>
                </article>
            </div>
        </section>
        <section class="container">
            <h2 id="about">About</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum debitis fugit similique laborum,
                eveniet nam ratione sed, itaque, minus in hic dolores suscipit molestias quis quibusdam error blanditiis
                sapiente.
                Laborum laudantium aut, consequuntur voluptatum animi eaque mollitia? Saepe neque facilis minima
                laborum, provident numquam ipsum laudantium totam porro placeat exercitationem voluptates quia explicabo
                temporibus sapiente non. Quo, repellat corrupti.
            </p>
            <p>
                Excepturi dolore saepe, temporibus est voluptate necessitatibus molestiae sit minima eum quisquam et qui
                quaerat nemo nam, consequuntur nisi alias in praesentium. Fuga amet esse nam doloremque ut nemo nostrum.
            </p>
        </section>
        <section class="container">

            <h2>Get in touch</h2>

            <?php if (empty($errors)) : ?>

                <p>Leave us a message and we will get back to you as soon as possible.</p>
                <p>Fields marked with red wildcards* are required.</p>

            <?php else : ?>

                <h3>Please fix errors below</h3>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li>
                            <?= $error ?>
                        </li>
                    <?php endforeach ?>
                </ul>

            <?php endif ?>

            <form action="result.php" method="post">

                <div>
                    <label for="name"><b>Name <span class="red">*</span></b></label>
                    <input type="text" id="name" name="name" required="True">
                </div>

                <div>
                    <label for="email"><b>Email <span class="red">*</span></b></label>
                    <input type="email" id="email" name="email" required="True">
                </div>

                <div>
                    <label for="subject"><b>Subject <span class="red">*</span></b></label>
                    <select name="subject" id="subject" required="True">
                        <option value=""></option>
                        <option value="rdv">Prendre rendez-vous</option>
                        <option value="newsletter">Inscription à la newsletter</option>
                        <option value="reclamation">Réclamation</option>
                        <option value="devis">Demander un devis</option>
                    </select>
                </div>

                <div>
                    <label for="message"><b>Message</b></label>
                    <textarea name="message" id="message" rows="10"></textarea>
                </div>

                <div>
                    <button class="button">SEND</button>
                </div>

            </form>



        </section>
        <?php //@todo Add a contact form  
        ?>
    </main>
    <?php include '_footer.php' ?>
</body>

</html>