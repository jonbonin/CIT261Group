<!DOCTYPE html>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIT261Group/JEBSandbox/modules/head.php'; ?>
        <title>
            Home | mobileappdevelopment.com
        </title>
    </head>
    <body>
        <div>
            <header role="banner">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIT261Group/JEBSandbox/modules/header.php'; ?>
            </header>
            <div>
                <main role="main">
                    <div>
                        <h2>Pupose</h2>
                        <p>
                            The purpose is 
                        </p>
                        <h2>Mission Statement</h2>
                        <p>I want to be able to</p>
                    </div>
                </main>
            </div>
            <aside role="complementary">
                <!--This is info pertaining to the website as a whole-->
            </aside>
            <footer role="contentinfo">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIT261Group/JEBSandbox/modules/footer.php'; ?>
                    <?php echo 'last update: ' . date('F j, Y', getlastmod()) ?>
                </div>
            </footer>
        </div>
    </body>
</html>