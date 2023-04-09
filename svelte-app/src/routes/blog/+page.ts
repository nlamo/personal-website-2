/** @type {import('./$types').PageLoad} */
export async function load({ fetch }) {
   // NOTE: Your json-server instance (or whatever else you're using) must be running otherwise
   //       this will throw a 500.

   const url = 'BLOG_POSTS_ENDPOINT'
   const res = await fetch(url)
   const blogPosts = await res.json()
   
   // NOTE: Add exception handling
   if (res.ok) {
      return {
         blogPosts: blogPosts
      }
   }
}