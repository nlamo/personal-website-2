const app = Vue.createApp({
   data() {
      return {
         lightMode: true,
         darkMode: false,
         buttonBackground: "#000",
         buttonText: "Darken",
         buttonTextColor: "#fff"
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
            this.buttonBackground = "#000";
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
   },
});

app.mount("#main-app");
