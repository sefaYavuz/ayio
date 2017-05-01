<h1 align="center">AYio</h1>
<p align="center"><a href="https://travis-ci.org/sefaYavuz/ayio"><img src="https://travis-ci.org/sefaYavuz/ayio.svg" alt="Build Status"></a>
</p>

AYio is a modular system built upon the Laravel Framework to make web-applications.

## Setup

First you need to install the dependencies with Composer. This can be done by running the following command in the root of the project:

```
composer install
```

When that's done, we can begin with setting up our local development environment. AYio uses Laradock for it's local development environment. Follow the following steps to setup your environment:

1. Rename the `.env.example` file to `.env`
```
cp env-example .env
```
2. Then run your containers, you can change this according to your needs:
```
docker-compose up -d nginx mysql
```
3. Now open up your project's `.env` file and set the following:
```
DB_HOST=mysql
```
4. Open your browser and go to the following url: [http://localhost](http://localhost)
```
That's it, enjoy!
```
