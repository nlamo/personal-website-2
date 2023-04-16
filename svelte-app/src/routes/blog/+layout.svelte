<script>
   import Header from '$lib/header.svelte'
</script>

<main class="blog-container">
   <!-- page content -->
   <slot></slot>
</main>

<style lang="scss" global>
   .main-container {
      // Nested header 
      .header {
         margin: 3rem 3rem 0 3rem;
      }
   }

   .blog-container {
      display: flex;
      flex-direction: column;
      min-height: 80vh;
      margin: 3rem;
      
      color: white;
   }
</style> 