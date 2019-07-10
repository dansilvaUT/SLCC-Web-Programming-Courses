<?php
include_once 'Header/header.php';
?>

<script src="Js/productscript.js"></script>

<style>
            .fadeIn0, .fadeIn1, .fadeIn3, .fadeIn4, .fadeIn5
            {
                display: none;
                cursor: pointer;
            }
            .fadeIn2
            {
                display: none;
            }
        </style>

        <span class="site-heading-lower">A Guild cannot operate on nil</span><section class="page-section about-heading">
            <div class="container">
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xs-12 col-md-10 col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-4">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-lower" style="font-size: 40px;">Products</span>
                                </h2>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn0">

                                            <image data-toggle="modal" data-target="#modal" id="foodplan"
                                                class="img-fluid table-sm toggle rounded"
                                                src="Images/product_images/BreadColorNB.png">
                                                Food plan

                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn0">
                                            <image data-toggle="modal" data-target="#modal" id="tent"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/TentColor.png">
                                                Sleeping in a tent
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn0">
                                            <image  data-toggle="modal" data-target="#modal" id="cabin"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/CabinColor.png">
                                                Sleeping in a cabin
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn0">
                                            <image data-toggle="modal" data-target="#modal" id="membership"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/MembershipColor.png">
                                                Membership fee
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn0">
                                            <image data-toggle="modal" data-target="#modal" id="gamefee"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/DoubleAxeColor.png">
                                                Game fee
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn0">
                                            <image data-toggle="modal" data-target="#modal" id="weekendpackage"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/AxeColor.png">
                                                Weekend package
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn1">
                                            <image data-toggle="modal" data-target="#modal" id="daypackage"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/DoubleAxeColor.png">
                                                Day package
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn1">
                                            <image data-toggle="modal" data-target="#modal" id="forgeweapon"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/SwordColor.png">
                                                Forge your own weapon
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="fadeIn2">
                                    <h2 class="section-heading mb-4">
                                        <span class="section-heading-lower" style="font-size: 40px;">Donate</span>
                                        <span class="section-heading-upper">Help Our Cause</span>
                                    </h2>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn3">
                                            <image data-toggle="modal" data-target="#modal" id="donate"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/HandsColor.png">
                                                Donate Money
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn3">
                                            <image data-toggle="modal" data-target="#modal" id="donateweapons"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/SwordColor.png">
                                                Weapons
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn3">
                                            <image data-toggle="modal" data-target="#modal" id="donatepackets"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/ArrowColor.png">
                                                Packets
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn4">
                                            <image data-toggle="modal" data-target="#modal" id="miscellaneous"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/WaterColor.png">
                                                Miscellaneous
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn4">
                                            <image data-toggle="modal" data-target="#modal" id="costuming"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/CostumesColor.png">
                                                Costuming
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn4">
                                            <image data-toggle="modal" data-target="#modal" id="masks"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/MaskColor.png">
                                                Masks
                                        </div>
                                        <div class="col-xs-11 col-md-6 col-lg-4 fadeIn5">
                                            <image data-toggle="modal" data-target="#modal" id="time"
                                                class="img-fluid table-sm"
                                                src="Images/product_images/TimeColor.png">
                                                Your Time
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal Food Plan-->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #e6a756;">
                <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <img class="img-fluid table-sm col-lg-12" id="modelimage" src="">
                  <p class="col-lg-12" id="modaltext"></p>
              </div>
              <div class="modal-footer">
                <p class="col-xs-3 col-lg-4" id="modalfooter"></p>

                    <button  type="button" id="submit" class="btn btn-primary col-xs-1 col-lg-4">
                       Add To Cart
                     </button>

                <button type="button" class="btn btn-secondary col-xs-1 col-lg-3" data-dismiss="modal">Return</button>
              </div>
            </div>
          </div>
        </div>

        <?php
include_once 'Footer/footer.php';
?>