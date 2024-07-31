<?php $title = 'Contactez-nous sur notre formulaire de contact ou par téléphone' ?>
<section class="page-header" style="background-image: url(assets/zaphyra/image-des-autres-page.jpg);">
    <div class="container">
        <h2>CONTACT</h2>
    </div><!-- /.container -->

</section><!-- /.page-header -->
<script src="https://www.google.com/recaptcha/api.js?render=6Le-aYQkAAAAAEVzO6uFXVRglJ_Vje9SbWxtDPXJ"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Le-aYQkAAAAAEVzO6uFXVRglJ_Vje9SbWxtDPXJ', {
            action: 'submit'
        }).then(function(token) {
            // Add your logic to submit to your backend server here.
            var response = document.getElementById('token_response')

            response.value = token;
        });
    });
</script>

<div class="contact-one" style="background-color: #f5f7fa;">
    <div class="container">
        <div class="block-title-two text-center" id="titleContact">
            <p>Contact</p>
        </div><!-- /.block-title-two -->
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-one__box">
                    <h3>Horaires d'ouvertures</h3>
                    <ul>
                        <li>Mardi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00-19:00
                        </li>
                        <li>Mercredi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00-19:00</li>
                        <li>Jeudi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00-19:00
                        </li>
                        <li>Vendredi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00-19:00</li>
                        <li>Samedi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00-19:00</li>
                        <li>Dimanche&nbsp;&nbsp;&nbsp;&nbsp;Fermé</li>
                        <li>Lundi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fermé
                        </li>
                    </ul>
                </div><!-- /.contact-one__box -->

                <div class="contact-one__box">
                    <h3>Contact Sociale</h3>
                    <div class="contact-one__box-social">
                        <a href="https://www.facebook.com/zaphyra.lille" class="fab fa-facebook-f"></a>
                    </div><!-- /.contact-one__box-social -->
                </div><!-- /.contact-one__box -->

                <div class="contact-one__box">
                    <h3>Téléphone</h3>
                    <p>03 20 87 20 69</p>
                </div><!-- /.contact-one__box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <form method="post" action="<?= URL ?>Mail/Mailer" class="contact-one__form" onsubmit="aler('Le message est envoyé avec succès !')">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="hidden" name="token_response" id="token_response">
                            <input name="name" type="text" placeholder="Nom / Prénom*" required>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input name="email" type="text" placeholder="Email*" required>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input name="phone" type="text" placeholder="Téléphone">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input name="subject" type="text" placeholder="Sujet">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="Votre message"></textarea>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <button class="thm-btn contact-one__btn" type="submit">Envoyer</button>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->
                <?php if(isset($_SESSION["MailStatus"]) && $_SESSION["MailStatus"] = true) { ?>
                <div class="alert alert-success">
                    Votre mail a bien été envoyé
                </div>
                <?php } ?>
                <?php if(isset($_SESSION["MailStatus"]) && $_SESSION["MailStatus"] = false) { ?>
                <div class="alert alert-danger">
                    Une erreur s'est produite
                </div>
                <?php } ?>
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.contact-one -->

<div class="contact-map-one" id="maps" style="background-color: #f5f7fa;">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.185394864677!2d3.059226915900805!3d50.6236726827489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d599fff4c1fd%3A0x7c99b6335cc502c8!2sZaphyra!5e0!3m2!1sfr!2sfr!4v1600805857144!5m2!1sfr!2sfr&zoom=10" class="google-map__contact" allowfullscreen></iframe>

    </div><!-- /.container -->
</div><!-- /.contact-map-one -->


</div><!-- /.page-wrapper -->