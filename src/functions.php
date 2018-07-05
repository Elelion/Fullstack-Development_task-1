<?php
//skills block
function addSkillsBlock($name, $point) {		
	?>
		<li>
			<p class="description__chapter"><?= $name; ?></p>

			<!-- active skills points -->				
			<?php for ($i = 0; $i < $point; $i++) { ?>
				<div class="skills__point">
					<svg width="30px" height="30px">
						<circle r="13.5" cx="15" cy="15" fill="#056cb4" ></circle>
					</svg>
				</div>
			<?php }  ?>
			
			<!-- empty skills points -->
			<?php for ($j = 0; $j < 12 - $point; $j++) { ?>
				<div class="skills__point--template">
					<svg width="30px" height="30px">
						<circle r="13.5" cx="15" cy="15" fill="#E8E8E8" ></circle>
					</svg>
				</div>
			<?php }  ?>
		</li>
	<?php
}
?>