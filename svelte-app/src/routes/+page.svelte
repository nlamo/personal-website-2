<script>
   import Header from '$lib/header.svelte'
   export let data
</script>

<div class="content">
   <p>
      This is going to become a blog of sorts; probably involving a discussion of ethics, philosophy of mind,
      computer science, and cognition generally. A lofty aim, but it is just a blog, after all.
   </p>
   <p>
      The goal: intellectual maintenance (internal propagation of thoughts that inspire creativity, novelty, learning,
      and right action).
   </p>
   <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum soluta
      quasi veritatis voluptatum. Sit explicabo vitae numquam deleniti accusamus
      rem.
   </p>
   <!-- Getting our data from +page.ts -->
   <div class="change-title">
      <label for="">Change title:&nbsp;</label>
      <input type="text" bind:value={data.changeTitleInput} />
   </div>
   
   <div class="links">
      <h3>Links</h3>
      <p>
         Want to learn more aboot me? Check out <a href="/about">this</a> page.
      </p>
      <p>
         Or, check out the <a href="/blog">blog page</a>.
      </p>
   </div>
</div>

<style lang="scss" global>
   .content {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;

      a {
         color: orange;
      }
   }

   .change-title {
      display: flex;
      width: 100%;
      padding: 1rem 1rem 1rem 0;

      label {
         display: flex;
         flex-shrink: 1;
         justify-content: center;
         align-items: center;
      }

      input {
         flex-grow: 1;
         max-width: 20rem;
         padding: 0.5rem 0.25rem;
      }
   }

   .links {
      margin-top: 3rem;
   }
</style>
