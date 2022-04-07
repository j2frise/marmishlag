<?php
/**
* Template Name: Login
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
                    <label class="control-label">Mot de passe</label>
                    <input class="form-control" placeholder="" type="password">
                </div>

                <div class="remember">
                    <a href="#" class="forgot">Mot de passe oublié ?</a>
                </div>

                <a href="dashboard-home.html" class="btn btn-md btn-primary full-width">Se connecter</a>

                <div class="or"></div>

                <p>Je n'ai pas de compte ? <a href="<?=get_site_url().'/register'?>">S'inscrire</a> </p>
            </form>
        </div>
    </div>
    <!--======= // log_in_page =======-->

</div>

<?php get_footer(); ?>
