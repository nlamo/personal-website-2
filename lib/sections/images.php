<?php

class Images
{
	function __construct()
	{
		printf(
			<<<'HTML'
				<div id="images-section" class="section-container">
					<section class="images" v-bind:class="{ sectionDark: darkMode, imgBackgroundDark: darkMode }">
						<!-- Not required, but I'm gonna attribute these: https://undraw.co/ (!) - great resource -->
						<div class="div1">
							<img src="./img/undraw_firmware_re_fgdy.svg" alt="Firmware">
							<p class="div1__quote">The human mind is an open network of complex softwares working
								together.<br><br> - Sukant Ratnakar</p>
						</div>
						<div class="div2">
							<img src="./img/undraw_handcrafts_space.svg" alt="Space">
							<p class="div2__quote">The highest activity a human being can attain is learning for understanding,
								because to understand is to be free.<br><br> - Spinoza</p>
						</div>
						<div class="div3">
							<img src="./img/undraw_dev_productivity_re_fylf.svg" alt="Productivity">
							<p class="div3__quote">Practice yourself, for heaven's sake in little things, and then proceed to
								greater.<br><br> - Epictetus</p>
						</div>
					</section>
				</div>
			HTML
		);
	}
}
