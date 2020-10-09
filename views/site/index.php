

<?php
use yii\helpers\Url;
/**
 * @var $blogs \app\models\Blog
 */

$this->title = 'SpaceRent | rental of commercial premises';
?>
<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider_text "align="center">
                        <p style="color: #4b5d96; font-size: 45pt"><span style="color: #4b8196">For those who</span> rent, <span style="color: #4b8196">sell,</span> bye, <span style="color: #4b8196">live.</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- what has to offer Space.ua? -->
<div  class="welcome_docmed_area">
    <div class="container">
        <div class="slider_text "align="center">
                <div class="welcome_rent_info">
                    <!--                        <h2>what has to offer Space.ua?</h2>-->
                    <h3 style="color: #4b5d96">What has to offer <span style="color: #4b8196">Space.ua</span>?</h3>
                    <p>With the help of our site, you can easily rent a shop, cafe or other non-residential area. Here are the offers of owners and real estate agencies of any nature. Most of the proposals are accompanied by photographs.</p>
                </div>
        </div>
    </div>
</div>
<!-- what has to offer Space.ua?_end -->

<!-- welcome_docmed_area_start -->
<div class="welcome_docmed_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="welcome_docmed_info">
                    <!--<h2>what has to offer Space.ua?</h2>-->
                    <h3 align="center" style="color: #4b5d96">What need?</h3>
                    <p class="font-size-20pt">for lease registration you need:</p>
                    <ul class="unordered-list">
                        <li>Owner and tenant passports</li>
                        <li>Landlord and tenant identification codes</li>
                        <li>Real Estate Ownership Document</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- welcome_docmed_area_end -->

<!-- offers_area_start -->
<div class="our_department_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-55">
                    <h3>Latest news</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($blogs as $blog){
                ?>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="uploads/blog/images/<?= $blog->image ?>" alt="">
                        </div>
                        <div class="department_content">
                            <h3><?= $blog->header ?></h3>
                            <p><?= $blog->short_info ?></p>
                            <a href="<?= Url::to('placement/'.$blog->url_name) ?>" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- offers_area_end -->

<!-- testmonial_area_start -->
<div class="testmonial_area">
    <div class="testmonial_active owl-carousel">
        <div class="single-testmonial testmonial_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="testmonial_info text-center">
                            <div class="quote">
                                <i class="flaticon-straight-quotes"></i>
                            </div>
                            <br><br>
                            <p style="font-size:20pt;padding-top:150px">Over the last quarter, <br>
                                we have successfully completed 163 contracts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-testmonial testmonial_bg_2 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="testmonial_info text-center">
                            <div class="quote">
                                <i class="flaticon-straight-quotes"></i>
                            </div>
                            <br><br>
                            <p style="font-size:20pt;padding-top:150px">More than 20,000 happy clients <br>    </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Emergency_contact start -->
<div class="Emergency_contact">
    <div class="conatiner-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                    <div class="info">
                        <h3>Got More Questions? </h3>
                    </div>
                    <div class="info_button">
                        <a href="tel:3476206226" class="boxed-btn3-white">Call Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
