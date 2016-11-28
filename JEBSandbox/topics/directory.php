<!DOCTYPE html>
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIT261Group/JEBSandbox/modules/head.php'; ?>
        <title>
            Topics List | mobileappdevelopment.com
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
                        <h1>Topics List</h1>
                        <p>Note: I will be building the following pages of the course of the semester, so please bear with me.</p>
                        <ol>
                            <li>Loops, Conditional Statements, Functions, Variables, Parameters, Arrays, Associative Arrays</li>
                            <li>Object Creation Functions, Inheritance, Properties, Methods, Instantiation</li>
                            <li><a href="/CIT261Group/JEBSandbox/topics/json.php">JSON Parse, Stringify</li>
                            <li><a href="xmlhttpRequest.php" title="xmlhttpRequest consuming JSON">Using XMLHTTPRequest to Consume a JSON Web Service</a></li>
                            <li>Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects</li>
                            <li>DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.</li>
                            <li>Manipulating CSS Class Properties Using JavaScript</li>
                            <li>Creating CSS3 Transitions and Animations in CSS and triggering them with JavaScript</li>
                            <li>Standard JavaScript Events Including those for Mobile Devices ( Ex. onTouchBegin, onLoad, etc.) and Animation and Transition Events</li>
                            <li>HTML5 Tags - Video, Audio, and Canvas</li>
                            <li>Designing, Defining, and Triggering CSS3 Transitions without Custom Libraries (Thought Library)</li>
                            <li>Designing, Defining, and Triggering CSS3 Transforms without Custom Libraries (Thought Library)</li>
                            <li>Designing, Defining, and Triggering CSS3 Animations without Custom Libraries (Thought Library)</li>
                        </ol>
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