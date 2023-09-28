<?php
   require "lib/form-contact-session.php";
   require "lib/form-contact.php";
   require "lib/submission-failure.php";
   require "lib/submission-success.php";
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

      <!-- Navigation bar -->
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

      <!-- Main content -->
      <main v-bind:class="{ backgroundLightBlue: lightMode, backgroundBlue: darkMode }">
         <div id="top-section">
            <header v-bind:class="{ headerDark: darkMode }">
               <h2 title="Name of the developer." class="animated-header-text">Nicholas LaMothe</h2>
               <h6 title="Description of the developer.">web developer / generalist</h6>
            </header>
         </div>

         <div id="images-section" class="section-container">
            <section class="images" v-bind:class="{ sectionDark: darkMode, imgBackgroundDark: darkMode }">
               <!-- Not required, but I'm gonna attribute these: https://undraw.co/ (!) - great resource -->
               <div class="div1">
                  <img src="./img/undraw_firmware_re_fgdy.svg" alt="Firmware">
                  <p class="div1__quote">The human mind is an open network of complex softwares working
                     together.<br><br> - Sukant Ratnakar</p>
               </div>
               <div class="div2">
                  <img src="./img/undraw_handcrafts_space.svg" alt="Space">
                  <p class="div2__quote">The highest activity a human being can attain is learning for understanding,
                     because to understand is to be free.<br><br> - Spinoza</p>
               </div>
               <div class="div3">
                  <img src="./img/undraw_dev_productivity_re_fylf.svg" alt="Productivity">
                  <p class="div3__quote">Practice yourself, for heaven's sake in little things, and then proceed to
                     greater.<br><br> - Epictetus</p>
               </div>
            </section>
         </div>
         <div id="overview-section" class="section-container">
            <section class="overview-1" v-bind:class="{ sectionDark: darkMode }">
               <h3 class="animated-header-text">Overview</h3>
               <div class="text-container">
                  <p>
                     Greetings! My name is Nicholas, and I am a web developer. I work in any number of languages or frameworks, contingent upon the shifting sands of time - or the needs of the employer.
                  </p>
                  <p>
                     Shall this be a lorem? Will I partake in loremification? Ready, set... Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore saepe voluptatum eius, animi exercitationem dolorem!
                  </p>
                  <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolorum explicabo iure nemo suscipit magnam, accusamus sit recusandae excepturi neque?
                  </p>
               </div>
            </section>
         </div>
         <div id="overview-section-2" class="section-container">
            <section class="overview-2" v-bind:class="{ sectionDark: darkMode }">
               <p>
                  My enthusiasm for computer technology started at a young age - from troubleshooting issues in MS-DOS with my father to using the terminal of a Commodore 64 for the first time in one of the school portables. This developed concurrently with my obsession with computer gaming, which sparked an interest in hardware and building desktop computers.<br><br>

                  During university, my focus was philosophy and literature, with a special interest in philosophy of mind, ethics, and modernism. Years later, by way of literary insight, I began programming.<br><br>
                  
                  My experience has been primarily with the LAMP stack, with a healthy balance of front-end (CSS/Sass/JS/jQuery/React) and back-end (PHP/MySQL).<br><br>
                  
                  Recreationally, I like to spend my time enagaged with film, literature, illustration, music, gaming, and cycling.<br><br><br>

                  <span class="highlight-selection-container">
                     You can find my resume <a href="cv/nicholas-lamothe-cv.pdf" target=”_blank”>here</a>.
                     <img class="highlight-selection" src="./img/highlight-selection.png" alt="">
                  </span>
               </p>
            </section>
         </div>
         <div id="projects-section" class="section-container">
            <section class="projects" v-bind:class="{ sectionDark: darkMode }">
               <h3 class="animated-header-text">Projects</h3>
               <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis aliquid nesciunt eius laboriosam voluptate tenetur sit non amet asperiores ex quos eligendi nisi facere voluptatibus, quidem culpa exercitationem, quasi nobis in! Et dolore quis aliquid quod tempore reiciendis non? Vero!
               </p>
            </section>
         </div>
         <div id="thoughts-section" class="section-container">
            <section class="thoughts" v-bind:class="{ sectionDark: darkMode }">
               <h3 class="animated-header-text">Thoughts</h3>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores debitis laboriosam dolorum similique reiciendis deserunt voluptates incidunt adipisci, quidem est sed voluptatem provident exercitationem suscipit quod non. Aut, recusandae deleniti? Corporis maxime asperiores, itaque adipisci repudiandae quis hic quaerat?
               </p>
            </section>
         </div>

         <div id="contact-section" class="section-container">
            <section class="contact" v-bind:class="{ sectionDark: darkMode }">
               <h3 class="animated-header-text">Contact</h3>
               <div class="form-container">
                  <form v-bind:class="{ formDark: darkMode }" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
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
                           <input type="hidden" name="random-question" value="<?php echo $randomQuestion; ?>">

                           <label class="question">
                              <span class="question-inner">
                                 <?php echo $randomQuestion; ?>
                              </span>
                              <input type="text" name="answer"><br>
                           </label>
                        </div>
                     </div>

                     <button class="button-submit" type="submit" name="submit" class="button">submit</button>
                  </form>

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
         <footer v-bind:class="{ footerLight: !sectionDark, sectionDark: darkMode, footerDark: darkMode }">
            <a href="https://www.linkedin.com/in/nicholas-lamothe/" target="_blank">
               <img src="img/linkedin_logo.png">
            </a>
            <a href="https://github.com/nlamo/" target="_blank">
               <img src="img/github_logo.png">
            </a>
         </footer>
      </main>
   </div>
</body>

</html>