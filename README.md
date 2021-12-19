**Notes**
==============

- This custom theme is based on a modified and sassified version of Underscores.

- The homepage isn't fully responsive. Some sections are responsive because I used CSS flexbox properties to lay them out, but others (like the hero) aren't because I used CSS grid. The non-responsive sections could however be made responsive with the use of media queries to re-position the elements and adjust their properties depending on the size of the screen.

- The font sizes specified in the XD document look larger on my screen. I adapted them so that they look the same on the XD artboard and the WP website.

- The hero is called conditionally by a function located at inc\theme\load-hero.php. Besides the header and footer, all other sections of the homepage can be found in the template-parts directory.

- In the second row of cards: there are discrepancies between the text that is visible on the XD artboard and the content that's actually in the assets. I chose to truncate the text so that it looks like the artboard, but the content would have to be fixed if this were for a production site.

- The carousel buttons aren't functional. I didn't build an actual carousel since we only have one slide, but I would obviously build a functional carousel if this were for a production site.

- I used ACF to insert the content in the page. This may not have been a good idea because you won't be able to see the content without importing or recreating my ACF custom fields.
For this reason, I uploaded the site to https://christopheperez.com/sb-assessment/ , so that you can see the final site with all the content in it.

- Feel free to look around the live site's dashboard too; I sent the login credentials to Erica.
