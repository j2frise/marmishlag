<?php
/**
* Template Name: Contact
*/
get_header();
the_content();

?>

<!-- Page Output -->
<section class="padding-tb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Full Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-15px">Send</a>
                </form>
            </div>
            <div class="col-lg-6 col-md-6">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h6>Phone :</h6>
                <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i> +222 333 019</span>
                <span class="d-block"><i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i> +222 333 019</span>
                <h6 class="margin-top-20px">Address :</h6>
                <span class="d-block"><i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i> NewYork 1234 Main St </span>
                <h6 class="margin-top-20px">Email :</h6>
                <span class="d-block"><i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i> info@yoursite.com </span>
            </div>
        </div>
    </div>
</section>
<!-- // Page Output -->

<?php get_footer(); ?>
