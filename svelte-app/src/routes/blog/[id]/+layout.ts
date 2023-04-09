   /** @type {import('./$types').PageLoad} */
   export async function load({ fetch, params }) {
      // NOTE: Your json-server instance (or whatever else you're using) must be running otherwise
      // this will throw a 500.

      const id = params.id
      const url = 'SINGLE_BLOG_POST_ENDPOINT'
      const res = await fetch(url)
      const singleBlogPost = await res.json()

      // NOTE: Add exception handling
      if (res.ok) {
         return {
            singleBlogPost: singleBlogPost,
         };
      }
   }