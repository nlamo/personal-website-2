<?php
   require "lib/session.php";

   require "lib/navigation.php";
   require "lib/header.php";
   require "lib/footer.php";

   require "lib/sections/images.php";
   require "lib/sections/overview.php";
   require "lib/sections/projects.php";
   require "lib/sections/thoughts.php";

   require "lib/form/contact-form.php";
   require "lib/form/contact-logic.php";
   require "lib/form/submission-failure.php";
   require "lib/form/submission-success.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="./css/style.css" />
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
      href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,500;0,600;0,700;0,800;1,300;1,500;1,700&display=swap"
      rel="stylesheet" />
   <script src="https://kit.fontawesome.com/e69b4d61a8.js" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/vue@next" defer></script>
   <script src="app.js" defer></script>
   <title>Nicholas LaMothe - Personal Website</title>
</head>

<body>
   <div id="main-app" class="grid-2-col">
      <?php new Navigation(); ?>

      <main v-bind:class="{ backgroundLightBlue: lightMode, backgroundBlue: darkMode }">
         <?php new Header(); ?>

         <?php new Images(); ?>

         <?php new Overview(); ?>

         <?php new Projects(); ?>

         <div id="contact-section" class="section-container">
            <section class="contact" v-bind:class="{ sectionDark: darkMode }">
               <h3 class="animated-header-text">Contact</h3>
               <div class="form-container">
                  
                  <?php new ContactForm(); ?>

                  <?php if (isset($inputsHaveContent)) : ?>

                     <?php if ($inputsHaveContent === false) : ?>

                        <?php new SubmissionFailure("Sorry, that didn't go through! Please be sure to enter valid information within all fields."); ?>

                     <?php elseif ($emailIsValid === false) : ?>

                        <?php new SubmissionFailure("Sorry, that didn't go through! Please use a valid e-mail address."); ?>

                     <?php elseif ($answerIsValid === false) : ?>

                        <?php new SubmissionFailure("Maybe break out the encyclopedia?"); ?>

                     <?php else : ?>

                        <?php new SubmissionSuccess("E-mail sent! Thanks!"); ?>
                        
                     <?php endif; ?>

                  <?php endif; ?>

               </div>
            </section>
         </div>
         
         <?php new Footer(); ?>
      </main>
   </div>
</body>

</html>