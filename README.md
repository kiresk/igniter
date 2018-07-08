# igniter
# Testing
08.07.2018

Added support for automated PHPUnit testing, after every push you can test your code!
If your commits pushed to repository contain **--php-test** string on separated row, all tests (availabl after pulling changes to server)
will be executed (from directory /tests/Unit/).

You can specify list of tests to run with:
`--php-test ExampleTest, DalsiTest`
So only tests from ExampleTest and DalsiTest classes in /tests/Unit will be executed.

If some test class are deleted with commits pulled to server, they are skipped, if listed.
