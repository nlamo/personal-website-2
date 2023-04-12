<script>
   import '../styles/global.scss'
   import Header from '$lib/header.svelte'
   import Footer from '$lib/footer.svelte'
</script>

<div class="outer-container">
   <Header title="The Overstated Pacific Northwest Blog" />

   <main class="main-container main">
      <!-- page content -->
      <slot></slot>
   </main>
   
   <Footer />   
</div>

<style>
   .outer-container {
      display: flex;
      flex-direction: column;
      max-width: 1280px;
      margin: 0 auto;
   }

   .main-container {
      display: flex;
      flex-direction: column;
      justify-self: center;
      align-self: center;
      min-height: 80vh;
      padding: 2rem;
      margin: 0 2rem;
      border: 2px dotted cadetblue;
      
      background: center / cover url(/main-background.png) no-repeat;
      color: white;
   }
</style> 