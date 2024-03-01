# Web Cache Deception
Web Cache Deception is a vulnerability that occurs when an attacker tricks a web server into caching pages with different content under the same URL. This can lead to a variety of attacks, such as accessing sensitive user data or performing unauthorized actions.
## Deploy
1. Clone this repository
```sh 
git clone https://github.com/zAbuQasem/web-cache-deception.git
```
2. Run
```sh 
docker-compose up --build
```
3. Access the application
```sh 
firefox -new-tab http://127.0.0.1:5000/index.php
```
## Resources 
- http://omergil.blogspot.com/2017/02/web-cache-deception-attack.html
- https://www.blackhat.com/docs/us-17/wednesday/us-17-Gil-Web-Cache-Deception-Attack-wp.pdf
- https://book.hacktricks.xyz/pentesting-web/cache-deception#cache-deception
- https://bxmbn.medium.com/how-i-test-for-web-cache-vulnerabilities-tips-and-tricks-9b138da08ff9
