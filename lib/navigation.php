<?php

class Navigation
{
	function __construct()
	{
		printf(
			<<<'HTML'
				<nav v-bind:class="{ navLight: lightMode, navDark: darkMode }">
					<div class="dark-mode">
						<button 
							title="Toggle between dark mode and light mode."
							class="button"
							v-bind:class="{ buttonLight: lightMode, buttonDark: darkMode }"
							@click="playFingerSnap(); setButtonClass(); toggleDarkMode();"
						>
							<div class="circle animated-button-background"></div>
						</button>
					</div>
					<ul class="nav-list">
						<li><a @click="scrollToElement('top-section')">Top</a></li>
						<li><a @click="scrollToElement('overview-section')">Overview</a></li>
						<li><a @click="scrollToElement('projects-section')">Projects</a></li>
						<li><a @click="scrollToElement('thoughts-section')">Thoughts</a></li>
						<li><a @click="scrollToElement('contact-section')">Contact</a></li>
					</ul>
				</nav>
			HTML
		);
	}
}
