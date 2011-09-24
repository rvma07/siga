<?php
class MyFileHelper extends CFileHelper{

    public static function deleteFile($path){
        return unlink($path);
    }


    public static function extractZipFile($zipFile,$pathToSave){
        $zip = new ZipArchive();
        if ($zip) {
            if (($zip->open($zipFile)) && ($zip->extractTo($pathToSave))){
                $zip->close();
                return true;
            }
        }
        return false;
    }


    public static function createDir($path, $recursive){
        if (!is_dir($path)) {
            return @mkdir($path, 0755, $recursive);
        }
        return false;
    }


    public static function renameFile($oldName, $newName){
        if (file_exists($oldName))
            return rename($oldName,$newName);

        return false;
    }

    public static function deleteDir($dirName){
        if (is_dir($dirName))
            $dir_handle = opendir($dirName);

        if (!$dir_handle)
            return false;

        while($file = readdir($dir_handle)) {
            if ($file != "." && $file != "..") {
                if (!is_dir($dirName."/".$file))
                    unlink($dirName."/".$file);
                else
                    self::deleteDir($dirName.'/'.$file);
            }
        }

        closedir($dir_handle);
        rmdir($dirName);
        return true;
    }

}
?>
