# phpstan-git-files

This phpstan extension automatically adds all your `.php` files from git to be checked by phpstan.

## install

`composer req --dev phpstan/extension-installer andersundsehr/phpstan-git-files`

<details>
  <summary>Manual installation</summary>

If you don't want to use `phpstan/extension-installer`, put this into your phpstan.neon config:

```NEON
includes:
    - vendor/andersundsehr/phpstan-git-files/extension.neon
```

</details>
