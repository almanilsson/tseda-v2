# tseda-v2
This repository implements the tseda project from scratch using HTML, replacing the original Panel-based version found in the [tforest/tseda](https://github.com/tforest/tseda) repository.


### Page label requirement

Each page in the `pages` directory should define a `$pageLabel` variable at the top (to centralise and simplifiy updates), such as:
```php
<?php
$pageLabel = 'Home';
?>
```

This is used to dynamically generate navigation labels. If $pageLabel is not set, a default label is created based on the file name (underscores replaced with spaces, first letter capitalised).
