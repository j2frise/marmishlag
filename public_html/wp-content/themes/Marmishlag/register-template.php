<?php
/**
* Template Name: Register
*/
get_header();
the_content();

?>
<div class="container margin-bottom-100px margin-top-50px padding-t-30px">
    <!--======= log_in_page =======-->
    <div id="log-in" class="site-form log-in-form box-shadow border-radius-10">

        <div class="form-output">
            <form>
                <div class="form-group label-floating">
                    <label class="control-label">Email</label>
                    <input class="form-control" placeholder="" type="email">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Nom</label>
                    <input class="form-control" placeholder="" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Prénom</label>
                    <input class="form-control" placeholder="" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Mot de passe</label>
                    <input class="form-control" placeholder="" type="password">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Confirmer le mot de passe</label>
                    <input class="form-control" placeholder="" type="password">
                </div>

                <a href="dashboard-home.html" class="btn btn-md btn-primary full-width">S'inscrire</a>

                <div class="or"></div>
                
                <p>Vous avez déjà un compte ? <a href="<?=get_site_url().'/login'?>">Se connecter</a> </p>
            </form>
        </div>
    </div>
    <!--======= // log_in_page =======-->

</div>

<?php get_footer(); ?>
