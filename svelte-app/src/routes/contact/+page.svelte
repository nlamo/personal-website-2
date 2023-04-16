<script>
   import Header from '$lib/header.svelte'
</script>

<div class="content">
   <p>
      Thisw is going to be a contact page, ideally where you will get a hold of me if anything comes to mind.
   </p>
</div>

<style lang="scss" global>
   .content {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      margin: 3rem;

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
</style>
