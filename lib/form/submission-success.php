<?php

class SubmissionStatus
{
	function __construct($success, $text)
	{
		printf(
			<<<'HTML'
				<div class="overlay">
					<div class="card">
						<div id="alert-message" class="alert-message">
							<p class="text">
								%1$s
							</p>
						</div>
						<div @click="removeSubmissionCard" class="understood">
							<p>
								%2$s
							</p>
						</div>
					</div>
				</div>
			HTML
			, $text
			, $success ? "Excellent!" : "Got it!"
		);
	}
}
