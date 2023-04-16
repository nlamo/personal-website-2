<script>
   import '../styles/global.scss'
   import Header from '$lib/header.svelte'
   import Navigation from '$lib/navigation.svelte'
   import Footer from '$lib/footer.svelte'
   import { page } from '$app/stores'
   import { navigating } from '$app/stores'

   export let data

   let pageTitles = data.pageTitles

   /**
    * @type {string | undefined}
    */
   let title

   /**
    * Update the title for a current page.
    * 
    * @return {string | undefined} value
    */
    const getTitle = (/** @type {{ [s: string]: any; } | ArrayLike<any>} */ pageTitles) => {
      let routePath = $page.url.pathname
      
      for (const [key, value] of Object.entries(pageTitles)) {
         if (routePath === '/' && key === 'home') {
            return value
         }

         if (routePath.includes(key)) {
            return value
         }
      }
   };

   // BUG: This works but it's sloppy. Checking for $navigating alone is insufficient.   
   $: if ($navigating || true) {
      title = getTitle(pageTitles)
   }
</script>

<div class="outer-container">
   <Header headerClass="animated-header-text" bind:title={title} />

   <Navigation />

   <main class="main-container main">
      <!-- page content -->
      <slot></slot>
   </main>
   
   <Footer />   
</div>

<style lang="scss" global>
   h1 {
      font-size: 2rem;
      letter-spacing: 0.5rem;

      // Really nice! Attribution: https://codepen.io/jh3y/pen/YzYgMra, thanks @jh3y
      &.animated-header-text {
         --bg-size: 400%;
         --color-one: rgb(22, 78, 45);
         --color-two: rgb(152, 181, 185);
         background: linear-gradient(90deg,
               var(--color-one),
               var(--color-two),
               var(--color-one)) 0 0 / var(--bg-size) 100%;
         animation: move-bg 20s infinite linear;
         -webkit-background-clip: text;
         background-clip: text;
         color: transparent;
         font-weight: 900;
      }
   }
   
   .outer-container {
      display: flex;
      flex-direction: column;
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
   }

   .main-container {
      display: flex;
      flex-direction: column;
      justify-self: center;
      align-self: center;
      min-height: 80vh;
      width: 100%;
      max-width: 1280px;
      border: 2px dotted cadetblue;
      
      background: center / cover url(/main-background.png) no-repeat;
      color: white;
   }
</style> 