# CONTRIBUTING

We are using [GitHub Actions](https://github.com/features/actions) as a continuous integration system.

For details, see [`workflows/continuous-integration.yml`](workflows/continuous-integration.yml).

## Coding Standards

We are using [`friendsofphp/php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer) to enforce coding standards.

Run

```
$ make coding-standards
```

to automatically fix coding standard violations.

## Static Code Analysis

We are using [`phpstan/phpstan`](https://github.com/phpstan/phpstan) to statically analyze the code.

Run

```
$ make static-code-analysis
```

to run a static code analysis.

## Tests

We are using [`phpunit/phpunit`](https://github.com/sebastianbergmann/phpunit) to drive the development.

Run

```
$ make tests
```

to run all the tests.

## Extra lazy?

Run

```
$ make
```

to enforce coding standards, perform a static code analysis, and run tests!
