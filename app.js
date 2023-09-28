const app = Vue.createApp({
   data() {
      return {
         lightMode: true,
         darkMode: false,
         buttonBackground: "#192b3c",
         buttonLight: "light",
         buttonDark: "dark",
         buttonTextColor: "#fff"
      };
   },
   methods: {
      removeSubmissionCard() {
         document.getElementsByClassName("overlay")[0].remove()
      },
      setButtonClass() {
         if (this.buttonClass == "light") {
            this.buttonClass = "dark";
            this.buttonBackground = "#fff";
            this.buttonTextColor = "#000";
         } 
         else if (this.buttonClass == "dark") {
            this.buttonClass = "light";
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
         let fingerSnap = new Audio('../sound/finger-snap.wav');
         fingerSnap.play();
      }
   },
});

app.mount("#main-app");
