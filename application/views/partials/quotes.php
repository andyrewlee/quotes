<?php
  foreach($quotes as $quote)
  { ?>
    <h1><?= $quote['author'] ?></h1>
    <p><?= $quote['quote'] ?></p>
<?php
  } ?>
