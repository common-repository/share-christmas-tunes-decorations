<?php

$music 					 = get_option('wpchts_gky_music');
if(!empty($music)){
	$music = plugins_url( 'mp3/' .$music , __FILE__ );
}
$image_frame 		 = get_option('wpchts_gky_image_frame');
$font 					 = get_option('wpchts_gky_font');
	
?>
<script>
	window.addEventListener("load", function() {
		jQuery(document).ready(function($){
			$(document).christmasify({
	      music: <?php 				echo !empty(esc_html($music)) 				? "'" . $music . "'" 		  : 'false'; ?>,
	      image_frame: <?php 	echo !empty(esc_html($image_frame)) 	? 'true' 								  : 'false'; ?>,
	      font: <?php 				echo !empty(esc_html($font)) 					? 'true' 								  : 'false'; ?>
			}); 
		});
	});
</script>
<div class="b-page_newyear">
    <div class="b-page__content">
        <i class="b-head-decor">
            <i class="b-head-decor__inner b-head-decor__inner_n1">
                <div class="b-ball b-ball_n1 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n2 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n3 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n4 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n5 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n6 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n7 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n8 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n9 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i1">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i2">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i3">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i4">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i5">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i6">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
            </i>
            <i class="b-head-decor__inner b-head-decor__inner_n2">
                <div class="b-ball b-ball_n1 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n2 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n3 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n4 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n5 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n6 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n7 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n8 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n9 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i1">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i2">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i3">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i4">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i5">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i6">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
            </i>
            <i class="b-head-decor__inner b-head-decor__inner_n3">
                <div class="b-ball b-ball_n1 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n2 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n3 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n4 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n5 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n6 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n7 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n8 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n9 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i1">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i2">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i3">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i4">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i5">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i6">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
            </i>
            <i class="b-head-decor__inner b-head-decor__inner_n4">
                <div class="b-ball b-ball_n1 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n2 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n3 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n4 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n5 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n6 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n7 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n8 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n9 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i1">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i2">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i3">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i4">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i5">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i6">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
            </i>
            <i class="b-head-decor__inner b-head-decor__inner_n5">
                <div class="b-ball b-ball_n1 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n2 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n3 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n4 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n5 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n6 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n7 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n8 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n9 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i1">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i2">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i3">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i4">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i5">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i6">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
            </i>
            <i class="b-head-decor__inner b-head-decor__inner_n6">
                <div class="b-ball b-ball_n1 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n2 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n3 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n4 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n5 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n6 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n7 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n8 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n9 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i1">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i2">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i3">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i4">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i5">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i6">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
            </i>
            <i class="b-head-decor__inner b-head-decor__inner_n7">
                <div class="b-ball b-ball_n1 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n2 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n3 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n4 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n5 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n6 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n7 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n8 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_n9 b-ball_bounce">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i1">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i2">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i3">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i4">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i5">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
                <div class="b-ball b-ball_i6">
                    <div class="b-ball__right"></div>
                    <div class="b-ball__i"></div>
                </div>
            </i>
        </i>
    </div>
</div>
<?php 
$type = get_option('decoration_type');
$position = $type === 'top' ? 'absolute' : 'fixed';
$padding = get_option('xmas_decoration_body_padding_top');
?>
<style>
    <?php if ($padding): ?>
    body {
        padding-top: <?php echo esc_html($padding) ?> !important;
    }
    <?php endif ?>

    .b-page_newyear .b-head-decor {
        position: <?php echo esc_html($position) ?> !important;
    }
</style>
<?php
$music = plugins_url( 'mp3/Ding_Dong_Merrily.mp3' , __FILE__ );
echo esc_html($music);
?>