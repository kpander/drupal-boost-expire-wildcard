README.txt
==========
BOOST EXPIRE WILDCARD exposes its functionality in 2 ways:
  1. As an Action for the Rules module.
  2. As a public function.

The module deletes static cache HTML files created by Boost, and allows a 
wildcard specification. This module exists because:
- Wildcards don't work in conjunction with the Expires module
- Wildcards don't work with the boost_expire_cache() hook

The boost_expire_cache() hook validates urls. However, there are cases
where the url can't be validated but is in fact valid, or where you'd
want to remove a whole subfolder (or pattern) of files. That's where
this module is useful.

This functionality can also be accessed via: boost_expire_wildcard_urls($urls)


WHY USE THIS MODULE?
====================
- You want to delete many statically cached Boost files at once.
- You want full control over Boost cache invalidation.


INSTALLATION
============
Install like any other Drupal module. This module does nothing by itself. It
provides a new action within Rules.


ISSUES
======
Wildcard matching makes use of the glob() function. This could have a
performance impact on some servers, and hasn't been heavily tested yet.

Some tests with DirectoryIterator vs glob() have been performed, but the 
difference in speed (with a directory tree of 10,000 files) hasn't been
significant yet.


AUTHOR/MAINTAINER
=================
Kendall Anderson <dailyphotography at gmail DOT com>
http://invisiblethreads.com


CHANGELOG
=========
v7.x-1.0, 2013-05-24, Kendall Anderson
- initial development of module

v7.x-1.1, 2013-08-01, Kendall Anderson

v7.x-1.2, 2013-12-02, Kendall Anderson
- added boost_expire_wildcard_urls() function for external use
- removed use of glob() when requesting non-wildcard paths for removal



TODO
====
- better documentation!
- integrate debugging into watchdog
