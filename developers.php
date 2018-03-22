<?php require_once("doctype-html-begin.php") ?>

<head>
    <?php require_once("head-contents.php") ?>
</head>

<body>
<?php require_once("menu-bar.php") ?>

<div class="container-fluid text-center">   
    <div class="row content">
        <div class="text-left" style="margin: 0 20px 0 20px; text-align:left; ">
            <center> <h1> <b> Install instructions </b> </h1> </center>

            <hr/>
            <p> These install instructions are divided in <b>3 steps</b>: </p>
            <ol>
            <li><a href="#">Install dependencies</a></li>
            <li><a href="#">Install Bang</a></li>
            <li><a href="#">Execute</a></li>
            </ol>
            <hr/>

            <h2> <b> 1. Install dependencies </b> </h2>
            <p> In order to compile Bang you will need: </p>
            <p> <b>GLEW</b>, <b>Assimp</b>, <b>Qt5</b> development libraries,
                <b>Freetype</b> development libraries,
                <b>OpenAL</b> and <b>ALUT</b> development libraries. </p>

            <h3> Ubuntu </h3>
            <p> In order to download and install Bang dependencies in Ubuntu do the following: </p>
            <pre class="pre"><code class="bash hljs code">sudo apt-get -y install libglew-dev qt5-default libfreetype6-dev libopenal-dev libalut-dev libassimp-dev qtcreator</code></pre>

            <h3> Other Linux distributions </h3>
            <p> You will have to install them yourself ! </p>

            <hr/>
            <h2> <b> 2. Install Bang </b> </h2>
            <p> In order to download and install Bang do the following: </p>
            <pre class="pre"><code class="bash hljs code">git clone https://github.com/Bang3DEngine/Bang  # Clone Bang git repo
cd Bang
git checkout TFG
./scripts/fullCompile.sh EDITOR RELEASE    # Compile the editor
./scripts/fullCompile.sh GAME   RELEASE    # Compile the game base </code></pre>

            <hr/>
            <h2> <b> 3. Execution </b> </h2>
            <p>Once installed, you can start Bang using:</p>
            <pre class="pre"><code class="bash hljs code">./bin/EditorRelease/Bang</code></pre>

            <hr/>

        </div>
    </div>
</div>

<?php require_once("footer.php") ?>

</body>
</html>

