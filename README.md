# quartz

```
composer require kozo/quartz
```

## create quartz file.
```
php artisan quartz:create
```

## edit quartz file.

app/Quartz/QuartzCron.php
```
// sample
<?php

namespace App\Quartz;

use Watchmaker\Watchmaker;

class QuartzCron {

    public function handle(Watchmaker $watchmaker): Watchmaker
    {
        $i = $watchmaker->task('php hoge/fuga.php');
        $i = $i
            ->month(1)
            ->day(5);
        $watchmaker->add($i);

        $j = $watchmaker->task('php hoge/hoge.php');
        $j = $j
            ->month(2)
            ->day(6);
        $watchmaker->add($j);

        return $watchmaker;
    }
}
```

## run command

### show
show the difference between "crontab" and "Quartz".

```
php artisan quartz:show
```

### install
Install the difference between "crontab" and "Quartz".

```
php artisan quartz:install
```
