<?php use app\Lib\Install;
$user_name_php = Install::get_user_php();
$root_path = substr(getcwd(), 0, -7);
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Installation - Atithasos Seedbox Manager</title>        
        <link href="./components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link type="text/css" rel="stylesheet" href="./install/style.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if lt IE 9]>
            <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
        <div  class="container marg" style="margin-top:50px">
            <h1 class="page-header dashboard"><i class="glyphicon glyphicon-wrench"></i> Installation Guide </h1>
            <section class="row">
                <article class="col-md-12">
                    <div class="well well-sm">
                        <h4 class="titre-head">Starting the application</h4>
                        <div class="trait"></div>
                        <p>Enter the correct owner of the application files, copy this command and run ROOT (superuser).</p>
                        <code>chown -R <?php echo $user_name_php['name'].':'.$user_name_php['name'].' '.$root_path; ?>/</code>
                        <p>Run the install.sh script to compile the program to reboot in ROOT.</p>
                        <code>cd <?php echo $root_path; ?>/source-reboot-rtorrent/ </code>
                        <code>chmod +x install.sh &amp;&amp; ./install.sh</code>
                    </div>
                </article>
                <article class="col-md-12">
                    <div class="well well-sm">
                        <h4 class="titre-head">How to get administrator rights. ?</h4>
                        <div class="trait"></div>
                        <p>To gain administrator privileges before it must execute the commands above.</p>
                        <p>Then F5 to refresh this page for example. This will result to generate your configuration files.</p>
                        <p>Then open your configuration file with a text editor.</p>
                        <code>nano <?php echo $root_path; ?>/conf/users/<?php echo $userName; ?>/config.ini</code>
                        <small><em>I suggest you copy this command after refresh this page normally will be displayed again.</em></small>
                        <p>Finally, you just need to owner = yes instead of no and quit editing.</p>
                    </div>
                </article>
            </section>
        </div>
    </body>
</html>
