  <?php
    require_once('templates/template-' . strtolower($menu['accueil']) . '.php');
    // if(isset($_GET['page'])) {
  ?>

<a class="waves-effect waves-light btn" id="open">Open tap target</a>

  <!-- Element Showed -->
  <a id="menu" class="waves-effect waves-light btn btn-floating" ><i class="material-icons">menu</i></a>

  <!-- Tap Target Structure -->
  <div class="tap-target" data-activates="menu">
    <div class="tap-target-content">
      <a class="waves-effect waves-light btn" href="http://"><h5>Title</h5></a>
      <p>A bunch of text</p>
      <h5>Title</h5>
      <p>A bunch of text</p>

    </div>
  </div>
