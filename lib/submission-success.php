<?php

class SubmissionSuccess {

	function __construct($text) {
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
								Excellent!
							</p>
						</div>
					</div>
				</div>
			HTML
			, htmlspecialchars($text)
		);
	}
}