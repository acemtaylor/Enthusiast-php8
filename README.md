# Enthusiast for PHP8 
This is the main repo for Enthusiast 1.1 for PHP8.

Hi all, this is the update (in progress) of Enthusiast for php8 as if you have been around TheFanListings.Org at all you will know that none of the other versions work with PHP8.

## Credits
The original author is [Angela Sabas](http://scripts.indisguise.org/). Angela's ReadMe can be found [here](https://github.com/acemtaylor/Enthusiast-php8/blob/main/Old%20Readmes/Angela%20README.md).

[Lysianthus](https://github.com/Lysianthus/enthusiast) also contributed.

[Ekaterina](https://scripts.robotess.net/). Ekaterina's ReadMe can be found [here](https://github.com/acemtaylor/Enthusiast-php8/blob/main/Old%20Readmes/Ekaterina%20README.md).

Most recently this has been contributed too by [DudeThatsErin](https://github.com/DudeThatsErin/enth)

Please do not use any of the other versions as with the update to PHP8 they are a lot more tempermental and hard to use (I speak from personally experience!)

# Installation Instructions

These are the instructions you will want to follow when you are installing Enthusiast for the first time.

## Step 1 - Download an archive.

To download an archive, you can do that 1 of 2 ways.  You will want to download these to your desktop or somewhere you can easily find them.
*Note: The pictures below are for listing admin but the steps are exactly the same.*

### First Way - Code > Download Zip
This will download a zip. You can see below what I am referring to. You can see the green "code" button above. Click that and click on "download zip".

<img width="389" alt="pLrKZvz3FV" src="https://github.com/DudeThatsErin/listingadmin/assets/2681022/24c1b732-9aff-4fce-89d5-cc942478c994">

### Second Way - Releases > Download "enth-x.x.x.zip"
The second way you can download an archive is by clicking on releases on the right sidebar...

<img width="244" alt="firefox_eZXuqbcl7f" src="https://github.com/DudeThatsErin/listingadmin/assets/2681022/f181aa9e-25d5-4415-b406-eee5445dc4af">

Then viewing the "Assets" and downloading the file that says `enth-x.x.x.zip`

<img width="898" alt="bLLgVrtods" src="https://github.com/DudeThatsErin/listingadmin/assets/2681022/feb8be7e-47b6-432c-a0d1-4896959b370e">


## Step 2 - Upload all files to your collective.

You will want to unzip the archive and upload everything inside the  `public` folder to your folder.

## Step 3 - Update Database Details for your Collective + Fanlistings
Find the `config.sample.php` file that you downloaded and open it up in your editor. Can be NotePad though I recommend NotePad++, Visual Studio Code, or Sublime. Either way, just open it so you can see the lines of code.

Find these lines:
```php
$db_server = 'localhost';
$db_user = 'username';
$db_password = 'password';
$db_database = 'database';
```
Update those details to your details that you found in Step 1. Then save and close the file.

In your file explorer, rename the file from `config.sample.php` to `config.php` (make sure there is only one `.php` at the end) and upload to your fanlisting collective.

**For your fanlistings, you will need to find the following line (at the end of the config file) and update it so that the listing ID matches the listing ID for your fanlistings**
```php
$listing = 1;
```
This line **must** be commented out for your fanlisting _collective_ but must be uncommented (no `//` before it) for your fanlistings.

Finally, in your `admin/` directory do the same thing that you just did with the `config.sample.php` file. You will be updating the database details (they look the same in this file as well) and renaming the file to `config.php`.

## Step 4 - Visit your collective to make sure it works!
This should 100% work on the first try. If it doesn't, make sure you read these steps carefully. If it doesn't and you have re-read these instructions, open an issue (at the top) and let me know what you have tried.

# Questions?
## What are the `samplecollective` and `samplefl` for?
They are folders that were added by either Angela or Ekaterina for previewing how your fanlisting and collective might look. They are there for convenience. You can delete these or keep them to reuse for future fanlistings.

## Future questions will be added later!
As they come up I will add more FAQ here. :)
