###################
Phonebook application.
###################

This is a simple phone book application.

*******************
Prerequisites
*******************

You need to install `xampp <https://www.apachefriends.org/download.html>`_ and `composer <https://getcomposer.org/download>`_ on your PC.

**************************
Install guide
**************************

Open htdocs folder in your xampp installation directory and open git bash.

Run `git clone https://github.com/smupyknight/phonebook.git` to clone repository.

Create .env file in phonebook directory.

Set database configuration variables in the .env file.

For example

```DB_HOST=localhost

DB_NAME=phonebook

DB_USER=root

DB_PASS=
```

Create database named phonebook.

Run following commands in git bash.

```cd phonebook

composer install

npm install

vendor/bin/phinx migrate -e development

vendor/bin/phinx run:seed -e development
```

Open web browser and you'll be able to see app is running on http://localhost/phonebook

You can login using these credentials

email: admin@admin.com

password: password