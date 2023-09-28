<?php

class ContactForm
{
	function __construct()
	{
		$randomQuestion = (new Question())->getRandom();
		
		printf(
			<<<'HTML'
				<form v-bind:class="{ formDark: darkMode }" method="POST" action="%1$s">
					<p class="opener"><b>Got a question, consideration, or curiosity? Feel free to reach out.</b></p><br>

					<div class="form-inner email-container">
						<label class="name">e-mail</label>
						<div class="content">
							<input type="text" name="email">
						</div>
					</div>

					<div class="form-inner subject-container">
						<label class="name">subject</label>
						<div class="content">
							<input type="text" name="subject">
						</div>
					</div>

					<div class="form-inner message-container">
						<label class="name">message</label>
						<div class="content">
							<textarea name="message"></textarea>
						</div>
					</div>

					<div class="form-inner question-container">
						<label class="name">question</label>
						<div class="content">
							<input type="hidden" name="random-question" value="%2$s">

							<label class="question">
								<span class="question-inner">
									%2$s
								</span>
								<input type="text" name="answer"><br>
							</label>
						</div>
					</div>

					<button class="button-submit" type="submit" name="submit" class="button">submit</button>
				</form>
			HTML
			, htmlspecialchars($_SERVER['PHP_SELF'])
			, $randomQuestion
		);
	}
}
