<?php

class Thoughts
{
	function __construct()
	{
		printf(
			<<<'HTML'
				<div id="thoughts-section" class="section-container">
					<section class="thoughts" v-bind:class="{ sectionDark: darkMode }">
						<h3 class="animated-header-text">Thoughts</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores debitis laboriosam dolorum similique reiciendis deserunt voluptates incidunt adipisci, quidem est sed voluptatem provident exercitationem suscipit quod non. Aut, recusandae deleniti? Corporis maxime asperiores, itaque adipisci repudiandae quis hic quaerat?
						</p>
					</section>
				</div>
			HTML
		);
	}
}
