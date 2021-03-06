<?php
/**
* Template Name: Home
*/
get_header();
the_content();

?>
<div class="banner padding-tb-20px background-overlay" style="background-image: url('http://placehold.it/1600x747');">>
    <div class="container">

        <div class="padding-tb-120px z-index-2 position-relative">
            <div class="text-center">
                <h1 class="text-white pull-l icon-large font-weight-500 margin-bottom-40px">+20,000</h1>
                <h3 class="text-white icon-large font-weight-100">Cooking Recipes</h3>
            </div>
            <div class="margin-top-45px">
                <div class="row justify-content-center margin-tb-60px">
                    <div class="col-lg-8">
                        <div class="listing-search">
                            <form class="row no-gutters">
                                <div class="col-md-4">
                                    <div class="keywords">
                                        <input class="listing-form first" type="text" placeholder="Keywords..." value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="categories dropdown">
                                        <a class="listing-form d-block text-nowrap" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Categories</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item text-up-small" type="button">Fish</button>
                                            <button class="dropdown-item text-up-small" type="button">Cocktails</button>
                                            <button class="dropdown-item text-up-small" type="button">Salads</button>
                                            <button class="dropdown-item text-up-small" type="button">Asian</button>
                                            <button class="dropdown-item text-up-small" type="button">Fish</button>
                                            <button class="dropdown-item text-up-small" type="button">Cocktails</button>
                                            <button class="dropdown-item text-up-small" type="button">Salads</button>
                                            <button class="dropdown-item text-up-small" type="button">Asian</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a class="listing-bottom background-second-color box-shadow" href="#">Search Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //container  -->
</div>


<div class="pull-top-85px">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                <a href="#" class="d-block box-shadow background-main-color text-white hvr-float">
                    <div class="thum"><img src="http://placehold.it/450x250" alt=""></div>
                    <h4 class="text-center padding-15px">Fish</h4>
                </a>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                <a href="#" class="d-block box-shadow background-main-color text-white hvr-float">
                    <div class="thum"><img src="http://placehold.it/450x250" alt=""></div>
                    <h4 class="text-center padding-15px">Cocktails</h4>
                </a>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                <a href="#" class="d-block box-shadow background-main-color text-white hvr-float">
                    <div class="thum"><img src="http://placehold.it/450x250" alt=""></div>
                    <h4 class="text-center padding-15px">Eggs</h4>
                </a>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                <a href="#" class="d-block box-shadow background-main-color text-white hvr-float">
                    <div class="thum"><img src="http://placehold.it/450x250" alt=""></div>
                    <h4 class="text-center padding-15px">Salads</h4>
                </a>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                <a href="#" class="d-block box-shadow background-main-color text-white hvr-float">
                    <div class="thum"><img src="http://placehold.it/450x250" alt=""></div>
                    <h4 class="text-center padding-15px">Asian</h4>
                </a>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                <a href="#" class="d-block box-shadow background-main-color text-white hvr-float">
                    <div class="thum"><img src="http://placehold.it/450x250" alt=""></div>
                    <h4 class="text-center padding-15px">Pizza</h4>
                </a>
            </div>
        </div>
    </div>
</div>


<section class="padding-tb-100px">
    <div class="container">
        <div class="title text-center">
            <h2 class="font-weight-700 text-main-color">Latest Recipes</h2>
            <div class="row justify-content-center margin-bottom-45px">
                <div class="col-md-7">
                    <p class="text-grey-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
            </div>
        </div>

        <div class="recipes-masonry">

            <!-- Recipe Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 recipe-item margin-bottom-40px">
                <div class="card border-0 box-shadow">
                    <div class="card-img-top"><a href="#"><img src="http://placehold.it/420x335" alt=""></a></div>
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">Slow Cooker Loaded Potato Soup</a></h5>
                        <div class="rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i> 6-8 servings</a></div>
                        </div>
                    </div>
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="http://placehold.it/50x50" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>
            </div>
            <!-- // Recipe Item -->


            <!-- Recipe Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 recipe-item margin-bottom-40px">
                <div class="card border-0 box-shadow">
                    <div class="card-img-top"><a href="#"><img src="http://placehold.it/420x475" alt=""></a></div>
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">Slow Cooker Loaded Potato Soup</a></h5>
                        <div class="rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i> 6-8 servings</a></div>
                        </div>
                    </div>
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="http://placehold.it/50x50" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>
            </div>
            <!-- // Recipe Item -->


            <!-- Recipe Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 recipe-item margin-bottom-40px">
                <div class="card border-0 box-shadow">
                    <div class="card-img-top"><a href="#"><img src="http://placehold.it/420x335" alt=""></a></div>
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">Slow Cooker Loaded Potato Soup</a></h5>
                        <div class="rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i> 6-8 servings</a></div>
                        </div>
                    </div>
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="http://placehold.it/50x50" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>
            </div>
            <!-- // Recipe Item -->


            <!-- Recipe Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 recipe-item margin-bottom-40px">
                <div class="card border-0 box-shadow">
                    <div class="card-img-top"><a href="#"><img src="http://placehold.it/420x475" alt=""></a></div>
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">Slow Cooker Loaded Potato Soup</a></h5>
                        <div class="rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i> 6-8 servings</a></div>
                        </div>
                    </div>
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="http://placehold.it/50x50" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>
            </div>
            <!-- // Recipe Item -->


            <!-- Recipe Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 recipe-item margin-bottom-40px">
                <div class="card border-0 box-shadow">
                    <div class="card-img-top"><a href="#"><img src="http://placehold.it/420x335" alt=""></a></div>
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">Slow Cooker Loaded Potato Soup</a></h5>
                        <div class="rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i> 6-8 servings</a></div>
                        </div>
                    </div>
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="http://placehold.it/50x50" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>
            </div>
            <!-- // Recipe Item -->


            <!-- Recipe Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 recipe-item margin-bottom-40px">
                <div class="card border-0 box-shadow">
                    <div class="card-img-top"><a href="#"><img src="http://placehold.it/420x335" alt=""></a></div>
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">Slow Cooker Loaded Potato Soup</a></h5>
                        <div class="rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i> 6-8 servings</a></div>
                        </div>
                    </div>
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="http://placehold.it/50x50" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>
            </div>
            <!-- // Recipe Item -->


            <!-- Recipe Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 recipe-item margin-bottom-40px">
                <div class="card border-0 box-shadow">
                    <div class="card-img-top"><a href="#"><img src="http://placehold.it/420x335" alt=""></a></div>
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">Slow Cooker Loaded Potato Soup</a></h5>
                        <div class="rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i> 6-8 servings</a></div>
                        </div>
                    </div>
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="http://placehold.it/50x50" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>
            </div>
            <!-- // Recipe Item -->


            <!-- Recipe Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 recipe-item margin-bottom-40px">
                <div class="card border-0 box-shadow">
                    <div class="card-img-top"><a href="#"><img src="http://placehold.it/420x335" alt=""></a></div>
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">Slow Cooker Loaded Potato Soup</a></h5>
                        <div class="rating">
                            <ul>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i> 6-8 servings</a></div>
                        </div>
                    </div>
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="http://placehold.it/50x50" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>
            </div>
            <!-- // Recipe Item -->


        </div>
        <div class="text-center">
            <a href="#" class="btn box-shadow margin-top-50px padding-tb-10px btn-sm border-2 border-radius-30 btn-inline-block width-210px background-second-color text-white">Show All Recipes</a>
        </div>


    </div>
    <!-- // container -->
</section>


<section class="padding-tb-100px background-white">
    <div class="container">

        <div class="title text-center">
            <h2 class="font-weight-700 text-main-color"> Top Authors</h2>
            <div class="row justify-content-center margin-bottom-45px">
                <div class="col-md-7">
                    <p class="text-grey-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-2 col-md-3 text-center">
                <div class="hvr-float">
                    <div class="thum"><a href="#"><img class="border-radius-8 box-shadow" src="http://placehold.it/270x270" alt=""></a></div>
                    <a class="h4 d-block margin-top-20px" href="#">Ali haleem</a>
                    <small class="text-grey-2">(145 Recipes)</small>
                </div>
            </div>


            <div class="col-lg-2 col-md-3 text-center">
                <div class="hvr-float">
                    <div class="thum"><a href="#"><img class="border-radius-8 box-shadow" src="http://placehold.it/270x270" alt=""></a></div>
                    <a class="h4 d-block margin-top-20px" href="#">Salim Aldosery</a>
                    <small class="text-grey-2">(145 Recipes)</small>
                </div>
            </div>


            <div class="col-lg-2 col-md-3 text-center">
                <div class="hvr-float">
                    <div class="thum"><a href="#"><img class="border-radius-8 box-shadow" src="http://placehold.it/270x270" alt=""></a></div>
                    <a class="h4 d-block margin-top-20px" href="#">Rabie Khair</a>
                    <small class="text-grey-2">(145 Recipes)</small>
                </div>
            </div>


            <div class="col-lg-2 col-md-3 text-center">
                <div class="hvr-float">
                    <div class="thum"><a href="#"><img class="border-radius-8 box-shadow" src="http://placehold.it/270x270" alt=""></a></div>
                    <a class="h4 d-block margin-top-20px" href="#">Momen Alsho</a>
                    <small class="text-grey-2">(145 Recipes)</small>
                </div>
            </div>


            <div class="col-lg-2 col-md-3 text-center">
                <div class="hvr-float">
                    <div class="thum"><a href="#"><img class="border-radius-8 box-shadow" src="http://placehold.it/270x270" alt=""></a></div>
                    <a class="h4 d-block margin-top-20px" href="#">M.Salman ali</a>
                    <small class="text-grey-2">(145 Recipes)</small>
                </div>
            </div>


            <div class="col-lg-2 col-md-3 text-center">
                <div class="hvr-float">
                    <div class="thum"><a href="#"><img class="border-radius-8 box-shadow" src="http://placehold.it/270x270" alt=""></a></div>
                    <a class="h4 d-block margin-top-20px" href="#">Khalid Ziaad</a>
                    <small class="text-grey-2">(145 Recipes)</small>
                </div>
            </div>

        </div>

        <div class="text-center">
            <a href="#" class="btn box-shadow margin-top-50px padding-tb-10px btn-sm border-2 border-radius-30 btn-inline-block width-210px background-dark text-white">Show All Authors</a>
        </div>

    </div>
</section>

<?php get_footer(); ?>
