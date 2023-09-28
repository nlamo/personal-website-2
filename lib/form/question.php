<?php

class Question
{
	private $questions;

	function __construct()
	{
		$this->questions = [
			"Which of these languages is the most high-level: Python, C, or PHP?" => "Python",
			"Name the prime minister of Canada in the year 1992." => "Brian Mulroney",
			"Name the author of the novel <i>To the Lighthouse</i>." => "Virginia Woolf",
			"What is the hardest substance on earth?" => "Diamond",
			"Please name the subfamily of the arbutus tree." => "Arbutoideae",
			"Which city in Washington state shares its name with another in British Columbia?" => "Vancouver",
			"Name the northernmost village on Vancouver Island." => "Port Hardy",
			"Who was the premier of Quebec in 1980?" => "Rene Levesque",
			"Which is the largest planet in the solar system that includes planet Earth?" => "Jupiter"
		];
	}

	/**
	 * Get the questions.
	 *
	 * @return array
	 */
	public function getQuestions()
	{
		return $this->questions;
	}

	/**
	 * Get a random question.
	 *
	 * @return string
	 */
	public function getRandom()
	{
		return array_rand($this->questions, 1);
	}
}
