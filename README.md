SIVISTYMATTOMAT_FESTIVAL
========================

A Wordpress child theme (for Twenty Twenty)

What is this
------------

This is a theme for Wordpress containing all the visual changes
we need for branding our parkour-festival's website while disabling most
theme editing functionality (as most of the team is not tech literate). It is based off the Twenty Twenty
theme by Wordpress team. It is intended to provide easy adding of content
into a relatively small site with minor need for especial dynamic functionality
(mostly we need images, text and links).

The codebase only contains the files that do changes to the parent theme.

Who are we
----------

We are a group of parkour-minded people working towards making the best
Parkour Festival in Turku happen!

Plugin List
-----------

This is the current "working" composition of plugins for this theme.
(They are not of course included in the repository and are only listed here as internal reference for the team)

1. **Different menu in different pages** - Use to allow different menu functionality in single pages!
2. **Widget Post Slider** - use in Hero Carousel widget area!
3. **Regenerate thumbnails** - Useful for fixing mis-generated thumbnails!
4. **Collapse-o-Matic** - Use to create collapsible text blocks e.g. for timetable pages!
5. **Custom Body Class** - Use to mark a page as a timetable page by adding a .timetable -class!


External assets
---------------

slick.js -carousel script, linked from a https://kenwheeler.github.io/slick/ (MIT License - https://opensource.org/licenses/MIT)


TODOs
-----

1. Fix single page height enforcement (setting min-height does nothing, setting height causes page to break on mobile)
2. Consider styling the Hero Carousel titles in some nicer way (they look ok for now)
3. Evaluate a plugin to generate tabs better then style it so we don't have to define and style a new menu for timetables
4. Fix minor bugs

Other stuff
-----------

1. In **Collapse-o-matic**, set the script insertion location to "Header" otherwise collapsed blocks won't work!

Copyright
-------

GPL 2.0 or later as the parent Wordpress theme is.
(See COPYING or https://www.gnu.org/licenses/old-licenses/gpl-2.0.html)

Modifications (c) 2020 Sivistymättömät
Twenty Twenty theme is (c) 2019-2020 Wordpress.org