<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    /* CSS reset */
*,
*::after,
*::before {
  box-sizing: inherit;
  margin: 0;
  padding: 0;
}



body {
  box-sizing: border-box;
  
}

/* Typography =======================*/

/* Headings */

/* Main heading for f-card's front cover */
.f-card-front__heading {
  font-size: 1.5rem;
  margin-top: .25rem;
}

/* Main heading for inside page */
.inside-page__heading { 
  padding-bottom: 1rem; 
  width: 100%;
}

/* Mixed */

/* For both inside page's main heading and 'view me' text on f-card front cover */
.inside-page__heading,
.f-card-front__text-view {
  font-size: 1.3rem;
  font-weight: 800;
  margin-top: .2rem;
}

.inside-page__heading--city,
.f-card-front__text-view--city { color: #ff62b2; }

.inside-page__heading--ski,
.f-card-front__text-view--ski { color: #2aaac1; }

.inside-page__heading--beach,
.f-card-front__text-view--beach { color: #fa7f67; }

.inside-page__heading--camping,
.f-card-front__text-view--camping { color: #00b97c; }

/* Front cover */

.f-card-front__tp { color: #fafbfa; }

/* For pricing text on f-card front cover */
.f-card-front__text-price {
  font-size: 1.2rem;
  margin-top: -.2rem;
}

/* Back cover */

/* For inside page's body text */
.inside-page__text {
  color: #333;
}

/* Icons ===========================================*/

.f-card-front__icon {
  fill: #fafbfa;
  font-size: 3vw;
  height: 3.25rem;
  margin-top: -.5rem;
  width: 3.25rem;
}

/* Buttons =================================================*/




/* Layout Structure=========================================*/

.main {
  background: linear-gradient(
    to bottom right,
    #eee8dd,
    #e3d9c6
  );
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100vh;
  width: 100%;
}

/* Container to hold all f-cards in one place */
.f-card-area {
  align-items: center;
  display: flex;
  flex-wrap: nowrap;
  height: 100%;
  justify-content: space-evenly;
  padding: 1rem;
}

/* f-card ============================================*/

/* Area to hold an individual f-card */
.f-card-section {
  align-items: center;
  display: flex;
  height: 100%;
  justify-content: center;
  width: 100%;
}

/* A container to hold the flip f-card and the inside page */
.f-card {
  box-shadow: -.1rem 1.7rem 6.6rem -3.2rem rgba(0,0,0,0.5);
  height: 15rem;
  position: relative;
  transition: all 1s ease;
  width: 15rem;
}

/* Flip f-card - covering both the front and inside front page */

/* An outer container to hold the flip f-card. This excludes the inside page */
.flip-f-card {
  height: 15rem;
  perspective: 100rem;
  position: absolute;
  right: 0;
  transition: all 1s ease;
  visibility: hidden;
  width: 15rem;
  z-index: 100;
}

/* The outer container's visibility is set to hidden. This is to make everything within the container NOT set to hidden  */
/* This is done so content in the inside page can be selected */
.flip-f-card > * {
  visibility: visible;
}

/* An inner container to hold the flip f-card. This excludes the inside page */
.flip-f-card__container {
  height: 100%;
  position: absolute;
  right: 0;
  transform-origin: left;
  transform-style: preserve-3d;
  transition: all 1s ease;
  width: 100%;
}

.f-card-front,
.f-card-back {
  backface-visibility: hidden;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

/* Styling for the front side of the flip f-card */

/* container for the front side */
.f-card-front {
  background-color: #fafbfa;
  height: 15rem;
  width: 15rem;
  border-radius: 10px;
}

/* Front side's top section */
.f-card-front__tp {
  align-items: center;
  clip-path: polygon(0 0, 100% 0, 100% 90%, 57% 90%, 50% 100%, 43% 90%, 0 90%);
  display: flex;
  flex-direction: column;
  height: 12rem;
  justify-content: center;
  padding: .75rem;
  border-radius: 10px ;
}

.f-card-front__tp--city {
  background: linear-gradient(
    to bottom,
    #ff73b9,
    #ff40a1
  );
}

.f-card-front__tp--ski {
  background: linear-gradient(
    to bottom,
    #47c2d7,
    #279eb2
  );
}

.f-card-front__tp--beach {
  background: linear-gradient(
    to bottom,
    #fb9b88,
    #f86647
  );
}

.f-card-front__tp--camping {
  background: linear-gradient(
    to bottom,
    #00db93,
    #00b97d
  );
}

/* Front f-card's bottom section */
.f-card-front__bt {
  align-items: center;
  display: flex;
  justify-content: center;
}

/* Styling for the back side of the flip f-card */

.f-card-back {
  background-color: #fafbfa;
  transform: rotateY(180deg);
  background: url('<?=base_url('assets/img/employee.jpg'); ?>');
  background-size: cover;
  border-radius: 10px 0 0 10px;
}

/* Specifically targeting the <video> element */
.video__container {
  clip-path: polygon(0% 0%, 100% 0%, 90% 50%, 100% 100%, 0% 100%);
  height: auto;
  min-height: 100%;
  object-fit: cover;
  width: 100%;
  border-radius: 10px 0 0 10px;
}

/* Inside page */

.inside-page {
  background-color: #fafbfa;
  box-shadow: inset 20rem 0px 5rem -2.5rem rgba(0,0,0,0.25);
  height: 100%;
  padding: 1rem;
  position: absolute;
  right: 0;
  transition: all 1s ease;
  width: 15rem;
  z-index: 1;
  border-radius: 10px;
}

.inside-page__container {
  align-items: center;
  display: flex;
  flex-direction: column;
  height: 100%;
  text-align: center; 
  width: 100%;
}

/* Functionality ====================================*/

/* This is to keep the f-card centered (within its container) when opened */
.f-card:hover {
  box-shadow:
  -.1rem 1.7rem 6.6rem -3.2rem rgba(0,0,0,0.75);
  width: 30rem;
  border-radius: 10px;
}

/* When the f-card is hovered, the flip f-card container will rotate */
.f-card:hover .flip-f-card__container {
  transform: rotateY(-180deg);
}

/* When the f-card is hovered, the shadow on the inside page will shrink to the left */
.f-card:hover .inside-page {
  box-shadow: inset 1rem 0px 5rem -2.5rem rgba(0,0,0,0.1);
  border-radius: 0 10px 10px 0;
}

.img .ibad{
  display: none;
  transition: 2s;
}
.img:hover .ibad{
  display: block;
  transition:   2s;
}
.img:hover img{
    display: none;
  transition:   2s;

}

  </style>
  <link rel="stylesheet" href="<?=base_url("assets/css/bootstrap.css");?>" >
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OMR Sample</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container container-fluid">
    <a class="navbar-brand" href="<?=base_url("omr_dashboard/");?>">OMR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?=base_url("omr_dashboard/");?>">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>

        <?php if($this->session->userdata('logged_in')): ?>
          <li class="nav-item">
          <a class="nav-link" href="<?=base_url("normal_user/logout");?>">Logout</a>
        </li>
        <?php else:?>
        <li class="nav-item">
          <a class="nav-link " href="<?=base_url("omr_dashboard/login");?>">Login</a>
        </li>
      <?php endif; ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>