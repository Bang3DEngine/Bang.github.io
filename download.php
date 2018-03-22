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

    <div>
      <h2 align="center"> Download <b> Bang Editor v0.0 </b> for: </h2>
    </div>
    
    <div style="clear:both">
      <div class="bangCenteredRow" style="text-align:center; margin-top:20px;">
        <?php
          $first = true;
          $ossNames= DownloadFunctions::GetBuildOSs();
          foreach ($ossNames as $osName) 
          {
            $downloadLink = DownloadFunctions::GetDownloadLink($osName);
            if (is_file($downloadLink))
            {
              echo "<div class=\"bangColumn\" style=\"" . ($first ? "" : "margin-left:10px") . "\">";
              echo "  <a href=\"" . $downloadLink . "\">";
              echo "    <button type=\"button\" class=\"bangButtonNormal\">";
              echo "      " . $osName . "";
              echo "    </button>";
              echo "  </a>";
              echo "</div>";
              $first = false;
            }
            
          } unset($osName);
        ?>
      </div>
    </div>
    
    
    <div>
      <p align="center" style="margin-top:30px;"> 
        To see all versions
        <a href="<?php echo DownloadFunctions::GetBuildsRootDir()?>"target="_blank"> click here</a>
        .
      </p>
    </div>
    
  </div>
</div>
  
<div class="clearBoth"></div>

<?php require_once("footer.php") ?>

</body>
</html>

