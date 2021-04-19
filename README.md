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
        $task1 = $watchmaker->task('php hoge/fuga.php');
        $task1 = $task1
            ->month(1)
            ->day(5);
        $watchmaker->add($task1);

        $task2 = $watchmaker->task('php hoge/hoge.php');
        $task2 = $task2
            ->month(2)
            ->day(6);
        $watchmaker->add($task2);

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
