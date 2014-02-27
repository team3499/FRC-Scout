ScoutingData
============

Data collection for scouting at FRC events.

---

This is currently not in a usable stage. Once we hit Alpha, it will be ready for testing.

This is meant to be used on a web server using an *Intranet*, where only team members can connect to.

IE is not, and will not be properly supported.


To 'Install':
 -  Install webserver with php (we recommend XAMPP)
 -  Clone or pull or somehow aquire the sources and stuff.
 -  Set the 'root' folder from the repository as the document root.
 -  Make sure the php creating directories and files('teams', 'matches', and 'showdata.php') is owned by the web server user! (typically www-data or httpd if using apache on \*nix systems)

To Use:
 -  The 'server' computer should create an AD-HOC network (it should have a password, so only your team can access and submit data)
 -  People then should connect to the newly created network, and set their OS to automatically connect
 -  Then go to the webpage (should be something like 192.168.0.1 if using default ad-hoc settings)
 -  Then walk around and gather data.
 -  When data has been gathered and is desired to be saved, the 'client' should walk back in range of the network. (and connect, but if it auto-connects, it makes your life easier.)
 -  Then the data should sync automatically with the server.

