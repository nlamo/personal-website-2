<?php
   session_start();
   
   if (isset($_SESSION['inputsHaveContent'])) {
      session_destroy();
   }

   // Associative array of questions and answers
   $questions = [
      "Who was Emperor of the French in the year of 1810?" => "Napolean Bonaparte",
      "Which of these languages is the most high-level: Python, C, or PHP?" => "Python",
      "Name the prime minister of Canada in the year 1992." => "Brian Mulroney",
      "Name the author of the novel 'To the Lighthouse'." => "Virginia Woolf",
      "What is the hardest substance on earth?" => "Diamond",
      "Name the previous host of the television series 'Jeopardy'." => "Alex Trebek"
   ];

   // Gets a random question from an array of questions
   function getRandomQuestion($questions) {
      return array_rand($questions, 1);
   }

   $randomQuestion = getRandomQuestion($questions);

   // ------------------------------------------------------------------------------------------------

   if (filter_has_var(INPUT_POST, 'submit')) {

      $inputsHaveContent = false;
      $emailIsValid = false;
      $answerIsValid = false;

      $email = htmlspecialchars($_POST['email']);
      $subject = htmlspecialchars($_POST['subject']);
      $message = htmlspecialchars($_POST['message']);
      $question = htmlspecialchars($_POST['random-question']);
      $answer = htmlspecialchars($_POST['answer']);

      $_SESSION['email'] = $email;
      $_SESSION['subject'] = $subject;
      $_SESSION['message'] = $message;

      // Get array key (answer) from the random question
      $correctAnswer = $questions[$question];

      // Make correctAnswer and user answer lowercase to remove case sensitivity
      $answer = strtolower($answer);
      $correctAnswer = strtolower($correctAnswer);

      // If any fields are empty, redirect and display appropriate message; else, more validation (e-mail validity, math question) for e-mail send
      if (empty($email) || empty($subject) || empty($message) || empty($answer)) {
         $_SESSION['inputsHaveContent'] = $inputsHaveContent;
         header("Location: index.php");
      } 
      else {
         $inputsHaveContent = true;
         $_SESSION['inputsHaveContent'] = $inputsHaveContent;

         $senderEmail = "Sent from " . $email . " :\n\n";

         if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            $_SESSION['emailIsValid'] = $emailIsValid;
            header("Location: index.php");
         } 
         else if ($answer != $correctAnswer) {
            $emailIsValid = true;
            $_SESSION['emailIsValid'] = $emailIsValid;
            $_SESSION['answerIsValid'] = $answerIsValid;
            header("Location: index.php");
         } 
         else {
            $emailIsValid = true;
            $answerIsValid = true;
            $_SESSION['emailIsValid'] = $emailIsValid;
            $_SESSION['answerIsValid'] = $answerIsValid;

            $to = "lamothe.dev@gmail.com";
            // $subject = already defined
            $body = $senderEmail . $message;

            // NOTE: mail() is to be commented out until you're testing on a proper mail server
            // mail($to, $subject, $body);
            header("Location: index.php");
         }
      }
   }