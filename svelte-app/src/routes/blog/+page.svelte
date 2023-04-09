<script>
   import BlogEntry from '$lib/blog-entry.svelte'

   // NOTE: This gets all of the data? The one prop to rule them all?
   export let data

   $: blogPosts = data.blogPosts
</script>

<div class="intro">
   <p>This is to be a blog page of sorts.</p>
   <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum soluta
      quasi veritatis voluptatum. Sit explicabo vitae numquam deleniti accusamus
      rem.
   </p>
   <p>
      Care to return? Go <a href="/">here</a>
   </p>
</div>

<!-- TODO: Write a truncate function for the content for this view -->
<ul class="blog-posts">
   {#each blogPosts as post}
      <BlogEntry id={post.id} title={post.title} content={post.content} />
   {/each}
</ul>

<style lang="scss">
   .intro {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;

      a {
         color: orange;
      }
   }

   .blog-posts {
      padding: 0;
   }
</style>