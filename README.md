
![Bing Broken Bottle Project](https://raw.githubusercontent.com/vulnz/broken-bottle/master/img/bing_broken.png)
# About
This is Bing Broken Bottle project created for mass IP range scanning in order to get domain names using Bing RSS as vulnerability. As long as bing gives hard limits on search, we found a way to bypass it.
It can be used as IP Range checker for neighbors on certain ips.

# How to install
Everything is ready to go.

1)Please upload file info.sql into database with name umbrella.
If you don't know how to upload sql dump please search for information about phpmyadmin - import/export.
Use utf8_general_ci when creating database.

2)  Navigate into config.php file and edit desired lines.

3) Access root folder from web using Apache+PHP+Mysql and you will see front page of information search.
![IP range search](https://raw.githubusercontent.com/vulnz/broken-bottle/master/img/search.PNG)
and here is example of how you can scan
![IP range scan](https://raw.githubusercontent.com/vulnz/broken-bottle/master/img/scan-ip.PNG)



# Usage
(could be found on inst.php)
  

1) Enter the range on single or mass range on desired pages

2) Then press the button of generation of a range

3) After we generate batch file and download it

4) Download curl file from website

5) Unpack the bin.zip archive or use use the verion placed in root in bin folder

6) Start start.bat - watch the progress of the scan

7) After the scan is over, go to the database item and start searching
