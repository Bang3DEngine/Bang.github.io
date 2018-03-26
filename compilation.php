<?php require_once("doctype-html-begin.php") ?>

<head>
    <?php require_once("head-contents.php") ?>
</head>

<body>
<?php require_once("menu-bar.php") ?>

<div class="container-fluid text-center">   
    <div class="row content">
        <div class="text-left" style="margin: 0 20px 0 20px; text-align:left; ">
            <h2> <b> 1. Install dependencies </b> </h2>
            <p> In order to compile Bang, the first thing you will need are the development version of the following libraries: </p>
            <ul>
              <li>GLEW (libglew-dev)</li>
              <li>Assimp (libassimp-dev)</li>
              <li>SDL2 (libsdl2-dev)</li>
              <li>SDL2_TTF (libsdl2-ttf-dev)</li>
              <li>OpenAL (libopenal-dev)</li>
              <li>Freetype (libfreetype6-dev)</li>
              <li>SndFile (libsndfile-dev)</li>
              <li>libpng (libpng-dev)</li>
              <li>libjpeg (libjpeg-dev)</li>
            </ul>
            
            <p> For example, in Ubuntu or Debian you would install them using: </h4>
            <pre class="pre">sudo apt-get -y install libglew-dev libassimp-dev libpng-dev libjpeg-dev libsdl2-dev libsdl2-ttf-dev libfreetype6-dev libopenal-dev libsndfile-dev</pre>

            <p> For other Linux distributions you will have to find it out yourself&nbsp;! </p>

            <hr/>
            <h2> <b> 2. Compile Bang and Bang Editor </b> </h2>
            <p> First, you will have to check out the git repositories: </p>
            <pre class="pre" >git clone --depth=1 https://github.com/Bang3DEngine/Bang  # Clone Bang git repo
git clone --depth=1 https://github.com/Bang3DEngine/BangEditor  # Clone Bang Editor git repo</pre>
            
            <p> Next, you will have to compile it using CMake: </p>
            <pre class="pre">mkdir build
cd build
cmake ..
make -DCMAKE_BUILD_TYPE=Release -j6 </pre>

            <hr/>
            <h2> <b> 3. Execution </b> </h2>
            <p>Once installed, you can start the Bang Editor using:</p>
            <pre class="pre">./build/BangEditor</pre>

            <hr/>

        </div>
    </div>
</div>

<?php require_once("footer.php") ?>

</body>
</html>

