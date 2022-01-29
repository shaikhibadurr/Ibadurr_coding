<!DOCTYPE html>
<html>
<head>
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