<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text fl w-50-ns">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <div class="fl w-50-ns">
      <a class="twitter-timeline" href="https://twitter.com/tricialing" data-widget-id="512119273892753408">Tweets by @tricialing</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>

    <div class="cf"></div>

    <!-- <hr> -->

    <!-- <?php snippet('projects') ?> -->

  </main>

<?php snippet('footer') ?>