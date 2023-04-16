<script>
   export let data

   $: blogPost = data.singleBlogPost
</script>

<div class="blog-page-container">
   <h2>{blogPost.title}</h2>
   <p>{blogPost.content}</p>

   {#if blogPost.code}
      <div class="code-block">
         {blogPost.code}
      </div>
   {/if}
</div>
<div class="go-back">
   <p>
      Return to the <a href="/blog">blog</a> page.
   </p>
</div>

<style lang="scss" global>
   .blog-page-container {
      background: rgb(47, 79, 79, 0.2);
      border: 1px dotted orange;
      padding: 2rem;
   }

   .code-block {
      padding: 2rem;
      font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      background:rgb(47, 79, 79, 0.6);
      border: 1px solid grey;
      border-radius: 3px;
   }

   .go-back {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      flex-grow: 1;
      padding: 2.5rem;

      a {
         color: orange;
      }
   }
</style>
