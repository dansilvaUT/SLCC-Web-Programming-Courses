<?php
include_once 'Header/header.php';
?>


<script>
var dbx = new Dropbox.Dropbox({ accessToken: 'xWsYRP8Qb6AAAAAAAAAADnNSyGrALIeqnNICzWLdW8NLHlWnNzoN1H2gZ0CviRRq' });
console.log('below is all the filesin folder');
dbx.filesListFolder({path: ''})
  .then(function(response) {
    console.log(response['entries']);
    for(var i = 0; i < response['entries'].length; i++){
      createShareLink(response['entries'][i].path_display, i);
      var filename = response['entries'][i].name.split('.');
     $('#files').append('<a class="file-link" id="'+ i +'" href="#"><li class="list-group-item list-group-item-action"> <div class="text-left"> ' +
      filename[0] + '</div><div class="text-right"><i class="fa fa-download"></i>Download and Preview </div></li></a>' );
    }
  })
  .catch(function(error) {
    console.log(error);
  });
// the below function does not currently work.. doesnt like the oauth_token?
function authenticateDropBox(){
  $.ajax({
  type: "POST",
  headers: {
      'Authorization':'Basic dDgzcTE1YWp2aTM3ZGN6OjFtYTB2NXc5dGVweTcxcA==',
      'Content-Type':'application/json'
    },
  url: "https://api.dropboxapi.com/2/auth/token/from_oauth1",
  data: "{\"oauth1_token\": \"qievr8hamyg6ndck\",\"oauth1_token_secret\": \"qomoftv0472git7\"}",
  success: function(msg) {
      console.log(msg);
    },
  error: function (xhr, ajaxOptions, thrownError) {
          console.log(xhr);
       }
  });
}
function getFiles(){
  $.ajax({
  type: "POST",
  headers: {
      'Authorization':'Bearer xWsYRP8Qb6AAAAAAAAAADnNSyGrALIeqnNICzWLdW8NLHlWnNzoN1H2gZ0CviRRq',
      'Content-Type':'application/json'
    },
  url: "https://api.dropboxapi.com/2/sharing/list_received_files",
  data: '{\"limit\": 100,\"actions\": []}',
  success: function(msg) {
      console.log(msg);
    },
  error: function (xhr, ajaxOptions, thrownError) {
          console.log(xhr);
         //alert(xhr);
         //alert(thrownError);
       }
  });
}
// need to create some kind of way to get the Bearer token just in case it expires
function createShareLink(filePath, i){
  console.log('creating share link');
  $.ajax({
  path: filePath,
  updateIndex: i,
  type: "POST",
  headers: {
      'Authorization':'Bearer xWsYRP8Qb6AAAAAAAAAADnNSyGrALIeqnNICzWLdW8NLHlWnNzoN1H2gZ0CviRRq',
      'Content-Type':'application/json'
    },
  url: "https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings",
  data: '{"path": "' + filePath + '","settings": {"requested_visibility": "public"}}',
  success: function(msg) {
      console.log(msg)
    $('#'+ filePath).attr('href', msg['url']);
    },
  error: function (xhr, ajaxOptions, thrownError){
    console.log('before check existing file path: ' + this.path);
          console.log(xhr);
  checkExisting(this.path, i);
         //alert(xhr);
         //alert(thrownError);
       }
  });
}
function checkExisting(filePath, i){
  console.log('checking existing');
  console.log("file path: " + filePath);
  $.ajax({
  path: filePath,
  updateIndex: i,
  type: "POST",
  headers: {
      'Authorization':'Bearer xWsYRP8Qb6AAAAAAAAAADnNSyGrALIeqnNICzWLdW8NLHlWnNzoN1H2gZ0CviRRq',
      'Content-Type':'application/json'
    },
  url: "https://api.dropboxapi.com/2/sharing/list_shared_links",
  data: '{"path": "' + filePath + '"}',
  success: function(msg) {
      console.log(msg.links[0].url);
      var link = msg.links[0].url;
      $('#' + i).attr('href', link);
      $('#rule-book').attr('href', link);
    },
  error: function (xhr, ajaxOptions, thrownError) {
          console.log(xhr);
         //alert(xhr);
         //alert(thrownError);
       }
  });
}
// put this somewhere so you can get your list of files uploaded
// <ul id='files'>
// </ul>
</script>
<style>
.cta-inner {
  position: relative;
  padding: 3rem;
  margin: 0.5rem;
  background-color: rgba(255, 255, 255, 0.85);
}

.cta-inner:before {
  border-radius: 0.5rem;
  position: absolute;
  top: -0.5rem;
  bottom: -0.5rem;
  left: -0.5rem;
  right: -0.5rem;
  border: 0.25rem solid rgba(255, 255, 255, 0.85);
}


</style>

<div class="row ">
      <div class="col-md-4">
      <section class="page-section">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 mx-auto">
              <div class="cta-inner text-center rounded">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Locations</span>
                </h2>
                <div id="primary-locations">
                <h3 id="loc-1" class="location-click"> Hamal </h3>
                <h3 id="loc-4" class="location-click"> Litimore </h3>
                <div class="loc-4" hidden>
                  <hr>
                <ul>
                  <li id="loc-4-1">Yannic</li>
                </ul>
              </div>
                <h3 id="loc-2" class="location-click"> Undermeer </h3>
                <h3 id="loc-3" class="location-click"> Antadain </h3>
                <h3 id="loc-5" class="location-click"> Damoria </h3>
                <h3 id="loc-6" class="location-click"> Sleeping Dragon's Pass </h3>
                <h3 id="loc-7" class="location-click"> Vuka </h3>
                <h3 id="loc-8" class="location-click"> Gindren </h3>
                <h3 id="loc-9" class="location-click"> Entrican </h3>

              </div> <!--primary locations end -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
      <div class="col-md-8">
    <section class="page-section" >
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span hidden id="return" class="section-heading-upper">
                <a href="resources.php">
                  <i class="fa fa-arrow-left"> </i> Return Back
                </a>
                  </span>
                <span class="section-heading-lower">Our Realm</span>
              </h2>
              <div id="full-map">
                <img id="image-swap" src="Images/resource_images/fullMap.jpeg" alt="" usemap="#Map-0" />
<map name="Map-0" id="Map-0">
    <area alt="" title="" href="#" class="loc" id="cord-1" shape="poly" coords="56,142,72,62,54,30,26,12,1,2,3,140,2,143" />
    <area alt="" title="" href="#" class="loc" id="cord-2" shape="poly" coords="193,2,199,24,213,34,234,41,280,40,301,43,314,30,325,17,329,5,327,2" />
    <area alt="" title="" href="#" class="loc" id="cord-3" shape="poly" coords="75,0,84,18,117,29,143,45,183,47,193,44,196,26,192,8,187,1" />
    <area alt="" title="" href="#" class="loc" id="cord-4" shape="poly" coords="197,34,213,60,212,79,218,103,212,115,225,123,250,119,261,117,271,114,257,59,254,43" />
    <area alt="" title="" href="#" class="loc" id="cord-5"shape="poly"  coords="274,114,263,123,253,141,265,156,270,170,276,178,323,169,339,173,327,146" />
    <!-- <area alt="" title="" href="#" class="loc" id="6" shape="poly" coords="201,120,241,138,251,165,253,178,160,178,156,137" />
    <area alt="" title="" href="#" class="loc" id="7" shape="poly" coords="70,147,137,142,152,164,151,178,42,178" /> -->
</map>
</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div> <!--end of col -->
</div><!--end of row -->

   <section class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Scrolls, Tablets and PDFs</span>
                <span class="section-heading-lower"></span>
              </h2>

              <ul id="files" class="list-group">

              </ul>
            </div>

          </div>
        </div>
      </div>
    </section>

    <script>

    $('.loc').hover(function(){
      var id = $(this).attr('id').split('-');
      //console.log(id);
        $('#loc-'+id[1]).addClass('text-primary');
    },
    function(){
      var id = $(this).attr('id').split('-');
        $('#loc-'+id[1]).removeClass('text-primary');
    });

     $('.location-click').hover(function(){
      var id = $(this).attr('id').split('-');
      //console.log(id);
        $(this).addClass('text-primary');
    },
    function(){
      var id = $(this).attr('id').split('-');
        $(this).removeClass('text-primary');
    });

    $('.loc').click(function(){
      var id = $(this).attr('id').split('-');
      var newImage = "Images/resource_images/-" + id[1] + ".jpeg";
      $('#image-swap').attr('src', newImage);
      $('#image-swap').attr('usemap', "#Map-"+id[1]);
      $('.loc-' + id[1]).removeAttr('hidden');
      $('#return').removeAttr('hidden');

    });

    $('.location-click').click(function(){
      var id = $(this).attr('id').split('-');
      $(this).addClass('text-primary');
      var newImage = "Images/resource_images-" + id[1] + ".jpeg";
      $('#image-swap').attr('src', newImage);
      $('#image-swap').attr('usemap', "#Map-"+id[1]);
      $('.loc-' + id[1]).removeAttr('hidden');
      $('#return').removeAttr('hidden');
      for (var i = 1; i < 10; i++){
          if(i == id[1]){
              console.log("skip");
              continue;
          }else{
              $('#loc-'+ i).removeClass('text-primary');
          }

      }
    });

     if($(window).width() <= 900)
                {
                   $('#image-swap').attr('usemap', "#map-77");
                   $('#image-swap').attr('width', '100%');
                   $('#image-swap').attr('height', '75%');
                }
    </script>
<?php
include_once 'Footer/footer.php';
?>