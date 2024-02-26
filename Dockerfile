FROM php@sha256:ed74479528fc0b526cec585b8865cc7f8871d0504269569f1544f8cf870769bd
WORKDIR /app
COPY ./src/index.php .
COPY ./src/script.js .
COPY ./src/style.css .
COPY ./src/register.php .
COPY ./src/dashboard.php .
RUN groupadd -r runner && useradd -r -g runner runner
RUN chown -R root:runner /app
USER runner 
ENTRYPOINT ["php","-S","0.0.0.0:80"]
