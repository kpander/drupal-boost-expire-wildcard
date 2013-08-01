README.txt
==========
BOOST EXPIRE WILDCARD provides an Action for the Rules module.

It deletes static cache HTML files created by Boost, and allows wildcard
specification. This module exists because:
- Wildcards don't work in conjunction with the Expires module
- Wildcards don't work with the boost_expire_cache() hook

The boost_expire_cache() hook validates urls. However, there are cases
where the url can't be validated but is in fact valid, or where you'd
want to remove a whole subfolder (or pattern) of files. That's where
this module is useful.


WHY USE THIS MODULE?
====================


HOW IT WORKS
============


INSTALLATION
============
After installation in Drupal, this module will do nothing.

This module provides a new action within Rules.


CONFIGURATION
=============


AUTHOR/MAINTAINER
=================
Kendall Anderson <dailyphotography at gmail DOT com>
http://invisiblethreads.com


CHANGELOG
=========


TODO
====
- need to test whether NOT providing a wildcard will still glob multiple files!
