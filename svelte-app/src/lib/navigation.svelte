<script>

</script>

<!-- svelte-ignore a11y-click-events-have-key-events -->
<nav class="navigation">
   <div class="item home">
      <a href="/">Home</a>
   </div>
   <div class="item blog">
      <a href="/blog">Blog</a>
   </div>
   <div class="item about">
      <a href="/about">About</a>
   </div>
   <div class="item contact">
      <a href="/contact">Contact</a>
   </div>
</nav>

<style lang="scss" global>
   .navigation {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 3rem;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      max-width: 1280px;
      flex-grow: 1;
      border: 2px dotted forestgreen;

      background: center / cover url(/main-background.png) no-repeat;

      h1 {
         cursor: context-menu;
         text-align: center;
         color: white;
      }

      .item {
         display: flex;
         flex-direction: center;
         align-items: center;
      }

      a {
         font-size: 1.1rem;
         font-weight: 600;
      }
   }
</style>
