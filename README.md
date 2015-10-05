# simple-vimeo-uploader
wrapper php script to upload a single video file onto vimeo

# setup
copy bin/config.php.exmple to bin/config.php (preventing security crudentials from leaking into git). enter your information as appropraite. for single user environment (you're not uploading videos on behalf of multiple vimeo users) enter token generated from your app (be sure to have upload and edit rights).

# usage
```
php bin/upload.php file_to_upload.mp4
c:/php5/php.exe bin/upload.php file_to_upload.mp4
```