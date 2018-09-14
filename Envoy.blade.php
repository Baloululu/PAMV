@servers(['web' => 'pi@192.168.1.22 -p 222'])

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
    cd {{$repo}};
    git init --bare;
@endtask

@task('composer')
    mkdir -p {{$shared}}/vendor;
    cd {{$release}};
    composer update --no-dev --no-progress;
@endtask

@macro('deploy')
    createrelease
    createLink
    compileCSS
    linkCurrent
@endmacro

@macro('deploy-update')
    deploy
    composer
@endmacro

@task('createrelease')
    echo "Création de {{$release}}";
    mkdir -p {{$release}};
    cd {{$repo}};
    git archive master | tar -x -C {{$release}};
    chmod 777 storage -R;
@endtask

@task('createLink')
    ln -s {{$shared}}/vendor {{$release}}/vendor;
    ln -s {{$shared}}/.env {{$release}}/.env;
    ln -s {{$shared}}/_environement.scss {{$release}}/resources/assets/sass/_environement.scss;
    cd {{$release}};
    composer dump-autoload -o;
@endTask

@task('compileCSS')
    echo "Compilation du css';
    cd {{$release}};
    npm run prod;
@endtask

@task('linkCurrent')
    rm -f {{$current}};
    ln -s {{$release}} {{$current}};
    ls {{$dir}}/releases | sort -r | tail -n +{{$nbreleases + 1}} | xargs -I{} -r rm -rf {{$dir}}/releases/{};
    echo "Lien : {{$current}} --> {{$release}}";
@endtask