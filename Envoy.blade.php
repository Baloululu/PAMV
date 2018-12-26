{{--@servers(['web' => 'pi@192.168.1.22 -p 222'])--}}
@servers(['web' => 'pi@dyn.raspberrydemontbeliard.ovh -p 222'])

@setup
    $dir="/home/pi/pamv";
    $nbreleases=3;

    $shared=$dir."/shared";
    $repo=$dir."/repo";
    $release=$dir."/releases/".date('YmdHis');
    $current="/var/www/html/pamv";
@endsetup

@task('prepare')
    mkdir -p {{$repo}};
    mkdir -p {{$shared}};
    mkdir -p {{$shared}}/articlesImg;
    chmod 777 {{$shared}}/articlesImg;
    cd {{$repo}};
    git init --bare;
@endtask

@task('composer')
    cd {{$release}};
    composer update --no-dev --no-progress;
@endtask

@macro('deploy')
    createrelease
    createLink
    migration
    linkCurrent
@endmacro

@macro('deploy-update')
    createrelease
    createLink
    composer
    migration
    linkCurrent
@endmacro

@task('createrelease')
    echo "Création de {{$release}}";
    mkdir -p {{$release}};
    cd {{$repo}};
    git archive master | tar -x -C {{$release}};
    cd {{$release}};
    chmod 777 storage -R;
    chmod 777 public -R;
@endtask

@task('createLink')
    mkdir -p {{$shared}}/vendor;
    ln -s {{$shared}}/vendor {{$release}}/vendor;
    ln -s {{$shared}}/.env {{$release}}/.env;
    ln -s {{$shared}}/_environement.scss {{$release}}/resources/assets/sass/_environement.scss;
    ln -s {{$shared}}/articlesImg {{$release}}/public/img/articlesImg
@endtask

@task('migration')
    cd {{$release}};
    php artisan migrate
@endtask

@task('linkCurrent')
    cd {{$release}};
    composer dump-autoload -o;
    rm -f {{$current}};
    ln -s {{$release}}/public {{$current}};
    ls {{$dir}}/releases | sort -r | tail -n +{{$nbreleases + 1}} | sudo xargs -I{} -r rm -rf {{$dir}}/releases/{};
    echo "Lien : {{$current}} --> {{$release}}/public";
@endtask