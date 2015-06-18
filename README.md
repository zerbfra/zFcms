# zFcms
_Lightweight and fast markdown CMS for personal websites_

## A simple CMS

This simple CMS was created for my personal blog.

After some time looking for a good and simple markdown based CMS, I realized that any of them would have satisfied my needs and so I decided to write one on my own.

This first implementation took me about 4-5 hours of work. It is based on the following libraries:

* Bootstrap, for the layout part
* Parsedown, an amazing PHP library to parse Markdown files
* All the posts are written in pure Markdown and then rearranged by the scripts in the correct order. 
* In addition, one can can create some static pages, and add them to the navbar on top, for example, the About page.
* The Archive by month is automatically generated
* When you reach the  `POST_PER_PAGE ` limit a new page is created and navigation links will appear in the footer of the blog page

I will probably add new features in the future, maybe comments with Disqus ;)

## Configuration

To configure, edit the globals.php file, you will find:

    define('POST_PER_PAGE', 2); // how many posts to display per page
    define('TITLE',"Your Blog"); // the title of your blog
    define('URL',"yoururl.com"); // your website url
    define('DESCRIPTION',"Your description"); // a description for the website (header)

In addition, edit the sidebar.php file to add you references in the elsewhere (maybe I will change this in future)

Enjoy!

