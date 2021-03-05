>Design to Code.
-it is a dashboard that shows how components work.
>Getting started
	Knowledge required:
	-HTML
	-CSS
	-PHP
	-SQL
	Software requirement
	-XAMPP Server

>INSTALLATION 

-Installing XAMPP on MACOS and LINUX.

Step 1: Download
XAMPP is a release made available by the non-profit project Apache Friends. Versions with PHP 5.5, 5.6, or 7 are available for download on the Apache Friends website.

Step 2: Run .exe file
Once the software bundle has been downloaded, you can start the installation by double clicking on the file with the ending .exe.

Step 3: Deactivate any antivirus software
Since an active antivirus program can negatively affect the installation process, it’s recommended to temporarily pause any antivirus software until all XAMPP components have successfully been installed.

Disabling the anti-virus program as the first step when installing XAMPP
Before installing XAMPP, it is advisable to disable the anti-virus program temporarily
Step 4: Deactivate UAC
User Account Control (UAC) can interfere with the XAMPP installation because it limits writing access to the C: drive, so we recommend you deactivate this too for the duration of the installation process. To find out how to turn off your UAC, head to the Microsoft Windows support pages.

Disabling user account control when installing XAMPP
User account control can affect the installation of XAMPP
Step 5: Start the setup wizard
After you’ve opened the .exe file (after deactivating your antivirus program(s) and taken note of the User Account Control, the start screen of the XAMPP setup wizard should appear automatically. Click on ‘Next’ to configure the installation settings.

Startup screen of the XAMPP Setup Wizard
You can start the setup on the startup screen
Step 6: Choose software components
Under ‘Select Components’, you have the option to exclude individual components of the XAMPP software bundle from the installation. But for a full local test server, we recommend you install using the standard setup and all available components. After making your choice, click ‘Next’.
In the dialog window entitled 'select components', you can choose the software components before installation
Step 7: Choose the installation directory
In this next step, you have the chance to choose where you’d like the XAMPP software packet to be installed. If you opt for the standard setup, then a folder with the name XAMPP will be created under C:\ for you. After you’ve chosen a location, click ‘Next’.

Dialog window for selecting the XAMPP installation folder
For the next step, you need to select the directory where XAMPP should be installed
Step 8: Start the installation process
Once all the aforementioned preferences have been decided, click to start the installation. The setup wizard will unpack and install the selected components and save them to the designated directory. This process can take several minutes in total. You can follow the progress of this installation by keeping an eye on the green loading bar in the middle of the screen.

Start of the XAMPP installation process
According to the default settings, the selected software components are unpacked and installed in the target folder
Step 9: Windows Firewall blocking
Your Firewall may interrupt the installation process to block the some components of the XAMPP. Use the corresponding check box to enable communication between the Apache server and your private network or work network. Remember that making your XAMPP server available for public networks isn’t recommended. 

Step 10: Complete installation
Once all the components are unpacked and installed, you can close the setup wizard by clicking on ‘Finish’. Click to tick the corresponding check box and open the XAMPP Control Panel once the installation process is finished.

XAMPP installation completed
By clicking on 'finish', the XAMPP Setup Wizard is completed
The XAMPP Control Panel
Controls for the individual components of your test server can be reached through the XAMPP Control Panel. The clear user interface logs all actions and allows you to start or stop individual modules with a single. The XAMPP Control Panel also offers you various other buttons, including:

Config: allows you to configure the XAMPP as well as the individual components
Netstat: shows all running processes on the local computer
Shell: opens a UNIX shell
Explorer: opens the XAMPP folder in Windows Explorer
Services: shows all services currently running in the background
Help: offers links to user forums
Quit: closes the XAMPP Control Panel
XAMPP Control Panel
In the Control Panel, you can start and stop individual modules
Starting modules
Individual modules can be started or stopped on the XAMPP Control Panel through the corresponding buttons under ‘Actions’. You can see which modules have been started because their names are highlighted green under the ‘Module’ title.

Active module in XAMPP Control Panel
An active module is marked in green in the Control Panel
If a module can’t be started as a result of an error, you’ll be informed of this straight away in red font. A detailed error report can help you identify the cause of the issue. 

Setting up XAMPP
A common source of error connected with Apache is blocked ports. If you’re using the standard setup, then XAMPP will assign the web server to main port 80 and the SSL port 443. The latter of these particularly is often blocked by other programs. In the example above, it’s likely that the Tomcat port is being blocked, meaning the web server can’t be started. There are three ways to solve this issue:

Change the conflicting port: Let’s assume for the sake of example that the instant messenger program Skype is blocking SSL port 443 (this is a common problem). One way to deal with this issue is to change Skype’s port settings. To do this, open the program and navigate via ‘Actions’, ‘Options’, and ‘Advanced’, until you reach the ‘Connections’ menu. You should find a box checked to allow Skype access to ports 80 and 443. Deselect this checkbox now.
Change the XAMPP module port settings: Click the Config button for the module in question and open the files httpd.conf and httpd-ssl.conf. Replace port number 80 in httpd.conf and port number 443 in httpd-ssl.conf with any free ports, before saving the file data. Now click on the general Config button on the right-hand side and select ‘Services and Ports Settings’. Customize the ports for the module server to reflect the changes in the conf files.
End the conflicting program: The simplest way to avoid port conflicts in the short term is to end the conflicting program (Skype in this case). If you restart Skype after your XAMPP module servers are already running, it will select a different port and your issue will be resolved.
Inactive module in the XAMPP Control Panel
Modules that can’t be started will be shown in red. The user will also receive an error report to help solve the problem
Module administration
You have an ‘Admin’ option located on the Control Panel for every module in your XAMPP.

Click on the Admin button of your Apache server to go to the web address of your web server. The Control Panel will now start in your standard browser, and you’ll be led to the dashboard of your XAMPP’s local host. The dashboard features numerous links to websites for useful information as well as the open source project BitNami, which offers you many different applications for your XAMPP, like WordPress or other content management systems. Alternatively, you can reach the dashboard through localhost/dashboard/.
Dashboard of the XAMPP local host
By clicking on the 'admin' button of the Apache module, the user will be redirected to the local dashboard of XAMPP
You can use the Admin button of your database module to open phpMyAdmin. Here, you can manage the databases of your web projects that you’re testing on your XAMPP. Alternatively, you can reach the administration section of your MySQL database via localhost/phpmyadmin/. 
Admin interface of phpMyAdmin
The web project’s databases are managed by the user in phpMyAdmin (accessible via the 'Admin' button in the database module)
Testing your XAMPP installation
To check whether your test server is installed and configured correctly, you have the option to create a PHP test page, store them on your XAMPP’s local host, and retrieve them via the web browser.

Open the XAMPP directory through the ‘Explorer’ button in the Control Panel and choose the folder htdocs (C:\xampp\htdocs for standard installations). This directory will store file data collected for web pages that you test on your XAMPP server. The htdocs folder should already contain data to help configuration of the web server. But you should store your own projects in a new folder (like ‘Test Folder’ for example).
You can create a new PHP page easily by using the following content in your editor and storing it as test.php in your ‘ test’ folder (C:\xampp\htdocs\test):
<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
  <?php echo '<p>Hello World</p>'; ?>
 </body>
</html>
The last step now is to open your web browser and load your PHP page via localhost/test/test.php. If your browser window displays the words ‘Hello World’, then you’ve successfully installed and configured your XAMPP.
 
-Installing XAMPP on WINDOWS.
Step 1: Download and Install XAMPP. To download and install XAMPP, go to apachefriends downloads page, the official link to download XAMPP from. ...
Step 2: Run the Installer to Install XAMPP. XAMPP Setup Wizard. ...
Step 3: Select your XAMPP Install Language. ...
Step 4: XAMPP is now Installed onWindows, run it.

>DEPLOYMENT.
In order to deploy with Design to code, you need to perform some steps:
-Log in or Create github account.
-Check https://github.com/FaithB01/New-design.git.
 , either in the root of the project or in a docs folder.  the site is live! 
-This link will direct you to html,php and css files,either in the root of the project or in docs folder.And with that files in the chosen deploy branch, the site live. 
	
>ACKNOWlEDGMENTS.
-William
I would like to thank my supervisor, William Ochuomo, for the patient guidance, a supervisor who responded to my questions and so promptly n provided online materials to acquire more knowledge based on front end developing.
-Collins.
i wish to thank collins fo taking me through php concepts..