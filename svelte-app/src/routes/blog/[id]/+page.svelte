<script>
   export let data

   $: blogPost = data.singleBlogPost
</script>

<div class="blog-page-container">
   <h2>{blogPost.title}</h2>
   <p>{blogPost.content}</p>
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
