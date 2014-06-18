TracUtils
=========

All kind of utilities for incorporating Trac_ into MediaWiki_.

Features
========

**Tag ticket**

We will introduce a new tag named '''ticket''' to 
provide a easy and flexible way to link a ticket number.
For example, if you have the following wikitext 
on a wiki page::

  Please check <ticket>2378</ticket> for details

When we visit the wiki page, we should have this following
HTML::

  Please check <a href="http://domain.to.trac/ticket/2378">
  2378</a> for details.

`MediaWiki Tag Extensions`_ page hase all we need to create a
tag for MediaWiki_.

License
=======

GNU General Public License Version 2  

.. _Trac: http://trac.edgewall.org/
.. _MediaWiki: http://www.mediawiki.org/
.. _MediaWiki Tag Extensions: http://www.mediawiki.org/wiki/Manual:Tag_extensions
