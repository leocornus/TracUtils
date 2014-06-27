TracUtils
=========

All kind of utilities for incorporating Trac_ into MediaWiki_.

Features
========

**ticket tag**

We will introduce a new tag named **ticket** to 
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

**commit tag**

Similar to the **ticket** tag, the **commit** tag will generate
a hyperlink to a commit id.

**milestone tag**

The **milestone** tag will provide a overall summary for a 
milestone planned in Trac_ project.

Installation and Configuration
==============================

Install '''TracUtils''' as a regular MediaWiki_ extension::

  require_once("$IP/extensions/TracUtils/TracUtils.php");

Configuration options:

- $tracTicketLinkPattern defines the hyperlink pattern for 
  **ticket** tag. 
  **TICKET_ID** will be replaced with the actural ticket id.
- $tracCommitLinkPattern defines the hyperlink pattern for
  **commit** tag. 
  **COMMIT_ID** will be replaced with the actural commit id.

Here are some examples::

  $tracTicketLinkPattern = "http://url.to.trac/ticket?[TICKET_ID]"
  $tracTicketLinkPattern = "http://url.to.trac/commit?[COMMIT_ID]"

License
=======

GNU General Public License Version 2  

.. _Trac: http://trac.edgewall.org/
.. _MediaWiki: http://www.mediawiki.org/
.. _MediaWiki Tag Extensions: http://www.mediawiki.org/wiki/Manual:Tag_extensions
