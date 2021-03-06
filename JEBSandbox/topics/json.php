<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>JSON</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIT261Group/JEBSandbox/modules/head.php'; ?>
        <script>
//            the following set of lines are HappyPath code
//            this is an example of JSON syntax
            var teamMember = '{ "team":[' +
                    '{"firstName":"Jonathan", "lastName":"Bonin"},' +
                    '{"firstName":"Sam", "lastName":"Witwiky"},' +
                    '{"firstName":"Johnny", "lastName":"Depp"}]}';

//           The following set of lines I found along with JSON, but unsure why it is symentically different
            var teamAssociateArray = {"team": [
                    {"firstname": "Jonathan", "lastname": "Bonin"},
                    {"firstname": "Sam", "lastname": "Witwiky"},
                    {"firstname": "Johnny", "lastname": "Depp"}
                ]
            };


//            this is an example of NastyPath.
            console.log(teamMember);

//            Here is another example of a happy path
            console.log(JSON.parse(teamMember));
//            result: console.log displays as object

//            Here is another example of a nasty path
            console.log(JSON.parse(null));
//            console.log(JSON.parse(''));
//            result: console.log displays null

//            The following is also nasty path
            var obj = JSON.parse(teamMember);
            console.log(obj);
//            result: displays as result in console.log

//            The follwoig code is HappyPath. 
//            Although it does not display all of the values. 
//            This was copied from the internet
            obj = JSON.parse(teamMember);
            document.getElementById("demo").innerHTML = obj.team[1].firstName + " " + obj.team[1].lastName;

//            The following is NastyPath
            for (var i = 0; i < teamMember.length; i++) {
                obj = JSON.parse(teamMember);
                document.getElementById("demo").innerHTML =
                        obj.team[i].firstName + " " + obj.team[i].lastName;
            }
//            result: Uncaught TypeError: Cannot read property 'firstName' of undefined

//            The following is HappyPath 
//            This set of code displays what is in the variable called team (next two lines are debugging)
//                  console.log(obj);
//                  console.log(obj.team.length);

            for (var i = 0; i < list.teamMember.length; i++) {
                list = JSON.parse(teamMember);
                console.log(list.teamMember[i].firstName + ' ' + list.teamMember[i].lastName + "<br>");
            }
            
            //parse a number or an array
            funtion number{
                var number = 478;
                var result = JSON.parse(number);
                console.log(result);
            }
            
            //pares something that is already a JSON string
            //parse something that is half string half JSON
            //happy and nasty for stringify
        </script>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIT261Group/JEBSandbox/modules/header.php'; ?>
            <h1>Stringify</h1>
        </header>
        <h1>JSON</h1>
        <a href="index.html">Home Page</a>
        <p>
            JSON literally stands for JavaSript Object Notataion.
            This basically means that there is a specific type of syntax for typing within javascript.
            It is kind of like staying that it is Spanish verses Arabic.
            They both serve to communicate, just one is spoken differently than the other.
            Another form to write in would be XML.
            This looks a lot like HTML.
            (That is because HTML is based on XML.)
        </p>
        <p id = "demo"></p>
        <p>
            example of JSON:
        </p>
        <section class="code">
        <samp>
            var teamMember = '{ "team":[' +<br />
            '{"firstName":"Jonathan", "lastName":"Bonin"},' +<br />
            '{"firstName":"Jonathan", "lastName":"Harmon"},' +<br />
            '{"firstName":"Andrew", "lastName":"Thurman"}]}'; 
        </samp>
        <p> just to show the difference, here is what XML looks like:</p>
        <samp>
            &lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />
            &lt;note&gt;<br />
            &lt;to&gt;Tove&lt;/to&gt;<br />
            &lt;from&gt;Jani&lt;/from&gt;<br />
            &lt;heading&gt;Reminder&lt;/heading&gt;<br />
            &lt;body&gt;Don't forget me this weekend!&lt;/body&gt;<br />
            &lt;/note&gt;
        </samp>
        </section>
        <p>Looks a lot like HTML huh?</p>
        <footer role="contentinfo">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/CIT261Group/JEBSandbox/modules/footer.php'; ?>
                <?php echo 'last update: ' . date('F j, Y', getlastmod()) ?>
            </div>
        </footer>
    </body>
</html>