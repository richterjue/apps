<div id="controls">
	<div id='breadcrumbs'></div>
	<?php if ($_['encryptionEnabled'] === false): ?>
	<span class="right">
		<button class="share"><?php p($l->t("Share")); ?></button>
		<a class="share" data-item-type="folder" data-item="" title="<?php p($l->t("Share")); ?>"
		   data-possible-permissions="31"></a>
	</span>
	<?php endif; ?>
</div>
<div id='gallery' class="hascontrols"></div>
