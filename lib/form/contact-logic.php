<?php

require "question.php";

$questions = (new Question())->getQuestions();

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

   /**
    * If any fields are empty, inputs have context remains false, nothing else to do except redirect; 
    * Otherwise, if all fields have content, then validate for the fields themselves; if all fields have been satisfied, send mail
    */
   if (empty($email) || empty($subject) || empty($message) || empty($answer)) {
      $_SESSION['inputsHaveContent'] = $inputsHaveContent;
   }
   else {
      $inputsHaveContent = true;
      $_SESSION['inputsHaveContent'] = $inputsHaveContent;

      $senderEmail = "Sent from " . $email . " :\n\n";

      if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
         $_SESSION['emailIsValid'] = $emailIsValid;
      }
      else if ($answer !== $correctAnswer) {
         $emailIsValid = true;
         $_SESSION['emailIsValid'] = $emailIsValid;
         $_SESSION['answerIsValid'] = $answerIsValid;
      }
      else {
         $emailIsValid = true;
         $answerIsValid = true;
         $_SESSION['emailIsValid'] = $emailIsValid;
         $_SESSION['answerIsValid'] = $answerIsValid;

         $to = "lamothe.dev@gmail.com";
         // $subject = already defined
         $body = $senderEmail . $message;

         // TODO: Uncomment to send mail
         // mail($to, $subject, $body);
      }
   }

   // Redirect back to the current page once the relevant session variables have been set
   header("Location: " . $_SERVER['PHP_SELF']);
}
