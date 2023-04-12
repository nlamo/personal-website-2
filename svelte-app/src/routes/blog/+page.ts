/** @type {import('./$types').PageLoad} */
export async function load({ fetch }) {

   // NOTE: Your json-server instance (or whatever else you're using) must be running otherwise
   //       this will throw a 500. Will add logic to instead populate the front end with some 
   //       useful messages while retaining the output of at least one instance of the BlogEntry component.

   const res = await fetch('http://localhost:3000/blog-posts')
   const blogPosts = await res.json()
   
   // NOTE: Add exception handling
   if (res.ok) {
      return {
         blogPosts: blogPosts
      }
   }
}