from flask import Flask, render_template, request
import requests
from urllib.parse import urlparse

req = requests.Session()

app = Flask(__name__)

def is_valid_url(url):
    parsed_url = urlparse(url)
    if parsed_url.netloc == 'nginx' and '.' not in parsed_url.netloc:
        return True
    return False

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        url = request.form['url']

        if not is_valid_url(url):
            return render_template('error.html', error_message="Invalid URL. Only 'nginx' host is allowed without subdomains.")

        req.get("http://nginx/register.php?backdoor1337_546234",allow_redirects=True)

        try:
            resp = req.get(url)
            if resp.status_code == 200:
                success_message = "URL visit successful!"
                return render_template('index.html', success_message=success_message)
        except Exception as e:
            error_message = str(e)
            return render_template('result.html', url=url, error_message=error_message)
    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True,host="0.0.0.0:80")
