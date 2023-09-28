<?php

class Projects
{
	function __construct()
	{
		printf(
			<<<'HTML'
				<div id="projects-section" class="section-container">
					<section class="projects" v-bind:class="{ sectionDark: darkMode }">
						<h3 class="animated-header-text">Projects</h3>
						<p>
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis aliquid nesciunt eius laboriosam voluptate tenetur sit non amet asperiores ex quos eligendi nisi facere voluptatibus, quidem culpa exercitationem, quasi nobis in! Et dolore quis aliquid quod tempore reiciendis non? Vero!
						</p>
					</section>
				</div>
			HTML
		);
	}
}
