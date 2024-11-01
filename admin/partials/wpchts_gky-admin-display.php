<div class="wrap">
<h1 style='text-align: center;'>Share Christmas - Tunes and Decorations<br>
<i>By Geeky Nigeria</i></h1><br>
<?php if(!empty($_POST)){ ?>
<div class="updated notice is-dismissible">

<p>Settings updated!</p>

</div>
<?php } ?>

<form method="post" target="_self" novalidate="novalidate">


<div class="Rtable Rtable--2cols">

  <div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Tunes & Decor Type</h3></div>
  <div style="order:1;" class="Rtable-cell">
    <select name="music" id="music">
  <option value="" >Please Select`</option>    
  <option value="Ding_Dong_Merrily.mp3" <?php selected(get_option('wpchts_gky_music') , 'Ding_Dong_Merrily.mp3'); ?>>Ding Dong Merrily</option>
  <option value="Santa_Claus_Is_Coming_To_Town.mp3" <?php selected(get_option('wpchts_gky_music') , 'Santa_Claus_Is_Coming_To_Town.mp3'); ?>>Santa Claus is coming to twon</option>
  <option value="The_Holly_and_the_Ivy.mp3" <?php selected(get_option('wpchts_gky_music') , 'The_Holly_and_the_Ivy.mp3'); ?>>The Holly and the Ivy</option>
  <option value="Joy_to_the_World.mp3" <?php selected(get_option('wpchts_gky_music') , 'Joy_to_the_World.mp3'); ?>>Joy to the World</option>
  <option value="White_Christmas.mp3" <?php selected(get_option('wpchts_gky_music') , 'White_Christmas.mp3'); ?>>White_Christmas</option>
</select>
  </div>
  <div style="order:2;" class="Rtable-cell">
<span><b>Decoration Type: </b><br></span><select name="decoration_type" id="decoration_type">
                        <option value="top"  <?php selected(get_option('decoration_type') , 'top'); ?>>On top of page</option>
                        <option value="fixed"  <?php selected(get_option('decoration_type') , 'fixed'); ?>>Fixed on Top</option>
                    </select>
  </div>
  <div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Decorations</h3></div>
   <div style="order:1;" class="Rtable-cell">
    Christmas Decorations<fieldset><legend class="screen-reader-text"><span>Image Decorations</span></legend><label for="image_frame">
  <input name="image_frame" type="checkbox" id="image_frame" value="1" <?php checked(get_option('wpchts_gky_image_frame') , "1"); ?>></label>
  </fieldset>
  </div>

  <div style="order:2;" class="Rtable-cell Rtable-cell--foot">Christmas Heading<fieldset><legend class="screen-reader-text"><span>Christmas Headings</span></legend><label for="font">
  <input name="font" type="checkbox" id="font" value="1" <?php checked(get_option('wpchts_gky_font') , "1"); ?>></label></fieldset></div>
</div>
  <input type="submit" name="submit" id="submit" class="button button-primary button-large" value="Save changes">
</form>
</div>
