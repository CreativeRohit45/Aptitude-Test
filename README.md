# Developers Guide

## Table of Contents

1. [Accessing the Virtual Machine](#accessing-the-virtual-machine)
2. [Copying Website Files](#copying-website-files)
3. [Accessing Files](#accessing-files)
4. [Editing Files with Nano](#editing-files-with-nano)
5. [Apache Configuration](#apache-configuration)
6. [Accessing MySQL Database](#accessing-mysql-database)
7. [Relational Database Details](#relational-database-details)


### 1. Accessing the Virtual Machine

#### Connect to your Linux instance from Windows with OpenSSH

1. Download and install OpenSSH from [OpenSSh Installiation Guide Page](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/openssh.html#openssh-install).
2. cd to the folder where TGS-Keypair.pem located.
3. use this command to connect to the EC2 instance :- ssh -i "TGS-Keypair.pem" ec2-user@ec2-43-205-124-55.ap-south-1.compute.amazonaws.com
   
#### Using EC2 Instance Connect

1. Log in to your AWS account.
2. Navigate to EC2 Dashboard.
3. Click on your instance (Name: TGS-Amazon-2-Webserver).
4. Click "Connect," choose EC2 Instance Connect, and press connect.

For more Linux commands, refer to [Unix/Linux Command Cheat Sheet](https://fosswire.com/post/2007/08/unixlinux-command-cheat-sheet/).

### 2. Copying Website Files

Copy your website files to the `/var/www/html` directory. Example command:

```bash
cd /var/www/html/
sudo cp -r application copy.php gitignore license.txt system composer.json editorconfig index.php readme.rst .
```

### 3. Accessing Files
Navigate to the website directory:

```bash
cd /var/www/html/
```

Use `ls` to list files, `cd` to change directories, and `pwd` to show the current location.

### 4. Editing Files with Nano 

To edit a file using nano, use the following command:

```bash
sudo nano filename.(filetype)
```

Example:

```bash
sudo nano index.php
```

For more nano editor commands, refer to the [Nano Editor Cheat Sheet](https://www.nano-editor.org/dist/latest/cheatsheet.html).

### 5. Apache Configuration 

Edit Apache configuration file:

```bash
sudo nano /etc/httpd/conf/httpd.conf
```

Make changes, save with `Ctrl + X`, press `Y` to confirm, and press `Enter`. Restart Apache:

```bash
sudo systemctl restart httpd
```

### 6. Accessing MySQL Database 

Access MySQL database:

```bash
mysql -h tgs-rds-php.cl3gqef8zcpg.ap-south-1.rds.amazonaws.com -u Triwits -p
```
Enter password triwits11

For MySql commands, refer to [Mysql Command Cheat Sheet](https://www.mysqltutorial.org/mysql-cheat-sheet/).

Example command:
```sql
show databases;
```

### 7. Relational Database Details 

Configure the CodeIgniter database settings in `database.php`:

```php
'hostname' => 'tgs-rds-php.cl3gqef8zcpg.ap-south-1.rds.amazonaws.com',
'username' => 'Triwits',
'password' => 'triwits11',
'database' => 'todo_app',
'dbdriver' => 'mysqli',
```
### 8. Other Required Information 

1.Base URL [Base URl](http://ec2-43-205-124-55.ap-south-1.compute.amazonaws.com).
