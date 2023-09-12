# nuiq_landingpage
Landing Page For NuIQ

Requirements
- Composer
- parsedown (Run `composer require erusev/parsedown`)

# Brief description of code 

/articles - articles in markdown format that will be parsed to html

/pages - static content pages in markdown format the will be parsed to html

/sections - Sections of the website loaded by index.php

article.php - Parses markdown articles to a article page with `article.php?article=[file name no extension]`

blog.php - Parses markdown articles to a blog page

page.php - Parses markdown content to other static pages with `page.php?page=[page file no extension]`

