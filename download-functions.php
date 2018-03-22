<?php


class DownloadFunctions
{
  private static $BuildDir = "./BangBuilds";
    
  public static function GetFilesAndDirs($path)
  {
    $filesAndDirs = array_diff(glob($path.'/*'), array('.', '..'));
    return $filesAndDirs;
  }
  public static function GetDirs($path)
  {
    $dirs = array_filter(glob($path.'/*'), 'is_dir');
    return $dirs;
  }
  public static function GetFiles($path)
  {
    $filesAndDirs = DownloadFunctions::GetFilesAndDirs($path);
    $files = array();
    foreach($filesAndDirs as $file)
    { 
      if (is_file($file)) { array_push($files, $file); }
    }
    $files = array_diff($files, array('.', '..'));
    return $files;
  }


  public static function GetBuildsRootDir()
  {
    return DownloadFunctions::$BuildDir;
  }
  
  public static function GetBuildOSs()
  {
    $ossDirs = DownloadFunctions::GetDirs( DownloadFunctions::GetBuildsRootDir() );
    $ossDirNames = array();
    foreach($ossDirs as $ossDir)
    {
      array_push($ossDirNames, basename($ossDir));
    }
    return $ossDirNames;
  }
  
  public static function GetDownloadLink($osName)
  {
    $ossDir = DownloadFunctions::GetBuildsRootDir() . "/" . $osName;
    if ( !is_dir($ossDir) ) { return ""; }
    
    $versionDirs = DownloadFunctions::GetDirs($ossDir);
    if ( count($versionDirs) == 0 ) { return ""; }
    
    $targzs = DownloadFunctions::GetFiles($versionDirs[0]);
    if ( count($targzs) == 0 ) { return ""; }
    
    return $targzs[0];
  }
  
  public static function GetLatestBangBuildVersion()
  {
    $ossDirs = DownloadFunctions::GetFilesAndDirs( DownloadFunctions::GetBuildsRootDir() );
    return $ossDirs;
  }
};

?>

