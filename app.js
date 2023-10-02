const app = Vue.createApp({
   data() {
      return {
         lightMode: true,
         darkMode: false
      };
   },
   methods: {
      removeSubmissionCard() {
         document.getElementsByClassName("overlay")[0].remove()
      },
      toggleDarkMode() {
         if (this.darkMode === false) {
            this.lightMode = false
            this.darkMode = true
         } 
         else if (this.darkMode === true) {
            this.darkMode = false
            this.lightMode = true
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
