<?php
$dir="../asset/irs/";
$filename=$_GET['file'];
$file_path=$dir.$filename;
$ctype="application/octet-stream";
If (File_exists($file_path)) {
    Header('Content-Description: File Transfer');
    Header('Content-Type: Application/Octet-Stream');
    Header('Content-Disposition: Attachment; Filename="'.Basename($file_path).'"');
    Header('Expires: 0');
    Header('Cache-Control: Must-Revalidate');
    Header('Pragma: Public');
    Header('Content-Length: ' . Filesize($file_path));
    Readfile($file_path);
    Exit;
}
?>