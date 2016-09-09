<div class="menu-expander">
  <i class="fa fa-bars"></i>
</div>

<div class="page">
  <div class="header">
    <a href="/">NUTRIMOST<span>RECIPES</span></a>
  </div>

  <div class="navigation">
    <?php print render($page['menu']);?>
  </div>


  <?php print $messages; ?>
  <?php print render($tabs); ?>

  <div class="main">
    <div class="content" role="main">
      <a id="main-content"></a>
      <?php print render($page['content']); ?>
    </div>

    <div class="side">
      <?php print render($page['side']);?>
    </div>

    <div class="latest">
      <?php print render($page['latest']);?>
    </div>
  </div>


</div>

  <footer class="footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>