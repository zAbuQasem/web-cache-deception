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
