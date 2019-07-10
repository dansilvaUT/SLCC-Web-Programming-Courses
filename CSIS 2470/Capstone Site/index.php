<?php
include_once 'Header/header.php';
?>

<!-- Header Greeting -->
        <section>
            <div class="about-heading-content">
                <div class="rounded mb-4" id="welcomeLandscape">
                    <div class="row">
                        <div class="col-xs-11 col-md-12 col-lg-12 fadeIn0">
                            <div class="containThis" style="height: 100%; width: 100%;">
                            <image
                                class="img-fluid table-sm animate"
                                style="z-index: 30;"
                                src="Images/animation_images/HillLandscape.png">
                            <image id="forest"
                                class="img-fluid table-sm animate"
                                style="z-index: 10; left: -300px;"
                                src="Images/animation_images/TreeLandscapeLeft.png">
                            <image id="forestright"
                                class="img-fluid table-sm animate"
                                style="z-index: 10; left: 300px;"
                                src="Images/animation_images/TreeLandscapeRight.png">
                            <image style="z-index: 40;"
                                id="cabinLandscape"
                                class="img-fluid table-sm animate"
                                src="Images/animation_images/CabinLandscape.png">
                            <div class="col-xs-1 col-md-6 col-lg-12" id="welcomeTag">
                                <div class="bg-faded rounded p-4 animate"
                                    style="z-index: 50; margin-top: 15%">
                                    <h2 class="section-heading mb-4">
                                        <span class="section-heading-lower" id="greeting"
                                        style="font-size: 40px;">Welcome fellow traveler</span>
                                    </h2>
                                </div>
                            </div>
                            <image
                                class="img-fluid table-sm"
                                style="position: relative;"
                                src="Images/animation_images/SkyLandscape.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div></div>
            </div>
        </section>



    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="Images/intro.jpg" alt="HERE I AM">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Friends</span>
              <span class="section-heading-lower">Gather Round</span>
            </h2>
            <p class="mb-3">Alliance Live Action Role-Playing Utah is a group committed to bringing action-packed weekend adventures to the LARP Community.
			Through quality writing and plotlines that establish setting, various dynamic NPC characters, and conflicts great and small, we are dedicated to
			bringing you the best live gaming experience.
            </p>
            <div class="intro-button mx-auto">
              <a class="contact.php">Come Join The Fun!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Challenge</span>
                <span class="section-heading-lower">Accepted</span>
              </h2>
              <p class="mb-0">Any novice gamemaster can throw stats and treasure onto NPCs and make a LARPing event action-packed, but we strive to provide political intrigue, problem solving, world building, character development, and an atmosphere dedicated to costuming, acting, staying in game, and being all that you can't be in the real world.  Join us at Alliance LARP Utah and be all that you can't be!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    include_once 'Footer/footer.php';
    ?>

