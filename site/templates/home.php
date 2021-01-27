
<?php snippet('header') ?>
<main>
  <h1 id="title"><?= $site->title() ?></h1>
  <section id="home" class="cream-bg">
    <article id="main-image" <?php if($image = $page->photo()->toFile()): ?> style="background-image:url(<?php echo $image->url() ?>)" <?php endif ?>>
      <div class="info">
       <span class="opening-hours"> <p><?= $page->hours()->or('tuesday - saturday: 5pm till late')  ?></p>  </span>
       <span class="address"> <p><?= $page->address()->or('155 Karangahape Road') ?></p>  </span>
      </div>
    </article>
  </section>
  <section id="book" class="maroon-bg">
    <div class="book-wrapper">
      <div id="rd-widget-frame" style="max-width: 285px; margin: auto;"></div>

<input id="rdwidgeturl" name="rdwidgeturl" value="https://booking.resdiary.com/widget/MiniTall/Candela/4647?includeJquery=false" type="hidden">
      <div class="booking-text">
        <p><?= $page->booking()->kt()->or('For large bookings please <br> email us at hello@candelabar.co.nz <br> or call us on 921 300 88') ?></p>
      </div>
    </div>
  </section>
  <section id="sec-images">
    <article class="sec-images-container">
      <?php
      $images =  $page->secondaryImages()->toFiles();
      foreach($images as $image): ?>
      <img id="sec-image" src="<?= $image->url() ?>" alt="">
      <?php endforeach ?>
    </article>
  </section>
  <section id="menu" class="cream-bg">
    <article class="menu">
      <div class="">
       <h2 class= "heading">Menu</h2>
        <?= $page->menu() ?>
        <div class="dessert">
         <h2 class="heading">Something sweet</h2>
         <?= $page->dessert() ?>
       </div>
       </div>
    </article>
  </section>
  <section id="voucher" class="maroon-bg">
    <article class="voucher">
        <iframe class="voucher-embed" src="https://giftcards.nowbookit.com/cards?accountid=7b97cda1-025f-473a-a7dc-90797c90c8b8&venueid=4391" width="100%" height="530" frameborder="0"></iframe>
    </article>
  </section>
</main>

<?php snippet('footer') ?>
