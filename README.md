# Kampagne

Have you noticed that people's spelling has become absolutely terrible as of late? It seems there are no shortages of dumb names. That is why I've decided to not even try, and that is where Kampagne is from. Also, I guess it is pretty searchable...

## Goal

Ever think it is weird when there is an open-source project that is for-profit? Like, they will allow you to modify the code and improve their product for them, but then they make the money. The goal with Kampagne is to cast all of that away. This is a primarily self-hosted spinoff of Kanka, where I intend to blow out all the subscription model shit that they have so you don't have to worry about it while running on your own server. I also intend to write more specific documentation about how to get it up and running on your own hardware. This will include a pre-made docker image that can be pulled from all the latest versions.

Finally, once I am happy with it being a "free kanka", I intend to improve the functionality of the project. It won't be just a storybook, but it will include tools that will be useful during campaign sessions - like an encounter manager! Stay tuned for progress on that, and please contribute if you can!

My overall goal is for Kampagne to be the next Nextcloud, but for D&D.

## Not Goal

This is not going to be an online competitor to Kanka. Absolutely no profit is to be made by this repository. It will not be hosted in any centralized locations. The software is free and I am free of hosting bills. For now it will primarily be a web software, but I am interested in making a desktop client that can be used over LAN by parties.

## End

This is all for now. This project is extremely fresh at the moment, so it is almost an exact copy of Kanka. (save for this readme). Please have patience while I fix the monetization!

# Kanka <!-- omit in toc -->

[![Minimum PHP Version](http://img.shields.io/badge/php-%3E%3D%208.0-8892BF.svg)](https://php.net/)
[![Discord](https://img.shields.io/discord/413623253366603777.svg)](https://discord.gg/rhsyZJ4)

This repository is the code source of [Kanka](https://kanka.io/en-US), a collaborative world building and campaign management tool tailored for tabletop RPG players and storytellers.

- [Run](#run)
- [Concepts](#concepts)
  - [Structure](#structure)
  - [Sub content](#sub-content)
  - [Assets](#assets)
- [Development](#development)
  - [Issues](#issues)
  - [Standards](#standards)
  - [Migrations](#migrations)
  - [GIT](#git)
  - [Production](#production)
- [Translations](#translations)
  - [Vue translations](#vue-translations)
  - [Database Backup](#database-backup)
- [Testing](#testing)

## Run

See [documentation](./docs/running.md).

## Concepts

The app revolves around the concept of `Entities`. These include, for example:

- Characters
- Items
- Locations

### Structure

Each entity is split between two tables:

- The `entity` table, which contains some generic information available to all entities (name, id)
- A table for the specific data of the entity.

### Sub content

Most entities can have n-to-n relations to other entities.

For example, there are `Relations` that link two entities together, as well as `Attributes` which contain n-to-1 custom data of an entity.

### Assets

Assets can be compiled by following the [Laravel Documentation](https://laravel.com/docs/7.x/mix)

You'll need to install the various node packages first:

> yarn install

Select2 needs to be forced to 4.0.5 because newer builds (4.0.7) break:

> yarn install select2@4.0.5 --save

The following will produce assets for development:

> yarn run dev

The following will produce assets for production:

> yarn run prod

## Development

The following rules apply when developing the application.

### Issues

To discuss an issue, please use [Discord](https://discord.gg/rhsyZJ4).
All improvements, features and bugs must be related to a ticket on the trello. Each PR must contain a link to the trello ticket (see [contributing](./docs/CONTRIBUTING.md)).

### Standards

Code must follow PSR-4 recommendations.

### Migrations

All migrations should have a working `down()` function. Exceptions can be permitted for migrations that alter lots of content.

### GIT

Development should be done on your own fork of the repository in the `develop` branch, with substantial new features done in a separate branch.

**Tagging** is only done on the main branch.

### Production

Once a feature is ready and tested, the admin will merge it into the main branch. There is no auto-deploy to the servers.

## Translations

To work on translations, execute the following command to clean your translations and re-import them.

```sh
php artisan translations:reset
php artisan translations:import
```

In the database, change your user's `is_translator` to `true`.\_Navigate to `/translations` to start working on your translations. Add your new language to `app/config/laravel-translation-manager.php` if needed.

When you are finished, export your changes.

```sh
php artisan translations:export *
```

### Vue translations

To generate the vue translations:

```sh
    php artisan vue-i18n:generate
```

### Database Backup

To back up your database in a gzip file, Kanka uses the [laravel backup manager](https://github.com/backup-manager/laravel). Execute the following command (adapt to your config):

```sh
    php artisan db:backup --database=mysql --destination=s3 --compression=gzip --destinationPath=prod/ --timestamp="d-m-Y"
```

To restore a db, use the following:

```sh
    php artisan db:restore
```

## Testing

The configuration for PHPUnit-Tests is in the file /phpunit.xml.
Before the first run you have to run

```sh
php artisan setupTestDB --env=testing
```

to create and set up the TestDatabase. Also if the Database-Schema changes or new migrations are added, you have to reset the Testing Database with this command.

The Configuration for the TestEnvironment can be found in the files /phpunit.xml and .env.testing.
The Environment-Variables in both files need to be the same.

If everything is set up correctly, you can run the tests by just calling

```sh
phpunit
```

in the project directory.
