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
* server's hostname added as a Trusted Origin in the Okta tenant used for testing (ask Dragos)
* callback URL updated in index.php and in Okta tenant (ask Dragos for Okta tenant update)

## Installation
The challenge does not have any specific requirements for installation. Simply upload the PHP files on the web server.

## Flag
RST{4a60cf4654dc31c29ea551cf43ea68c556d6487b6a95d1dace6964d5cb28b4b5}