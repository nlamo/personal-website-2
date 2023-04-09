# personal-website-2

Code for a new personal website. 

Two projects, at the moment, both of which are up for consideration (perhaps versions of both will end up being used - I'm not sure).

***********
  vue-app
***********

Uses the Vue.js framework. Has a sticky navbar on the side, scrollable interface.

Mostly for a new spin on things. Quite different from my previous website.

Intending to pack a lot of things into a single page. Will likely use PHP for the contact form.

In its current state, it is very nicely responsive to normal/large screens and laptop screens. I even think it would look good on tablets. It is *not*, however, responsive at all for smartphone screens, so this will come later (although it is arguably always better to start with mobile).

It is unsatisfactory to use for zoom outside of a variance of 20%. Practically speaking this is all one would need, but it is something worth thinking about.

Since the Vue script is referenced, you can just pull it in and use it as is. At least until I PHP-ify it.

**************
  svelte-app
**************

This is the beginning of a very simple blog app. Largely as a way to become familiarized with Svelte, and especially Svelte's filesystem routing (which is fairly interesting).

Used SvelteKit, with some other added dependencies (obvious choices, like `sass`, `typescript`, and `svelte-preprocess`).

As far as the endpoints, use whatever you like. I personally like using `json-server`, but there are lots of options for dummy JSON data.