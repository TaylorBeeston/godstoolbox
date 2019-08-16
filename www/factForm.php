<?php
  include '../helpers/multihelper.php';
  include '../helpers/publisher.php';

  if (isset($_GET['id'])) {
    $fact_result = get_by_id($conn, 'Facts', $_GET['id']);
    $id    = $fact_result[0];
    $fact  = $fact_result[1];
    $title = $fact;
  } else {
    $id    = '';
    $fact  = '';
    $title = "New Fact";
  }

  include '../partials/header.php'; ?>
<div class="two-columns">
  <div class="main">
    <div class="big-window">
      <?php factForm($fact, $id); ?>
    </div>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
