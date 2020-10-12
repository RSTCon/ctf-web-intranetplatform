# CTF Web Challege: Intranet platform
This is the repository for the intranet platform CTF challenge.

## Testing the challenge
To test the challenge, access https://web-1.rstcon.adminpanel.biz/ using the following credentials:
* Username: rstcon
* Password: ZO0qGSTDi&YuYz*60BG&RwBy5I$U%JY

## Challenge description
Awesome Company Inc has hired you to audit their new intranet platform which is claimed to be unbreakable as it uses Single Sign-On and OpenID Connect. The company has promised you *_400 points_* if you manage to break it and authenticate with their administrative account.

## Requirements to run the challenge
* web server with PHP 7.2 or later
* openssl PHP module

## Installation
* copy files and deploy them on the web server
* add the server's hostname as a Trusted Origin in the Okta tenant used (ask Dragos)
* update the callback URL in index.php and in Okta tenant (ask Dragos for Okta tenant update)

## Flag
RST{4a60cf4654dc31c29ea551cf43ea68c556d6487b6a95d1dace6964d5cb28b4b5}