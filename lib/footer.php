<?php

class Footer
{
	function __construct()
	{
		printf(
			<<<'HTML'
				<footer v-bind:class="{ footerLight: !sectionDark, sectionDark: darkMode, footerDark: darkMode }">
					<a href="https://www.linkedin.com/in/nicholas-lamothe/" target="_blank">
						<img src="img/linkedin_logo.png">
					</a>
					<a href="https://github.com/nlamo/" target="_blank">
						<img src="img/github_logo.png">
					</a>
				</footer>
			HTML
		);
	}
}
