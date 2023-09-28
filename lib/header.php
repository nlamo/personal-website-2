<?php

class Header
{
	function __construct()
	{
		printf(
			<<<'HTML'
				<div id="header-section">
					<header v-bind:class="{ headerDark: darkMode }">
						<h2 title="Name of the developer." class="animated-header-text">Nicholas LaMothe</h2>
						<h6 title="Description of the developer.">web developer / generalist</h6>
					</header>
				</div>
			HTML
		);
	}
}
