<?php require APPROOT.'/views/includes/header.php'; ?>
<?php require APPROOT.'/views/includes/nav.php'; ?>
<header class="bg-primary text-white">
    <div class="container text-center">
      <h1><?php echo SITENAME; ?></h1>
      <p class="lead">An simple example of using simpleMVC</p>

    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2><?php echo $data['indexInfo'][0]->section_title; ?></h2>
          <p class="lead"><?php echo $data['indexInfo'][0]->section_text; ?></p>
         </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2><?php echo $data['indexInfo'][1]->section_title; ?></h2>
          <p class="lead"><?php echo $data['indexInfo'][1]->section_text; ?></p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2><?php echo $data['indexInfo'][2]->section_title; ?></h2>
          <p class="lead"><?php echo $data['indexInfo'][2]->section_text; ?></p>
        </div>
      </div>
    </div>
  </section>

<?php require APPROOT.'/views/includes/footer.php'; ?>
