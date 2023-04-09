<!-- 
   This is for fun - basically part of the original parent layout
   is being nested within this layout. 

   This will change, likely.
 -->
 
<script>
   import '../../styles/global.css'
   import Header from '$lib/header.svelte'
</script>

<Header title="Entries" />

<main class="blog-container">
   <!-- page content -->
   <slot></slot>
</main>

<style lang="scss">
   .blog-container {
      display: flex;
      flex-direction: column;
      min-height: 80vh;
      margin: 2rem 2rem 0 2rem;
      
      color: white;
   }
</style> 