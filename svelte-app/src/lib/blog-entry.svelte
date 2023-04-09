<script>
   export let id = 0;
   export let title = "Title Placeholder"
   export let content = "Content Placeholder"
</script>

<li class={`blog-entry ${id}`}>
   <h4>
      <a href={`/blog/${id}`}>
         {title}
      </a>
   </h4>
   <p>
      {content}
   </p>
</li>

<style lang="scss">
   .blog-entry {
      display: flex;
      flex-direction: column;
      padding: 2rem;
      margin: 2rem 0;
      border: 2px dotted cadetblue;

      a {
         color: orange;
      }
   }
</style>