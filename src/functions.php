<?php
/* skills block */
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

/* education / experience block */
function addEdExpBlock($organization, $data, $name, $desc) {
	?>
		<li>			
			<b class="paragraph__chapter"> <?= $organization ?> </b> 
			<p class="comment__chapter"> // <?= $data ?> </p>
			<p class="description__chapter"> <?= $name ?> </p>

			<p class="smallText__chapter">
				<?= $desc ?>
			</p>			
		</li>
	<?php
}

/* software block */
function addSoftwareBlock($name, $progress) {
	?>
		<p class="description__chapter"> <?= $name ?> </p>
		<progress value="<?= $progress ?>" max="100" class="software__progress"></progress>
	<?php
}
?>