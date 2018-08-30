# igniter

###### TravisCI status
| Production (master)  | Development (dev) |
|     :---:            |     :---:         |
| [![Build Status](https://travis-ci.com/kiresk/igniter.svg?branch=master)](https://travis-ci.com/kiresk/igniter)  | [![Build Status](https://travis-ci.com/kiresk/igniter.svg?branch=dev)](https://travis-ci.com/kiresk/igniter)  |

### What is it?
igniter is e-commerce web application developed by [kire](https://kire.sk) under GNU GPL (General Public License) using [Laravel](laravel.com) framework.

### Minimal requirements?
Yes.
PHP 7.1 (or newer), MariaDB 5.1

## How to run application on localhost (XAMPP)

###### Clone repository to `htdocs`
- In PHPStorm (or similar IntelliJ IDE) you need to create new Project clicking on `Check out from Version Control > Git`  
Make sure you have correctly configured your IDE to work with Git (ex. Path to Git executable in `Settings > Version Control > Git`)
- URL: `https://github.com/kiresk/igniter.git`  
Directory: `/Applications/XAMPP/htdocs/igniter/` or `C:\XAMPP\htdocs\igniter`
- `Would you like to open the directory... > Yes`
- When you are asked to `Install dependencies From package.json` click `Run 'npm install'` (You can run this command right from `Terminal` any time).
###### Configure PHP interpreter
- You have to specify PATH to executable PHP binary in `Settings > Languages & Frameworks > PHP > CLI Interpreter`
###### Composer
- Navigate to `Tools > Composer > Self-update`, set PHP interpreter added in last step and hit OK
- `Tools > Composer > Update` to update dependencies and install missing packages.
###### (Nix-like systems only) Permissions
- Make sure the directory (and all subdirectories) `/storage` is accessible by user/group running webserver (www-data).
###### Create .env file
- Duplicate `.env.example` and rename it to `.env`
- Set all variables accordingly (ex. Database credentials, Mail,...)
###### Generate APP key
- (We need command line (terminal) for this step)
- `/Applications/XAMPP/bin/php /Applications/XAMPP/htdocs/igniter/artisan key:generate`
- You should see something like `Application key [base64:...] set successfully.`
- Now you are done, everything should work as expected. Open `localhost/igniter/public` and you are there!

### Configure SASS-CSS compiler
##### (PHPStorm/IDE) Create FileWatcher with following settings:  
Program: `scss`  
Arguments: `--no-cache --update $FileName$:$ProjectFileDir$/public/css/$FileNameWithoutExtension$.css`  
Output paths to refresh: `$ProjectFileDir$/public/css/$FileNameWithoutExtension$.css:$ProjectFileDir$/public/css/$FileNameWithoutExtension$.css.map`  
###### What happens when .scss file is changed?
- FileWatcher is triggered.
- CSS file is updated from SCSS  
Everything should happen on background, realtime, yay!
(Do NOT ever manually change the .css file anymore!)

## Testing

#### PHPUnit testing
Create tests as much as possible, everything in `master` branch should be covered with tests.

#### Automated testing
- If you are pushing to `master` branch, after each push you are able to run certain tests.
- To do so, you should write `--php-test` on separated line in commit comment.  
After pushing is done and changes are moved to production server, the ATU (Automated Testing Unit) find all available tests on server and run them one by one.

##### Can I specify which tests I need for certain commit?
Of course you can!  
For this purpose you should specify (comma separated) list of tests as a parameter:  
`--php-test TestOne, TestTwo, TestThree`  
In this case server executes 
- `/tests/Unit/TestOne.php`
- `/tests/Unit/TestTwo.php`
- `/tests/Unit/TestThree.php`

If some of the tests are removed in commit, or generally not found on server, they are silently skipped.
