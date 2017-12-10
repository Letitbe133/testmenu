
<nav class="teal <?= $charte['cadre'] ?>">
  <div class="nav-wrapper">
    <a href="index.php?page=accueil" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <?php foreach ($menu as $key => $value): ?>
    <ul class="right hide-on-med-and-down">
      <a href="index.php?page=<?php echo $key; ?>" title="<?= $value ?>"><li><?php echo $value; ?></li></a>
    </ul>
  <?php endforeach; ?>
  <?php foreach ($menu as $key => $value): ?>
    <ul class="side-nav" id="mobile-menu">
      <a href="index.php?page=<?php echo $key; ?>" title="<?= $value ?>"><li><?php echo $value; ?></li></a>
    </ul>
  <?php endforeach; ?>
  </div>
</nav>
