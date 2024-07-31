    <!-- ***** Welcome Area Start ***** -->
    <section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-lg-7">
                    <!-- Welcome Thumb -->
                    <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                        <article class="clock">
                            <div class="hours-container">
                                <div class="hours"></div>
                            </div>
                            <div class="seconds-container">
                                <div class="seconds"></div>
                            </div>
                            <div class="minutes-container">
                                <div class="minutes"></div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5">
                    <!-- Contact Box -->
                    <div class="text-center p-4 p-sm-5 mt-5 mb-5 shadow-lg">
                        <!-- Contact Form -->
                        <form action="<?= URL ?>connexion/traitement" method="post" id="contact-form mt-5">
                            <div class="">
                                <h3 class="">Connexion</h3>
                                <h5 class="py-3">bienvenue dans l'espace admin </h5>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="">
                                            <input class="form-control" name="username" type="text" placeholder="Identifiant" required="required">
                                    </div>
                                    <div class="mt-3">
                                        <input class="form-control" name="password" type="password" placeholder="Mot de passe" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-bordered w-100 mt-3 mt-sm-4" type="submit">Connexion</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
    </div>