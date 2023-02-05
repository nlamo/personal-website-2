const app = Vue.createApp({
   data() {
      return {
         lightMode: true,
         darkMode: false,
         buttonBackground: "#192b3c",
         buttonText: "Darken",
         buttonTextColor: "#fff",
         fingerSnap: new Audio('http://localhost/personal-website-2/sound/finger-snap.wav')
      };
   },
   methods: {
      setButtonText() {
         if (this.buttonText == "Darken") {
            this.buttonText = "Lighten";
            this.buttonBackground = "#fff";
            this.buttonTextColor = "#000";
         } 
         else if (this.buttonText == "Lighten") {
            this.buttonText = "Darken";
            this.buttonBackground = "#192b3c";
            this.buttonTextColor = "#fff";
         }
      },
      toggleDarkMode() {
         if (this.darkMode == false) {
            this.lightMode = false;
            this.darkMode = true;
         } 
         else if (this.darkMode == true) {
            this.darkMode = false;
            this.lightMode = true;
         }
      },
      scrollToElement(sectionID) {
         let el = document.getElementById(sectionID);

         if (el) {
           el.scrollIntoView({ behavior: 'smooth'});
         }
      },
      playFingerSnap() {
         this.fingerSnap.play();
      }
   },
});

app.mount("#main-app");
