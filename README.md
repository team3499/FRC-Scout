ScoutingData
============


---

I made this branch because the programmers have been very busy, so I'm going to try to make my own version and see how it goes... Email me if you have any objections. I'll work on this soon.

This version will generate individual php files when creating teams and matches, instead of using a database (for now?).

---


Data collection for scouting at FRC events.

This is currently not in a usable stage. Once we hit Alpha, it will be ready for testing.

This is meant to be used on a web server using an Intranet, where only team members can connect to.

Note: IE will not be properly supported.


Install (nf):
	Set 'root' folder as the document root.
	Make sure the php creating directories and files('teams', 'matches', and 'showdata.php') is owned by the web server user! (typically www-data or httpd if using apache)