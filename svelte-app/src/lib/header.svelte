<script>
   export let title = "Title Placeholder"

   const toggleTitle = () => {
      let titles = {
         first: "The Overstated Pacific Northwest Blog",
         second: "The New Cascadian Paradigm",
      };

      if (!Object.values(titles).includes(title)) {
         return;
      }
      
      title = title === titles.first ? titles.second : titles.first;
   };
</script>

<!-- svelte-ignore a11y-click-events-have-key-events -->
<header class="header" on:click={toggleTitle}>
   <h1>
      {title}
   </h1>
</header>

<style lang="scss">
   .header {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 1rem;
      margin: 0 2rem 1rem 2rem;
      border: 2px dotted forestgreen;

      background: center / cover url(/main-background.png) no-repeat;

      h1 {
         cursor: context-menu;
         text-align: center;
         color: white;
      }
   }
</style>
