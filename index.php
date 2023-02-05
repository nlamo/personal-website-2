<?php
   require "./form-validation.php";
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
   <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,500;0,600;0,700;0,800;1,300;1,500;1,700&display=swap" rel="stylesheet" />
   <script src="https://unpkg.com/vue@next" defer></script>
   <script src="./js/vanilla.js" defer></script>
   <script src="app.js" defer></script>
   <title>Nicholas LaMothe - Personal Website</title>
</head>

<body>
   <div id="main-app" class="grid-2-col">

      <!-- Navigation bar -->
      <nav v-bind:class="{ navLight: lightMode, navDark: darkMode }">
         <div class="dark-mode">
            <button @click="playFingerSnap(); setButtonText(); toggleDarkMode();" v-bind:style="{ backgroundColor: buttonBackground, color: buttonTextColor }">
               {{ buttonText }}
            </button>
         </div>
         <ul>
            <li><a @click="scrollToElement('top-section')">Top</a></li>
            <li><a @click="scrollToElement('overview-section')">Overview</a></li>
            <li><a @click="scrollToElement('projects-section')">Projects</a></li>
            <li><a @click="scrollToElement('concern-section')">Concern</a></li>
            <li><a @click="scrollToElement('optimism-section')">Optimism</a></li>
            <li><a @click="scrollToElement('contact-section')">Contact</a></li>
         </ul>
      </nav>

      <!-- Main content -->
      <main v-bind:class="{ backgroundLightBlue: lightMode, backgroundBlue: darkMode }">
         <div id="top-section">
            <header v-bind:class="{ headerDark: darkMode }">
               <h3 class="animated-header-text">Nicholas LaMothe</h3>
               <h6>web developer, etc.</h6>
            </header>
         </div>

         <div id="images-section">
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
         <div id="overview-section">
            <section class="overview-1" v-bind:class="{ sectionDark: darkMode }">
               <p>
                  My name is Nick, and I am a web developer. Originally from BC, currently residing in Montreal,
                  I've been studying programming for the last 3 1/2 years. Languages I have worked with: HTML/CSS,
                  JavaScript, PHP, SQL, Java, C++, and Python.
               </p>
               <p>
                  That being said, the last three I can hardly claim to be experienced with, and I am especially
                  unknowledgable about Python. Such is life. There are only so many abstractions that
                  a brain can handle at any given time.
               </p>
               <p>
                  But, as time moves forward, the endless fragments
                  of knowledge merge into heuristics, and of course heuristics are integrated forms of life.
                  Patterned rituals encapsulating expertise. Pragmatic wisdom. Whatever one might call it.
               </p>
            </section>
         </div>
         <div id="overview-section-2">
            <section class="overview-2" v-bind:class="{ sectionDark: darkMode }">
               <p>
                  Quick bio. I used to be a boxer, and I've been illustrating semi-regularly my entire life. Thankfully,
                  I no longer
                  box. Not good for the <i>cerveau</i>. Instead, I mostly run.<br><br>

                  My background is originally in philosophy and English literature, with special interest in ethics,
                  epistemology,
                  and philosophy of mind, but I've always been something of a tech nerd.<br><br>

                  What else? I love food, cycling, chess, film, music (electronic/folk/prog/classical),
                  video games, nature, and the greatness of humanity. I also very much hope that we discover
                  intelligent life elsewhere in the universe.<br><br><br>

                  <span class="highlight-selection-container">
                     You can find my resume <a href="cv/nicholas-lamothe-cv.pdf" target=”_blank”>here</a>.
                     <img class="highlight-selection" src="./img/highlight-selection.png" alt="">
                  </span>
               </p>
            </section>
         </div>
         <div id="projects-section">
            <section class="projects" v-bind:class="{ sectionDark: darkMode }">
               <p>
                  Projects section. To be continued.<br><br>
               </p>
               <p>
                  This will probably include references to my previous website, among other small projects. I'll have to
                  build
                  it up over time.
               </p>
            </section>
         </div>
         <div id="concern-section">
            <section class="concern" v-bind:class="{ sectionDark: darkMode }">
               <p>
                  Concern section. Just an idea. What goes in here?<br><br><br>
               </p>
               <p>
                  My thought is that this will be a navigable little carousel or slider that will move through
                  aphorisms or concerns that I have about the state of the world or the future. A way for the reader to
                  get some insight into my state of mind, perhaps to start a conversation.
               </p>
            </section>
         </div>
         <div id="optimism-section">
            <section class="optimism" v-bind:class="{ sectionDark: darkMode }">
               <p>
                  Optimism section. Looking forward to the good.<br><br><br>
               </p>
               <p>
                  This could also be a carousel. I would like it to be a short list of things that we can look forward
                  to,
                  perhaps with references to articles that are cause for optimism. Maybe it would be an integrated
                  sort-of
                  blog of nerdy positivity. I am not sure.
               </p>
            </section>
         </div>
         <div id="contact-section">
            <section class="contact" v-bind:class="{ sectionDark: darkMode }">
               <div class="form-container">
                  <form v-bind:class="{ formDark: darkMode }" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                     <table>
                        <tr>
                           <td><label>E-mail</label></td>
                           <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                           <td><label>Subject</label></td>
                           <td><input type="text" name="subject"></td>
                        </tr>
                        <tr>
                           <td><label>Message</label></td>
                           <td><textarea name="message"></textarea></td>
                        </tr>
                        <tr>
                           <td><label>Question</label></td>
                           <td style="padding-bottom: 1.5rem;">
                              <input type="hidden" name="random-question" value="<?php echo $randomQuestion; ?>">
                              <label>
                                 <span style="font-size: .9rem;">
                                    <?php echo $randomQuestion; ?>
                                 </span>
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td>
                              <input type="text" name="answer"><br>
                           </td>
                        </tr>
                     </table>

                     <br>

                     <button type="submit" name="submit" class="button">Submit</button>
                  </form>

                  <?php require "./form.php"; ?>
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