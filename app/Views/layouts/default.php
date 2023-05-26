<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=link_tag('public/styles/bootstrap.min.css')?>
    <?=link_tag('public/styles/style.css')?>
    <?=script_tag('public/scripts/bootstrap.min.js')?>
    <title>Got7</title>
</head>
<body>
  <header>
  <div class="navbar navbar-dark shadow-sm" style="background-color: #002B40;">
    <div class="container">
      <a href="<?=base_url("/")?>" class="navbar-brand d-flex align-items-center">
        <strong>Got7</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
    </div>
  </div>
  </header>
  <main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1>Got7</h1>
        <p class="lead">The boy band "Got7" consists of seven members from South Korea.</p>
        <p>
          <a href="<?=base_url("members")?>" class="btn btn-primary my-2">Members</a>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
           More Information
          </button>
        </p>
      </div>
    </div>

    <?= $this->renderSection("content")?>

    <footer class="text-muted py-5">
        <div class="container">
          <p class="float-end mb-1">
            <a href="#">Back to top</a>
          </p>
        </div>
      </footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Got7</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <img src="public/images/got.png" />
      <div class="modal-body">
      <p>(Korean: 갓세븐; commonly stylized in all caps) is a South Korean boy band formed by JYP Entertainment. </p>
      <p>The group is composed of seven members: Jay B, Mark, Jackson, Jinyoung, Youngjae, BamBam, and Yugyeom. </p>
      <p>Got7 debuted in January 2014 with the release of their first EP Got It?, which peaked at number two on the Gaon Album Chart and number one on Billboard's World Albums Chart. The group gained attention also for their live performances, which often include elements of martial arts tricking and street dancing.</p>
      <p>In late 2014, Got7 signed with Sony Music Entertainment Japan and ventured into the Japanese market to release their debut Japanese-language single "Around the World". They returned to South Korea a month later to release their first full-length studio album Identify, which topped the nation's charts. In 2015, Got7 released the EPs Just Right and Mad, which yielded their most commercially successful single, "Just Right". In 2016, they moved into the Japanese market with a full-length Japanese studio album, Moriagatteyo, which entered the Oricon Albums Chart at number three.</p>
      <p>Their fifth Korean EP Flight Log: Departure and their second full-length studio album Flight Log: Turbulence were both chart-toppers, and the 2017 EP Flight Log: Arrival, the third and final part of the group's Flight Log series, was their first album to sell more than 300,000 copies.</p>
      The group departed from JYP Entertainment in January 2021, following the expiration of their contract with the agency.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>