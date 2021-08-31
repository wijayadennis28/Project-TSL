<?php
require_once('main.class.php');
$main = new Main;
$responseArr = $main->getAPIData('https://api.github.com/gists/public');
//  echo '<pre>',print_r($responseArr),'</pre>';exit;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>TSL Hiring Test 2020</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <!-- Favicons -->
<link rel="apple-touch-icon" href="media/img/icons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="media/img/icons/tsl_icon.png" sizes="32x32" type="image/png">
<link rel="icon" href="media/img/icons/tsl_icon.png" sizes="16x16" type="image/png">
<link rel="manifest" href="media/img/icons/manifest.json">
<link rel="mask-icon" href="media/img/icons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="media/img/icons/tsl_logo.png">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <!-- <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Github Gists</h1>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($responseArr as $mainKey => $mainValue){?>
        <div class="col">
          <div class="card shadow-sm">
            <?php if($mainValue['owner']['avatar_url'] != ""){?>
            <img src="<?php echo $mainValue['owner']['avatar_url']; ?>" alt="Girl in a jacket" width="100%" height="225">
            <?php } else {?>
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <?php } ?>

            <div class="card-body">
            <?php if($mainValue['owner']['login'] != ""){?>
              <p class="card-text">Username:&nbsp;<?php echo $mainValue['owner']['login']; ?></p>
            <?php } ?>
            <?php if($mainValue['owner']['html_url'] != ""){?>
              <p class="card-text">Github Profile:&nbsp;<a href="<?php echo $mainValue['owner']['html_url']; ?>" class="card-text"><?php echo $mainValue['owner']['html_url']; ?></a></p>
            <?php } ?>
            <?php if($mainValue['html_url'] != ""){?>
              <p class="card-text">Github Gists URL:&nbsp;<a href="<?php echo $mainValue['html_url']; ?>" class="card-text" target="_blank">Click Here!</a></p>
            <?php } ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id='btn_viewdetails_<?php echo $mainValue['owner']['id']; ?>' data-bs-toggle="modal" data-bs-target="#modal_<?php echo $mainValue['owner']['id']; ?>" class="btn btn-sm btn-outline-secondary">View Details</button>

                  <div class="modal fade" id="modal_<?php echo $mainValue['owner']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal_<?php echo $mainValue['owner']['id']; ?>" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Gists Information</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> -->
                      </div>
                      <div class="modal-body">
                      <ul class="list-group">
                        <?php foreach($mainValue['files'] as $fileValue){?>
                          <li class="list-group-item">Filename:&nbsp;<a href="<?php echo $fileValue['raw_url']; ?>" target="_blank" download><?php echo $fileValue['filename'];?></a></li>
                        <?php } ?>
                          <?php 
                          $createdDateTime = date('Y-m-d h:i:s', strtotime($mainValue['created_at']));
                          $updatedDateTime = date('Y-m-d h:i:s', strtotime($mainValue['updated_at']));

                          if($createdDateTime == $updatedDateTime){
                          ?>
                          <li class="list-group-item">Created & Updated Date Time: <?php echo date('Y-m-d h:i:s', strtotime($mainValue['created_at']));?></li>
                          <?php } else { ?>
                            <li class="list-group-item">Created Date Time: <?php echo date('Y-m-d h:i:s', strtotime($mainValue['created_at']));?></li>
                            <li class="list-group-item">Updated Date Time: <?php echo date('Y-m-d h:i:s', strtotime($mainValue['updated_at']));?></li>
                          <?php } ?>
                      </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                  <button type="button" class="btn btn-sm btn-outline-secondary">Bookmark</button>
                </div>
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>


    <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

      
</body>
</html>

<script type="text/javascript">
var responseArr = <?php echo json_encode($responseArr); ?>;
// for(var i=0, leni=responseArr.length; i < leni; i++){
//   var id = responseArr[i]['owner']['id'];
//   var modalId = '#modal_'+responseArr[i]['owner']['id'];
// }
</script>
