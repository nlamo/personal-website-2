   /** @type {import('./$types').PageLoad} */
   export async function load({ fetch, params }) {
      const id = params.id
      const res = await fetch(`http://localhost:3000/blog-posts/${id}`)
      const singleBlogPost = await res.json()

      // NOTE: Add exception handling
      if (res.ok) {
         return {
            singleBlogPost: singleBlogPost
         };
      }
   }