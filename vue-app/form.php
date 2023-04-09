<?php if (isset($_SESSION['inputsHaveContent'])) : ?>

   <?php if ($_SESSION['inputsHaveContent'] == false) : ?>

      <div class="alert-message">Please enter information within all fields.</div>

   <?php elseif ($_SESSION['emailIsValid'] == false) : ?>

      <div class="alert-message">Please use a valid e-mail address.</div>

   <?php elseif ($_SESSION['answerIsValid'] == false) : ?>

      <div class="alert-message">Break out the encyclopedia?</div>

   <?php else : ?>

      <div class="success-message">E-mail sent!</div>

   <?php endif; ?>

<?php endif; ?>