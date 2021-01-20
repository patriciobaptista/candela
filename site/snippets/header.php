<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <link href="https://fonts.googleapis.com/css?family=Ortica|Raleway&display=swap" rel="stylesheet">
  <?= css(['assets/css/index.css', '@auto']) ?>
  <?= css(['assets/css/grid.css', '@auto']) ?>
  <?= js(['assets/js/index.js']) ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="page">
    <header id="header">
    <div class="logo">
      <svg width="160px" height="22" viewBox="0 0 239 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M0 16.0433C0 6.05391 8.21441 0 19.1824 0C29.7193 0 37.0316 5.27589 37.3323 13.1025L29.1179 13.4916C28.774 8.08668 24.9891 4.67019 19.0972 4.67019C13.1621 4.67019 8.56027 9.08139 8.56027 15.9567C8.56027 22.8753 13.1621 27.1998 19.1403 27.1998C24.9891 27.1998 28.9034 23.9133 29.3765 18.5518L37.5057 18.9408C37.1619 26.7685 29.8075 32 19.0982 32C8.21441 32 0 25.9451 0 16.0433Z" fill="#4A0D0D"/>
<path d="M61.7179 23.1353H47.9554L44.7729 31.1353H36.1705L48.9447 0.864685H60.8158L73.59 31.1343H64.9025L61.7179 23.1353ZM59.9978 18.8541L54.7935 5.88158L49.6323 18.8541H59.9978Z" fill="#4A0D0D"/>
<path d="M108.038 0.864685V31.1343H99.1785L83.5666 8.77801L84.0828 31.1343H75.7391V0.864685H84.5559L100.168 23.0486L99.6516 0.864685H108.038Z" fill="#4A0D0D"/>
<path d="M111.608 0.864685H125.801C137.328 0.864685 145.758 6.52959 145.758 15.9566C145.758 25.427 137.285 31.1343 125.758 31.1343H111.608V0.864685ZM125.414 26.7241C132.209 26.7241 137.155 22.8753 137.155 16.0433C137.155 9.08137 132.21 5.1892 125.37 5.1892H119.952V26.7241H125.414Z" fill="#4A0D0D"/>
<path d="M156.811 5.40486V13.7939L171.348 13.7505V17.9884L156.811 17.945V26.4207L173.627 26.3341V31.1343H148.467V0.864685H173.197V5.49154L156.811 5.40486Z" fill="#4A0D0D"/>
<path d="M199.346 25.9894V31.1353H176.938V0.864685H185.282L185.196 26.0317L199.346 25.9894Z" fill="#4A0D0D"/>
<path d="M227.13 23.1353H213.367L210.184 31.1343H201.582L214.356 0.864685H226.227L239.001 31.1343H230.313L227.13 23.1353ZM225.41 18.8541L220.206 5.88158L215.044 18.8541H225.41Z" fill="#4A0D0D"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="239" height="32" fill="white"/>
</clipPath>
</defs>
</svg>
</div>
      <h1 id="title">
        <a href="<?= $site->url() ?>" class="logo-container">
          <?= $site->title() ?>
        </a>
      </h1>

      <nav id="nav-menu">
        <ul class="nav-list">
          <li class="nav-link"><a href="#book">book</a></li>
          <li class="nav-link"><a href="#menu">menu</a></li>
          <li class="nav-link"><a href="#voucher">vouchers</a></li>
          <li class="nav-link"><a href="#contact">contact</a></li>
        </ul>
      </nav>
      <div class="topnav">
<!-- Navigation links (hidden by default) -->
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
</a>
<div id="myLinks">
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->

</div>
    </header>
