<script>
   export let data

   $: blogPost = data.singleBlogPost
</script>

<div class="blog-page-container">
   <h2>{blogPost.title}</h2>
   <p>{blogPost.content}</p>
</div>

<style>
   .blog-page-container {
      background: rgb(47, 79, 79, 0.2);
      border: 1px dotted orange;
      padding: 2rem;
   }
</style>
