<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->

  <header id="header">
    <?php if ($_GET['lang'] == "en") {
        echo "<img src='/sites/all/themes/basic/images/LogoING.png' />";
    } else {
        echo "<img src='/sites/all/themes/basic/images/LogoPOR.png' />";
    }
    ?>
    <div id="lang_sel">
        <a href="http://nationcomic.com.br/?lang="><img src="/sites/all/themes/basic/images/IdiomaPORT.png" /></a>
        <a href="http://nationcomic.com.br/?lang=en"><img src="/sites/all/themes/basic/images/IdiomaINGL.png" /></a>
    </div>
    <div id="menu_prin">
        <?php if ($_GET['lang'] == "en") {
            echo "<a href=\"sobre?lang=en\"><img src='/sites/all/themes/basic/images/SobreING.png' /></a>";
        } else {
            echo "<a href=\"sobre\"><img src='/sites/all/themes/basic/images/SobrePOR.png' /></a>";
        }
        ?>
        <?php if ($_GET['lang'] == "en") {
            echo "<a href=\"arquivo?lang=en\"><img src='/sites/all/themes/basic/images/ArquivoENG.png' /></a>";
        } else {
            echo "<a href=\"arquivo\"><img src='/sites/all/themes/basic/images/ArquivoPOR.png' /></a>";
        }
        ?>
    </div>
  </header><!-- /header -->
