<?php
// $Id$

/**
 * This is the data you can use to render the reaction:
 * $reactions = array(
 *   '<img src="http://example.com/avatar.png" />tobiassjosten Lorem ipsum dolor sit amet',
 *   '<img src="http://example.com/avatar.png" />tobiassjosten Lorem ipsum dolor sit amet',
 * );
 */
?>
<ul class="reactions">
<?php foreach ($reactions as $reaction): ?>
  <li class="reaction"><?php echo $reaction; ?></li>
<?php endforeach; ?>
</ul>
