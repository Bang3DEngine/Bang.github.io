<?php require_once("download-functions.php") ?>

<?php require_once("doctype-html-begin.php") ?>

<head>
    <?php require_once("head-contents.php") ?>
    <script src="Resources/highlight/highlight.pack.js"></script>
    <link rel="stylesheet" href="Resources/highlight/styles/darcula.css">
    <script> hljs.initHighlightingOnLoad(); </script>
</head>

<body>
<?php require_once("menu-bar.php") ?>

<div class="bangCenteredRow" style="padding-top:10px">
  <div id="downloadColumn">
    
    <div>
      <h3 style="display:inline">Select your operative system and download&nbsp;!</h3>
    </div>
    
    <div style="clear:both;"></div>
    
    <div align="center" style="margin-top:40px">
      <img alt="Bang" src="https://cdn.rawgit.com/Bang3DEngine/Bang/061e2210/EngineAssets/Logos/LogoBang.svg"
           style="height:150px;">
    </div>
    
    <hr/>

    <div>
      <h2 align="left"> Download <b> Bang Editor v0.0 </b> for: </h2>
    </div>
    
    <div style="text-align:center; margin-top:20px;">
      <?php
        $osBaseName_to_osName = array();
        $ossNames= DownloadFunctions::GetBuildOSs();
        foreach ($ossNames as $osName) 
        {
          $osBaseName = explode("-", $osName, 2)[0];
          if (!array_key_exists($osBaseName, $osBaseName_to_osName))
          {
            $osBaseName_to_osName[$osBaseName] = array();
          }
          array_push($osBaseName_to_osName[$osBaseName], $osName);
        }

        foreach($osBaseName_to_osName as $osBaseName => $osNameArray)
        {
          echo "<table width=\"100%\" style=\"border-collapse:separate; border-spacing:0em 10px;\">";
          echo "  <tr>";
          echo "    <td width=\"25%\" style=\"text-align:right; padding-right:10px;\">";
          echo "      <h2 style=\"display:inline-block;\"> $osBaseName: </h2>";
          echo "    </td>";
          echo "    <td>";

          $first = true;
          foreach($osNameArray as $osName)
          {
            $downloadLink = DownloadFunctions::GetDownloadLink($osName);
            if (is_file($downloadLink))
            {
              echo "      <div class=\"bangColumn\" style=\"" . ($first ? "" : "margin-left:10px") . "\">";
              echo "        <a href=\"" . $downloadLink . "\">";
              echo "          <button type=\"button\" class=\"bangButtonNormal\">";
              echo "            " . $osName . "";
              echo "          </button>";
              echo "        </a>";
              echo "      </div>";
              $first = false;
            } 
          }
          echo "    </td>";
          echo "  </tr>";
          echo "</table>";
        }
        unset($osName);
      ?>
    </div>
    
    <div>
      <p align="center" style="margin-top:30px;"> 
        To see all versions
        <a href="<?php echo DownloadFunctions::GetBuildsRootDir()?>"target="_blank"> click here</a>
        .
      </p>
    </div>
    
    <hr/>
    
    <div>
      <h3>Or you can compile it yourself (see 
        <a href="compilation.php">compile instructions</a>).</h3>
    </div>
    
  </div>
</div>
  
<div class="clearBoth"></div>

<?php require_once("footer.php") ?>

</body>
</html>

