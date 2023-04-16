<script>
   export let title = "Title Placeholder"
   export let headerClass = "no-class"
</script>

<!-- svelte-ignore a11y-click-events-have-key-events -->
<header class='header'>
   <h1 class={headerClass}>
      {title}
   </h1>
</header>

<style lang="scss" global>
   .header {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      border: 2px dotted forestgreen;

      background: center / cover url(/main-background.png) no-repeat;

      h1 {
         cursor: context-menu;
         text-align: center;
         color: white;
      }
   }
</style>
