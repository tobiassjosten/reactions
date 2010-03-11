<?php
/**
 * This is the data you can use to render the reaction:
 * $reaction = array(
 *   'eid' => '1234',
 *   'type' => 'reaction'
 *   'created' => 1234567890,
 *   'reactee' => 'tobiassjosten',
 *   'avatar' => 'http://example.com/avatar.png'
 *   'message' => 'Lorem ipsum dolor sit amet',
 * );
 */
?>
<img src="<?php echo $reaction['avatar'] ?>" />
<?php echo $reaction['reactee'] ?>
<?php echo $reaction['message'] ?>
