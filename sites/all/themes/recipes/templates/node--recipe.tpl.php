<article<?php print $attributes; ?>>

  <div<?php print $content_attributes; ?>>
  <h1><?php print $title;?></h1>

  <?php print render($content['addtoany']);?>
    <div class="image">

      <?php print render($content['field_recipe_image']);?>

      <div class="phase">
        <?php if (!empty($content['field_phase'][0])):?>
          <?php print render($content['field_phase'][0]['#markup']);?>
          <?php if (!empty($content['field_phase'][1])):?>
            , or
          <?php endif;?>
        <?php endif;?>

        <?php if (!empty($content['field_phase'][1])):?>
          <?php print render($content['field_phase'][1]['#markup']);?>
          <?php if (!empty($content['field_phase'][2])):?>
            , or
          <?php endif;?>
        <?php endif;?>

        <?php if (!empty($content['field_phase'][2])):?>
          <?php print render($content['field_phase'][2]['#markup']);?>
        <?php endif;?>
      </div>

      <?php print render($content['field_calories_per_serving']);?>
      <?php print render($content['field_servings']);?>
      <?php print render($content['field_rate_this_recipe']);?>

    </div>

    <div class="text">
      <?php print render($content['field_ingredients']);?>
      <?php print render($content['field_directions']);?>
      <?php print render($content['print_links']);?>
    </div>

  </div>

</article>